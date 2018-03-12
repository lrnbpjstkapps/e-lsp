<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
class TentangSistem extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}
	
	public function index()
	{
		$data = array();
		$data["title"] = "Tentang Sistem";
		$data["dview"] = "v_contents_tentangSistem";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Tentang Sistem");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$this->load->view('v_layout', $data);
	}
}