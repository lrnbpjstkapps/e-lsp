<?php
	$data["dummy"] 	= "dummy";
	$this->load->view($layout[101], $data);	
	$this->load->view($dlayoutMenu, $data);	
	$this->load->view($layout[103], $data);	
	if($dview!="")
		{
			$this->load->view($dview, $data);
		}
	$this->load->view($dviewEvent, $data);
	$this->load->view($layout[104], $data);
?>