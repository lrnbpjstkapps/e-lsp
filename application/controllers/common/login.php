<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("User");
	}
	
	public function index(){
		$this->load->view('v_login');
	}
	
	public function doLogin(){
		$loginId = $this->input->post('loginId');
		$password = md5($this->input->post('password'));
		$result = $this->User->login($loginId, $password);
		if($result->num_rows()>0){
			$res = $result->row();
			$this->session->set_userdata('sdd_loginId',$loginId);
			$this->session->set_userdata('sdd_nama',$res->NAMA);
			$this->session->set_userdata('sdd_role',$res->ROLE_NAME);
			$this->session->set_userdata('sdd_roleId',$res->ROLE_ID);
			redirect('DataKaryawan');
		}
	}
	
	public function cekMatch(){
		$loginId = $this->input->post('loginId');
		$password = md5($this->input->post('password'));
		if($this->input->post('passwordLama')!=""){
			$password = md5($this->input->post('passwordLama'));
		}
		$result = $this->User->login($loginId, $password);
		if($result->num_rows()>0){
			echo "true";
		}else{
			echo "false";
		}
	}
	
	public function update(){
		$dataTbl = array();
		$dataTbl['PASSWORD'] = md5($this->input->post('passwordBaru'));
		$dataTbl['LOGIN_ID'] = $this->input->post('loginId');
		$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
		$this->User->updateByLoginId($this->input->post('loginId'), $dataTbl);
		$result = ($this->db->affected_rows() == 1) ? "true" : "false";
		if($result == "true"){
			echo "true";
		}else{
			echo "false";
		}
		
	}
	
	public function doLogout(){
		$loginId = $this->session->userdata('sdd_loginId');
		$nama = $this->session->userdata('sdd_nama');
		$role = $this->session->userdata('sdd_role');
		$roleId = $this->session->userdata('sdd_roleId');
		$this->session->unset_userdata('sdd_loginId',$loginId);
		$this->session->unset_userdata('sdd_nama',$nama);
		$this->session->unset_userdata('sdd_role',$role);
		$this->session->unset_userdata('sdd_roleId',$roleId);
		redirect('Login');
	}
}