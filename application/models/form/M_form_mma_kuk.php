<?php
class M_form_mma_kuk extends CI_Model {
		
	public function form_add($data, $form_name)
		{		
			$data[$form_name[234]] 	= "";
			$data[$form_name[235]] 	= "";

			
			return $data;
		}
		
	public function form_edit($data, $form_name, $result)
		{
			$i = 0;
			foreach ($result->result() as $row) {				
				$data[$form_name[234]][$i] 	= $row->JENIS_BUKTI;			
				$data[$form_name[235]][$i] 	= $row->METODE;	
				$i++;
			}					

			return $data;
		}		
}
