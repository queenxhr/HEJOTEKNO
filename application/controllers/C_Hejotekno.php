<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hejotekno extends CI_Controller
{

	//Index======================================================================================================================================
	public function index()
	{
		$data['produk'] = $this->M_Produk->getAllProduk();
		$data['tim'] = $this->M_Tim->getAllTim();
		$this->load->view('V_Home', $data);
	}

	public function index2()
	{

		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}
		$data['produk'] = $this->M_Produk->getAllProduk();
		$data['tim'] = $this->M_Tim->getAllTim();

		$this->load->view('V_Home2', $data);
	}


	//Auth=======================================================================================================================================
	public function linksignin()
	{
		$this->load->view('V_Signin');
	}

	public function action_signin()
	{
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->M_Signup->check_signin($username, $password);

		if ($user) {
			$data = array(
				'id_user' => $user['id_user'],
				'nama_user' => $user['nama_user'],
				'alamat_user' => $user['alamat_user'],
				'telp_user' => $user['telp_user'],
				'email_user' => $user['email_user'],
				'username' => $username,
			);
			$this->session->set_userdata($data);

			return redirect("/C_Hejotekno/index2");
		} else {
			$this->session->set_flashdata('gagal', 'Maaf Username atau password salah mohon untuk mencoba login kembali');
			return redirect("/C_Hejotekno/linksignin");
		}
	}



	public function linksignup()
	{
		$this->load->library('session');
		$this->load->view('V_Signup');
	}

	public function action_signup()
	{
		$this->load->library('session');
		// Ambil data dari form
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$telp_user = $this->input->post('telp_user');
		$email_user = $this->input->post('email_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Cek apakah email atau username sudah digunakan
		$email_exists = $this->M_Signup->check_email_exists($email_user);
		$username_exists = $this->M_Signup->check_username_exists($username);

		if ($email_exists) {
			$this->session->set_flashdata('error', 'Email sudah digunakan.');
			// Menyimpan data yang sudah diisi sebelumnya ke dalam session flash
			$this->session->set_flashdata('nama_user', $nama_user);
			$this->session->set_flashdata('alamat_user', $alamat_user);
			$this->session->set_flashdata('telp_user', $telp_user);
			$this->session->set_flashdata('username', $username);
			redirect('C_Hejotekno/linksignup');
		}else if($username_exists) {
			$this->session->set_flashdata('error', 'Username sudah digunakan.');
			// Menyimpan data yang sudah diisi sebelumnya ke dalam session flash
			$this->session->set_flashdata('nama_user', $nama_user);
			$this->session->set_flashdata('alamat_user', $alamat_user);
			$this->session->set_flashdata('telp_user', $telp_user);
			$this->session->set_flashdata('email_user', $email_user);
			redirect('C_Hejotekno/linksignup');
		} else {
			// Data yang akan disimpan
			$data = array(
				'nama_user' => $nama_user,
				'alamat_user' => $alamat_user,
				'telp_user' => $telp_user,
				'email_user' => $email_user,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT) // Hash password sebelum disimpan
			);

			// Panggil model untuk menyimpan data
			$result = $this->M_Signup->insertData($data);

			if ($result) {
				$this->session->set_flashdata('success', 'Akun berhasil dibuat.');
				redirect('C_Hejotekno/linksignin');
			} else {
				$this->session->set_flashdata('error', 'Gagal membuat akun. Silakan coba lagi.');
				redirect('C_Hejotekno/linksignup');
			}
		}
	}

	public function linkprofil()
	{
		// Assume user ID is stored in session after login
		$this->load->library('session');
		$id_user = $this->session->userdata('id_user');
		if ($id_user) {
			$data['user'] = $this->M_User->getUserById($id_user);
			$this->load->view('V_Profile', $data);
		} else {
			// Redirect to login page if user is not logged in
			redirect('C_Hejotekno/linksignin');
		}
	}

	public function edit_profile()
	{
		$this->load->library('session');
		$id_user = $this->session->userdata('id_user');
		if ($id_user) {
			$data['user'] = $this->M_User->getUserById($id_user);
			$this->load->view('V_EditProfile', $data);
		} else {
			redirect('C_Hejotekno/linksignin');
		}
	}

	public function update_profile()
	{
		$this->load->library('session');
		$id_user = $this->session->userdata('id_user');
		// Pastikan Anda memiliki nilai ID admin yang valid
		if (!$id_user) {
			// Jika ID admin tidak valid, maka tampilkan pesan error
			// dan alihkan pengguna ke halaman admin_dashboard
			$this->session->set_flashdata('error', 'ID admin tidak valid.');
			redirect('C_Hejotekno/linkprofil');
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
		);

		// Panggil fungsi model untuk melakukan update data admin
		if ($this->M_User->updateDataUser($id_user, $data)) {
			// Jika update berhasil, tampilkan pesan sukses
			$this->session->set_flashdata('success', 'Data user berhasil diperbarui.');
		} else {
			// Jika update gagal, tampilkan pesan error
			$this->session->set_flashdata('error', 'Gagal memperbarui data user.');
		}

		// Alihkan pengguna kembali ke halaman admin_dashboard
		redirect('C_Hejotekno/linkprofil');

		// $this->load->library('session');
		// $id_user = $this->session->userdata('id_user');
		// if ($id_user) {
		//     $this->form_validation->set_rules('nama_user', 'Name', 'required');
		//     $this->form_validation->set_rules('email_user', 'Email', 'required|valid_email');
		//     $this->form_validation->set_rules('telp_user', 'Phone', 'required');
		//     $this->form_validation->set_rules('alamat_user', 'Address', 'required');

		//     if ($this->form_validation->run() == TRUE) {
		//         $data = [
		//             'nama_user' => $this->input->post('nama_user'),
		//             'email_user' => $this->input->post('email_user'),
		//             'telp_user' => $this->input->post('telp_user'),
		//             'alamat_user' => $this->input->post('alamat_user')
		//         ];
		//         $this->M_User->updateDataUser($id_user, $data);
		//         redirect('C_Hejotekno/linkprofil');
		//     } else {
		//         $this->edit_profile();
		//     }
		// } else {
		//     redirect('C_Hejotekno/linksignin');
		// }
	}

	public function linksignout()
	{
		$this->load->library('session');
		$this->session->set_flashdata('keluar', 1);
		$this->session->unset_userdata('id_user');
		redirect(base_url('/index.php/C_Hejotekno/index'));
	}

	//About Us ===================================================================================================================================
	public function linkabout()
	{
		$data['tim'] = $this->M_Tim->getAllTim();
		$data['timdivisi'] = $this->M_TimDivisi->getAllTimDivisi();
		$this->load->view('V_About', $data);
	}

	public function linkabout2()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}

		$data['tim'] = $this->M_Tim->getAllTim();
		$data['timdivisi'] = $this->M_TimDivisi->getAllTimDivisi();
		$this->load->view('V_About2', $data);
	}

	//Program ===================================================================================================================================
	public function linkprogram()
	{
		$this->load->view('V_Program');
	}
	public function linkprogram2()
	{
		$this->load->view('V_Program2');
	}

	//Product ===================================================================================================================================
	public function linkproduct()
	{
		$data['produk'] = $this->M_Produk->getAllProduk(); // Mengambil semua produk
		$this->load->view('V_Product', $data);
	}

	public function getProductDetail($id)
	{
		$this->load->model('M_Produk'); // Memastikan model M_Produk dipanggil
		$product = $this->M_Produk->getProdukById($id);
		echo json_encode($product);
	}

	public function linkproduct2()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}
		$data['produk'] = $this->M_Produk->getAllProduk(); // Mengambil semua produk
		$this->load->view('V_Product2', $data);
	}

	public function getProductDetail2($id)
	{
		$this->load->model('M_Produk'); // Memastikan model M_Produk dipanggil
		$product = $this->M_Produk->getProdukById($id);
		echo json_encode($product);
	}

	//Trolley ===================================================================================================================================
	public function linktrolley()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error', 'You must be logged in to view your trolley.');
			redirect('/C_Hejotekno/linksignin');
		}

		$data['produk'] = $this->M_Produk->getAllProduk();
		$this->load->view('V_Trolley', $data);
	}

	public function action_order()
	{
		$this->load->library('session');

		// Retrieve product IDs, quantities, and subtotals from the form submission
		$id_produk = $this->input->post('id_produk');
		$quantity_order = $this->input->post('quantity_order');
		$subtotal_order = $this->input->post('subtotal_order');

		// Calculate total order
		$total_order = array_sum($subtotal_order);

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Begin a database transaction
		$this->db->trans_start();

		// Create a new id_order for this transaction
		$id_order = $this->db->select_max('id_order')->get('order')->row()->id_order + 1;

		// Insert each product order
		foreach ($id_produk as $index => $id) {
			if ($quantity_order[$index] > 0) { // Check if quantity is greater than 0
				$data = array(
					'id_order' => $id_order, // Use the new id_order
					'id_produk' => $id,
					'quantity_order' => $quantity_order[$index],
					'subtotal_order' => $subtotal_order[$index],
					'total_order' => $total_order
				);
				// Save each item to your order table
				$this->db->insert('order', $data);
			}
		}

		// Insert data into invoice table
		$invoice_data = array(
			'id_order' => $id_order,
			'id_user' => $id_user,
			'tgl_invoice' => date('Y-m-d'), // Current date
			'id_status' => 1 // Default status id
		);
		$this->db->insert('invoice', $invoice_data);

		// Store the id_order and total_order in session
		$this->session->set_userdata('id_order', $id_order);
		$this->session->set_userdata('total_order', $total_order);

		// Complete the transaction
		$this->db->trans_complete();

		// Check if the transaction was successful
		if ($this->db->trans_status() === FALSE) {
			// Handle failure (rollback)
			// Redirect to an error page or show an error message
			redirect('C_Hejotekno/error');
		} else {
			// Handle success (commit)
			// Redirect to a success page or show a success message
			redirect('C_Hejotekno/linkinvoice');
		}
	}

	//Invoice ===================================================================================================================================
	public function linkinvoice()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}

		$this->load->model('M_User');
		$data['user'] = $this->M_User->getUserById($id_user);

		$this->load->model('M_Order');
		$id_order = $this->session->userdata('id_order');
		$data['order'] = $this->M_Order->get_order_by_id($id_order);
		$data['order_details'] = $this->M_Order->get_order_details_by_id($id_order); // Get all order details for this order

		$total_order = $this->session->userdata('total_order');
		$data['total_order'] = $total_order;

		$this->load->view('V_Invoice', $data);
	}

	//History ===================================================================================================================================
	public function linkhistory()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}

		$this->load->model('M_Invoice');
		$data['invoices'] = $this->M_Invoice->get_invoice_data_with_details($id_user); // Modified to get invoice data with details

		$this->load->view('V_History', $data);
	}

	//Contact ===================================================================================================================================
	public function linkcontact()
	{
		$this->load->view('V_Contact');
	}

	public function submitContactUs()
	{
		// Memuat library session
		$this->load->library('session');

		// Menampung data inputan perusahaan yang telah dimasukan user
		$nama_pengirim = $this->input->post('nama_pengirim');
		$isi_pesan = $this->input->post('isi_pesan');
		$subjek_pesan = $this->input->post('subjek_pesan');
		$email_pengirim = $this->input->post('email_pengirim'); // Typo: email_pengirim
		$telp_pengirim = $this->input->post('telp_pengirim');

		// Memasukan data kedalam array
		$createaction = array(
			'nama_pengirim' => $nama_pengirim,
			'isi_pesan' => $isi_pesan,
			'subjek_pesan' => $subjek_pesan,
			'email_pengirim' => $email_pengirim,
			'telp_pengirim' => $telp_pengirim,
		);

		// Memanggil model untuk menyimpan data
		$this->M_Contact->insertPesan($createaction);

		// Memasukkan flashdata
		$this->session->set_flashdata('create', 1);

		// Mengarahkan kembali ke tampilan semula
		redirect(base_url('/index.php/C_Hejotekno/linkcontact'));
	}

	public function linkcontact2()
	{
		$this->load->library('session');

		// Retrieve the user ID from the session
		$id_user = $this->session->userdata('id_user');

		// Ensure user is logged in
		if (!$id_user) {
			$this->session->set_flashdata('error');
			redirect('/C_Hejotekno/linksignin');
		}
		$this->load->view('V_Contact2');
	}

	public function submitContactUs2()
	{
		// Memuat library session
		$this->load->library('session');

		// Menampung data inputan perusahaan yang telah dimasukan user
		$nama_pengirim = $this->input->post('nama_pengirim');
		$isi_pesan = $this->input->post('isi_pesan');
		$subjek_pesan = $this->input->post('subjek_pesan');
		$email_pengirim = $this->input->post('email_pengirim'); // Typo: email_pengirim
		$telp_pengirim = $this->input->post('telp_pengirim');

		// Memasukan data kedalam array
		$createaction = array(
			'nama_pengirim' => $nama_pengirim,
			'isi_pesan' => $isi_pesan,
			'subjek_pesan' => $subjek_pesan,
			'email_pengirim' => $email_pengirim,
			'telp_pengirim' => $telp_pengirim,
		);

		// Memanggil model untuk menyimpan data
		$this->M_Contact->insertPesan($createaction);

		// Memasukkan flashdata
		$this->session->set_flashdata('create', 1);

		// Mengarahkan kembali ke tampilan semula
		redirect(base_url('/index.php/C_Hejotekno/linkcontact'));
	}

	//Bahasa ===================================================================================================================================
	public function setLanguage($lang)
	{
		$this->session->set_userdata('site_language', $lang);
		redirect($this->agent->referrer());
	}

	public function addToTrolley()
	{

		// Ambil data order dari form
		$data = array(
			'name' => $this->input->post('product_name'),
			'price' => $this->input->post('product_price'),
			'quantity' => $this->input->post('product_quantity')
		);

		// Simpan data order ke dalam session
		$trolley = $this->session->userdata('trolley');
		$trolley[] = $data;
		$this->session->set_userdata('trolley', $trolley);

		// Redirect ke halaman view trolley
		redirect('C_Hejotekno/viewTrolley');
	}

	public function viewTrolley()
	{
		// Ambil data order dari session
		$data['trolley'] = $this->session->userdata('trolley');

		// Tampilkan halaman view trolley
		$this->load->view('view_trolley', $data);
	}

	public function downloadPDF()
	{
		$file_path = FCPATH . 'uploads/pdf/PDFPRODUCT.pdf';

		if (file_exists($file_path)) {
			// Load helper force_download
			helper('download');

			// Unduh file
			force_download($file_path, NULL);
		} else {
			// File tidak ditemukan, tampilkan pesan atau redirect ke halaman lain
			show_error('File not found.', 404);
		}
	}

}