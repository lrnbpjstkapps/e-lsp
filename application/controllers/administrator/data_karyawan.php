<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class DataKaryawan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Karyawan");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}

	public function index()
	{
		$data = array();
		$data["headerTitle"] = "Data Karyawan";
		$data["title"] = "Data Karyawan";
		$data["dview"] = "v_contents_dataKaryawan";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Data Karyawan");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$data["saveResult"] = "-";
		$res = $this->Karyawan->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_layout', $data);
	}
	
	public function listDataKaryawan(){
		$data = array();
		$data["saveResult"] = "-";
		$res = $this->Karyawan->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_dataKaryawan', $data);
	}
	
	public function tambahDataKaryawan(){
		$this->load->view('v_contents_dataKaryawan_tambah');
	}
	
	public function simpanDataKaryawan(){
		$this->load->library('Phpxl');
	    $config['upload_path'] = './files';
        $config['allowed_types'] = 'xls|xlsx';
        $config['overwrite'] = true;
        $config['max_size'] = '2000';
		$config['file_name'] = 'Data Karyawan '.date('Ymd');
		$this->load->library('upload', $config);
				
		if ($this->upload->do_upload("userfile")) {
			$file_info = $this->upload->data();
			$inputFileName = './files/'.str_replace(" ", "_", $file_info['file_name']);
			$inputFileType = IOFactory::identify($inputFileName);
			$objReader = IOFactory::createReader($inputFileType);
			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load($inputFileName);
			$objWorksheet = $objPHPExcel -> setActiveSheetIndex(0);
			
			$i=0;
			$listNPP = array();
			foreach ($objWorksheet->getRowIterator() as $row){				
				if($i>0&&""!=($objWorksheet->getCell('B'.($i+1))->getValue())){
					$dataTbl = array();
					$dataTbl['NPP'] = $objWorksheet->getCell('B'.($i+1))->getValue();
					$listNPP[$i] = $dataTbl['NPP'];
					$result = $this->Karyawan->selectOne($dataTbl['NPP']);
					$dataTbl['NAMA_PEGAWAI'] = str_replace("'", "\'", $objWorksheet->getCell('C'.($i+1))->getValue());
					$dataTbl['UNIT_KERJA'] = $objWorksheet->getCell('L'.($i+1))->getValue();
					$dataTbl['WILAYAH'] = $objWorksheet->getCell('H'.($i+1))->getValue();
					$dataTbl['GRADE'] = $objWorksheet->getCell('G'.($i+1))->getValue();
					$dataTbl['GOLONGAN'] = $objWorksheet->getCell('M'.($i+1))->getValue();
					$dataTbl['STATUS_KEPEGAWAIAN'] = $objWorksheet->getCell('I'.($i+1))->getValue();
					if(!$result->num_rows()>0){						
						$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
						$this->Karyawan->insert($dataTbl);
					}else{
						$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
						$this->Karyawan->update($dataTbl['NPP'], $dataTbl);
					}
				}
				$i++;				
			}
			
			$result = $this->Karyawan->selectAll("DTM_CRT","ASC");
			foreach($result->result() as $row){
				if(!in_array($row->NPP, $listNPP)){
					$this->Karyawan->delete($row->NPP, "ADMIN");
				}
			}
			$data = array();
			$data['saveResult'] = "true";
			$res = $this->Karyawan->getLastUpdated();
			$result = $res->row();
			$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
			$this->load->view('v_contents_dataKaryawan', $data);
        }
		else{
			echo "Gagal Upload. Periksa kembali file yang diupload atau hubungi System Administrator.";
		}
	}
	
	function getTemplate(){
		$file_name = "Template_Data_Karyawan.xls";
		$data = file_get_contents("./files/template/".$file_name);
		force_download($file_name, $data);
    }
	
	public function downloadDataKaryawan(){
		$file_name = "Data_Karyawan_20171130.xlsx";
		$data = file_get_contents("./files/".$file_name);
		force_download($file_name, $data);
	}

    public function ajax_list()
    {
		$list = $this->Karyawan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->NPP;
			$row[] = $customers->NAMA_PEGAWAI;
			$row[] = $customers->UNIT_KERJA;
			$row[] = $customers->WILAYAH;
			$row[] = $customers->GRADE;
			$row[] = $customers->GOLONGAN;
			$row[] = $customers->STATUS_KEPEGAWAIAN;

			$data[] = $row;
		}
		
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Karyawan->count_all(),
						"recordsFiltered" => $this->Karyawan->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
    }	
}