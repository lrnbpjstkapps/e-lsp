<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class JenisSubyek extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("JenisSubyekModel");
		$this->load->model("JenisDiklatModel");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}

	public function index()
	{
		$data = array();
		$data["headerTitle"] = "Jenis Subyek";
		$data["title"] = "Jenis Subyek";
		$data["dview"] = "v_contents_jenisSubyek";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Jenis Subyek");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		
		$res = $this->JenisSubyekModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_layout', $data);
	}
	
	public function listData(){
		$data = array();
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = "-";
		
		$res = $this->JenisSubyekModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisSubyek', $data);
	}
	
	public function editJenisSubyek(){
		$data = array();
		$data["aksi"] = "Edit";
		$data["buttonAksi"] = "Update";
		$data["buttonId"] = "updateJenisSubyek";
		$data["iconAksi"] = "fa fa-pencil-square-o";
		$data["namaForm"] = "formEdit";
		
		$res = $this->JenisSubyekModel->selectOneByUuid($this->uri->segment(3));
		$result = $res->row();
		$data["uuid"] = $this->uri->segment(3);
		$data["namaSubyek"] = $result->NAMA_SUBYEK;
		$data["uuidJenisDiklat"] = $result->UUID_JENIS_DIKLAT;
		$data["keterangan"] = $result->KETERANGAN;
		
		$listJenisDiklat = $this->JenisDiklatModel->selectAll("JENIS_DIKLAT", "ASC");
		$data["listJenisDiklat"] = $listJenisDiklat;
		$this->load->view('v_contents_jenisSubyek_form', $data);
	}
	
	public function update(){
		$dataTbl = array();
		$dataTbl['NAMA_SUBYEK'] = $this->input->post('namaSubyek');
		$dataTbl['UUID_JENIS_DIKLAT'] = $this->input->post('uuidJenisDiklat');
		$dataTbl['KETERANGAN'] = $this->input->post('keterangan');
		$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
		$dataTbl["IS_ACTIVE"] = "1";
		$this->JenisSubyekModel->updateByUuid($this->input->post('uuidJenisSubyek'), $dataTbl);
		$data = array();
		$data["saveResult"] = "-";
		$data['deleteResult'] = "-";
		$data['updateResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		
		$res = $this->JenisSubyekModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisSubyek', $data);
	}
	
	public function deleteData(){
		$this->JenisSubyekModel->deleteByUuid($this->uri->segment(3), "ADMIN");
		$data["saveResult"] = "-";
		$data['updateResult'] = "-";
		$data['deleteResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
		
		$res = $this->JenisSubyekModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_jenisSubyek', $data);
	}
	
	public function tambahJenisSubyek(){
		$data = array();
		$data["aksi"] = "Tambah";
		$data["buttonAksi"] = "Simpan";
		$data["buttonId"] = "simpanJenisDiklat";
		$data["iconAksi"] = "fa fa-plus";
		$data["namaForm"] = "formTambah";
		
		$data["uuid"] = "";
		$data["namaSubyek"] = "";
		$data["uuidJenisDiklat"] = "";
		$data["keterangan"] = "";
		
		$listJenisDiklat = $this->JenisDiklatModel->selectAll("JENIS_DIKLAT", "ASC");
		$data["listJenisDiklat"] = $listJenisDiklat;
		$this->load->view('v_contents_jenisSubyek_form', $data);
	}
	
	public function simpan(){
		if($this->input->post("mode")==false){
			$dataTbl['NAMA_SUBYEK'] = $this->input->post("namaSubyek");
			$dataTbl['UUID_JENIS_DIKLAT'] = $this->input->post("uuidJenisDiklat");
			$dataTbl['KETERANGAN'] = $this->input->post("keterangan");
			$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
			
			$result = $this->JenisSubyekModel->selectOneByNamaSubyek($dataTbl['NAMA_SUBYEK']);
			if(!$result->num_rows()>0){
				$this->JenisSubyekModel->insert($dataTbl);
			}else{
				$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
				$dataTbl['IS_ACTIVE'] = "1";
				$this->JenisSubyekModel->updateByNamaSubyek($this->input->post('namaSubyek'), $dataTbl);
			}	
			$data = array();			
			$data['saveResult'] = ($this->db->affected_rows() == 1) ? "true" : "false";
			$data['updateResult'] = "-";
			$data['deleteResult'] = "-";
			
			$res = $this->JenisSubyekModel->getLastUpdated();
			$result = $res->row();
			$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
			$this->load->view('v_contents_jenisSubyek', $data);
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
				$listNamaSubyek = array();
				foreach ($objWorksheet->getRowIterator() as $row){				
					if($i>0&&""!=($objWorksheet->getCell('B'.($i+1))->getValue())){
						$dataTbl = array();
						$dataTbl['NAMA_SUBYEK'] = $objWorksheet->getCell('B'.($i+1))->getValue();
						$dataTbl['JENIS_DIKLAT'] = $objWorksheet->getCell('C'.($i+1))->getValue();
						$dataTbl['KETERANGAN'] = $objWorksheet->getCell('D'.($i+1))->getValue();
						if(isset($dataTbl['JENIS_DIKLAT'])){
							$result = $this->JenisDiklatModel->selectOneByJenisDiklat($dataTbl['JENIS_DIKLAT']);
							$dt = $result->row();
							$dataTbl['UUID_JENIS_DIKLAT'] = $dt->UUID_JENIS_DIKLAT;
						}else{
							$dataTbl['UUID_JENIS_DIKLAT'] = "";
						}
						$listNamaSubyek[$i] = $dataTbl['NAMA_SUBYEK'];
						$result = $this->JenisSubyekModel->selectOneByNamaSubyek($dataTbl['NAMA_SUBYEK']);
						if(!$result->num_rows()>0){
							$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
							$this->JenisSubyekModel->insert($dataTbl);
						}else{
							$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
							$dataTbl['IS_ACTIVE'] = "1";
							$this->JenisSubyekModel->updateByNamaSubyek($dataTbl['NAMA_SUBYEK'], $dataTbl);
						}
					}
					$i++;				
				}
				
				$result = $this->JenisSubyekModel->selectAll("JENIS_SUBYEK.DTM_CRT","ASC");
				foreach($result->result() as $row){
					if(!in_array($row->NAMA_SUBYEK, $listNamaSubyek)){
						$this->JenisSubyekModel->deleteByNamaSubyek($row->NAMA_SUBYEK, "ADMIN");
					}
				}
				$data = array();
				$data['saveResult'] = "true";
				$data['updateResult'] = "-";
				$data['deleteResult'] = "-";
				
				$res = $this->JenisSubyekModel->getLastUpdated();
				$result = $res->row();
				$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
				$this->load->view('v_contents_jenisSubyek', $data);
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
		$dataTbl = $this->JenisSubyekModel->selectAll("NAMA_SUBYEK", "ASC");		

		$this->load->library('PHPExcel');
		$excel = new PHPExcel();
		$excel->getProperties()->setCreator('My Notes Code')
             ->setLastModifiedBy('My Notes Code')
             ->setTitle("Data Siswa")
             ->setSubject("Siswa")
             ->setDescription("Laporan Semua Data Siswa")
             ->setKeywords("Data Siswa");
			 
		$style_col = array(
		  'font' => array('bold' => true), 
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
		  )
		);
		
		$style_row_no = array(
		  'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER  
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
		  )
		);
		
		$style_row = array(
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT  
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
		  )
		);
		
		$excel->createSheet();
		$excel->setActiveSheetIndex(1)->setCellValue('A1', "NO"); 
		$excel->setActiveSheetIndex(1)->setCellValue('B1', "JENIS DIKLAT");
		$listJenisDiklat = $this->JenisDiklatModel->selectDistinctByAColumn("JENIS_DIKLAT", "JENIS_DIKLAT", "ASC");
		$i=0;
		foreach($listJenisDiklat->result() as $row){
			$excel->setActiveSheetIndex(1)->setCellValue('A'.($i+2), ($i+1)); 
			$excel->setActiveSheetIndex(1)->setCellValue('B'.($i+2), $row->JENIS_DIKLAT);
			$excel->getActiveSheet()->getStyle('A'.($i+2))->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.($i+2))->applyFromArray($style_row);
			$i++;
		}
	
		$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);	
		$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$excel->getActiveSheet(1)->setTitle("Master List");
		
		$excel->addNamedRange(new PHPExcel_NamedRange(
			'jenisDiklat', $excel->getActiveSheet(), 'B2:B'.($i+1)) 
		);

		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B1', "NAMA SUBYEK"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C1', "JENIS DIKLAT"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D1', "KETERANGAN"); // Set kolom C3 dengan tulisan "NAMA"

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
		
		$i=2;
		foreach($dataTbl->result() as $row){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1)); 
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row->NAMA_SUBYEK);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->JENIS_DIKLAT);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->KETERANGAN);			
			$excel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($style_row);
			//$configs = "Diklat Karir - Muda, Diklat Karir - Madya, Diklat Karir - Utama, Diklat Penyegaran, Diklat Teknik";
			$objValidation = $excel->getActiveSheet()->getCell('C'.$i)->getDataValidation();
			$objValidation->setType( PHPExcel_Cell_DataValidation::TYPE_LIST );
			$objValidation->setErrorStyle( PHPExcel_Cell_DataValidation::STYLE_INFORMATION );
			$objValidation->setAllowBlank(false);
			$objValidation->setShowInputMessage(true);
			$objValidation->setShowErrorMessage(true);
			$objValidation->setShowDropDown(true);
			$objValidation->setErrorTitle('Input error');
			$objValidation->setError('Value is not in list.');
			$objValidation->setPromptTitle('Pick from list');
			$objValidation->setPrompt('Please pick a value from the drop-down list.');
			$objValidation->setFormula1('=jenisDiklat');

			$excel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($style_row);
			$i++;
		}
	
		$temp = $i;
		for($i=$temp; $i<($temp+100); $i++){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1));
			//$configs = "\'\', Diklat Karir - Muda, Diklat Karir - Madya, Diklat Karir - Utama, Diklat Penyegaran, Diklat Teknik";
			$objValidation = $excel->getActiveSheet()->getCell('C'.$i)->getDataValidation();
			$objValidation->setType( PHPExcel_Cell_DataValidation::TYPE_LIST );
			$objValidation->setErrorStyle( PHPExcel_Cell_DataValidation::STYLE_INFORMATION );
			$objValidation->setAllowBlank(false);
			$objValidation->setShowInputMessage(true);
			$objValidation->setShowErrorMessage(true);
			$objValidation->setShowDropDown(true);
			$objValidation->setErrorTitle('Input error');
			$objValidation->setError('Value is not in list.');
			$objValidation->setPromptTitle('Pick from list');
			$objValidation->setPrompt('Please pick a value from the drop-down list.');
			$objValidation->setFormula1('=jenisDiklat');
			
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
		$excel->getActiveSheet(0)->setTitle("Data Subyek");
		$excel->setActiveSheetIndex(0);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Template Jenis Subyek SDD.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
    }

    public function ajax_list()
    {
		
		$list = $this->JenisSubyekModel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list->result() as $dt) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $dt->NAMA_SUBYEK;
			$row[] = $dt->JENIS_DIKLAT;
			$row[] = $dt->KETERANGAN;
			$row[] = '<a href="javascript:void(0)" title="Edit" onclick="edit('."'".$dt->UUID_JENIS_SUBYEK."'".')"><i class="fa fa-pencil-square-o"></i></a>';
			if($this->session->userdata('sdd_roleId')=='SAD'){
				$row[] = '<a href="javascript:void(0)" title="Hapus" onclick="del('."'".$dt->UUID_JENIS_SUBYEK."'".')"><i class="fa fa-times"></i></a>';
			}else{
				$row[] = '';
			}
			$data[] = $row;
		}
		
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->JenisSubyekModel->count_all(),
			"recordsFiltered" => $this->JenisSubyekModel->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
    }	
	
	public function cekExistingNamaSubyek(){ 		
		if($this->uri->segment(3)=="formTambah"){
			$result = $this->JenisSubyekModel->selectOneByNamaSubyek($this->input->post('namaSubyek'));
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}else{
			$res = $this->JenisSubyekModel->selectOneByUuid($this->input->post('uuidJenisSubyek'));
			$result = $res->row();
			$namaSubyekLama = $result->NAMA_SUBYEK;
			$namaSubyekBaru = $this->input->post('namaSubyek');
			
			$result = $this->JenisSubyekModel->selectOneCustomCekExistingNamaSubyek($namaSubyekLama, $namaSubyekBaru);
			if($result->num_rows()==0){ 
				echo("true"); 
			}else{ 
				echo("false"); 
			}
		}
	}
}