<?php
	class m_param extends CI_Model{	
	
		// logical operators	: ALL, AND, ANY, BETWEEN, EXISTS, IN, LIKE, NOT, OR, SOME
		// comparison operators	: =, <=, >=, <>, <, >
		// READ		: optComp & optLogic
		// UPDATE	: optComp & optLogic
		// DELETE	: optComp & optLogic
			
		// CREATE
		public function saveDt($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$filename		= $data['filename'];
				
				$param 			= array
					(
						"UUID_BUKTI"	=> "UUID()",
						"UUID_USER"		=> "'d8c702c5-4e7f-11e8-bf00-00ff0b0c062f'",
						"KETERANGAN"	=> "'".$this->input->post($form_name[138])."'",
						"URL"			=> "'assets/bukti_kelengkapan/".$filename.".pdf'",
						"USR_CRT"		=> "'".$application[102]."'",
						"DTM_CRT"		=> "NOW()",	
						"IS_ACTIVE"		=> "'1'"							
					);
				
				return $param;
			}
			
		public function uploadDt($data)
			{
				$form_name 		= $data['form_name'];
				
				$config['upload_path']          = './assets/bukti_kelengkapan';
				$config['allowed_types']        = 'pdf';
				$config['max_size']             = 9048;
				$config['file_name'] 			= 'LSP_BPJSTK_file_'.$this->uuid->v4();
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload($form_name[137]))
					{
						return -1;
					}
				else
				{
					return $config['file_name'];
				}
			}
		
		// READ
		public function getADt($uuid)
			{
				$returnedData			= array();
				$optComp				= array();	
				$optLogic				= array();	
				$order					= array();
				
				$condition 				= array
					(
						"UUID_BUKTI"	=> "'".$uuid."'",
						"IS_ACTIVE"		=> "'1'"							
					);
					
				$optComp 				= array
					(
						"=",
						"="
					);
					
				$optLogic 				= array
					(
						"AND"
					);
					
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
		
		public function getDt_list($result, $recordsTotal, $recordsFiltered)
			{			
				$data 		= array();
				$no			= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;
						$row[] 	= $values->KETERANGAN;
						$row[] 	= '<a href="'.base_url().$values->URL.'" target="_blank"><i class="fa fa-file"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_BUKTI."'".')"><i class="fa fa-trash"></i></a>';
						$data[]	= $row;
					}
			
				$output 	= array
					(
						"draw" => $_POST['draw'],
						"recordsTotal" => $recordsTotal, 
						"recordsFiltered" => $recordsFiltered,
						"data" => $data
					);
				
				return $output;
			}
		
		// UPDATE
		public function updateDt($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$filename		= $data['filename'];
				$returnedData	= array();				
				$condition		= array();	
				$optComp		= array();			
				$optLogic		= array(); 
				
				$param 			= array
					(
						"KETERANGAN"	=> "'".$this->input->post($form_name[138])."'",
						"URL"			=> "'/assets/bukti_kelengkapan/".$filename.".pdf'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_BUKTI"	=> "'".$this->input->post($form_name[136])."'"
					);
				
				$optComp 		= array
					(
						"="
					);	

				$returnedData['param'] 		= $param;				
				$returnedData['condition']	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				
				return $returnedData;
			}
			
		public function updateIsActiveDt($data, $uuid)
			{
				$application	= $data['application'];
				$returnedData	= array();				
				$condition		= array();	
				$optComp		= array();			
				$optLogic		= array(); 
				
				$param 			= array
					(
						"IS_ACTIVE"		=> "'0'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_BUKTI"	=> "'".$uuid."'"
					);
				
				$optComp 		= array
					(
						"="
					);	

				$returnedData['param'] 		= $param;				
				$returnedData['condition']	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				
				return $returnedData;
			}
		
		// DELETE
		public function deleteDt($data, $uuid)
			{
				$returnedData	= array();
				$condition		= array();
				$optComp		= array();	
				$optLogic		= array();	 		
				
				$condition		= array
					(
						"UUID_BUKTI"	=> "'".$uuid."'"
					);
					
				$optComp 		= array
					(
						"="
					);
					
				$returnedData['condition']	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				return $returnedData;
			}

		// VALIDATION
		public function isFN138valid($uuid, $value)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();
				$order			= array();
				
				if($this->input->post($uuid) != "")
					{
						$condition 		= array
							(
								"UUID_BUKTI"	=> "'".$this->input->post($uuid)."'",
								"KETERANGAN"	=> "'".$this->input->post($value)."'"					
							);
						
						$optComp 		= array
							(
								"<>",
								"="
							);
						
						$optLogic 		= array
							(
								"AND"
							);
					}
				else
					{
						$condition 		= array
							(
								"KETERANGAN"	=> "'".$this->input->post($value)."'"					
							);
						
						$optComp 		= array
							(
								"="
							);
					}
					
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
	}
?>