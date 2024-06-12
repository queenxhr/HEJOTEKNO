<?php
class M_Contact extends CI_Model {

    public function getAll()
	{
		$query = $this -> db -> query ("select * from contact");
        return $query -> result();
	}
    
	public function insertPesan($data)
	{
		$this->db->insert('contact',$data);
	}

    public function getContactById($id_contact) {
        return $this->db->get_where('contact', ['id_contact' => $id_contact])->row();
    }

    public function updateContact($id_contact, $data) {
        $this->db->where('id_contact', $id_contact);
        $this->db->update('contact', $data);
    }

    public function deleteContact($id_contact) {
        $this->db->where('id_contact', $id_contact);
        $this->db->delete('contact');
    }

        public function __construct() {
            parent::__construct();
        }
    
        public function getContacts() {
            $query = $this->db->get('contacts');
            return $query->result();
        }
    
        public function searchContact($query) {
            $this->db->like('nama_pengirim', $query);
            $this->db->or_like('isi_pesan', $query);
            $this->db->or_like('subjek_pesan', $query);
            $this->db->or_like('email_pengirim', $query);
            $this->db->or_like('telp_pengirim', $query);
    
            $result = $this->db->get('contact');
            return $result->result();
        }

    
    // public function saveContact($nama_pengirim, $email_pengirim, $telp_pengirim, $subjek_pesan, $isi_pesan) {
    //     $data = array(
    //         'nama_pengirim' => $nama_pengirim,
    //         'email_pengirim' => $email_pengirim,
    //         'telp_pengirim' => $telp_pengirim,
    //         'subjek_pesan' => $subjek_pesan,
    //         'isi_pesan' => $isi_pesan
    //     );

    //     return $this->db->insert('contacts', $data); // Assumes a 'contacts' table in your database
    // }
}

