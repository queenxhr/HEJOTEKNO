<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

	//Auth=======================================================================================================================================
	public function signinadmin()
    {
        $this->load->view('admin/V_SigninAdmin');
    }


    public function action_signin_admin() {
        $this->load->library('session');
        $username_admin = $this->input->post('username_admin');
        $pass_admin = $this->input->post('pass_admin');
    
        // Memanggil model untuk memeriksa username dan password
        $admin = $this->M_Admin->check_signin_admin($username_admin, $pass_admin);
    
        if ($admin) {
            $data = array(
                'id_admin' => $admin['id_admin'],
                'nama_admin' => $admin['nama_admin'],
                'telp_admin' => $admin['telp_admin'],
                'email_admin' => $admin['email_user'],
                'username_admin' => $username_admin,
            );
            $this->session->set_userdata($data);
    
            // Memeriksa apakah username mengandung kata 'adminati'
            return redirect("/C_Admin/admin_dashboard");
        } else {
            $this->session->set_flashdata('gagal', 'Maaf Username atau password salah mohon untuk mencoba login kembali');
            return redirect("/C_Admin/signinadmin");
        }
    }
    
    
	public function linksignupadmin()
    {
        $this->load->view('admin/V_SignupAdmin');
    }

    public function createadmin()
    {
        $this->load->view('admin/V_AddAdmin');
    }

	public function action_signup_admin(){
		// Memuat library session
		$this->load->library('session');
		
		// Menampung data inputan yang telah dimasukan user
		$data = array(
			'nama_admin' => $this->input->post('nama_admin'),
			'telp_admin' => $this->input->post('telp_admin'),
			'email_admin' => $this->input->post('email_admin'),
			'username_admin' => $this->input->post('username_admin'),
			'pass_admin' => $this->input->post('pass_admin'),
            
            // Meng-hash pass_admin sebelum disimpan
            'pass_admin' => password_hash($this->input->post('pass_admin'), PASSWORD_BCRYPT),
		);
	
		// Memanggil model untuk menyimpan data
		$this->M_Admin->insertDataAdmin($data);
	
		// Memasukkan flashdata
		$this->session->set_flashdata('success', 'Data berhasil Ditambahkan.');
		
		// Mengarahkan kembali ke tampilan semula
		redirect('/C_Admin/signinadmin');
	}

    public function action_create_admin(){
		// Memuat library session
		$this->load->library('session');
		
		// Menampung data inputan yang telah dimasukan user
		$data = array(
			'nama_admin' => $this->input->post('nama_admin'),
			'telp_admin' => $this->input->post('telp_admin'),
			'email_admin' => $this->input->post('email_admin'),
			'username_admin' => $this->input->post('username_admin'),
			'pass_admin' => $this->input->post('pass_admin'),
            
            // Meng-hash pass_admin sebelum disimpan
            'pass_admin' => password_hash($this->input->post('pass_admin'), PASSWORD_BCRYPT),
		);
	
		// Memanggil model untuk menyimpan data
		$this->M_Admin->insertDataAdmin($data);
	
		// Memasukkan flashdata
		$this->session->set_flashdata('success', 'Data berhasil Ditambahkan.');
		
		// Mengarahkan kembali ke tampilan semula
		redirect('/C_Admin/admin_dashboard');
	}

	public function signoutadmin(){
		$this->load->library('session');
		$this->session->set_flashdata('keluar',1);
		$this->session->unset_userdata('id_admin');
		redirect (base_url('/index.php/C_Admin/signinadmin'));
	}

	//Admin=================================================================================================================
    public function admin_dashboard()
    {
		$this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_Admin');
        $data['admin'] = $this->M_Admin->getAllAdmin();
        $this->load->view('admin/V_CrudAdmin', $data);
    }

    public function searchadmin() {
        $query = $this->input->get('query');
        $this->load->model('M_Admin');
        $data['admin'] = $this->M_Admin->search_admin($query);
        $this->load->view('admin/V_CrudAdmin', $data);
    }

    public function editAdmin($id_admin) {
        $this->load->model('M_Admin');
        $data['admin'] = $this->M_Admin->getAdminById($id_admin); // Mendapatkan data admin berdasarkan id
        $this->load->view('admin/V_EditAdmin', $data);
    }

    public function updateadmin($id_admin) {
        $this->load->library('session');
        // Pastikan Anda memiliki nilai ID admin yang valid
        if (!$id_admin) {
            // Jika ID admin tidak valid, maka tampilkan pesan error
            // dan alihkan pengguna ke halaman admin_dashboard
            $this->session->set_flashdata('error', 'ID admin tidak valid.');
            redirect('C_Admin/admin_dashboard');
            return; // Pastikan untuk menghentikan eksekusi fungsi setelah melakukan redirect
        }
    
        // Load model M_Admin
        $this->load->model('M_Admin');
    
        // Persiapkan data yang akan diupdate
        $data = array(
            'nama_admin' => $this->input->post('nama_admin'),
            'telp_admin' => $this->input->post('telp_admin'),
            'email_admin' => $this->input->post('email_admin'),
            'username_admin' => $this->input->post('username_admin'),
        );
    
        // Panggil fungsi model untuk melakukan update data admin
        if ($this->M_Admin->updateDataAdmin($id_admin, $data)) {
            // Jika update berhasil, tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Data admin berhasil diperbarui.');
        } else {
            // Jika update gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Gagal memperbarui data admin.');
        }
    
        // Alihkan pengguna kembali ke halaman admin_dashboard
        redirect('C_Admin/admin_dashboard');
    }
    
    public function deleteadmin($id_admin) {
        $this->load->model('M_Admin');
        $this->M_Admin->deleteDataAdmin($id_admin);
        redirect('C_Admin/admin_dashboard');
    }

    
    //User=================================================================================================================
    public function cruduser()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_User');
        $data['user'] = $this->M_User->getAllUser();
        $this->load->view('admin/V_CrudUser', $data);
    }

    public function createuser()
    {
        $this->load->view('admin/V_AddUser');
    }

    public function action_create_user(){
		// Memuat library session
		$this->load->library('session');
		
		// Menampung data inputan yang telah dimasukan user
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'alamat_user' => $this->input->post('alamat_user'),
			'telp_user' => $this->input->post('telp_user'),
			'email_user' => $this->input->post('email_user'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
            
            // Meng-hash password sebelum disimpan
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
		);
	
		// Memanggil model untuk menyimpan data
		$this->M_User->insertDataUser($data);
	
		// Memasukkan flashdata
		$this->session->set_flashdata('success', 'Data berhasil Ditambahkan.');
		
		// Mengarahkan kembali ke tampilan semula
		redirect('/C_Admin/cruduser');
	}

    public function searchuser() {
        $query = $this->input->get('query');
        $this->load->model('M_User');
        $data['user'] = $this->M_User->search_user($query);
        $this->load->view('admin/V_CrudUser', $data);
    }

    public function editUser($id_user) {
        $this->load->model('M_User');
        $data['user'] = $this->M_User->getUserById($id_user); // Mendapatkan data admin berdasarkan id
        $this->load->view('admin/V_EditUser', $data);
    }

    public function updateuser($id_user) {
        $this->load->library('session');
        // Pastikan Anda memiliki nilai ID admin yang valid
        if (!$id_user) {
            // Jika ID admin tidak valid, maka tampilkan pesan error
            // dan alihkan pengguna ke halaman admin_dashboard
            $this->session->set_flashdata('error', 'ID admin tidak valid.');
            redirect('C_Admin/cruduser');
            return; // Pastikan untuk menghentikan eksekusi fungsi setelah melakukan redirect
        }
    
        // Load model M_User
        $this->load->model('M_User');
    
        // Persiapkan data yang akan diupdate
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'alamat_user' => $this->input->post('alamat_user'),
            'telp_user' => $this->input->post('telp_user'),
            'email_user' => $this->input->post('email_user'),
            'username' => $this->input->post('username'),
        );
    
        // Panggil fungsi model untuk melakukan update data admin
        if ($this->M_User->updateDataUser($id_user, $data)) {
            // Jika update berhasil, tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Data admin berhasil diperbarui.');
        } else {
            // Jika update gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Gagal memperbarui data admin.');
        }
    
        // Alihkan pengguna kembali ke halaman admin_dashboard
        redirect('C_Admin/cruduser');
    }
    
    public function deleteuser($id_user) {
        $this->load->model('M_User');
        $this->M_User->deleteDataUser($id_user);
        redirect('C_Admin/cruduser');
    }

    //Produk================================================================================================================
    public function crudproduk()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_Produk');
        $data['produk'] = $this->M_Produk->getAllProduk();
        $this->load->view('admin/V_CrudProduk', $data);
    }

    public function createproduk()
    {
        $this->load->view('admin/V_AddProduk');
    }

    public function action_create_produk(){
		// Memuat library session
		$this->load->library('session');
		
		// Menampung data inputan yang telah dimasukan user
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
			'deskripsi_produk' => $this->input->post('deskripsi_produk'),
			'foto_produk' => $this->input->post('foto_produk'),
		);
	
		// Memanggil model untuk menyimpan data
		$this->M_Produk->insertDataProduk($data);
	
		// Memasukkan flashdata
		$this->session->set_flashdata('success', 'Data berhasil Ditambahkan.');
		
		// Mengarahkan kembali ke tampilan semula
		redirect('/C_Admin/crudproduk');
	}

    public function searchproduk() {
        $query = $this->input->get('query');
        $this->load->model('M_Produk');
        $data['produk'] = $this->M_Produk->search_produk($query);
        $this->load->view('admin/V_CrudProduk', $data);
    }

    public function editProduk($id_produk) {
        $this->load->model('M_Produk');
        $data['produk'] = $this->M_Produk->getProdukById($id_produk); // Mendapatkan data admin berdasarkan id
        $this->load->view('admin/V_EditProduk', $data);
    }

    public function updateproduk($id_produk) {
        $this->load->library('session');
        // Pastikan Anda memiliki nilai ID admin yang valid
        if (!$id_produk) {
            // Jika ID admin tidak valid, maka tampilkan pesan error
            // dan alihkan pengguna ke halaman admin_dashboard
            $this->session->set_flashdata('error', 'ID admin tidak valid.');
            redirect('C_Admin/crudproduk');
            return; // Pastikan untuk menghentikan eksekusi fungsi setelah melakukan redirect
        }
    
        // Load model M_Produk
        $this->load->model('M_Produk');
    
        // Persiapkan data yang akan diupdate
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk'),
            'foto_produk' => $this->input->post('foto_produk'),
        );
    
        // Panggil fungsi model untuk melakukan update data admin
        if ($this->M_Produk->updateDataProduk($id_produk, $data)) {
            // Jika update berhasil, tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Data admin berhasil diperbarui.');
        } else {
            // Jika update gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Gagal memperbarui data admin.');
        }
    
        // Alihkan pengguna kembali ke halaman admin_dashboard
        redirect('C_Admin/crudproduk');
    }

    public function deleteproduk($id_produk) {
        $this->load->model('M_Produk');
        $this->M_Produk->deleteDataProduk($id_produk);
        redirect('C_Admin/crudproduk');
    }

    //TimDivisi============================================================================================================
    public function crudtimdivisi()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_TimDivisi');
        $data['timdivisi'] = $this->M_TimDivisi->getAllTimDivisi();
        $this->load->view('admin/V_CrudTimDivisi', $data);
    }

    public function createtimdivisi()
    {
        $this->load->view('admin/V_AddTimDIvisi');
    }

    public function action_create_timdivisi(){
		// Memuat library session
		$this->load->library('session');
		
		// Menampung data inputan yang telah dimasukan user
		$data = array(
			'nama_timdivisi' => $this->input->post('nama_timdivisi'),
			'jabatan_timdivisi' => $this->input->post('jabatan_timdivisi'),
			'foto_timdivisi' => $this->input->post('foto_timdivisi'),
		);
	
		// Memanggil model untuk menyimpan data
		$this->M_TimDivisi->insertDataTimDivisi($data);
	
		// Memasukkan flashdata
		$this->session->set_flashdata('success', 'Data berhasil Ditambahkan.');
		
		// Mengarahkan kembali ke tampilan semula
		redirect('/C_Admin/crudtimdivisi');
	}

    public function searchtimdivisi() {
        $query = $this->input->get('query');
        $this->load->model('M_TimDivisi');
        $data['timdivisi'] = $this->M_TimDivisi->search_timdivisi($query);
        $this->load->view('admin/V_CrudTimDivisi', $data);
    }

    public function editTimDivisi($id_timdivisi) {
        $this->load->model('M_TimDivisi');
        $data['timdivisi'] = $this->M_TimDivisi->getTimDivisiById($id_timdivisi); // Mendapatkan data admin berdasarkan id
        $this->load->view('admin/V_EditTimDivisi', $data);
    }

    public function updatetimdivisi($id_timdivisi) {
        $this->load->library('session');
        // Pastikan Anda memiliki nilai ID admin yang valid
        if (!$id_timdivisi) {
            // Jika ID admin tidak valid, maka tampilkan pesan error
            // dan alihkan pengguna ke halaman admin_dashboard
            $this->session->set_flashdata('error', 'ID admin tidak valid.');
            redirect('C_Admin/crudtimdivisi');
            return; // Pastikan untuk menghentikan eksekusi fungsi setelah melakukan redirect
        }
    
        // Load model M_TimDivisi
        $this->load->model('M_TimDivisi');
    
        // Persiapkan data yang akan diupdate
        $data = array(
            'nama_timdivisi' => $this->input->post('nama_timdivisi'),
            'jabatan_timdivisi' => $this->input->post('jabatan_timdivisi'),
            'foto_timdivisi' => $this->input->post('foto_timdivisi'),
        );
    
        // Panggil fungsi model untuk melakukan update data admin
        if ($this->M_TimDivisi->updateDataTimDivisi($id_timdivisi, $data)) {
            // Jika update berhasil, tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Data admin berhasil diperbarui.');
        } else {
            // Jika update gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Gagal memperbarui data admin.');
        }
    
        // Alihkan pengguna kembali ke halaman admin_dashboard
        redirect('C_Admin/crudtimdivisi');
    }

    public function deletetimdivisi($id_timdivisi) {
        $this->load->model('M_TimDivisi');
        $this->M_TimDivisi->deleteDataTimDivisi($id_timdivisi);
        redirect('C_Admin/crudtimdivisi');
    }

    //Contact=================================================================================================================
    public function crudcontact()
    {
        redirect('C_Admin/contact_dashboard');
    }
    
    public function contact_dashboard()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_Contact');
        $data['contact'] = $this->M_Contact->getAll();
        $this->load->view('admin/V_CrudContact', $data);
    }
    

    public function editContact($id_contact) {
        $this->load->model('M_Contact');
        $data['contact'] = $this->M_Contact->getContactById($id_contact);
        $this->load->view('admin/V_EditContact', $data);
    }
    
    public function updateContact() {
        $this->load->model('M_Contact');
    
        $id_contact = $this->input->post('id_contact');
        $nama_pengirim = $this->input->post('nama_pengirim');
        $isi_pesan = $this->input->post('isi_pesan');
        $subjek_pesan = $this->input->post('subjek_pesan');
        $email_pengirim = $this->input->post('email_pengirim');
        $telp_pengirim = $this->input->post('telp_pengirim');
    
        $data = array(
            'nama_pengirim' => $nama_pengirim,
            'isi_pesan' => $isi_pesan,
            'subjek_pesan' => $subjek_pesan,
            'email_pengirim' => $email_pengirim,
            'telp_pengirim' => $telp_pengirim,
        );
    
        $this->M_Contact->updateContact($id_contact, $data);
    
        redirect('C_Admin/crudcontact');
    }

    public function deleteContact($id_contact) {
        $this->load->model('M_Contact');
        $this->M_Contact->deleteContact($id_contact);
        redirect('C_Admin/crudcontact');
    }

    
    public function searchContact() {
        $query = $this->input->get('query');
        $data['contact'] = $this->M_Contact->searchContact($query);
        $this->load->view('admin/V_CrudContact', $data); // pastikan view ini benar
    }

    //TIM=================================================================================================================

    public function crudtim()
    {
        redirect('C_Admin/tim_dashboard');
    }
    
    public function tim_dashboard()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_Tim');
        $data['tim'] = $this->M_Tim->getAllTim();
        $this->load->view('admin/V_CrudTim', $data);
    }

    public function editTim($id_tim) {
        $this->load->model('M_Tim');
        $data['tim'] = $this->M_Tim->getTimById($id_tim); // Mendapatkan data admin berdasarkan id
        $this->load->view('admin/V_EditTim', $data);
    }

    public function updateTim() {
        $this->load->model('M_Tim');
    
        $id_tim = $this->input->post('id_tim');
        $nama_tim = $this->input->post('nama_tim');
        $jabatan_tim = $this->input->post('jabatan_tim');
        $fb_tim = $this->input->post('fb_tim');
        $twt_tim = $this->input->post('twt_tim');
        $ig_tim = $this->input->post('ig_tim');
        $old_foto_tim = $this->input->post('old_foto_tim');
    
        $foto_tim = $old_foto_tim; // Default to old photo
    
        if (!empty($_FILES['foto_tim']['name'])) {
            $config['upload_path'] = './img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = time() . '_' . $_FILES['foto_tim']['name']; // Prevent file name conflict
            $config['overwrite'] = true; // Overwrite existing files
            $config['file_ext_tolower'] = true; // Convert file extension to lower case
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto_tim')) {
                // Hapus foto lama jika ada foto baru
                if ($old_foto_tim && file_exists('./img/' . $old_foto_tim)) {
                    unlink('./img/' . $old_foto_tim);
                }
    
                $uploadData = $this->upload->data();
                $foto_tim = $uploadData['file_name'];
            } else {
                // Log upload error
                log_message('error', $this->upload->display_errors());
            }
        }
    
        $data = array(
            'nama_tim' => $nama_tim,
            'jabatan_tim' => $jabatan_tim,
            'fb_tim' => $fb_tim,
            'twt_tim' => $twt_tim,
            'ig_tim' => $ig_tim,
            'foto_tim' => $foto_tim,
        );
    
        $this->M_Tim->updateTim($id_tim, $data);
    
        redirect('C_Admin/tim_dashboard');
    }
    public function deletetim($id_tim) {
        $this->load->model('M_Tim');
    
        // Mengambil data tim berdasarkan id untuk mendapatkan nama file foto
        $tim = $this->M_Tim->getTimById($id_tim);
    
        // Menghapus foto dari folder jika ada
        if ($tim && !empty($tim->foto_tim)) {
            $file_path = './img/' . $tim->foto_tim;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    
        // Menghapus data tim dari database
        $this->M_Tim->deleteTim($id_tim);
    
        // Redirect ke halaman crud tim
        redirect('C_Admin/crudtim');
    }

    public function createTim() {
        $this->load->view('admin/V_AddTim');
    }

    public function addTim() {
        $this->load->model('M_Tim');
    
        // Ambil data dari form
        $data = array(
            'nama_tim' => $this->input->post('nama_tim'),
            'foto_tim' => $_FILES['foto_tim']['name'], // Ganti ini sesuai dengan kolom pada tabel database
            'jabatan_tim' => $this->input->post('jabatan_tim'),
            'fb_tim' => $this->input->post('fb_tim'),
            'twt_tim' => $this->input->post('twt_tim'),
            'ig_tim' => $this->input->post('ig_tim')
        );
    
        // Panggil model untuk menyimpan data tim
        $this->M_Tim->addTim($data);
    
        // Redirect ke halaman tim_dashboard atau halaman lain yang diinginkan
        redirect('C_Admin/tim_dashboard');
    }
    
    public function searchTim() {
        $query = $this->input->get('query');
        $data['tim'] = $this->M_Tim->searchTim($query);
        $this->load->view('admin/V_CrudTim', $data); // pastikan view ini benar
    }

    //INVOICE=================================================================================================================

    public function crudinvoice()
    {
        redirect('C_Admin/invoice_dashboard');
    }
    
    public function invoice_dashboard()
    {
        $this->load->library('session');
		
		// Retrieve the user ID from the session
		$id_admin = $this->session->userdata('id_admin');
		
		// Ensure user is logged in
		if (!$id_admin) {
			$this->session->set_flashdata('error');
			redirect('/C_Admin/signinadmin');
		}
        $this->load->model('M_Invoice');
        $data['invoice'] = $this->M_Invoice->get_invoice_data();
        $this->load->view('admin/V_CrudInvoice', $data);
    }

    public function get_invoice_details($id_invoice) {
        $this->load->model('M_Invoice');
        $details = $this->M_Invoice->get_invoice_details($id_invoice);
        echo json_encode($details);
    }
    
    public function searchInvoice() {
        $query = $this->input->get('query');
        $data['invoice'] = $this->M_Invoice->searchInvoice($query);
        $this->load->view('admin/V_CrudInvoice', $data); // pastikan view ini benar
    }

    public function editInvoice($id_invoice) {
        $this->load->model('M_Invoice');
        $data['invoice'] = $this->M_Invoice->get_invoice_by_id($id_invoice);
        $data['status_invoice'] = $this->M_Invoice->get_all_statuses();
        $this->load->view('admin/V_EditInvoice', $data);
    }

    public function updateInvoice() {
        $id_invoice = $this->input->post('id_invoice');
        $id_status = $this->input->post('id_status');

        $this->load->model('M_Invoice'); // Replace 'M_Invoice' with your actual model name
        $this->M_Invoice->update_invoice($id_invoice, $id_status);

        redirect('C_Admin/invoice_dashboard'); // Redirect to the invoice list after updating
    }


    public function deleteInvoice($id_invoice) {
        $this->load->model('M_Invoice');
        $this->M_Invoice->deleteinvoice($id_invoice);
        redirect('C_Admin/crudinvoice');
    }

    
    

    public function createInvoice()
    {
        $this->load->view('admin/V_AddInvoice');
    }

}