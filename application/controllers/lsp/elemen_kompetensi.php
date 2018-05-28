<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class elemen_kompetensi extends CI_Controller {

	// LSP		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("lsp/elemen_kompetensi/m_param", "m_param");
			$this->load->model("lsp/elemen_kompetensi/m_list_ek", "m_list_ek");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$addtionalParam	 		= $this->m_param->getDt_105($data);
			$listUK					= $this->m_crud->selectDt("UNIT_KOMPETENSI",  $addtionalParam);
			$data["listUK"]			= $listUK;
			
			$data["dview"]			= $view[106];
			$data["dviewEvent"]		= $view[107];
			$data["dlayoutMenu"]	= $layout[102];
			$this->load->view($layout[100], $data);
		}
	
	// CREATE
	public function saveDt()
		{
			$data	= $this->m_globalval->getAllData();		
			
			$param	= $this->m_param->saveDt($data);
			echo $this->m_crud->insertDt("ELEMEN_KOMPETENSI", $param);
		}
		
	// READ
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("ELEMEN_KOMPETENSI",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getListPage()
		{				
			$data			= $this->m_globalval->getAllData();		
			$view			= $data['view'];
			$form_name		= $data["form_name"];
			
			$data['uuid']	= $this->input->post($form_name[105]);

			$addtionalParam	= $this->m_param->getADt_UK($data);
			$result			= $this->m_crud->selectDt("UNIT_KOMPETENSI",  $addtionalParam)->row();
				
			$data['param1']	= $result->KODE_UK;	
			$data['param2']	= $result->JUDUL_UK;				
			$this->load->view($view[104], $data);
			$this->load->view($view[105], $data);
		}
	
	public function getList($uuid)
		{				
			$result				= $this->m_list_ek->get_datatables($uuid);
			$recordsTotal		= $this->m_list_ek->count_all($uuid);
			$recordsFiltered	= $this->m_list_ek->count_filtered($uuid);		
			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
	
	// UPDATE
	public function updateDt()
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->updateDt($data);
			echo $this->m_crud->updateDt("ELEMEN_KOMPETENSI", $addtionalParam);
		}
	
	// DELETE
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->deleteDt($data, $uuid);
			echo $this->m_crud->deleteDt("ELEMEN_KOMPETENSI", $addtionalParam);
		}
}
