<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function insertDataUser($data)
	{
		return $this->db->insert('user',$data);
	}

    // Metode untuk memeriksa kredensial pengguna
    public function check_user($username, $password) {
        // Asumsikan password disimpan dalam bentuk hash
        $this->db->where('username', $username);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            // Verifikasi password
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function getUserById($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('user');
        return $query->row();  // Mengembalikan satu baris hasil sebagai objek
    }

    public function getAllUser() {
        $query = $this->db->query("SELECT * FROM user");
        return $query->result();
    }

	// Fungsi untuk mengedit data auser
    public function updateDataUser($id_user, $data) {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }

    // Fungsi untuk menghapus data auser
    public function deleteDataUser($id_user) {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('user');
    }

    public function search_user($query) {
        $this->db->like('nama_user', $query);
        $this->db->or_like('alamat_user', $query);
        $this->db->or_like('telp_user', $query);
        $this->db->or_like('email_user', $query);
        $this->db->or_like('username', $query);
        $query = $this->db->get('user');
        return $query->result();
    }
}
?>
