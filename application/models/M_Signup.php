<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Signup extends CI_Model {

    public function insertData($data)
	{
		return $this->db->insert('user',$data);
	}

	public function check_email_exists($email) {
		$this->db->where('email_user', $email);
		$query = $this->db->get('user'); 
		
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function check_username_exists($username) {
		$this->db->where('username', $username);
		$query = $this->db->get('user'); 
		
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

    public function check_signin($username, $password) {
        // Get user data based on username
        $this->db->where('username', $username);
        $query = $this->db->get('user'); // Assuming the table name is 'user'
    
        if ($query->num_rows() == 1) {
            $user = $query->row_array();
            // Verify hashed password
            if (password_verify($password, $user['password'])) {
                return $user; // Return user data if password is correct
            } else {
                return false; // Incorrect password
            }
        } else {
            return false; // Username not found
        }
    }
}
