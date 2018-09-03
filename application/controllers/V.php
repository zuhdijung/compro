<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V extends CI_Controller {
	public $variable = array();

	public function  __construct() {
        parent::__construct();
        $set = $this->mod->getDataWhere('setting','id_setting',1);
        $this->variable['title'] = $set['title_website'];
        $this->variable['logo'] = $set['logo_website'];
        $this->variable['def_theme'] = $set['default_template'];
        $this->variable['meta_keywords'] = $set['meta_keywords'];
        $this->variable['meta_description'] = $set['meta_description'];

        $this->db->where('id_parent',0);
        $query = $this->db->get('menu');
        $menu = $query->result_array();
        if($menu!=FALSE){
        	$i = 0;
        	foreach ($menu as $nav) {
        		if($nav['internal_link'] == 0){
        			$menu[$i]['link_menu'] = base_url($nav['link_menu']);
        		}
        		else
        			$menu[$i]['link_menu'] = $nav['link_menu'];
        		$i++;
        	}
        }
        $this->variable['menu_list'] = $menu;
        $this->load->model('marticle');
    }
	public function gallery(){
		$data = $this->variable;
		$data['file_view'] = 'gallery';

		$data['title'] = 'Gallery | '.$data['title'];
        $data['list_gallery'] = $this->mod->fetchAllData('image_gallery');
		$this->parser->parse($data['def_theme'].'/index', $data);
	}
}
