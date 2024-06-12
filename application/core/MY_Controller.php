<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        // Load necessary libraries
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->helper('url');

        // Load language based on session data
        $lang = $this->session->userdata('site_language');
        if (!$lang) {
            $lang = 'english'; // Default language
        }
        log_message('debug', 'Loading language: ' . $lang);
        $this->lang->load('message', $lang);
    }
}
