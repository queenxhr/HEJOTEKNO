<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Invoice extends CI_Model
{
    public function get_invoice_by_id($id_invoice) {
        $this->db->where('id_invoice', $id_invoice);
        $query = $this->db->get('invoice');
        return $query->row();
    }

    public function get_all_statuses()
    {
        $query = $this->db->get('status_invoice'); // Assuming your statuses table is named 'statuses'
        return $query->result();
    }

    // public function searchInvoice($query)
    // {
    //     $this->db->like('nama_user', $query);
    //     $this->db->or_like('email_user', $query);

    //     $this->db->join('user', 'invoice.id_user = user.id_user');
    //     $this->db->join('status_invoice', 'invoice.id_status = status_invoice.id_status_invoice');

    //     $result = $this->db->get('invoice');
    //     return $result->result();
    // }

    public function searchInvoice($keyword)
    {
        $this->db->select('i.*, u.nama_user, u.email_user, u.telp_user, u.alamat_user, s.status_invoice');
        $this->db->from('invoice i');
        $this->db->join('user u', 'i.id_user = u.id_user');
        $this->db->join('status_invoice s', 'i.id_status = s.id_status_invoice');
        
        $this->db->like('u.nama_user', $keyword);
        $this->db->or_like('u.email_user', $keyword);

        $this->db->order_by('i.id_invoice', 'ASC'); // Sort by invoice id
        $invoices = $this->db->get()->result();

        foreach ($invoices as $invoice) {
            $this->db->select('o.*, p.nama_produk, p.foto_produk, p.harga_produk');
            $this->db->from('order o');
            $this->db->join('produk p', 'o.id_produk = p.id_produk');
            $this->db->where('o.id_order', $invoice->id_order);
            $this->db->where('o.quantity_order >', 0); // Filter products with quantity greater than 0
            $invoice->details = $this->db->get()->result();

            // Calculate total_order for each invoice
            $total_order = 0;
            foreach ($invoice->details as $detail) {
                $total_order += $detail->subtotal_order;
            }
            $invoice->total_order = $total_order;
        }

        return $invoices;
    }

    public function get_invoice_data()
    {
        $query = $this->db->query("
            SELECT 
                invoice.id_invoice, 
                invoice.tgl_invoice, 
                status_invoice.status_invoice,
                user.nama_user, 
                user.email_user, 
                user.telp_user, 
                user.alamat_user, 
                `order`.quantity_order, 
                `order`.subtotal_order, 
                `order`.total_order, 
                GROUP_CONCAT(produk.nama_produk SEPARATOR ', ') AS nama_produk, 
                GROUP_CONCAT(produk.foto_produk SEPARATOR ',') AS foto_produk
            FROM invoice
            INNER JOIN status_invoice ON invoice.id_status = status_invoice.id_status_invoice
            INNER JOIN user ON invoice.id_user = user.id_user
            INNER JOIN `order` ON invoice.id_order = `order`.id_order
            INNER JOIN produk ON `order`.id_produk = produk.id_produk
            GROUP BY invoice.id_invoice
        ");
        return $query->result();
    }

    public function get_invoice_details($id_invoice)
    {
        $query = $this->db->query("
            SELECT 
                order_detail.id_produk,
                produk.nama_produk,
                order_detail.quantity_order,
                order_detail.subtotal_order
            FROM `order` AS order_detail
            INNER JOIN produk ON order_detail.id_produk = produk.id_produk
            WHERE order_detail.id_order = (
                SELECT id_order FROM invoice WHERE id_invoice = ?
            )
        ", array($id_invoice));
        return $query->result();
    }

    public function deleteinvoice($id_invoice)
    {
        $this->db->where('id_invoice', $id_invoice);
        $this->db->delete('invoice');
    }


    public function get_invoice_data_with_details($id_user)
    {
        $this->db->select('i.*, u.nama_user, u.email_user, u.telp_user, u.alamat_user, s.status_invoice');
        $this->db->from('invoice i');
        $this->db->join('user u', 'i.id_user = u.id_user');
        $this->db->join('status_invoice s', 'i.id_status = s.id_status_invoice');
        $this->db->where('i.id_user', $id_user);
        $this->db->order_by('i.id_invoice', 'ASC'); // Urutkan berdasarkan id_invoice secara ascending
        $invoices = $this->db->get()->result();

        foreach ($invoices as $invoice) {
            $this->db->select('o.*, p.nama_produk, p.foto_produk, p.harga_produk');
            $this->db->from('order o');
            $this->db->join('produk p', 'o.id_produk = p.id_produk');
            $this->db->where('o.id_order', $invoice->id_order);
            $this->db->where('o.quantity_order >', 0); // Filter produk dengan kuantitas di atas 0
            $invoice->details = $this->db->get()->result();

            // Calculate total_order for each invoice
            $total_order = 0;
            foreach ($invoice->details as $detail) {
                $total_order += $detail->subtotal_order;
            }
            $invoice->total_order = $total_order;
        }

        return $invoices;
    }

    // Function to update invoice
    public function update_invoice($id_invoice, $id_status) {
        $this->db->where('id_invoice', $id_invoice);
        $this->db->update('invoice', ['id_status' => $id_status]);
    }
}
?>