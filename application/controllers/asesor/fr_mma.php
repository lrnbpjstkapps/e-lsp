<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_mma extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("datatables/M_list_mma", "M_list_mma");
			$this->load->model("table/M_answer_apl_02", "M_ans_apl02");
			
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesor/fr_mma/m_custom", "m_custom");
			$this->load->model("asesor/fr_mma/m_param", "m_param");
			
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
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[129], $data);
			$this->load->view($view[130], $data);
		}
		
	public function pagingEdit($uuidMMA, $uuidApl01, $uuidApl02)
		{
			$data						= $this->m_globalval->getAllData();		
			$form_name 					= $data['form_name'];
			$view						= $data['view'];

			
			$data["saveMethod"]		= "edit";
			
			$result					= $this->m_custom->getADt_FR_MMA($uuidMMA);			
			$data[$form_name[115]] 	= "Karid Nurvenus";
			$data[$form_name[134]] 	= $result->row()->UUID_APL_01;
			$data[$form_name[146]] 	= $result->row()->UUID_APL_02;
			$data[$form_name[101]] 	= $result->row()->NOMOR_SKEMA;
			$data[$form_name[100]] 	= $result->row()->NAMA_SKEMA;
			$data[$form_name[151]]	= "P2 BPJS Ketenagakerjaan";
			$data[$form_name[152]]	= "Dwi Andriani Puspitasari";
			$data[$form_name[153]]	= "12 Desember 2018";
			$data[$form_name[148]]	= "Sewaktu";
			$data[$form_name[133]]	= $result->row()->TUJUAN_ASESMEN;
			
			$condition					= array(
				'ANS_APL_02.UUID_APL01'	=> $uuidApl01,
				'ANS_APL_02.UUID_APL02'	=> $uuidApl02);
			$listAnswer					= $this->M_ans_apl02->get_detail_entry($condition);
			$data['listAnswer']			= $listAnswer;
					
			$i = 0;
			foreach($listAnswer->result() as $row)
				{
					$data[$form_name[149].'_'.$i] 	= $row->IS_KOMPETEN;
					$data[$form_name[136].'_'.$i]	= explode(';', $row->UUID_BUKTI);
					$i++;
				}
			
			$this->load->view($view[131], $data);
			$this->load->view($view[132], $data);
		}
	
	// UPDATE		
	public function updateDt_mma()
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
			
	//DATATABLES
	public function getList_mma()
		{				
			$result				= $this->M_list_mma->get_datatables();
			$recordsTotal		= $this->M_list_mma->count_all();
			$recordsFiltered	= $this->M_list_mma->count_filtered();

			$output				= $this->M_list_mma->get_json($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
}
