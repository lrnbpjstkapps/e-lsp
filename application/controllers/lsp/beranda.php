<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	// ASESOR
	
	public function index()
	{
		$data = array();	
		
		$data["headerTitle"] = "E-LSP";
		$data["title"] = "Skema Sertifikasi";		
		$data["dview"] = "asesor/setting/skema_sertifikasi";
		
		$this->load->view('asesor/v_layout', $data);
	}
}
