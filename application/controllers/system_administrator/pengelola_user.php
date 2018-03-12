<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
class PengelolaUser extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("User");
		$this->load->model("Role");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}else if($this->session->userdata('sdd_roleId')!="SAD"){
			redirect('Home');
		}
	}
	public function index()
	{		
		$data = array();
		$data["headerTitle"] = "Pengelola User";
		$data["title"] = "Pengelola User";
		$data["dview"] = "v_contents_pengelolaUser";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Pengelola User");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		$this->load->view('v_layout', $data);
	}
	
	public function listData(){
		$data = array();
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		$this->load->view('v_contents_pengelolaUser', $data);
	}
	
	public function ajax_list(){
		$list = $this->User->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $dt) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $dt->LOGIN_ID;
			$row[] = $dt->NAMA;
			$row[] = $dt->EMAIL;
			$row[] = $dt->NO_HP;
			$row[] = $dt->ROLE_NAME;
			$row[] = '<a href="javascript:void(0)" title="Edit" onclick="edit('."'".$dt->UUID_USER."'".')"><i class="fa fa-pencil-square-o"></i></a>';
			$row[] = '<a href="javascript:void(0)" title="Hapus" onclick="del('."'".$dt->UUID_USER."'".')"><i class="fa fa-times"></i></a>';
			$data[] = $row;
		}
		
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->User->count_all(),
						"recordsFiltered" => $this->User->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
    }	
	
	public function cekExistingLoginId(){ 		
		if($this->uri->segment(3)=="formTambah"){
			$result = $this->User->selectOneByLoginId($this->input->post('loginId'));
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}else{
			$res = $this->User->selectOneByUuid($this->input->post('uuidUser'));
			$result = $res->row();
			$loginIdLama = $result->LOGIN_ID;
			$loginIdBaru = $this->input->post('loginId');
			
			$result = $this->User->selectOneCustomCekExistingLoginId($loginIdLama, $loginIdBaru);
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}
	}
	
	public function cekExistingEmail(){	
		if($this->uri->segment(3)=="formTambah"){
			$result = $this->User->selectOneByEmail($this->input->post('email'));
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}else{
			$res = $this->User->selectOneByUuid($this->input->post('uuidUser'));
			$result = $res->row();
			$emailLama = $result->EMAIL;
			$emailBaru = $this->input->post('email');
			
			$result = $this->User->selectOneCustomCekExistingEmail($emailLama, $emailBaru);
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}		
	}
	
	public function editData(){
		$data = array();
		$data["aksi"] = "Edit";
		$data["buttonAksi"] = "Update";
		$data["buttonId"] = "update";
		$data["iconAksi"] = "fa fa-pencil-square-o";
		$data["namaForm"] = "formEdit";
		
		$res = $this->User->selectOneByUuid($this->uri->segment(3));
		$result = $res->row();
		$data["uuid"] = $this->uri->segment(3);
		$data["loginId"] = $result->LOGIN_ID;
		$data["uuidRole"] = $result->UUID_ROLE;
		$data["nama"] = $result->NAMA;
		$data["email"] = $result->EMAIL;
		$data["noHp"] = $result->NO_HP;
		$data["listRole"] = $this->Role->selectAll("ROLE_NAME", "ASC");
		$this->load->view('v_contents_pengelolauser_tambah', $data);
	}
	
	public function update(){
		$dataTbl = array();
		$dataTbl['UUID_USER'] = $this->input->post('uuidUser');
		$dataTbl['UUID_ROLE'] = $this->input->post('uuidRole');
		$dataTbl['LOGIN_ID'] = $this->input->post('loginId');
		$dataTbl['NAMA'] = $this->input->post('nama');
		$dataTbl['EMAIL'] = $this->input->post('email');
		$dataTbl['NO_HP'] = $this->input->post('noHp');
		if($this->input->post('password')!=""){
			$dataTbl['PASSWORD'] = md5($this->input->post('password'));
		}else{
			$dataTbl['PASSWORD'] = "";
		}
		$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
		$dataTbl["IS_ACTIVE"] = "1";
		$this->User->updateByUuid($this->input->post('uuidUser'), $dataTbl);
		$data = array();
		$data["saveResult"] = "-";
		$data['deleteResult'] = "-";
		$data['updateResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		$this->load->view('v_contents_pengelolaUser', $data);
	}
	
	public function deleteData(){
		$this->User->deleteByUuid($this->uri->segment(3), "ADMIN");
		$data = array();
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		$this->load->view('v_contents_pengelolaUser', $data);
	}
	
	public function tambah(){
		$data = array();
		$data["aksi"] = "Tambah";
		$data["buttonAksi"] = "Simpan";
		$data["buttonId"] = "simpan";
		$data["iconAksi"] = "fa fa-plus";
		$data["namaForm"] = "formTambah";
		
		$data["uuid"] = "";
		$data["loginId"] = "";
		$data["role"] = "";
		$data["nama"] = "";
		$data["email"] = "";
		$data["noHp"] = "";

		
		$data["listRole"] = $this->Role->selectAll("ROLE_NAME", "ASC");
		$this->load->view('v_contents_pengelolaUser_tambah', $data);
	}
	
	public function simpan(){
		$dataTbl['UUID_ROLE'] = $this->input->post("uuidRole");
		$dataTbl['LOGIN_ID'] = $this->input->post("loginId");
		$dataTbl['NAMA'] = $this->input->post("nama");
		$dataTbl['EMAIL'] = $this->input->post("email");
		$dataTbl['NO_HP'] = $this->input->post("noHp");
		$dataTbl['PASSWORD'] = md5($this->input->post("password"));
		$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
		$this->User->insert($dataTbl);
		
		$data = array();
		$data['saveResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		$this->load->view('v_contents_pengelolaUser', $data);
	}
}