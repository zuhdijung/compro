<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$data['path_content'] = 'admin/module/dashboard';
		$this->load->view('admin/dashboard', $data);
	}
}
