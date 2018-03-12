<?php
	$data["dummy"] = "dummy";
	$this->load->view("v_layout_header", $data);	
	$this->load->view("v_layout_menu");	
	$this->load->view("v_layout_title", $data);	
	$this->load->view($dview, $data);
	//$this->load->view($dview."_event");
	$this->load->view("v_layout_footer");
?>