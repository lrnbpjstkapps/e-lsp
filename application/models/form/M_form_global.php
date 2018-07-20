<?php
class M_form_global extends CI_Model {
		
	// Skema sertifikasi / klaster asesmen, TUK, Nama Asesor, Nama Peserta, Tanggal
	public function form_header_1($data, $form_name, $result)
		{
			$data[$form_name[100]] 		= $result->row()->NAMA_SKEMA;	
			$data[$form_name[101]]		= $result->row()->NOMOR_SKEMA;	
			$data[$form_name[148]]		= "Sewaktu";					
			$data[$form_name[147]]		= "Dwi Andriani Puspitasari";
			$data[$form_name[153]]		= "12 Desember 2018";			
			$data[$form_name[115]]		= "Karid Nurvenus";	

			return $data;
		}		
}
