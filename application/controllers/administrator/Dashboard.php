<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function index()
	{
		$data['path_content'] = 'admin/module/dashboard';
		$this->load->view('admin/dashboard', $data);
	}

	public function user()
	{
		$data['path_content'] = 'admin/module/user';
		$this->load->view('admin/dashboard', $data);
	}

	public function table()
	{
		$data['path_content'] = 'admin/module/table';
		$this->load->view('admin/dashboard', $data);
	}

	public function typography()
	{
		$data['path_content'] = 'admin/module/typography';
		$this->load->view('admin/dashboard', $data);
	}

	public function icons()
	{
		$data['path_content'] = 'admin/module/icons';
		$this->load->view('admin/dashboard', $data);
	}

	public function maps()
	{
		$data['path_content'] = 'admin/module/maps';
		$this->load->view('admin/dashboard', $data);
	}

	public function notifications()
	{
		$data['path_content'] = 'admin/module/notifications';
		$this->load->view('admin/dashboard', $data);
	}
}
