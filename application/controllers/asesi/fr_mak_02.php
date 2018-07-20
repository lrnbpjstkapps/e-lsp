<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_mak_02 extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/M_query", "M_query");
			$this->load->model("datatables/M_list_apl02", "M_list_apl02");
			$this->load->model("form/M_form_global", "M_form_global");
			$this->load->model("form/M_form_apl_02", "M_form_apl_02");
			$this->load->model("table/M_answer_apl_02", "M_ans_apl02");
			$this->load->model("table/M_apl01_bukti", "M_apl01_bukti");
			$this->load->model("table/M_bukti", "M_bukti");
			$this->load->model("table/M_fr_apl_01", "M_apl_01");
			$this->load->model("table/M_fr_apl_02", "M_apl_02");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= "";
			$data["dviewEvent"]		= $view[133];
			$data["dlayoutMenu"]	= $layout[105];
			$this->load->view($layout[100], $data);
		}
	
	//PAGING
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[137], $data);
			$this->load->view($view[138], $data);
		}
		
	public function pagingAdd()
		{
			$data						= $this->m_globalval->getAllData();
			$data["saveMethod"]			= "add";
			$form_name 					= $data['form_name'];
			$view						= $data['view'];			
			
			$this->load->view($view[139], $data);
			$this->load->view($view[140], $data);
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
		
	// CREATE		
	public function saveDt_mak02()
		{
			$data							= $this->m_globalval->getAllData();		
			$form_name						= $data["form_name"];
			$qResult_apl02_ins				= 1;
			$qResult_ans_apl02_ins			= 1;
			
			$_POST[$form_name[146]]			= $this->uuid->v4();
			$qResult_apl02_ins				= $this->M_apl_02->insert_entry($form_name);
			
			if($qResult_apl02_ins == 1)
				{
					for($i = 0; $i < count($this->input->post($form_name[178])); $i++)
						{
							$qResult		= $this->M_ans_apl02->insert_multiple_entry($form_name, $i);
							if($qResult != 1)
								{
									$qResult_ans_apl02_ins = -1;
								}
						}
				}
				
			if($qResult_apl02_ins != 1 || $qResult_ans_apl02_ins != 1)
				{
					echo -1;
				}
			else
				{
					echo 1;
				}
		}
	
	// UPDATE		
	public function updateDt_mak02()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			$qResult_ans_apl02_ins	= 1;
			
			$condition				= array(
				'UUID_APL02'		=> $this->input->post($form_name[146]));
			$qResult_ans_apl02_del	= $this->M_ans_apl02->delete_entry($condition);
	
			for($i = 0; $i < count($this->input->post($form_name[178])); $i++)
				{
					$qResult		= $this->M_ans_apl02->insert_multiple_entry($form_name, $i);
					if($qResult != 1)
						{
							$qResult_ans_apl02_ins = -1;
						}
				}
				
			if($qResult_ans_apl02_ins != 1)
				{
					echo -1;
				}
			else	
				{
					echo 1;
				}
		}
	
	// DELETE
	public function deleteDt_mak02($uuid)
		{
			$data				= $this->m_globalval->getAllData();		
		
			$condition			= array(
				'UUID_APL02'	=> $uuid);
			$qResult_ans_apl02	= $this->M_ans_apl02->delete_entry($condition);		
			$qResult_apl02		= $this->M_apl_02->delete_entry($condition);
					
			if($qResult_ans_apl02 != 1 || $qResult_apl02 != 1)
				{
					echo -1;
				}
			else{			
					echo 1;
				}
		}
		
	// DATATABLES
	public function getList_mak02()
		{				
			$result				= $this->M_list_apl02->get_datatables();
			$recordsTotal		= $this->M_list_apl02->count_all();
			$recordsFiltered	= $this->M_list_apl02->count_filtered();

			$output				= $this->M_list_apl02->get_json($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
}
