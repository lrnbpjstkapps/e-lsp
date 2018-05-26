<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_apl_01 extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("table/M_fr_apl_01", "M_apl_01");
			$this->load->model("table/M_apl01_uk", "M_apl01_uk");
			$this->load->model("table/M_apl01_bukti", "M_apl01_bukti");
			
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesi/fr_apl_01/m_custom", "m_custom");
			$this->load->model("asesi/fr_apl_01/m_param", "m_param");
			$this->load->model("asesi/fr_apl_01/m_list_fr_apl_01", "m_list_apl01");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= "";
			$data["dviewEvent"]		= $view[119];
			$data["dlayoutMenu"]	= $layout[105];
			$this->load->view($layout[100], $data);
		}
	
	//PAGING
	public function pagingAdd()
		{
			$data					= $this->m_globalval->getAllData();
			$form_name 				= $data['form_name'];
			$view					= $data['view'];			
			$data["saveMethod"]		= "add";
			
			$data[$form_name[134]] 	= "";
			$data[$form_name[115]]	= "";
			$data[$form_name[116]] 	= "";
			$data[$form_name[117]] 	= "";
			$data[$form_name[118]] 	= "";
			$data[$form_name[119]] 	= "";
			$data[$form_name[120]] 	= "";
			$data[$form_name[121]] 	= "";
			$data[$form_name[122]] 	= "";
			$data[$form_name[123]] 	= "";
			$data[$form_name[124]] 	= "";
			$data[$form_name[125]] 	= "";
			$data[$form_name[126]] 	= "";
			$data[$form_name[127]] 	= "";
			$data[$form_name[128]] 	= "";
			$data[$form_name[129]] 	= "";
			$data[$form_name[130]] 	= "";
			$data[$form_name[131]] 	= "";
			$data[$form_name[132]] 	= "";
			$data[$form_name[133]] 	= "";
			$data[$form_name[141]] 	= "";
			$data[$form_name[144]] 	= "";
			$data[$form_name[102]] 	= "";
			$data[$form_name[101]] 	= "";
			$data[$form_name[105]] 	= "";
			$data[$form_name[136]] 	= "";
			
			$addtionalParam			= $this->m_param->getDt_102($data);
			$listSkema				= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			$data["listSkema"]		= $listSkema;
			
			$this->load->view($view[117], $data);
			$this->load->view($view[118], $data);
		}
		
	public function pagingUpload($uuid)
		{
			$data					= $this->m_globalval->getAllData();
			$view					= $data['view'];
			$data["saveMethod"]		= "add";
			
			$this->load->view($view[120], $data);
			$this->load->view($view[121], $data);
		}
		
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[115], $data);
			$this->load->view($view[116], $data);
		}
		
	public function pagingEdit($uuid)
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name 				= $data['form_name'];
			$view					= $data['view'];
			$data["saveMethod"]		= "edit";
			
			$addtionalParam			= $this->m_param->getADt($uuid);
			$res					= $this->m_custom->getADt($uuid);
			$result 				= $res->row();
				
			$data[$form_name[134]] 	= $result->UUID_APL01;
			$data[$form_name[115]]	= $result->NAMA_LENGKAP;
			$data[$form_name[116]] 	= $result->TEMPAT_LAHIR;
			$data[$form_name[117]] 	= $result->TGL_LAHIR;
			$data[$form_name[118]] 	= $result->JENIS_KELAMIN;
			$data[$form_name[119]] 	= $result->KEBANGSAAN;
			$data[$form_name[120]] 	= $result->ALAMAT_RUMAH;
			$data[$form_name[121]] 	= $result->KODE_POS_RUMAH;
			$data[$form_name[122]] 	= $result->NO_TLP_RUMAH;
			$data[$form_name[123]] 	= $result->NO_TLP_HP;
			$data[$form_name[124]] 	= $result->EMAIL;
			$data[$form_name[125]] 	= $result->PENDIDIKAN_TERAKHIR;
			$data[$form_name[126]] 	= $result->NAMA_PERUSAHAAN;
			$data[$form_name[127]] 	= $result->JABATAN;
			$data[$form_name[128]] 	= $result->ALAMAT_KANTOR;
			$data[$form_name[129]] 	= $result->KODE_POS_PERUSAHAAN;
			$data[$form_name[130]] 	= $result->NO_TLP_KANTOR;
			$data[$form_name[131]] 	= $result->FAX_KANTOR;
			$data[$form_name[132]] 	= $result->EMAIL_KANTOR;
			$data[$form_name[133]] 	= $result->TUJUAN_ASESMEN;
			$data[$form_name[141]] 	= $result->TUJUAN_ASESMEN_LAINNYA_KETERANGAN;
			$data[$form_name[144]] 	= $result->JENIS_SKEMA;
			$data[$form_name[102]] 	= $result->UUID_SKEMA;
			$data[$form_name[101]] 	= $result->NOMOR_SKEMA;
			$data[$form_name[105]] 	= "";
			$data[$form_name[136]] 	= "";
					
			$addtionalParam			= $this->m_param->getDt_102($data);
			$listSkema				= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			$data["listSkema"]		= $listSkema;
			
			$this->load->view($view[117], $data);
			$this->load->view($view[118], $data);
		}
		
	// CREATE		
	public function saveDt()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			
			$_POST[$form_name[134]]	= $this->uuid->v4();
			$qResult_apl_01			= $this->M_apl_01->insert_entry($form_name);
			$qResult_apl_01_uk		= 1;
			$qResult_apl_01_bukti	= 1;
			
			for ($i = 0; $i < count($this->input->post($form_name[143])); $i++)
				{	
					$qResult 		= $this->M_apl01_uk->insert_multiple_entry($form_name, $i);
					if($qResult != 1)	
						{
							$qResult_apl_01_uk = -1;
						}
				}
			
			for ($i = 0; $i < count($this->input->post($form_name[139])); $i++)
				{
					$qResult		= $this->M_apl01_bukti->insert_multiple_entry($form_name, $i);	
					if($qResult != 1)	
						{
							$qResult_apl_01_bukti = -1;
						}
				}
					
			if($qResult_apl_01 != 1 || $qResult_apl_01_uk != 1 || $qResult_apl_01_bukti != 1)
				{
					echo -1;
				}
			else
				{			
					echo 1;
				}
		}
		
	public function saveFile()
		{
			$data	= $this->m_globalval->getAllData();		
			
			//$param	= $this->m_param->saveDt($data);
			//echo $this->m_crud->insertDt("FR_APL_01", $param);
			echo "1";
		}
		
	// READ	
	public function getADt($uuid)
		{
			$addtionalParam	= $this->m_param->getADt($uuid);
			$result			= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			echo json_encode($result->row());
		}
		
	public function getADt_FN101()
		{
			$data	= $this->m_globalval->getAllData();	
			
			$addtionalParam	= $this->m_param->getADt_FN101($data);
			$result			= $this->m_crud->selectDt("SKEMA",  $addtionalParam);
			
			echo $result->row()->NOMOR_SKEMA;
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
			$result				= $this->m_list_apl01->get_datatables();
			$recordsTotal		= $this->m_list_apl01->count_all();
			$recordsFiltered	= $this->m_list_apl01->count_filtered();

			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
	
	// UPDATE		
	public function updateDt()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			
			$condition				= array(
				'UUID_APL01'		=> $this->input->post($form_name[134]));
			$data_apl_01			= $this->M_apl_01->get_entry($condition)->row();
			
			$_POST[$form_name[159]]	= '1';
			$condition				= array(
				'UUID_APL01'		=> $this->input->post($form_name[134]));
			$qResult_apl_01			= $this->M_apl_01->update_entry($form_name, $data_apl_01, $condition);
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
			
			if($qResult_apl_01 != 1 || $qResult_apl01_uk_del != 1 || $qResult_apl01_uk_ins != 1 || $qResult_apl01_bukti_del != 1 || $qResult_apl01_bukti_ins != 1)
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
