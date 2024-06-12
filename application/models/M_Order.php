<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model {
    public function saveOrder($data) {
        // Use insert_batch to handle multiple rows
        $this->db->insert_batch('order', $data); // Correct table name and batch insertion
    }

    public function get_order_by_id($id_order) {
        $this->db->where('id_order', $id_order);
        $query = $this->db->get('order');
        return $query->row();

        // $query = $this->db->query("
        //     SELECT  
        //         `order`.quantity_order, 
        //         `order`.subtotal_order, 
        //         `order`.total_order, 
        //     WHERE
        //         `order`.id_order, 
        //     FROM order
        // ");
        // return $query->result();
    }

    public function get_order_details_by_id($id_order)
    {
        $this->db->select('o.*, p.nama_produk, p.harga_produk');
        $this->db->from('order o');
        $this->db->join('produk p', 'o.id_produk = p.id_produk');
        $this->db->where('o.id_order', $id_order);
        $this->db->where('o.quantity_order >', 0); // Filter produk dengan kuantitas di atas 0
        $query = $this->db->get();
        return $query->result();
    }



}
