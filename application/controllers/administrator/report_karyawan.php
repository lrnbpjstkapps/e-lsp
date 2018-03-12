<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/BaseController.php';
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class ReportKaryawan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("DataDiklatModel");
		$this->load->model("DataDiklatKaryawanByNameModel");
		$this->load->model("DataDiklatKaryawanByWilayahModel");
		$this->load->model("DataDiklatKaryawanByUnitKerjaModel");
		$this->load->model("JenisDiklatModel");
		$this->load->model("ReportKaryawanModel");
		if(null==($this->session->userdata('sdd_loginId'))){
			redirect('Login');
		}
	}

	public function index()
	{
		$data = array();
		$data["headerTitle"] = "Report Karyawan";
		$data["title"] = "Report Karyawan";
		$data["dview"] = "v_contents_reportKaryawan_search";
		$data["segment"] = $this->uri->segment(1);
		$navbar = array("Home", "Report Karyawan");
		$navbarLink = array("Home", "-");
		$data["navbar"] = $navbar;
		$data["navbarLink"] = $navbarLink;
		$dataWilayah = $this->DataDiklatKaryawanByWilayahModel->selectDistinctByAColumn("KARYAWAN", "WILAYAH", "ASC");
		$data['dataWilayah'] = $dataWilayah;
		$unitKerja = $this->DataDiklatKaryawanByUnitKerjaModel->selectDistinctUnitKerjaByWilayah("KARYAWAN", "UNIT_KERJA", "ASC", "900. Kantor Pusat");
		$data['unitKerja'] = $unitKerja;
		$listJenisDiklat = $this->JenisDiklatModel->selectDistinctByAColumn("JENIS_DIKLAT", "JENIS_DIKLAT, UUID_JENIS_DIKLAT", "ASC");
		$data['listJenisDiklat'] = $listJenisDiklat;
		$this->load->view('v_layout', $data);
	}
	
	public function listDataUnitKerja(){
		if($_POST['wilayah']!='-- Select All --'){
			$unitKerja = $this->DataDiklatKaryawanByUnitKerjaModel->selectDistinctUnitKerjaByWilayah("KARYAWAN", "UNIT_KERJA", "ASC", $_POST['wilayah']);
		}else{
			$unitKerja = $this->DataDiklatKaryawanByUnitKerjaModel->selectDistinctUnitKerja("KARYAWAN", "UNIT_KERJA", "ASC");
		}
		
		if($unitKerja->num_rows()>0){
			echo "<option> -- Select All -- </option>";
			foreach($unitKerja->result() as $row){
				echo "<option>  ".$row->UNIT_KERJA." </option>";
			}
		}
		exit;
	}
	
	public function listDataPegawai(){
		if($_POST['wilayah']!='-- Select All --'){
			if($_POST['unitKerja']!='-- Select All --'){
				$namaPegawai = $this->DataDiklatKaryawanByNameModel->selectDistinctNamaPegawaiByUnitKerja("KARYAWAN", "NAMA_PEGAWAI", "ASC", $_POST['unitKerja']);
			}else{
				$namaPegawai = $this->DataDiklatKaryawanByNameModel->selectDistinctNamaPegawaiByWilayah("KARYAWAN", "NAMA_PEGAWAI", "ASC", $_POST['wilayah']);
			}
		}else{
			if($_POST['unitKerja']!='-- Select All --'){
				$namaPegawai = $this->DataDiklatKaryawanByNameModel->selectDistinctNamaPegawaiByUnitKerja("KARYAWAN", "NAMA_PEGAWAI", "ASC", $_POST['unitKerja']);
			}else{
				$namaPegawai = $this->DataDiklatKaryawanByNameModel->selectDistinctNamaPegawai("KARYAWAN", "NAMA_PEGAWAI", "ASC");
			}
		}
		
		if($namaPegawai->num_rows()>0){
			foreach($namaPegawai->result() as $row){
				echo "<option>  ".$row->NAMA_PEGAWAI." </option>";
			}
		}
		exit;
	}
	
	public function listData(){
		$data = array();
		$data['wilayah'] = $this->input->post("wilayah");
		$data['unitKerja'] = $this->input->post("unitKerja");
		//$data['jumlahData'] = $this->ReportKaryawanModel->count_all();
		$data['jenisDiklat'] = $this->input->post("jenisDiklat");
		$res = $this->DataDiklatModel->getLastUpdated();
		$result = $res->row();
		$data["lastUpdated"] = date("d/m/Y", strtotime($result->DTM_UPD));
		$this->load->view('v_contents_reportKaryawan', $data);
	}
	
	public function getXlsx(){
		$data = array();
		$dataTbl = $this->ReportKaryawanModel->selectAll();		
		
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
		$excel->setActiveSheetIndex(0)->setCellValue('F1', "GRADE");
		$excel->setActiveSheetIndex(0)->setCellValue('G1', "GOLONGAN");
		$excel->setActiveSheetIndex(0)->setCellValue('H1', "STATUS KEPEGAWAIAN");
		$excel->setActiveSheetIndex(0)->setCellValue('I1', "DIKLAT KARIR UTAMA");
		$excel->setActiveSheetIndex(0)->setCellValue('J1', "DIKLAT KARIR MADYA");
		$excel->setActiveSheetIndex(0)->setCellValue('K1', "DIKLAT KARIR MUDA");
		$excel->setActiveSheetIndex(0)->setCellValue('L1', "DIKLAT DPK");
		$excel->setActiveSheetIndex(0)->setCellValue('M1', "DIKLAT PENSIUN");
		
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
		$excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_header);
		
		$i=2;
		foreach($dataTbl as $row){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$i, ($i-1)); 
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row->WILAYAH); 
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row->UNIT_KERJA); 
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row->NPP); 
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row->NAMA_PEGAWAI); 
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row->GRADE); 
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row->GOLONGAN); 
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row->STATUS_KEPEGAWAIAN);
			if($row->KARIR_UTAMA>0){
				$excel->setActiveSheetIndex(0)->setCellValue('I'.$i, "v");
			}else{
				$excel->setActiveSheetIndex(0)->setCellValue('I'.$i, "");
			}
			if($row->KARIR_MADYA>0){
				$excel->setActiveSheetIndex(0)->setCellValue('J'.$i, "v");
			}else{
				$excel->setActiveSheetIndex(0)->setCellValue('J'.$i, "");
			}
			if($row->KARIR_MUDA>0){
				$excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "v");
			}else{
				$excel->setActiveSheetIndex(0)->setCellValue('K'.$i, "");
			}
			if($row->DIKLAT_DPK>0){
				$excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "v");
			}else{
				$excel->setActiveSheetIndex(0)->setCellValue('L'.$i, "");
			}
			if($row->DIKLAT_PENSIUN>0){
				$excel->setActiveSheetIndex(0)->setCellValue('M'.$i, "v");
			}else{
				$excel->setActiveSheetIndex(0)->setCellValue('M'.$i, "");
			}
			$excel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('K'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('L'.$i)->applyFromArray($style_row_no);
			$excel->getActiveSheet()->getStyle('M'.$i)->applyFromArray($style_row_no);
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
		$excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$excel->getActiveSheet(0)->setTitle("Data Diklat");
		$excel->setActiveSheetIndex(0);
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if($_GET['unitKerja']!="-- Select All --"){
			header('Content-Disposition: attachment; filename="Data Diklat '.$_GET["unitKerja"].' '.date("dmY").'.xlsx"'); 
		}else{
			header('Content-Disposition: attachment; filename="Data Diklat '.$_GET["wilayah"].' '.date("dmY").'.xlsx"'); 
		}
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}

    public function ajax_list(){
		$list = $this->ReportKaryawanModel->get_datatables();
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
			$row[] = $customers->GRADE;
			$row[] = $customers->GOLONGAN;
			$row[] = $customers->STATUS_KEPEGAWAIAN;
			if($customers->KARIR_UTAMA>0){
				$row[] = "v";
			}else{
				$row[] = "";
			}
			if($customers->KARIR_MADYA>0){
				$row[] = "v";
			}else{
				$row[] = "";
			}
			if($customers->KARIR_MUDA>0){
				$row[] = "v";
			}else{
				$row[] = "";
			}
			if($customers->DIKLAT_DPK>0){
				$row[] = "v";
			}else{
				$row[] = "";
			}
			if($customers->DIKLAT_PENSIUN>0){
				$row[] = "v";
			}else{
				$row[] = "";
			}
			$data[] = $row;
		}
		
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->ReportKaryawanModel->count_all(),
			"recordsFiltered" => $this->ReportKaryawanModel->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
    }

	function getPdf(){		
		$unitKerja = $_GET['unitKerja'];
		$wilayah = $_GET['wilayah'];
		
		error_reporting(0);
		$parameters = array(
			'paper' => 'A4',
			'orientation' => 'landscape',
		);
		$this->load->library('Pdf', $parameters);
		$this->pdf->selectFont(APPPATH . '/third_party/pdf-php/fonts/Helvetica.afm');
		$this->pdf->ezSetCmMargins(1, 1, 1.5, 1.5);
		$this->pdf->ezText("<b>DATA DIKLAT KARYAWAN </b>", 12, array('justification' => "center"));
		if($unitKerja!="-- Select All --"){
			$this->pdf->ezText("<b>\"".strtoupper($unitKerja)." BPJS KETENAGAKERJAAN\"</b>", 12, array('justification' => "center"));
		}else{
			$this->pdf->ezText("<b>\"".strtoupper($wilayah)." BPJS KETENAGAKERJAAN\"</b>", 12, array('justification' => "center"));
		}
		$this->pdf->ezText("<b>PER ".date('d')." ".$this->getBulanSekarang()." ".date('Y')."</b>", 12, array('justification' => "center"));
		$this->pdf->ezSetDy(-10);
		
		for ($i = 1; $i <=1; $i++) {
			$fooo["U" . $i] = array('justification' => "center");
		}
		$fooo['<b>NO</b>'] = array('justification' => "center", 'width'=>"30");
		$fooo['<b>KANTOR WILAYAH</b>'] = array('justification' => "center", 'width'=>"70");	
		$fooo['<b>UNIT KERJA</b>'] = array('justification' => "left", 'width'=>"80");			
		$fooo['<b>NPP</b>'] = array('justification' => "center", 'width'=>"55");
		$fooo['<b>NAMA PEGAWAI</b>'] = array('justification' => "left", 'width'=>"50");
		$fooo['<b>GRADE</b>'] = array('justification' => "center");
		$fooo['<b>GOLONGAN</b>'] = array('justification' => "center", 'width'=>"60");
		$fooo['<b>STATUS KEPEGAWAIAN</b>'] = array('justification' => "center", 'width'=>"80");
		$fooo['<b>DIKLAT KARIR UTAMA</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>DIKLAT KARIR MADYA</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>DIKLAT KARIR MUDA</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>DIKLAT DPK</b>'] = array('justification' => "center", 'width'=>"50");
		$fooo['<b>DIKLAT PENSIUN</b>'] = array('justification' => "center", 'width'=>"50");
		
		//$foo['gridlines'] = EZ_GRIDLINE_DEFAULT;
		$foo['shadeHeadingCol'] = array(102 / 255, 240 / 255, 78 / 255);
		$foo['showBgCol'] = 1;
		$foo['width'] = 750;
		$foo['fontSize'] = 8;
		//$foo['showLines'] = 1;
		$foo['cols'] = $fooo;
		
		$_POST['wilayah'] = $wilayah;
		$_POST['unitKerja'] = $unitKerja;
		$list = $this->ReportKaryawanModel->get_datatables();
		$dataTbl = array();
		$i=0;
		foreach ($list as $row) {				
			$dataTbl[$i]["<b>NO</b>"] = ($i+1);
			$dataTbl[$i]['<b>KANTOR WILAYAH</b>'] = $row->WILAYAH;
			$dataTbl[$i]['<b>UNIT KERJA</b>'] = $row->UNIT_KERJA;			
			$dataTbl[$i]['<b>NPP</b>'] = $row->NPP;
			$dataTbl[$i]['<b>NAMA PEGAWAI</b>'] = $row->NAMA_PEGAWAI;
			$dataTbl[$i]['<b>GRADE</b>'] = $row->GRADE;
			$dataTbl[$i]['<b>GOLONGAN</b>'] = $row->GOLONGAN;
			$dataTbl[$i]['<b>STATUS KEPEGAWAIAN</b>'] = $row->STATUS_KEPEGAWAIAN;
			if($row->KARIR_UTAMA>0){
				$dataTbl[$i]['<b>DIKLAT KARIR UTAMA</b>'] = "v";
			}else{
				$dataTbl[$i]['<b>DIKLAT KARIR UTAMA</b>'] = "";
			}
			if($row->KARIR_MADYA>0){
				$dataTbl[$i]['<b>DIKLAT KARIR MADYA</b>'] = "v";
			}else{
				$dataTbl[$i]['<b>DIKLAT KARIR MADYA</b>'] = "";
			}
			if($row->KARIR_MUDA>0){
				$dataTbl[$i]['<b>DIKLAT KARIR MUDA</b>'] = "v";
			}else{
				$dataTbl[$i]['<b>DIKLAT KARIR MUDA</b>'] = "";
			}
			if($row->DIKLAT_DPK>0){
				$dataTbl[$i]['<b>DIKLAT DPK</b>'] = "v";
			}else{
				$dataTbl[$i]['<b>DIKLAT DPK</b>'] = "";
			}
			if($row->DIKLAT_PENSIUN>0){
				$dataTbl[$i]['<b>DIKLAT PENSIUN</b>'] = "v";
			}else{
				$dataTbl[$i]['<b>DIKLAT PENSIUN</b>'] = "";
			}
			$i++;
		}
		
		$this->pdf->ezTable($dataTbl, "", "", $foo);
		$this->pdf->ezStream(array("Content-Disposition"=>"Data Diklat ".$unitKerja." ".date('dmY').".pdf"));
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