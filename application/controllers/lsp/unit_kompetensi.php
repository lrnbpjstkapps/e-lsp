<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unit_kompetensi extends CI_Controller {

	// LSP		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("lsp/unit_kompetensi/m_custom", "m_custom");
			$this->load->model("lsp/unit_kompetensi/m_param", "m_param");
			$this->load->model("lsp/unit_kompetensi/m_list_uk", "m_list_uk");
			$this->load->model("lsp/unit_kompetensi/m_list_ske", "m_list_ske");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$addtionalParam	 		= $this->m_param->getDt_SKE();
			$listSkema				= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			$data["listSkema"]		= $listSkema;
			
			$data["dview"]			= $view[101];
			$data["dviewEvent"]		= $view[103];
			$data["dlayoutMenu"]	= $layout[102];
			$this->load->view($layout[100], $data);
		}
	
	// SAVE 
	public function saveDt()
		{
			$data			= $this->m_globalval->getAllData();	
			
			$application	= $data['application'];
			$paramArr		= array();
				
			$param			= $this->m_param->saveDt_UK($data);
			$this->m_crud->insertDt("UNIT_KOMPETENSI", $param);
			
			$addtionalParam = $this->m_param->getADt_UK($data);			
			$result			= $this->m_crud->selectDt("UNIT_KOMPETENSI",  $addtionalParam);
			
			$paramArr		= $this->m_param->saveDt_SKE_UK($data, $result->row()->UUID_UK);
			echo $this->m_crud->insertArrDt("SKEMA_UK", $paramArr);
		}
	
	// GET
	public function getADt_SKE_UK($uuid)
		{			
			$result	= $this->m_custom->getADt_SKE_UK($uuid);
			$output	= $this->m_param->getADt_SKE_UK($result);			
			echo json_encode($output);
		}
		
	public function getList_UK()
		{				
			$result				= $this->m_list_uk->get_datatables();
			$recordsTotal		= $this->m_list_uk->count_all();
			$recordsFiltered	= $this->m_list_uk->count_filtered();		
			$output				= $this->m_param->getDt_list_uk($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
	
	public function getList_SKE($uuid)
		{				
			$result				= $this->m_list_ske->get_datatables($uuid);
			$recordsTotal		= $this->m_list_ske->count_all($uuid);
			$recordsFiltered	= $this->m_list_ske->count_filtered($uuid);		
			$output				= $this->m_param->getDt_list_ske($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
		
	// UPDATE
	public function updateDt()
		{
			$data			= $this->m_globalval->getAllData();		
			$form_name		= $data["form_name"];
			
			$addtionalParam	= $this->m_param->updateDt_UK($data);
			$this->m_crud->updateDt("UNIT_KOMPETENSI", $addtionalParam);
			
			$addtionalParam	= $this->m_param->deleteDt($this->input->post($form_name[105]));			
			$this->m_crud->deleteDt("SKEMA_UK", $addtionalParam);
			
			$paramArr		= $this->m_param->saveDt_SKE_UK($data, $this->input->post($form_name[105]));
			echo $this->m_crud->insertArrDt("SKEMA_UK", $paramArr);
		}
	
	// DELETE 
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			$form_name		= $data["form_name"];
			
			try {
				$addtionalParam	= $this->m_param->deleteDt($uuid);			
				$this->m_crud->deleteDt("SKEMA_UK", $addtionalParam);
				
				$addtionalParam	= $this->m_param->deleteDt($uuid);			
				echo $this->m_crud->deleteDt("UNIT_KOMPETENSI", $addtionalParam);
			} catch (Exception $e) {
				echo var_dump($e->getMessage());
			}
		}
		
	// VALIDATION
	public function isFN104valid()
		{
			$data			= $this->m_globalval->getAllData();
			
			$form_name		= $data["form_name"];
			$addtionalParam	= $this->m_param->isFN104valid($form_name[105], $form_name[104]);
			$result			= $this->m_crud->selectDt("UNIT_KOMPETENSI", $addtionalParam);
			
			if($result->num_rows()>0){
				echo "false";
			}else{
				echo "true";
			}
		}
}
