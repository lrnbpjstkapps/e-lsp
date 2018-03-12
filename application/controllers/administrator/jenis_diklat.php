<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class JenisDiklat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("JenisDiklatModel");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		} 
	}

	public function index(){
		$data = array();
		$data["headerTitle"] = "Jenis Diklat";
		$data["title"] = "Jenis Diklat";
		$data["dview"] = "v_contents_jenisDiklat";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Jenis Diklat");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		
		$res = $this->JenisDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_layout', $data);
	}
	
	public function listJenisDiklat(){
		$data = array();
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		
		$res = $this->JenisDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisDiklat', $data);
	}
	
	public function editJenisDiklat(){
		$data = array();
		$data["aksi"] = "Edit";
		$data["buttonAksi"] = "Update";
		$data["buttonId"] = "updateJenisDiklat";
		$data["iconAksi"] = "fa fa-pencil-square-o";
		$data["namaForm"] = "formEdit";
		
		$res = $this->JenisDiklatModel->selectOneByUuid($this->uri->segment(3));
		$result = $res->row();
		
		$data["uuid"] = $this->uri->segment(3);
		$data["idJenisDiklat"] = $result->JENIS_DIKLAT_ID;
		$data["jenisDiklat"] = $result->JENIS_DIKLAT;
		$data["keterangan"] = $result->KETERANGAN;
		$this->load->view('v_contents_jenisDiklat_form', $data);
	}
	
	public function update(){
		$dataTbl = array();
		$dataTbl['JENIS_DIKLAT_ID'] = $this->input->post('idJenisDiklat');
		$dataTbl['JENIS_DIKLAT'] = $this->input->post('jenisDiklat');
		$dataTbl['KETERANGAN'] = $this->input->post('keterangan');
		$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
		$dataTbl["IS_ACTIVE"] = "1";
		$this->JenisDiklatModel->updateByUuid($this->input->post('uuidJenisDiklat'), $dataTbl);
		$data = array();
		$data["saveResult"] = "-";
		$data['deleteResult'] = "-";
		$data['updateResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		
		$res = $this->JenisDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisDiklat', $data);
	}
	
	public function deleteJenisDiklat(){
		$data = array();
		$data["aksi"] = "Delete";
		$data["buttonAksi"] = "Delete";
		$data["buttonId"] = "deleteJenisDiklat";
		$data["iconAksi"] = "fa fa-pencil-square-o";
		
		$res = $this->JenisDiklatModel->selectOneByUuid($this->uri->segment(3));
		$result = $res->row();
		$dataTbl["KETERANGAN"] = $result->KETERANGAN;
		$dataTbl["JENIS_DIKLAT"] = $result->JENIS_DIKLAT;
		$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
		$dataTbl["IS_ACTIVE"] = "0";
		$this->JenisDiklatModel->deleteByUuid($this->uri->segment(3), $dataTbl['USR_UPD']);
		
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		
		$res = $this->JenisDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisDiklat', $data);
	}
	
	public function tambahJenisDiklat(){
		$data = array();
		$data["aksi"] = "Tambah";
		$data["buttonAksi"] = "Simpan";
		$data["buttonId"] = "simpanJenisDiklat";
		$data["iconAksi"] = "fa fa-plus";
		$data["namaForm"] = "formTambah";
		
		$data["uuid"] = "";
		$data["idJenisDiklat"] = "";
		$data["jenisDiklat"] = "";
		$data["keterangan"] = "";
		
		$this->load->view('v_contents_jenisDiklat_form', $data);
	}
	
	public function simpanJenisDiklat(){
		if($this->input->post("mode")==false){		
			$dataTbl['JENIS_DIKLAT_ID'] = $this->input->post("idJenisDiklat");
			$dataTbl['JENIS_DIKLAT'] = $this->input->post("jenisDiklat");
			$dataTbl['KETERANGAN'] = $this->input->post("keterangan");
			$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
			
			$result = $this->JenisDiklatModel->selectOneByJenisDiklat($dataTbl['JENIS_DIKLAT']);
			if(!$result->num_rows()>0){
				$this->JenisDiklatModel->insert($dataTbl);
			}else{
				$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
				$dataTbl['IS_ACTIVE'] = "1";
				$this->JenisDiklatModel->updateByJenisDiklat($this->input->post('jenisDiklat'), $dataTbl);
			}
			$data = array();
			$data['saveResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
			$data['updateResult'] = "-";
			$data['deleteResult'] = "-";
			
			$res = $this->JenisDiklatModel->getLastUpdated();
			$result = $res->row();
			$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
			$this->load->view('v_contents_jenisDiklat', $data);
		}else{
			$this->load->library('Phpxl');
			$config['upload_path'] = './files';
			$config['allowed_types'] = 'xls|xlsx';
			$config['overwrite'] = true;
			$config['max_size'] = '2000';
			$config['file_name'] = 'Jenis Diklat '.date('Ymd');
			$this->load->library('upload', $config);
					
			if ($this->upload->do_upload("userFile")) {
				$file_info = $this->upload->data();
				$inputFileName = './files/'.str_replace(" ", "_", $file_info['file_name']);
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objReader->setReadDataOnly(true);
				$objPHPExcel = $objReader->load($inputFileName);
				$objWorksheet = $objPHPExcel -> setActiveSheetIndex(0);
				
				$i=0;
				$listJenisDiklat = array();
				foreach ($objWorksheet->getRowIterator() as $row){				
					if($i>0&&""!=($objWorksheet->getCell('B'.($i+1))->getValue())){
						$dataTbl = array();
						$dataTbl['JENIS_DIKLAT_ID'] = $objWorksheet->getCell('B'.($i+1))->getValue();
						$dataTbl['JENIS_DIKLAT'] = $objWorksheet->getCell('C'.($i+1))->getValue();
						$dataTbl['KETERANGAN'] = $objWorksheet->getCell('D'.($i+1))->getValue();
						$listJenisDiklat[$i] = $dataTbl['JENIS_DIKLAT'];
						$result = $this->JenisDiklatModel->selectOneByJenisDiklat($dataTbl['JENIS_DIKLAT']);
						
						if(!$result->num_rows()>0){							
							$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
							$this->JenisDiklatModel->insert($dataTbl);
						}else{
							$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
							$dataTbl['IS_ACTIVE'] = "1";
							$this->JenisDiklatModel->updateByJenisDiklat($dataTbl['JENIS_DIKLAT'], $dataTbl);
						}
					}
					$i++;				
				}
				
				$result = $this->JenisDiklatModel->selectAll("DTM_CRT","ASC");
				foreach($result->result() as $row){
					if(!in_array($row->JENIS_DIKLAT, $listJenisDiklat)){
						$this->JenisDiklatModel->deleteByJenisDiklat($row->JENIS_DIKLAT, "ADMIN");
					}
				}				
				$data = array();
				$data['saveResult'] = "true";
				$data['updateResult'] = "-";
				$data['deleteResult'] = "-";
				
				$res = $this->JenisDiklatModel->getLastUpdated();
				$result = $res->row();
				$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
				$this->load->view('v_contents_jenisDiklat', $data);
			}
			else{
				echo "Gagal Upload";
			}
		}
	}
	
	public function downloadJenisDiklat(){
		$file_name = "Jenis_Diklat_20171130.xlsx";
		$data = file_get_contents("./files/".$file_name);
		force_download($file_name, $data);
	}
	
	function getTemplate(){
		$data = array();
		$dataTbl = $this->JenisDiklatModel->selectAll("JENIS_DIKLAT", "ASC");		

		$this->load->library('PHPExcel');
		$excel = new PHPExcel();
		// Settingan awal file excel
		$excel->getProperties()->setCreator('My Notes Code')
             ->setLastModifiedBy('My Notes Code')
             ->setTitle("Data Siswa")
             ->setSubject("Siswa")
             ->setDescription("Laporan Semua Data Siswa")
             ->setKeywords("Data Siswa");
			 
		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
		  'font' => array('bold' => true), // Set font nya jadi bold
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
		
		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row_no = array(
		  'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, // Set text jadi di tengah secara vertical (middle)
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER  // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
		
		$style_row = array(
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT  // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
		
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); 
		$excel->setActiveSheetIndex(0)->setCellValue('B1', "ID JENIS DIKLAT");
		$excel->setActiveSheetIndex(0)->setCellValue('C1', "JENIS DIKLAT"); 
		$excel->setActiveSheetIndex(0)->setCellValue('D1', "KETERANGAN"); 
		$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
		
		$i=2;
		foreach($dataTbl->result() as $row){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1)); 
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row->JENIS_DIKLAT_ID);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->JENIS_DIKLAT); 			
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->KETERANGAN); 
			$excel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($style_row);
			$i++;
		}
	
		$temp = $i;
		for($i=$temp; $i<($temp+100); $i++){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1));
			
			$excel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($style_row);
		}
		$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);

		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$excel->getActiveSheet(0)->setTitle("Data Diklat");
		$excel->setActiveSheetIndex(0);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Template Jenis Diklat SDD.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
    }

    public function ajax_list()
    {
		
		$list = $this->JenisDiklatModel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->JENIS_DIKLAT_ID;
			$row[] = $customers->JENIS_DIKLAT;
			$row[] = $customers->KETERANGAN;
			$row[] = '<a href="javascript:void(0)" title="Edit" onclick="editJenisDiklat('."'".$customers->UUID_JENIS_DIKLAT."'".')"><i class="fa fa-pencil-square-o"></i></a>';
			if($this->session->userdata('sdd_roleId')=='SAD'){
				$row[] = '<a href="javascript:void(0)" title="Hapus" onclick="deleteJenisDiklat('."'".$customers->UUID_JENIS_DIKLAT."'".')"><i class="fa fa-times"></i></a>';
			}else{
				$row[] = '';
			}
			$data[] = $row;
		}
		
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->JenisDiklatModel->count_all(),
			"recordsFiltered" => $this->JenisDiklatModel->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
    }	
	
	public function cekExistingIdJenisDiklat(){ 		
		if($this->uri->segment(3)=="formTambah"){
			$result = $this->JenisDiklatModel->selectOneByIdJenisDiklat($this->input->post('idJenisDiklat'));
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}else{
			$res = $this->JenisDiklatModel->selectOneByUuid($this->input->post('uuidJenisDiklat'));
			$result = $res->row();
			$idJenisDiklatLama = $result->JENIS_DIKLAT_ID;
			$idJenisDiklatBaru = $this->input->post('idJenisDiklat');
			
			$result = $this->JenisDiklatModel->selectOneCustomCekExistingIdJenisDiklat($idJenisDiklatLama, $idJenisDiklatBaru);
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}
	}
}