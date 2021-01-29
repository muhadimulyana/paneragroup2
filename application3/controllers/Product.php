<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Contact_m', 'contact');
	// 	//$this->load->model('Menu_m');
	// }

	public function index()
	{
		//$id = isset($_GET['id']) ? $_GET['id'] : 1 ;
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('product/index-1', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function plastic_resin()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('product/resin', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function plastic_bag()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('product/bag', $data, true);
		$this->load->view('layout/main', $data);
	}
}
