<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Human_resource extends CI_Controller {

    public function index()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('news/index', $data, true);
		$this->load->view('layout/main', $data);
	}


}