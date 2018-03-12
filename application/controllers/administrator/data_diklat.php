<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class DataDiklat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("DataDiklatModel");
		$this->load->model("Karyawan");
		$this->load->model("JenisDiklatModel");
		$this->load->model("JenisSubyekModel");
		$this->load->model("JenisTopikModel");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}

	public function index()
	{
		$data = array();
		$data["headerTitle"] = "Data Diklat";
		$data["title"] = "Data Diklat";
		$data["dview"] = "v_contents_dataDiklat";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Data Diklat");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$data["saveResult"] = "-";
		$res = $this->DataDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_layout', $data);
	}
	
	public function listDataDiklat(){
		$data = array();
		$data["saveResult"] = "-";
		$res = $this->DataDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_dataDiklat', $data);
	}
	
	public function tambahDataDiklat(){
		$this->load->view('v_contents_dataDiklat_tambah');
	}
	
	public function simpanDataDiklat(){
		$this->load->library('Phpxl');
	    $config['upload_path'] = './files';
        $config['allowed_types'] = 'xls|xlsx';
        $config['overwrite'] = true;
        $config['max_size'] = '20000';
		$config['file_name'] = 'Data Diklat '.date('Ymd');
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
			$listNamaSubyek = array();
			foreach ($objWorksheet->getRowIterator() as $row){				
				if($i>0&&""!=($objWorksheet->getCell('A'.($i+1))->getValue())){
					$dataTbl = array();
					$dataTbl['NPP'] = $objWorksheet->getCell('A'.($i+1))->getValue();					
					$dataTbl['NAMA_SUBYEK'] = $objWorksheet->getCell('C'.($i+1))->getValue();
					if($objWorksheet->getCell('D'.($i+1))->getValue()!=""){
						$dataTbl['NAMA_TOPIK'] = str_replace("'", "\'", $objWorksheet->getCell('D'.($i+1))->getValue());
					}else{
						$dataTbl['NAMA_TOPIK'] = "-";
					}
					
					if(strlen(($objWorksheet->getCell('E'.($i+1))->getValue()))<=5){
						$dataTbl['TANGGAL_MULAI'] = date('Y-m-d', (($objWorksheet->getCell('E'.($i+1))->getValue()- 25569) * 86400));
					}else{
						$dataTbl['TANGGAL_MULAI'] = date('Y-m-d', strtotime($objWorksheet->getCell('E'.($i+1))->getValue()));
					}
					
					if(strlen(($objWorksheet->getCell('F'.($i+1))->getValue()))<=5){
						$dataTbl['TANGGAL_SELESAI'] = date('Y-m-d', (($objWorksheet->getCell('F'.($i+1))->getValue()- 25569) * 86400));
					}else{
						$dataTbl['TANGGAL_SELESAI'] = date('Y-m-d', strtotime($objWorksheet->getCell('F'.($i+1))->getValue()));
					}
					
					if(""!=$objWorksheet->getCell('I'.($i+1))->getValue()){
						$dataTbl['NILAI'] = $objWorksheet->getCell('I'.($i+1))->getValue();
					}else{
						$dataTbl['NILAI'] = "-";
					}
					$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
					
					$resultNam = $this->DataDiklatModel->selectOneByAllPK($dataTbl);
					if(!$resultNam->num_rows()>0){		
						$resultKar = $this->Karyawan->selectOne($dataTbl['NPP']);
						if($resultKar->num_rows()>0){						
							$result = $this->JenisSubyekModel->selectOneByNamaSubyek($dataTbl['NAMA_SUBYEK']);
							if(!$result->num_rows()>0){
								$dataTbl['UUID_JENIS_DIKLAT'] = null;
								$dataTbl['KETERANGAN'] = "Jenis diklat belum diinput.";
								$this->JenisSubyekModel->insert($dataTbl);
							}
							
							$result = $this->JenisTopikModel->selectOneByAllPK($dataTbl);
							if(!$result->num_rows()>0){
								$resultSub = $this->JenisSubyekModel->selectOneByNamaSubyek($dataTbl['NAMA_SUBYEK']);
								$resSub = $resultSub->row();
								$dataTbl['UUID_JENIS_SUBYEK'] = $resSub->UUID_JENIS_SUBYEK;
								$dataTbl['KETERANGAN'] = "-";
								$this->JenisTopikModel->insert($dataTbl);
							}

							$this->DataDiklatModel->insert($dataTbl);
						}else{
							/*$dataTblKar = array();
							$dataTblKar['NPP'] = $objWorksheet->getCell('A'.($i+1))->getValue();
							$dataTblKar['NAMA_PEGAWAI'] = str_replace("'", "\'", $objWorksheet->getCell('B'.($i+1))->getValue());
							$dataTblKar['UNIT_KERJA'] = $objWorksheet->getCell('J'.($i+1))->getValue();
							$dataTblKar['WILAYAH'] = $objWorksheet->getCell('K'.($i+1))->getValue();
							$dataTblKar['GOLONGAN'] = "-";
							$dataTblKar['USR_CRT'] = $this->session->userdata('sdd_nama');
							$dataTblKar['IS_ACTIVE'] = "0";
							$this->Karyawan->insertByIsActive($dataTblKar, "0");
							
							$result = $this->JenisSubyekModel->selectOneByNamaSubyek($dataTbl['NAMA_SUBYEK']);
							if(!$result->num_rows()>0){
								$dataTbl['UUID_JENIS_DIKLAT'] = null;
								$dataTbl['KETERANGAN'] = "Jenis diklat belum diinput.";
								$this->JenisSubyekModel->insert($dataTbl);
							}
							
							$result = $this->JenisTopikModel->selectOneByNamaTopik($dataTbl['NAMA_TOPIK']);
							if(!$result->num_rows()>0){
								$resultSub = $this->JenisSubyekModel->selectOne($dataTbl['NAMA_SUBYEK']);
								$resSub = $resultSub->row();
								$dataTbl['UUID_JENIS_SUBYEK'] = $resSub->UUID_JENIS_SUBYEK;
								$this->JenisTopikModel->insert($dataTbl);
							}
							
							$this->DataDiklatModel->insert($dataTbl);*/
							//echo $objWorksheet->getCell('A'.($i+1))->getValue();
						}
					}else{						
						$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
						$this->DataDiklatModel->updateByUuid($resultNam->row()->UUID_NILAI, $dataTbl);
					}
				}
				$i++;				
			}
			$data = array();
			$data['saveResult'] = "true";
			$res = $this->DataDiklatModel->getLastUpdated();
			$result = $res->row();
			$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
			$this->load->view('v_contents_dataDiklat', $data);
        }
		else{
			echo $this->upload->display_errors();
		}
	}
	
	function getTemplate(){
		$file_name = "Template_Data_Diklat.xls";
		$data = file_get_contents("./files/template/".$file_name);
		force_download($file_name, $data);
    }
	
	public function downloadDataKaryawan(){
		$file_name = "Data_Diklat_20171130.xlsx";
		$data = file_get_contents("./files/".$file_name);
		force_download($file_name, $data);
	}

    public function ajax_list()
    {
		$list = $this->DataDiklatModel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			//$dt = new DateTime($customers->TANGGAL_MULAI);
			//$row[] = $dt->format('Y-m-d');
			$row[] = $customers->TANGGAL_MULAI;
			$row[] = $customers->TANGGAL_SELESAI;
			$row[] = $customers->NPP;
			$row[] = $customers->NAMA_PEGAWAI;
			$row[] = $customers->WILAYAH;
			$row[] = $customers->UNIT_KERJA;
			$row[] = $customers->JENIS_DIKLAT;
			$row[] = $customers->NAMA_SUBYEK;
			$row[] = $customers->NAMA_TOPIK;
			$row[] = $customers->GOLONGAN;
			$row[] = $customers->NILAI;			
			$data[] = $row;
		}
		
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->DataDiklatModel->count_all(),
						"recordsFiltered" => $this->DataDiklatModel->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
		
    }	
}