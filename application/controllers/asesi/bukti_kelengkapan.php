<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukti_kelengkapan extends CI_Controller {

	// Asesi		
	// Note: unlink('./assets/bukti_kelengkapan/LSP_BPJSTK_file_a8f0a5be-6b9a-468c-9f8d-0db1d7e7c978.pdf');
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesi/bukti_kelengkapan/m_param", "m_param");
			$this->load->model("asesi/bukti_kelengkapan/m_list_data", "m_list_data");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= $view[122];
			$data["dviewEvent"]		= $view[123];
			$data["dlayoutMenu"]	= $layout[105];
			$this->load->view($layout[100], $data);
		}
	
	// CREATE
	public function saveDt()
		{
			$data				= $this->m_globalval->getAllData();	
				
			$data['filename']	= $this->m_param->uploadDt($data);
			$param				= $this->m_param->saveDt($data);
			echo $this->m_crud->insertDt("BUKTI", $param);
		}
		
	// READ
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("BUKTI",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getList()
		{				
			$result				= $this->m_list_data->get_datatables();
			$recordsTotal		= $this->m_list_data->count_all();
			$recordsFiltered	= $this->m_list_data->count_filtered();		
			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			echo json_encode($output);
		}
	
	// UPDATE
	public function updateDt()
		{
			$data				= $this->m_globalval->getAllData();		
			
			$addtionalParam		= $this->m_param->updateDt($data);
			echo $this->m_crud->updateDt("BUKTI", $addtionalParam);
		}
	
	// DELETE
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->updateIsActiveDt($data, $uuid);
			echo $this->m_crud->updateDt("BUKTI", $addtionalParam);
		}	
}
