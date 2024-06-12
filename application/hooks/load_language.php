<?php
defined('BASEPATH') or exit('No direct script access allowed');

function load_language()
{   
    
    $CI =& get_instance();
    $CI->load->library('session');
    $CI->load->helper('url');
    
    $lang = $CI->session->userdata('site_language');
    if (!$lang) {
        $lang = 'en'; // Default language
    }
    $CI->lang->load('message', $lang);
}
