<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	// LSP		
	public function __construct()
		{
			parent::__construct();
			$this->load->model("common/m_globalval", "m_globalval");
			$this->load->model("common/m_crud", "m_crud");
		}
	
	public function index()
		{		
			$data				= $this->m_globalval->getAllData();
			$layout				= $data['layout'];
			$view				= $data['view'];
			
			$data["dview"]		= $view[112];
			$data["dviewEvent"]	= $view[113];
			$data["dlayoutMenu"]	= $layout[102];
			$this->load->view($layout[100], $data);
		}
}
