<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fr_apl_02 extends CI_Controller {

	// Asesi		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
			$this->load->model("asesi/fr_apl_02/m_custom", "m_custom");
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
	public function pagingAdd()
		{
			$data					= $this->m_globalval->getAllData();
			$form_name 				= $data['form_name'];
			$view					= $data['view'];			
			$data["saveMethod"]		= "add";
			
			$data[$form_name[145]] 	= "Karid Nurvenus";
			$data[$form_name[146]] 	= "";
			$data[$form_name[147]] 	= "";
			$data[$form_name[148]] 	= "";
			$data[$form_name[134]] 	= "";
			$data[$form_name[101]] 	= "";
			$data[$form_name[100]] 	= "";
			$data[$form_name[104]] 	= "";
			$data[$form_name[103]] 	= "";
			$data[$form_name[109]] 	= "";
			
			$listApl01				= $this->m_custom->getDt_FN134('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$data["listApl01"]		= $listApl01;
			/*
			$formApl02				= $this->m_custom->getADt_FN134_AllJoinedTable('b12a2a81-469a-11e8-a478-a4c494eed0da', '57797303-31d0-11e8-89f9-64006a4fef6c');	
			$data["formApl02"]		= $formApl02;*/
			
			$addtionalParam			= $this->m_param->getADt_FN136('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$listBukti				= $this->m_crud->selectDt("BUKTI",  $addtionalParam);
			$data["listBukti"]		= $listBukti;
			
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
		
	public function pagingList()
		{
			$data	= $this->m_globalval->getAllData();
			$view	= $data['view'];
			
			$this->load->view($view[124], $data);
			$this->load->view($view[125], $data);
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
		
	public function pagingChildAdd($uuidApl01, $uuidSkema)
		{
			$data					= $this->m_globalval->getAllData();
			$form_name				= $data['form_name'];
			$view					= $data['view'];	
			$data["saveMethod"]		= "add";
			
			$listKUK				= $this->m_custom->getADt_FN134_AllJoinedTable($uuidApl01, $uuidSkema);	
			$data["listKUK"]		= $listKUK;
			
			$addtionalParam			= $this->m_param->getADt_FN136('d8c702c5-4e7f-11e8-bf00-00ff0b0c062f');
			$listBukti				= $this->m_crud->selectDt("BUKTI",  $addtionalParam);
			$data["listBukti"]		= $listBukti;
			
			$data[$form_name[134]]	= $uuidApl01;
			$data[$form_name[102]]	= $uuidSkema;
			
			$this->load->view($view[120], $data);
		}
		
	// CREATE		
	public function saveDt()
		{
			$data					= $this->m_globalval->getAllData();		
			$form_name				= $data["form_name"];
			$queryResult1			= 1;
			$queryResult2			= 1;
			
			//input to APL_02
			$param					= $this->m_param->save_fId_181_APL_02($data);
			$queryResult1			= $this->m_crud->insertDt('FR_APL_02', $param);
			
			if($queryResult1 == 1)
				{
					$listKUK				= $this->m_custom->getADt_FN134_AllJoinedTable($this->input->post($form_name[134]), $this->input->post($form_name[102]));
					$data['listKUK']		= $listKUK;
					
					//input to ANSWER_APL_02
					$data['UUID_APL02']		= $param['UUID_APL02'];
					$param					= $this->m_param->save_fId_181_ANSWE_APL_02($data);
					$queryResult2			= $this->m_crud->insertArrDt('ANSWER_APL_02', $param);
				}
				
			if($queryResult1 == 1 || $queryResult2 == 1)
				{
					echo 1;
				}
			else
				{
					echo -1;
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
			$result				= $this->m_list_apl02->get_datatables();
			$recordsTotal		= $this->m_list_apl02->count_all();
			$recordsFiltered	= $this->m_list_apl02->count_filtered();

			$output				= $this->m_param->getDt_list($result, $recordsTotal, $recordsFiltered);
			
			echo json_encode($output);
		}
	
	// UPDATE		
	public function updateDt()
		{
			$data			= $this->m_globalval->getAllData();		
			$form_name		= $data["form_name"];
			
			$addtionalParam	= $this->m_param->updateDt($data);
			$queryResult1	= $this->m_crud->updateDt("FR_APL_01", $addtionalParam);
			
			if(count($this->input->post($form_name[143]))>0)
				{
					$addtionalParam	= $this->m_param->deleteDt_APL01_UK($data, $this->input->post($form_name[134]));
					$queryResult2	= $this->m_crud->deleteDt("APL01_UK", $addtionalParam);
			
					$paramArr		= $this->m_param->saveDt_APL01_UK($data, $this->input->post($form_name[134]));
					$queryResult3	= $this->m_crud->insertArrDt("APL01_UK", $paramArr);
				}
				
			if(count($this->input->post($form_name[139]))>0)
				{
					$addtionalParam	= $this->m_param->deleteDt_APL01_bukti($data, $this->input->post($form_name[134]));
					$queryResult4	= $this->m_crud->deleteDt("APL01_BUKTI", $addtionalParam);
			
					$paramArr		= $this->m_param->saveDt_APL01_bukti($data, $this->input->post($form_name[134]));
					$queryResult5	= $this->m_crud->insertArrDt("APL01_BUKTI", $paramArr);
				}
			
			echo '1';
		}
		
	public function updateFile()
		{
			$data			= $this->m_globalval->getAllData();		
			$form_name		= $data["form_name"];
			
			/*$addtionalParam	= $this->m_param->updateDt($data);
			$queryResult1	= $this->m_crud->updateDt("FR_APL_01", $addtionalParam);
			
			if(count($this->input->post($form_name[143]))>0)
				{
					$addtionalParam	= $this->m_param->deleteDt_APL01_UK($data, $this->input->post($form_name[134]));
					$queryResult2	= $this->m_crud->deleteDt("APL01_UK", $addtionalParam);
			
					$paramArr		= $this->m_param->saveDt_APL01_UK($data, $this->input->post($form_name[134]));
					echo $this->m_crud->insertArrDt("APL01_UK", $paramArr);
				}
			else
				{
					echo $queryResult1;
				}*/
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
