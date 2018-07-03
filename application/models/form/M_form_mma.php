<?php
class M_form_mma extends CI_Model {
		
	public function form_add($data, $form_name)
		{			
			$data["saveMethod"]		= "add";
			$data[$form_name[146]] 	= '-';
			$data[$form_name[163]] 	= '';
			$data[$form_name[140]] 	= '';
			$data[$form_name[134]] 	= '';
			$data[$form_name[168]] 	= '';
			$data[$form_name[148]] 	= '';
			$data[$form_name[169]] 	= '';
			$data[$form_name[170]] 	= '';
			$data[$form_name[171]] 	= '';
			$data[$form_name[172]] 	= '';
			$data[$form_name[173]] 	= '';
			$data[$form_name[115]]	= '';
			$data[$form_name[101]] 	= '';
			$data[$form_name[100]] 	= '';
			
			return $data;
		}
		
	public function form_edit($data, $form_name, $result)
		{
			$data["saveMethod"]		= "edit";
			$data[$form_name[146]] 	= $result->UUID_APL02;
			$data[$form_name[163]] 	= $result->UUID_ADM;
			$data[$form_name[140]] 	= $result->UUID_USER;
			$data[$form_name[134]] 	= $result->UUID_APL01;
			$data[$form_name[168]] 	= $result->NO_DOKUMEN;
			$data[$form_name[148]] 	= $result->TUK;
			$data[$form_name[169]] 	= $result->IS_KOMPETEN;
			$data[$form_name[170]] 	= $result->ALASAN_BLM_KOMPETEN;
			$data[$form_name[171]] 	= $result->IS_DILANJUTKAN;
			$data[$form_name[172]] 	= $result->CATATAN_1;
			$data[$form_name[173]] 	= $result->CATATAN_2;
			$data[$form_name[115]]	= $result->NAMA_LENGKAP;
			$data[$form_name[101]] 	= $result->NOMOR_SKEMA;
			$data[$form_name[100]] 	= $result->NAMA_SKEMA;
			
			return $data;
		}		
}
