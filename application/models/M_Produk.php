<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model {
    public function insertDataProduk($data)
	{
		return $this->db->insert('produk',$data);
	}

    public function getAllProduk() {
        $query = $this->db->query("SELECT * FROM produk");
        return $query->result();
    }

    public function getProdukById($id) {
        $query = $this->db->query("SELECT * FROM produk WHERE id_produk = ?", array($id));
        return $query->row();
    }
    public function updateDataProduk($id_produk, $data) {
        $this->db->where('id_produk', $id_produk);
        return $this->db->update('produk', $data);
    }
    public function deleteDataProduk($id_produk) {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('produk');
    }
    public function search_produk($query) {
        $this->db->like('nama_produk', $query);
        $this->db->or_like('harga_produk', $query);
        $this->db->or_like('deskripsi_produk', $query);
        $this->db->or_like('foto_produk', $query);
        $query = $this->db->get('produk');
        return $query->result();
    }
}
?>
