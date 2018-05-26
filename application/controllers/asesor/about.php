<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	// Asesor		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
		}
	
	public function index()
		{		
			$data					= $this->m_globalval->getAllData();
			$layout					= $data['layout'];
			$view					= $data['view'];
			
			$data["dview"]			= $view[135];
			$data["dviewEvent"]		= $view[136];
			$data["dlayoutMenu"]	= $layout[106];
			$this->load->view($layout[100], $data);
		}
}
