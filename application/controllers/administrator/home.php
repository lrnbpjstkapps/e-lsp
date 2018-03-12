<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Karyawan");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}		
	}
	
	public function index(){
		$data = array();	
		$data["headerTitle"] = "Sistem Data Diklat";
		$data["title"] = "Home";		
		$data["dview"] = "v_layout_contents";
		$data["segment"] = "";
		$navbar = array("");
		$navbarLink = array("-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$this->load->view('v_layout', $data);
	}
}