<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mgallery');
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('administrator/dashboard/login/'));
		}
	}

	public function manage(){
		$data['path_content'] = 'admin/gallery/manage-gallery';
		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/corporate/identity/'); // configurate link pagination
	    $config['total_rows'] = $this->mgallery->countGallery();// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = 3; // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mgallery->fetchGallery($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mgallery->countGallery(); // Make a variable (array) link so the view can call the variable
	   $this->load->view('admin/dashboard', $data);
		}
		else{
			$data['results'] = $this->mcorporate->fetchCorporateSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/dashboard', $data);
		}
	}
	 public function add_gallery(){
        $data['path_content'] = 'admin/gallery/add-gallery';
       $this->form_validation->set_rules('name_gallery','Name Gallery','required');
         $data['error'] = false;
        if(!$this->form_validation->run()){
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // upload poto
            $config['upload_path'] = './asset/asset-admin/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            $config['file_name'] = 'image-'.$this->mod->urlFriendly($this->input->post('name_gallery')).date('Y-m-d_H-i-s');
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('admin/dashboard',$data);
            }
            else{
                $images = $this->upload->data();
            // save data
            $data = $_POST;
            $array = array(
                    'name_gallery' => $data['name_gallery'],
                    'image_gallery' => 'asset/asset-admin/img/'.$images['file_name']
                );
            $this->mod->saveData($array,'gallery');

            redirect(base_url('administrator/gallery/manage'));
        }

    }

    }
    public function edit_gallery(){
    	$data['path_content'] = 'admin/gallery/edit-gallery';
        $id =$this->uri->segment(4);
        $data['result'] = $this->mod->getDataWhere('gallery','id_gallery',$id);
        if($data['result'] == false)
            redirect(base_url('administrator/gallery/manage'));
         $this->form_validation->set_rules('name_gallery','Name Gallery','required');
         if(!$this->form_validation->run()){
            $data['error'] = false;
            $this->load->view('admin/dashboard',$data);
        }
        else{
            // upload image
            $config['upload_path'] = './asset/asset-admin/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2000';
            $config['file_name'] = 'image-'.$this->mod->urlFriendly($this->input->post('title')).date('Y-m-d_H-i-s');
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
                // save data
                $data = $_POST;
                $array = array(
                    'name_gallery' => $data['name_gallery']
                );
                $this->mod->editData($array,'gallery','id_gallery',$id);
                redirect(base_url($this->uri->segment(1).'/gallery/manage'));
            } 
            else{
                $this->load->helper('file');
                unlink($data['result']['image_gallery']);
                $images = $this->upload->data();
                // save data
                $data = $_POST;
                 $array = array(
                    'name_gallery' => $data['name_gallery'],
                    'image_article' => 'asset/asset-admin/img/'.$images['file_name']
                );
                $this->mod->editData($array,'gallery','id_gallery',$id);
                redirect(base_url($this->uri->segment(1).'/gallery/manage'));
            }
        }


    }

     public function delete_gallery(){
        $id = $this->uri->segment(4);
        $this->mod->deleteData('gallery','id_gallery',$id);
        redirect(base_url($this->uri->segment(1).'/gallery/manage'));
    }
}
