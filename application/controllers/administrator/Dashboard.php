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

	public function index(){
		$data['title'] = 'Dashboard | Administrator';
		$data['path_content'] = 'admin/module/dashboard';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);

	}
	public function setting(){
		$data['title'] = 'Setting Website | Administrator';
		$data['path_content'] = 'admin/module/setting';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}

		$id = 1;
		$data['result'] = $this->mod->getDataWhere('setting','id_setting',1);
		$this->form_validation->set_rules('title_website','Title Website','required');
		$this->form_validation->set_rules('tagline_website','Tagline Website','required');
		$this->form_validation->set_rules('default_template','Default Template','required');
		$this->form_validation->set_rules('default_admin','Admin Template','required');

		if(!$this->form_validation->run())
			$this->load->view('admin/dashboard', $data);
		else{
			// upload image
            $config['upload_path'] = './asset/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            //$config['file_name'] = 'logo-'.$this->mod->urlFriendly($this->input->post('title')).date('Y-m-d_H-i-s');
            $this->load->library('upload', $config);
			foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
			{
			    if (!empty($fileObject['userfile'])){
			        $this->upload->initialize($config);
			        if (!$this->upload->do_upload($fieldname)){
			            $errors = $this->upload->display_errors();
			            flashMsg($errors);
			        }
			        else{
			        	echo "sukses";
			             // Code After Files Upload Success GOES HERE
			        	// save data
			            /*$data = $_POST;
			            $array = array(
			            	'title_website' => $data['title_website'],
			            	'tagline_website' => $data['tagline_website'],
			            	'default_template' => $data['default_template'],
			            	'default_admin' => $data['default_admin'],
			            	'meta_description' => $data['meta_description'],
			            	'meta_keywords' => $data['meta_keywords'],
			            );
			            $this->mod->editData($array,'article','id_article',$id);*/
			        }
			    }
			} // end foreach
			
		}
	}
	public function manage_user(){
		$data['path_content'] = 'admin/module/user';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}

	public function user(){
		$data['path_content'] = 'admin/user/manage-user';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);

	}
	public function table(){
		$data['path_content'] = 'admin/module/table';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}
	public function typography(){
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
	public function maps(){
		$data['path_content'] = 'admin/module/maps';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}
	public function notifications(){
		$data['path_content'] = 'admin/module/notifications';
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
		$this->load->view('admin/dashboard', $data);
	}
	public function logout(){
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
