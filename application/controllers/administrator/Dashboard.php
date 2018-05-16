<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
	}

	public function login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_validLogin');
		if(!$this->form_validation->run()){
			$this->load->view('admin/login');
		}
		else{
			redirect(base_url('administrator/dashboard'));
		}
	}
	function validLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->mpage->validLogin($username,$password);
		if($result != FALSE){
			$array = array(
				'username' => $this->input->post('username'),
				'permission' => $result['permission'],
				'id_user' => $result['id_user'],
				'login_user' => TRUE
			);
			$this->session->set_userdata($array);
			return true;
		}
		else{
			$this->form_validation->set_message('validLogin','Username / Password Tidak Ditemukan');
			return false;
		}
	}

	public function index()
	{
		$data['path_content'] = 'admin/module/dashboard';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);

	}

	public function manage_user()
	{
		$data['path_content'] = 'admin/module/user';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function user()
	{
		$data['path_content'] = 'admin/user/manage-user';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);

	}

	public function table()
	{
		$data['path_content'] = 'admin/module/table';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function typography()
	{
		$data['path_content'] = 'admin/module/typography';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function icons()
	{
		$data['path_content'] = 'admin/module/icons';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function maps()
	{
		$data['path_content'] = 'admin/module/maps';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function notifications()
	{
		$data['path_content'] = 'admin/module/notifications';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function logout()
	{
		$array = array(
				'username' => null,
				'permission' => null,
				'id_user' => null,
				'login_user' => FALSE
			);
			$this->session->set_userdata($array);
			redirect(base_url('administrator/dashboard/login'));
	}
}
