<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model{

    public function insertDataAdmin($data)
	{
		return $this->db->insert('admin',$data);
	}

	public function getAllAdmin() {
        $query = $this->db->query("SELECT * FROM admin");
        return $query->result();
    }

	public function check_signin_admin($username_admin, $pass_admin) {
		// Mendapatkan data user berdasarkan username
		$this->db->where('username_admin', $username_admin);
		$query = $this->db->get('admin');
	
		if ($query->num_rows() == 1) {
			$admin = $query->row_array();
			// Verifikasi password yang di-hash
			if (password_verify($pass_admin, $admin['pass_admin'])) {
				return $admin; // Jika password benar, return data user
			} else {
				return false; // Jika password salah
			}
		} else {
			return false; // Jika username tidak ditemukan
		}
	}
	
	public function getAdminById($id) {
        $query = $this->db->query("SELECT * FROM admin WHERE id_admin = ?", array($id));
        return $query->row();
    }

	// Fungsi untuk mengedit data admin
    public function updateDataAdmin($id_admin, $data) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    // Fungsi untuk menghapus data admin
    public function deleteDataAdmin($id_admin) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->delete('admin');
    }

	public function search_admin($query) {
        $this->db->like('nama_admin', $query);
        $this->db->or_like('telp_admin', $query);
        $this->db->or_like('email_admin', $query);
        $this->db->or_like('username_admin', $query);
        $query = $this->db->get('admin');
        return $query->result();
    }
}