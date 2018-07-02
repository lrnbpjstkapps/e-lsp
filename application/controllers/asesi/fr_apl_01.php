<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_apl_01 extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("datatables/M_list_apl01", "M_list_apl01");
			$this->load->model("form/M_form_apl_01", "M_form_apl_01");
			$this->load->model("table/M_apl01_uk", "M_apl01_uk");
			$this->load->model("table/M_apl01_bukti", "M_apl01_bukti");
			$this->load->model("table/M_bukti", "M_bukti");
			$this->load->model("table/M_fr_apl_01", "M_apl_01");
			$this->load->model("table/M_unit_kompetensi", "M_uk");
			$this->load->model("table/M_skema", "M_skema");
			$this->load->model("table/M_skema_uk", "M_skema_uk");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= '';
			$data["dviewEvent"]		= $view[119];
			$data["dlayoutMenu"]	= $layout[105];
			$this->load->view($layout[100], $data);
		}
	
	// PAGING
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[115], $data);
			$this->load->view($view[116], $data);
		}
		
	public function pagingAdd()
		{
			$data					= $this->m_globalval->getAllData();
			$form_name 				= $data['form_name'];
			$view					= $data['view'];				
			
			$data					= $this->M_form_apl_01->form_add($data, $form_name);
			
			$condition				= array(
				'IS_ACTIVE' 		=> '1');
			$data["listSkema"]		= $this->M_skema->get_entry($condition);
			
			$this->load->view($view[117], $data);
			$this->load->view($view[118], $data);
		}
		
	public function pagingEdit($uuid)
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name 				= $data['form_name'];
			$view					= $data['view'];
			
			$condition				= array(
				'UUID_APL01'		=> $uuid);
			$result					= $this->M_apl_01->get_detail_entry($condition)->row();
			$data					= $this->M_form_apl_01->form_edit($data, $form_name, $result);
					
			$condition				= array(
				'IS_ACTIVE' 		=> '1');
			$data["listSkema"]		= $this->M_skema->get_entry($condition);
			
			$this->load->view($view[117], $data);
			$this->load->view($view[118], $data);
		}
		
	// CREATE		
	public function saveDt_apl_01()
		{
			$data						= $this->m_globalval->getAllData();		
			$form_name					= $data["form_name"];
			
			$_POST[$form_name[134]]		= $this->uuid->v4();
			$qResult_apl_01_ins			= $this->M_apl_01->insert_entry($form_name);
			$qResult_apl_01_uk_ins		= 1;
			$qResult_apl_01_bukti_ins	= 1;
			
			if($qResult_apl_01_ins == 1)
				{
					for ($i = 0; $i < count($this->input->post($form_name[143])); $i++)
						{	
							$qResult 	= $this->M_apl01_uk->insert_multiple_entry($form_name, $i);
							if($qResult != 1)	
								{
									$qResult_apl_01_uk_ins = -1;
								}
						}
					
					for ($i = 0; $i < count($this->input->post($form_name[139])); $i++)
						{
							$qResult	= $this->M_apl01_bukti->insert_multiple_entry($form_name, $i);	
							if($qResult != 1)	
								{
									$qResult_apl_01_bukti_ins = -1;
								}
						}
				}
					
			if($qResult_apl_01_ins != 1 || $qResult_apl_01_uk_ins != 1 || $qResult_apl_01_bukti_ins != 1)
				{
					echo -1;
				}
			else
				{			
					echo 1;
				}
		}
	
	// UPDATE		
	public function updateDt_apl_01()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			
			$condition				= array(
				'UUID_APL01'		=> $this->input->post($form_name[134]));
			$data_apl_01			= $this->M_apl_01->get_entry($condition)->row();
			
			$_POST[$form_name[159]]	= '1';
			$condition				= array(
				'UUID_APL01'		=> $this->input->post($form_name[134]));
			$qResult_apl_01_upd		= $this->M_apl_01->update_entry($form_name, $data_apl_01, $condition);
			$qResult_apl01_uk_del	= 1;
			$qResult_apl01_uk_ins	= 1;
			$qResult_apl01_bukti_del= 1;
			$qResult_apl01_bukti_ins= 1;
			
			$condition 				= array(
				'UUID_APL01'		=> $this->input->post($form_name[134]));
			$qResult_apl01_uk_del	= $this->M_apl01_uk->delete_entry($condition);
					
			if(count($this->input->post($form_name[143]))>0)
				{
					for($i = 0; $i < count($this->input->post($form_name[143])); $i++)
						{
							$qResult 		= $this->M_apl01_uk->insert_multiple_entry($form_name, $i);
							if ($qResult != 1)
								{	
									$qResult_apl01_uk_ins = -1;
								}
						}
				}
				
			$condition 					= array(
				'UUID_APL01'			=> $this->input->post($form_name[134]));
			$qResult_apl01_bukti_del	= $this->M_apl01_bukti->delete_entry($condition);
					
			if(count($this->input->post($form_name[139]))>0)
				{			
					for($i = 0; $i < count($this->input->post($form_name[139])); $i++)
						{
							$qResult			= $this->M_apl01_bukti->insert_multiple_entry($form_name, $i);
							if($qResult != 1)
								{
									$qResult_apl01_bukti_ins = -1;
								}
						}
				}
			
			if($qResult_apl_01_upd != 1 || $qResult_apl01_uk_del != 1 || $qResult_apl01_uk_ins != 1 || $qResult_apl01_bukti_del != 1 || $qResult_apl01_bukti_ins != 1)
				{
					echo -1;
				}
			else 
				{
					echo 1;
				}
		}
	
	// DELETE
	public function deleteDt_apl_01($uuid)
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data['form_name'];
			
			$condition 				= array(
				'UUID_APL01'		=> $uuid);
			$qResult_apl01_uk_del	= $this->M_apl01_uk->delete_entry($condition);
			
			$condition 				= array(
				'UUID_APL01'		=> $uuid);
			$qResult_apl01_bukti_del= $this->M_apl01_bukti->delete_entry($condition);
					
			$condition 				= array(
				'UUID_APL01'		=> $uuid);
			$qResult_apl01			= $this->M_apl_01->delete_entry($condition);
			
			if($qResult_apl01_uk_del != 1 || $qResult_apl01_bukti_del != 1 || $qResult_apl01 != 1)
				{
					echo -1;
				}
			else
				{			
					echo 1;
				}
		}
		
	// READ	
	public function getOneDt_apl_01($uuid)
		{
			$condition		= array(
				'UUID_APL01'=> $uuid);
			$result			= $this->M_apl_01->get_entry($condition);
			echo json_encode($result->row());
		}
		
	public function getOneDt_nomorSkema()
		{
			$data			= $this->m_globalval->getAllData();	
			$form_name		= $data['form_name'];
			
			$condition		= array(
				'UUID_SKEMA'=> $this->input->post($form_name[102]));
			$result			= $this->M_skema->get_entry($condition);
			
			echo $result->row()->NOMOR_SKEMA;
		}
		
	public function getAllDt_bukti()
		{			
			$data						= $this->m_globalval->getAllData();
			$form_name					= $data["form_name"];
			
			$condition					= array(
				'UUID_USER'				=> $this->input->post($form_name[140]),
				'IS_ACTIVE'				=> '1');
			$listBukti					= $this->M_bukti->get_entry($condition);

			$listBukti_selected_temp	= array();
			$listBukti_selected			= array();
			if($this->input->post($form_name[134])!="")
				{
					$condition					= array(
						'apl01bukti.UUID_APL01'	=> $this->input->post($form_name[134]));
					$listBukti_selected_temp	= $this->M_apl01_bukti->get_detail_entry($condition);	
				
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
		
	public function getAllDt_skema_uk()
		{			
			$data					= $this->m_globalval->getAllData();
			$form_name				= $data["form_name"];
			
			$condition				= array(
				'skemauk.UUID_SKEMA'=> $this->input->post($form_name[102]),
				'skemauk.IS_ACTIVE'	=> '1');
			$listUK					= $this->M_skema_uk->get_detail_entry($condition);

			$listUK_selected_temp	= array();
			$listUK_selected		= array();
			if($this->input->post($form_name[134])!="")
				{					
					$condition					= array(
						'apl01uk.UUID_APL01'	=> $this->input->post($form_name[134]),
						'apl01uk.IS_ACTIVE'		=> '1');
					$listUK_selected_temp 		= $this->M_apl01_uk->get_detail_entry($condition);
					
					$i = 0;
					foreach($listUK_selected_temp->result() as $row)
						{
							$listUK_selected[$i]= $row->UUID_UK;	
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
		
	// DATATABLES
	public function getList_apl_01()
		{				
			$result				= $this->M_list_apl01->get_datatables();
			$recordsTotal		= $this->M_list_apl01->count_all();
			$recordsFiltered	= $this->M_list_apl01->count_filtered();

			$output				= $this->M_list_apl01->get_json($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
}
