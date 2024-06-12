<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_TimDivisi extends CI_Model{
    public function insertDataTimDivisi($data)
	{
		return $this->db->insert('timdivisi',$data);
	}

    public function getAllTimDivisi(){
        $query = $this->db->query("select * from timdivisi");
        return $query->result();
    }

    public function getTimDivisiById($id) {
        $query = $this->db->query("SELECT * FROM timdivisi WHERE id_timdivisi = ?", array($id));
        return $query->row();
    }
    public function updateDataTimDivisi($id_timdivisi, $data) {
        $this->db->where('id_timdivisi', $id_timdivisi);
        return $this->db->update('timdivisi', $data);
    }
    public function deleteDataTimDivisi($id_timdivisi) {
        $this->db->where('id_timdivisi', $id_timdivisi);
        return $this->db->delete('timdivisi');
    }

    public function search_timdivisi($query) {
        $this->db->like('nama_timdivisi', $query);
        $this->db->or_like('jabatan_timdivisi', $query);
        $this->db->or_like('foto_timdivisi', $query);
        $query = $this->db->get('timdivisi');
        return $query->result();
    }
}
