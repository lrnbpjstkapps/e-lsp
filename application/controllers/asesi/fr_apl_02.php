<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_apl_02 extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/M_query", "M_query");
			$this->load->model("form/M_form_apl_02", "M_form_apl_02");
			$this->load->model("table/M_answer_apl_02", "M_ans_apl02");
			$this->load->model("table/M_apl01_bukti", "M_apl01_bukti");
			$this->load->model("table/M_bukti", "M_bukti");
			$this->load->model("table/M_fr_apl_01", "M_apl_01");
			$this->load->model("table/M_fr_apl_02", "M_apl_02");	
			$this->load->model("table/M_custom", "M_custom");	
					
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesi/fr_apl_02/m_custom", "m_custom_old");
			$this->load->model("asesi/fr_apl_02/m_param", "m_param");
			$this->load->model("asesi/fr_apl_02/m_list_fr_apl_02", "m_list_apl02");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= "";
			$data["dviewEvent"]		= $view[128];
			$data["dlayoutMenu"]	= $layout[105];
			$this->load->view($layout[100], $data);
		}
	
	//PAGING
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[124], $data);
			$this->load->view($view[125], $data);
		}
		
	public function pagingAdd()
		{
			$data						= $this->m_globalval->getAllData();
			$form_name 					= $data['form_name'];
			$view						= $data['view'];			
			
			$data 						= $this->M_form_apl_02->form_add($data, $form_name);
			
			$condition					= array(
				'apl01.IS_ACTIVE'		=> '1');
			$data['listApl01']			= $this->M_apl_01->get_detail_entry($condition);
		
			$condition 					= array(
				'UUID_USER'				=> 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f',
				'IS_ACTIVE'				=> '1');
			$data["listBukti"]			= $this->M_bukti->get_entry($condition);
			
			$this->load->view($view[126], $data);
			$this->load->view($view[127], $data);
		}
		
	public function pagingUpload($uuid)
		{
			$data					= $this->m_globalval->getAllData();
			$view					= $data['view'];
			$data["saveMethod"]		= "add";
			
			$this->load->view($view[120], $data);
			$this->load->view($view[121], $data);
		}
		
	public function pagingEdit($uuid)
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name 				= $data['form_name'];
			$view					= $data['view'];	
					
			$condition				= array(
				'apl01.UUID_USER'	=> 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f',
				'apl01.IS_ACTIVE'	=> '1');
			$data["listApl01"]		= $this->M_apl_01->get_detail_entry($condition);

			$condition 				= array(
				'apl02.UUID_APL02'	=> $uuid);
			$result					= $this->M_apl_02->get_detail_entry($condition)->row();
			
			$data 					= $this->M_form_apl_02->form_edit($data, $form_name, $result);
			
			$this->load->view($view[126], $data);
			$this->load->view($view[127], $data);
		}
		
	public function pagingChild($uuidApl01, $uuidSkema, $saveMethod, $uuidApl02)
		{
			$data								= $this->m_globalval->getAllData();
			$data['saveMethod']					= $saveMethod;
			$form_name							= $data['form_name'];
			$view								= $data['view'];	
			
			$condition 							= array(
				'apl01bukti.UUID_APL01'			=> $uuidApl01,
				'apl01bukti.IS_ACTIVE'			=> '1');
			$data["listBukti"]					= $this->M_apl01_bukti->get_detail_entry($condition);
			
			if($saveMethod == 'add')
				{
					$condition					= array(
						'APL01.UUID_APL01'		=> $uuidApl01,
						'SKE.UUID_SKEMA'		=> $uuidSkema,
						'APL01.IS_ACTIVE'		=> '1');
					$data["listKUK"]			= $this->M_query->get_KUK_by_APL01($condition);
				}
			else
				{
					$condition					= array(
						'ANS_APL_02.UUID_APL02'	=> $uuidApl02);
					$listKUK					= $this->M_ans_apl02->get_detail_entry($condition);
					$data["listKUK"]			= $listKUK;
					
					$i = 0;
					foreach($listKUK->result() as $row)
						{
							$data[$form_name[169]][$i] 	= $row->IS_KOMPETEN;
							$data[$form_name[136]][$i]	= explode(';', $row->UUID_BUKTI);
							$i++;
						}
				}
			
			$data[$form_name[134]]				= $uuidApl01;
			$data[$form_name[102]]				= $uuidSkema;
			$data[$form_name[146]]				= $uuidApl02;
			
			$this->load->view($view[120], $data);
		}
		
	// CREATE		
	public function saveDt_apl_02()
		{
			$data							= $this->m_globalval->getAllData();		
			$form_name						= $data["form_name"];
			$qResult_apl_02_ins				= 1;
			$qResult_ans_apl_02_ins			= 1;
			
			$_POST[$form_name[146]]			= $this->uuid->v4();
			$qResult_ans_apl_02_ins			= $this->M_apl_02->insert_entry($form_name);
			
			if($qResult_apl_02_ins == 1)
				{
					$condition				= array(
						'apl01.UUID_APL01'	=> $this->input->post($form_name[134]),
						'skema.UUID_SKEMA'	=> $this->input->post($form_name[102]));					
					$data['listKUK']		= $this->M_query->getQuery_listKUK($this->input->post($form_name[134]), $this->input->post($form_name[102]));

					for($i = 0; $i < count($this->input->post($form_name[178])); $i++)
						{
							$qResult		= $this->M_ans_apl02->insert_multiple_entry($form_name, $i);
							if($qResult != 1)
								{
									$qResult_ans_apl_02_ins = -1;
								}
						}
				}
				
			if($qResult_apl_02_ins != 1 || $qResult_ans_apl_02_ins != 1)
				{
					echo -1;
				}
			else
				{
					echo 1;
				}
		}
	
	// UPDATE		
	public function updateDt_apl_02()
		{
			$data				= $this->m_globalval->getAllData();		
			$form_name			= $data["form_name"];
			$queryResult1		= 1;
			$queryResult2		= 1;
			
			$listKUK			= $this->m_custom_old->getDt_listAnswer($this->input->post($form_name[134]), $this->input->post($form_name[146]));
			$data["listKUK"]	= $listKUK;
			
			$data['saveMethod']	= 'edit';
			$data['UUID_APL02']	= "'".$this->input->post($form_name[146])."'";
					
			$addtionalParam		= $this->m_param->deleteDt($data, $this->input->post($form_name[146]));
			$queryResult1		= $this->m_crud->deleteDt("ANSWER_APL_02", $addtionalParam);
	
			$paramArr			= $this->m_param->save_fId_181_ANS_APL_02($data);
			$queryResult2		= $this->m_crud->insertArrDt("ANSWER_APL_02", $paramArr);
				
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
	public function deleteDt_apl_02($uuid)
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
		
	// READ	
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getOneDt_apl_01()
		{
			$data			= $this->m_globalval->getAllData();
			$form_name		= $data["form_name"];
			
			$condition		= array(
				'apl01.UUID_APL01'=> $this->input->post($form_name[134]));
			$result			= $this->M_apl_01->get_detail_entry($condition);
			
			echo json_encode($result->row());
		}
		
	public function getDt_105()
		{			
			$data							= $this->m_globalval->getAllData();
			$form_name						= $data["form_name"];
			
			$uuid							= $this->input->post($form_name[105]);
			$listUK							= $this->m_custom_old->getDt_FN105($uuid);

			$listUK_selected_temp			= array();
			$listUK_selected				= array();
			if($this->input->post($form_name[134])!="")
				{
					$uuid					= $this->input->post($form_name[134]);
					$listUK_selected_temp	= $this->m_custom_old->getDt_FN105_FN134($uuid);	

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
					$listBukti_selected_temp	= $this->m_custom_old->getDt_FN142_FN134($uuid);	
				
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
			$result				= $this->m_list_apl02->get_datatables();
			$recordsTotal		= $this->m_list_apl02->count_all();
			$recordsFiltered	= $this->m_list_apl02->count_filtered();

			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}	
}
