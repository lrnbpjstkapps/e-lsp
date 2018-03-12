<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
header('Content-Disposition: inline; filename="July Report.pdf"');
class DataDiklatKaryawanByWilayah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("DataDiklatKaryawanByWilayahModel");
		$this->load->model("DataDiklatModel");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}

	public function index()
	{
		$data = array();
		$data["headerTitle"] = "Diklat by Wilayah";
		$data["title"] = "Data Diklat Karyawan by Wilayah";
		$data["dview"] = "v_contents_dataDiklatKaryawanByWilayah_search";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Data Diklat Karyawan", "by Wilayah");
		$navbarLink = array("Home", "-", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$dataWilayah = $this->DataDiklatKaryawanByWilayahModel->selectDistinctByAColumn("KARYAWAN", "WILAYAH", "ASC");
		$data['dataWilayah'] = $dataWilayah;
		$this->load->view('v_layout', $data);
	}
	
	
	public function listDataKaryawan(){
		$data = array();
		$data['wilayah'] = $this->input->post("wilayah");
		$data['jumlahData'] = $this->DataDiklatKaryawanByWilayahModel->count_all();
		$res = $this->DataDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_dataDiklatKaryawanByWilayah', $data);
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
					$result = $this->DataDiklatKaryawanByWilayahModel->selectOne($dataTbl['NPP']);
					if(!$result->num_rows()>0){
						$dataTbl['NAMA_PEGAWAI'] = $objWorksheet->getCell('C'.($i+1))->getValue();
						$dataTbl['UNIT_KERJA'] = $objWorksheet->getCell('L'.($i+1))->getValue();
						$dataTbl['WILAYAH'] = $objWorksheet->getCell('H'.($i+1))->getValue();
						$dataTbl['GOLONGAN'] = $objWorksheet->getCell('M'.($i+1))->getValue();
						$dataTbl['USR_CRT'] = $this->session->userdata('sdd_nama');
						$this->DataDiklatKaryawanByWilayahModel->insert($dataTbl);
					}else{
						$dataTbl['NAMA_PEGAWAI'] = $objWorksheet->getCell('C'.($i+1))->getValue();
						$dataTbl['UNIT_KERJA'] = $objWorksheet->getCell('L'.($i+1))->getValue();
						$dataTbl['WILAYAH'] = $objWorksheet->getCell('H'.($i+1))->getValue();
						$dataTbl['GOLONGAN'] = $objWorksheet->getCell('M'.($i+1))->getValue();
						$dataTbl['USR_UPD'] = $this->session->userdata('sdd_nama');
						$this->DataDiklatKaryawanByWilayahModel->update($dataTbl['NPP'], $dataTbl);
					}
				}
				$i++;				
			}
			
			$result = $this->DataDiklatKaryawanByWilayahModel->selectAll("DTM_CRT","ASC");
			foreach($result->result() as $row){
				if(!in_array($row->NPP, $listNPP)){
					$this->DataDiklatKaryawanByWilayahModel->delete($row->NPP, "ADMIN");
				}
			}
			
			$this->load->view('v_contents_dataKaryawan');
        }
		else{
			echo "Gagal Upload";
		}
	}
	
	public function getXlsx(){
		$data = array();
		$dataTbl = $this->DataDiklatKaryawanByWilayahModel->selectAll();		
		
		$this->load->library('PHPExcel');
		$excel = new PHPExcel();		
		$excel->getProperties()->setCreator('My Notes Code')
             ->setLastModifiedBy('My Notes Code')
             ->setTitle("Data Siswa")
             ->setSubject("Siswa")
             ->setDescription("Laporan Semua Data Siswa")
             ->setKeywords("Data Siswa");		
		$style_header = array(
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

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "NO"); 
		$excel->setActiveSheetIndex(0)->setCellValue('B1', "KANTOR WILAYAH");
		$excel->setActiveSheetIndex(0)->setCellValue('C1', "UNIT KERJA");
		$excel->setActiveSheetIndex(0)->setCellValue('D1', "NPP"); 
		$excel->setActiveSheetIndex(0)->setCellValue('E1', "NAMA PEGAWAI"); 
		$excel->setActiveSheetIndex(0)->setCellValue('F1', "JENIS DIKLAT");
		$excel->setActiveSheetIndex(0)->setCellValue('G1', "SUBYEK");
		$excel->setActiveSheetIndex(0)->setCellValue('H1', "TOPIK");
		$excel->setActiveSheetIndex(0)->setCellValue('I1', "TANGGAL MULAI");
		$excel->setActiveSheetIndex(0)->setCellValue('J1', "TANGGAL SELESAI");
		$excel->setActiveSheetIndex(0)->setCellValue('K1', "GOLONGAN");
		$excel->setActiveSheetIndex(0)->setCellValue('L1', "NILAI");
		
		$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_header);
		$excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_header);
		
		$i=2;
		foreach($dataTbl as $row){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1)); 
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row->WILAYAH); 
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->UNIT_KERJA); 
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->NPP); 
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row->NAMA_PEGAWAI); 
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row->JENIS_DIKLAT); 
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row->NAMA_SUBYEK); 
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->ALIAS);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row->TANGGAL_MULAI);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$i, $row->TANGGAL_SELESAI);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row->GOLONGAN); 
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row->NILAI); 
			$excel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('K'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('L'.$i)->applyFromArray($style_row_no);
			$i++;
		}
			
		$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$excel->getActiveSheet(0)->setTitle("Data Diklat");
		$excel->setActiveSheetIndex(0);
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Diklat '.$_GET["wilayah"].' '.date("dmY").'.xlsx"'); 
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}

    public function ajax_list(){
		$list = $this->DataDiklatKaryawanByWilayahModel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->WILAYAH;
			$row[] = $customers->UNIT_KERJA;
			$row[] = $customers->NPP;
			$row[] = $customers->NAMA_PEGAWAI;
			$row[] = $customers->JENIS_DIKLAT;
			$row[] = $customers->NAMA_SUBYEK;
			$row[] = $customers->ALIAS;
			$row[] = $customers->TANGGAL_MULAI;
			$row[] = $customers->TANGGAL_SELESAI;
			$row[] = $customers->GOLONGAN;
			$row[] = $customers->NILAI;
			$data[] = $row;
		}
		
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->DataDiklatKaryawanByWilayahModel->count_all(),
			"recordsFiltered" => $this->DataDiklatKaryawanByWilayahModel->count_filtered(),
			"data" => $data
		);
		//output to json format
		//header('Access-Control-Allow-Origin: *');
		echo json_encode($output);
    }

	function getPdf(){
		$wilayah = explode(". ", $_GET['wilayah']);
		
		error_reporting(0);
		$parameters = array(
			'paper' => 'A4',
			'orientation' => 'landscape',
		);
		$this->load->library('Pdf', $parameters);
		$this->pdf->selectFont(APPPATH . '/third_party/pdf-php/fonts/Helvetica.afm');
		$this->pdf->ezSetCmMargins(1, 1, 1.5, 1.5);
		$this->pdf->ezText("<b>DATA DIKLAT KARYAWAN </b>", 12, array('justification' => "center"));
		$this->pdf->ezText("<b>\"".strtoupper($wilayah[1])." BPJS KETENAGAKERJAAN\"</b>", 12, array('justification' => "center"));
		$this->pdf->ezText("<b>PER ".date('d')." ".$this->getBulanSekarang()." ".date('Y')."</b>", 12, array('justification' => "center"));
		$this->pdf->ezSetDy(-10);
		
		for ($i = 1; $i <=1; $i++) {
			$fooo["U" . $i] = array('justification' => "center");
		}
		$fooo['<b>NO</b>'] = array('justification' => "center");
		$fooo['<b>KANTOR WILAYAH</b>'] = array('justification' => "center", 'width'=>"80");
		$fooo['<b>UNIT KERJA</b>'] = array('justification' => "center", 'width'=>"60");		
		$fooo['<b>NPP</b>'] = array('justification' => "center", 'width'=>"55");
		$fooo['<b>NAMA PEGAWAI</b>'] = array('justification' => "center");
		$fooo['<b>JENIS DIKLAT</b>'] = array('justification' => "center", 'width'=>"55");
		$fooo['<b>SUBYEK</b>'] = array('justification' => "center", 'width'=>"130");
		$fooo['<b>TOPIK</b>'] = array('justification' => "center", 'width'=>"100");
		$fooo['<b>TANGGAL MULAI</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>TANGGAL SELESAI</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>GOLONGAN</b>'] = array('justification' => "center", 'width'=>"40");
		$fooo['<b>NILAI</b>'] = array('justification' => "center", 'width'=>"35");		
		
		//$foo['gridlines'] = EZ_GRIDLINE_DEFAULT;
		$foo['shadeHeadingCol'] = array(102 / 255, 240 / 255, 78 / 255);
		$foo['showBgCol'] = 1;
		$foo['width'] = 750;
		$foo['fontSize'] = 8;
		$foo['cols'] = $fooo;
		
		$_POST['wilayah'] = $_GET['wilayah'];
		$list = $this->DataDiklatKaryawanByWilayahModel->get_datatables();
		$dataTbl = array();
		$i=0;
		foreach ($list as $row) {				
			$dataTbl[$i]["<b>NO</b>"] = ($i+1);
			$dataTbl[$i]['<b>KANTOR WILAYAH</b>'] = $row->WILAYAH;
			$dataTbl[$i]['<b>UNIT KERJA</b>'] = $row->UNIT_KERJA;
			$dataTbl[$i]['<b>NPP</b>'] = $row->NPP;
			$dataTbl[$i]['<b>NAMA PEGAWAI</b>'] = $row->NAMA_PEGAWAI;
			$dataTbl[$i]['<b>JENIS DIKLAT</b>'] = $row->JENIS_DIKLAT;
			$dataTbl[$i]['<b>SUBYEK</b>'] = $row->NAMA_SUBYEK;
			$dataTbl[$i]['<b>TOPIK</b>'] = $row->ALIAS;
			$dataTbl[$i]['<b>TANGGAL MULAI</b>'] = $row->TANGGAL_MULAI;
			$dataTbl[$i]['<b>TANGGAL SELESAI</b>'] = $row->TANGGAL_SELESAI;
			$dataTbl[$i]['<b>GOLONGAN</b>'] = $row->GOLONGAN;
			$dataTbl[$i]['<b>NILAI</b>'] = $row->NILAI;			
			$i++;
		}
		
		$this->pdf->ezTable($dataTbl, "", "", $foo);
		$this->pdf->ezStream(array("Content-Disposition"=>"Data Diklat ".$wilayah[1]." ".date('dmY').".pdf"));
    }

	function getBulanSekarang(){
		if(date('m')=="01"){
			return " JANUARI";
		}else if(date('m')=="02"){
			return " FEBRUARI";
		}else if(date('m')=="03"){
			return " MARET";
		}else if(date('m')=="04"){
			return " APRIL";
		}else if(date('m')=="05"){
			return " MEI";
		}else if(date('m')=="06"){
			return " JUNI";
		}else if(date('m')=="07"){
			return " JULI";
		}else if(date('m')=="08"){
			return " AGUSTUS";
		}else if(date('m')=="09"){
			return " SEPTEMBER";
		}else if(date('m')=="10"){
			return " OKTOBER";
		}else if(date('m')=="11"){
			return " NOVEMBER";
		}else if(date('m')=="12"){
			return " DESEMBER";
		}
	}
}