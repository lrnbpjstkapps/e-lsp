<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kriteria_unjuk_kerja extends CI_Controller {

	// LSP		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("lsp/kriteria_unjuk_kerja/m_param", "m_param");
			$this->load->model("lsp/kriteria_unjuk_kerja/m_list_kuk", "m_list_kuk");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$addtionalParam	 		= $this->m_param->getDt_105($data);
			$listUK					= $this->m_crud->selectDt("UNIT_KOMPETENSI",  $addtionalParam);
			$data["listUK"]			= $listUK;
			
			$data["dview"]			= $view[110];
			$data["dviewEvent"]		= $view[111];
			$data["dlayoutMenu"]	= $layout[102];
			$this->load->view($layout[100], $data);
		}
	
	// CREATE
	public function saveDt()
		{
			$data	= $this->m_globalval->getAllData();		
			
			$param	= $this->m_param->saveDt($data);
			echo $this->m_crud->insertDt("KRITERIA_UNJUK_KERJA", $param);
		}
		
	// READ
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("KRITERIA_UNJUK_KERJA",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getDt_109(){			
		$data				= $this->m_globalval->getAllData();
		$form_name			= $data["form_name"];
		
		$data["uuid"]		= $this->input->post($form_name[105]);
		$addtionalParam	 	= $this->m_param->getDt_109($data);
		$listEK				= $this->m_crud->selectDt("ELEMEN_KOMPETENSI",  $addtionalParam);

		if($listEK->num_rows()>0){
			foreach($listEK->result() as $row){
				echo "<option value='".$row->UUID_EK."'>  ".$row->NOMOR_EK." - ".$row->NAMA_EK."</option>";
			}
		}
		exit;	
	}	
		
	public function getListPage()
		{				
			$data			= $this->m_globalval->getAllData();		
			$view			= $data['view'];
			$form_name		= $data["form_name"];
			
			$data['uuid1']	= $this->input->post($form_name[105]);
			$addtionalParam	= $this->m_param->getADt_UK($data);
			$result			= $this->m_crud->selectDt("UNIT_KOMPETENSI",  $addtionalParam)->row();
			$data['param1']	= $result->KODE_UK;	
			$data['param2']	= $result->JUDUL_UK;
			
			$data['uuid2']	= $this->input->post($form_name[109]);
			$addtionalParam	= $this->m_param->getADt_EK($data);
			$result			= $this->m_crud->selectDt("ELEMEN_KOMPETENSI",  $addtionalParam)->row();					
			$data['param3']	= $result->NOMOR_EK;	
			$data['param4']	= $result->NAMA_EK;		
			
			$this->load->view($view[108], $data);
			$this->load->view($view[109], $data);
		}
	
	public function getList($uuid)
		{				
			$result				= $this->m_list_kuk->get_datatables($uuid);
			$recordsTotal		= $this->m_list_kuk->count_all($uuid);
			$recordsFiltered	= $this->m_list_kuk->count_filtered($uuid);		
			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
	
	// UPDATE
	public function updateDt()
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->updateDt($data);
			echo $this->m_crud->updateDt("KRITERIA_UNJUK_KERJA", $addtionalParam);
		}
	
	// DELETE
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->deleteDt($data, $uuid);
			echo $this->m_crud->deleteDt("KRITERIA_UNJUK_KERJA", $addtionalParam);
		}
		
	//VALIDATION
	public function isFN112valid()
		{
			$data			= $this->m_globalval->getAllData();			
			$form_name		= $data["form_name"];
			
			$addtionalParam	= $this->m_param->isFN112valid($form_name[113], $form_name[112]);
			$result			= $this->m_crud->selectDt("KRITERIA_UNJUK_KERJA", $addtionalParam);
			
			if($result->num_rows()>0){
				echo "false";
			}else{
				echo "true";
			}
		}
}
