<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tim extends CI_Model {
    public function getAllTim() {
        $query = $this->db->query("SELECT * FROM tim");
        return $query->result();
    }

    public function getTimById($id_tim) {
        $query = $this->db->query("SELECT * FROM tim WHERE id_tim = $id_tim");
        return $query->row();
    }

    public function updateTim($id_tim, $data) {
        $this->db->where('id_tim', $id_tim);
        $this->db->update('tim', $data);
    }

    public function deleteTim($id_tim) {
        $this->db->where('id_tim', $id_tim);
        $this->db->delete('tim');
    }

    public function addTim($data) {
        $this->db->insert('tim', $data);
    }    

    public function searchTim($query) {
        $this->db->like('nama_tim', $query);
        $this->db->or_like('foto_tim', $query);
        $this->db->or_like('jabatan_tim', $query);
        $this->db->or_like('linkedin_tim', $query);
        $this->db->or_like('ig_tim', $query);

        $result = $this->db->get('tim');
        return $result->result();
    }

    

}


