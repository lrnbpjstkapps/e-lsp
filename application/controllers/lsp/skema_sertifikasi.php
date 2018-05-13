<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skema_sertifikasi extends CI_Controller {

	// LSP		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("lsp/skema_sertifikasi/m_param", "m_param");
			$this->load->model("lsp/skema_sertifikasi/m_list_skema", "m_list_skema");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= $view[100];
			$data["dviewEvent"]		= $view[102];
			$data["dlayoutMenu"]	= $layout[102];
			$this->load->view($layout[100], $data);
		}
	
	// CREATE
	public function saveDt()
		{
			$data	= $this->m_globalval->getAllData();		
			
			$param	= $this->m_param->saveDt($data);
			echo $this->m_crud->insertDt("SKEMA", $param);
		}
		
	// READ
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getList()
		{				
			$result				= $this->m_list_skema->get_datatables();
			$recordsTotal		= $this->m_list_skema->count_all();
			$recordsFiltered	= $this->m_list_skema->count_filtered();		
			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
	
	// UPDATE
	public function updateDt()
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->updateDt($data);
			echo $this->m_crud->updateDt("SKEMA", $addtionalParam);
		}
	
	// DELETE
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->deleteDt($data, $uuid);
			echo $this->m_crud->deleteDt("SKEMA", $addtionalParam);
		}
		
	//VALIDATION
	public function isFN101valid()
		{
			$data			= $this->m_globalval->getAllData();			
			$form_name		= $data["form_name"];
			
			$addtionalParam	= $this->m_param->isFN101valid($form_name[102], $form_name[101]);
			$result			= $this->m_crud->selectDt("SKEMA", $addtionalParam);
			
			if($result->num_rows()>0){
				echo "false";
			}else{
				echo "true";
			}
		}
}
