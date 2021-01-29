<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

    public function __construct() {
        parent::__construct();     
    }
    // create language Switcher method
    function switch($language = "") {        
        $language = 'indonesia';
        $this->session->set_userdata('site_lang', $language);        
        redirect($_SERVER['HTTP_REFERER']);        
    }

}
