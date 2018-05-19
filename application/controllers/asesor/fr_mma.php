<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_mma extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesor/fr_mma/m_custom", "m_custom");
			$this->load->model("asesor/fr_mma/m_param", "m_param");
			$this->load->model("asesor/fr_mma/m_list_fr_mma", "m_list_mma");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= "";
			$data["dviewEvent"]		= $view[134];
			$data["dlayoutMenu"]	= $layout[106];
			$this->load->view($layout[100], $data);
		}
	
	//PAGING
	public function pagingAdd()
		{
			$data					= $this->m_globalval->getAllData();
			$form_name 				= $data['form_name'];
			$view					= $data['view'];			
			$data["saveMethod"]		= "add";
			
			$data[$form_name[145]] 	= "Karid Nurvenus";
			$data[$form_name[146]] 	= "-";
			$data[$form_name[147]] 	= "";
			$data[$form_name[148]] 	= "";
			$data[$form_name[134]] 	= "";
			$data[$form_name[101]] 	= "";
			$data[$form_name[100]] 	= "";
			$data[$form_name[104]] 	= "";
			$data[$form_name[103]] 	= "";
			$data[$form_name[109]] 	= "";
			
			$listApl01				= $this->m_custom->getDt_FN134_add('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$data["listApl01"]		= $listApl01;
		
			$addtionalParam			= $this->m_param->getADt_FN136('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$listBukti				= $this->m_crud->selectDt("BUKTI",  $addtionalParam);
			$data["listBukti"]		= $listBukti;
			
			$this->load->view($view[126], $data);
			$this->load->view($view[127], $data);
		}
		
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[129], $data);
			$this->load->view($view[130], $data);
		}
		
	public function pagingEdit($uuid)
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name 				= $data['form_name'];
			$view					= $data['view'];
			$data["saveMethod"]		= "edit";
					
			$listApl01				= $this->m_custom->getDt_FN134_edit('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$data["listApl01"]		= $listApl01;
			
			$param 					= $this->m_param->getADt($uuid);
			$uuidApl01				= $this->m_crud->selectDt('FR_APL_02', $param)->row()->UUID_APL01;
			
			$data[$form_name[145]] 	= "Karid Nurvenus";
			$data[$form_name[146]] 	= $uuid;
			$data[$form_name[147]] 	= "";
			$data[$form_name[148]] 	= "";
			$data[$form_name[134]] 	= $uuidApl01;
			$data[$form_name[101]] 	= "";
			$data[$form_name[100]] 	= "";
			$data[$form_name[104]] 	= "";
			$data[$form_name[103]] 	= "";
			$data[$form_name[109]] 	= "";
			
			$this->load->view($view[126], $data);
			$this->load->view($view[127], $data);
		}
		
	public function pagingChild($uuidApl01, $uuidSkema, $saveMethod, $uuidApl02)
		{
			$data						= $this->m_globalval->getAllData();
			$form_name					= $data['form_name'];
			$view						= $data['view'];	
			$data["saveMethod"]			= "add";
			
			$listKUK					= $this->m_custom->getADt_FN134_AllJoinedTable($uuidApl01, $uuidSkema);	
			$data["listKUK"]			= $listKUK;
			
			$addtionalParam				= $this->m_param->getADt_FN136('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$listBukti					= $this->m_crud->selectDt("BUKTI",  $addtionalParam);
			$data["listBukti"]			= $listBukti;
			$data['saveMethod']			= $saveMethod;
			
			if($saveMethod == 'edit')
				{
					$listAnswer			= $this->m_custom->getDt_listAnswer($uuidApl02);
					
					$i = 0;
					foreach($listAnswer->result() as $row)
						{
							$data[$form_name[149].'_'.$i] 	= $row->IS_KOMPETEN;
							$data[$form_name[136].'_'.$i]	= explode(';', $row->UUID_BUKTI);
							$i++;
						}
				}
			
			$data[$form_name[134]]		= $uuidApl01;
			$data[$form_name[102]]		= $uuidSkema;
			$data[$form_name[146]]		= $uuidApl02;
			
			$this->load->view($view[120], $data);
		}
		
	// CREATE		
	public function saveDt()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			$queryResult1			= 1;
			$queryResult2			= 1;
			
			$param					= $this->m_param->save_fId_181_APL_02($data);
			$queryResult1			= $this->m_crud->insertDt('FR_APL_02', $param);
			
			if($queryResult1 == 1)
				{
					$listKUK				= $this->m_custom->getADt_FN134_AllJoinedTable($this->input->post($form_name[134]), $this->input->post($form_name[102]));
					$data['listKUK']		= $listKUK;
					
					if($listKUK->num_rows() > 0)
						{
							$data['UUID_APL02']		= $param['UUID_APL02'];
							$param					= $this->m_param->save_fId_181_ANS_APL_02($data);
							$queryResult2			= $this->m_crud->insertArrDt('ANSWER_APL_02', $param);
						} 
				}
				
			if($queryResult1 == -1 || $queryResult2 == -1)
				{
					echo -1;
				}
			else
				{
					echo 1;
				}
		}
		
	// READ	
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getADt_FN134()
		{			
			$data		= $this->m_globalval->getAllData();		
			$form_name	= $data["form_name"];
			
			$result		= $this->m_custom->getADt_FN134($this->input->post($form_name[134]));	
			echo json_encode($result->row());
		}
		
	public function getDt_105()
		{			
			$data							= $this->m_globalval->getAllData();
			$form_name						= $data["form_name"];
			
			$uuid							= $this->input->post($form_name[105]);
			$listUK							= $this->m_custom->getDt_FN105($uuid);

			$listUK_selected_temp			= array();
			$listUK_selected				= array();
			if($this->input->post($form_name[134])!="")
				{
					$uuid					= $this->input->post($form_name[134]);
					$listUK_selected_temp	= $this->m_custom->getDt_FN105_FN134($uuid);	

					$i = 0;
					foreach($listUK_selected_temp->result() as $row)
						{
							$listUK_selected[$i]	= $row->UUID_UK;	
							$i++;
						}					
				}
				
			if($listUK->num_rows()>0){
				foreach($listUK->result() as $row){
					if(in_array($row->UUID_UK, $listUK_selected))
						{
							echo "<option value='".$row->UUID_UK."' selected> ".$row->KODE_UK." - ".$row->JUDUL_UK."</option>";
						}
					else
						{
							echo "<option value='".$row->UUID_UK."'> ".$row->KODE_UK." - ".$row->JUDUL_UK."</option>";
						}
					
				}
			}
			exit;				
		}
		
	public function getDt_142()
		{			
			$data							= $this->m_globalval->getAllData();
			$form_name						= $data["form_name"];
			$uuid							= $this->input->post($form_name[140]);
			
			$addtionalParam					= $this->m_param->getDt_142($uuid);
			$listBukti						= $this->m_crud->selectDt("BUKTI",  $addtionalParam);

			$listBukti_selected_temp		= array();
			$listBukti_selected				= array();
			if($this->input->post($form_name[134])!="")
				{
					$uuid						= $this->input->post($form_name[134]);
					$listBukti_selected_temp	= $this->m_custom->getDt_FN142_FN134($uuid);	
				
					echo $listBukti_selected_temp;
					$i = 0;
					if($listBukti_selected_temp!=""){
						foreach($listBukti_selected_temp->result() as $row)
							{
								$listBukti_selected[$i]	= $row->UUID_BUKTI;	
								$i++;
							}	
					}
				}
				
			if($listBukti->num_rows()>0){
				foreach($listBukti->result() as $row){
					if(in_array($row->UUID_BUKTI, $listBukti_selected))
						{
							echo "<option value='".$row->UUID_BUKTI."' selected> ".$row->KETERANGAN."</option>";
						}
					else
						{
							echo "<option value='".$row->UUID_BUKTI."'> ".$row->KETERANGAN."</option>";
						}					
				}
			}

			exit;				
		}
		
	public function getList()
		{				
			$result				= $this->m_list_mma->get_datatables();
			$recordsTotal		= $this->m_list_mma->count_all();
			$recordsFiltered	= $this->m_list_mma->count_filtered();

			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
	
	// UPDATE		
	public function updateDt()
		{
			$data				= $this->m_globalval->getAllData();		
			$form_name			= $data["form_name"];
			$queryResult1		= 1;
			$queryResult2		= 1;
			
			$listKUK			= $this->m_custom->getADt_FN134_AllJoinedTable($this->input->post($form_name[134]), $this->input->post($form_name[102]));
			$data['listKUK']	= $listKUK;
			
			$data['saveMethod']	= 'edit';
			$data['UUID_APL02']	= "'".$this->input->post($form_name[146])."'";
					
			if($listKUK->num_rows() > 0)
				{
					$addtionalParam		= $this->m_param->deleteDt($data, $this->input->post($form_name[146]));
					$queryResult1		= $this->m_crud->deleteDt("ANSWER_APL_02", $addtionalParam);
			
					$paramArr			= $this->m_param->save_fId_181_ANS_APL_02($data);
					$queryResult2		= $this->m_crud->insertArrDt("ANSWER_APL_02", $paramArr);				
				}
				
			if($queryResult1 == -1 || $queryResult2 == -1)
				{
					echo -1;
				}
			else	
				{
					echo 1;
				}
		}
	
	// DELETE
	public function deleteDt($uuid)
		{
			$data			= $this->m_globalval->getAllData();		
			
			$addtionalParam	= $this->m_param->deleteDt($data, $uuid);
			$queryResult1	= $this->m_crud->deleteDt("ANSWER_APL_02", $addtionalParam);
					
			$addtionalParam	= $this->m_param->deleteDt($data, $uuid);
			$queryResult2	= $this->m_crud->deleteDt("FR_APL_02", $addtionalParam);
			
			if($queryResult1 == -1 || $queryResult2 == -1)
				{
					echo -1;
				}
			else{			
					echo 1;
				}
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
