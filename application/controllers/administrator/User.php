<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
		$this->load->model('muser');
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
	}

	public function manage_user(){
		$data['path_content'] = 'admin/user/manage-user';
		
		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
	    $config['total_rows'] = $this->muser->countUser();// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = 3; // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->muser->fetchUser($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->muser->countUser(); // Make a variable (array) link so the view can call the variable
	   $this->load->view('admin/dashboard', $data);
		}
		else{
			$data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/dashboard', $data);
		}
	}

	 public function add_user(){
        $data['path_content'] = 'admin/user/add-user';
        if($this->session->userdata('login_user') == FALSE){
            redirect(base_url('administrator/dashboard/login/'));
        }
        $this->load->view('admin/dashboard', $data);

    }
    public function edit_user(){
    	$data['path_content'] = 'admin/user/edit-user';
    	if ($this->session->userdata('login_user') == FALSE) {
    		redirect(base_url('administrator/dashboard/login'));
    	}
    	$this->load->view('admin/dashboard', $data);

    }
}
