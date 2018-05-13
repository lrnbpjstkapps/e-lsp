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
				
				$param 			= array
					(
						"UUID_KUK"		=> "UUID()",
						"UUID_EK"		=> "'".$this->input->post($form_name[109])."'",
						"NOMOR_KUK"		=> "'".$this->input->post($form_name[112])."'",
						"PERNYATAAN"	=> "'".$this->input->post($form_name[111])."'",	
						"PERTANYAAN"	=> "'".$this->input->post($form_name[114])."'",							
						"USR_CRT"		=> "'".$application[102]."'",
						"DTM_CRT"		=> "NOW()",	
						"IS_ACTIVE"		=> "'1'"							
					);
				
				return $param;
			}
		
		// READ
		public function getADt($uuid)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 			= array
					(
						"UUID_KUK"	=> "'".$uuid."'",
						"IS_ACTIVE"	=> "'1'"							
					);
					
				$optComp 		= array
					(
						"=",
						"="
					);
					
				$optLogic 		= array
					(
						"AND"
					);
					
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
			
		public function getADt_UK($data)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 		= array
					(
						"IS_ACTIVE"		=> "'1'",		
						"UUID_UK"		=> "'".$data['uuid1']."'"						
					);
				$optComp 		= array
					(
						"=",
						"="
					);
				$optLogic 		= array
					(
						"AND"
					);
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
			
		public function getADt_EK($data)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 		= array
					(
						"IS_ACTIVE"		=> "'1'",		
						"UUID_EK"		=> "'".$data['uuid2']."'"						
					);
				$optComp 		= array
					(
						"=",
						"="
					);
				$optLogic 		= array
					(
						"AND"
					);
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}	
			
		public function getDt_105($data)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 		= array
					(
						"IS_ACTIVE"		=> "'1'"							
					);
				$optComp 		= array
					(
						"="
					);
				$order 			= array
					(
						"KODE_UK"
					);
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}		
		
		public function getDt_109($data)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 		= array
					(
						"IS_ACTIVE"		=> "'1'",
						"UUID_UK"		=> "'".$data['uuid']."'"						
					);
				$optComp 		= array
					(
						"=",
						"="
					);
				$optLogic 		= array
					(
						"AND"
					);
				$order 			= array
					(
						"NOMOR_EK"
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
						$row[] 	= $values->NOMOR_KUK;
						$row[] 	= $values->PERNYATAAN;
						$row[] 	= $values->PERTANYAAN;
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_KUK."'".')"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_KUK."'".')"><i class="fa fa-trash"></i></a>';
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
				$returnedData	= array();				
				$condition		= array();	
				$optComp		= array();			
				$optLogic		= array(); 
				
				$param 			= array
					(
						"NOMOR_KUK"		=> "'".$this->input->post($form_name[112])."'",
						"PERNYATAAN"	=> "'".$this->input->post($form_name[111])."'",
						"PERTANYAAN"	=> "'".$this->input->post($form_name[114])."'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_KUK"		=> "'".$this->input->post($form_name[113])."'"
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
						"UUID_KUK"	=> "'".$uuid."'"
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
		public function isFN112valid($uuid, $value)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();
				$order			= array();
				
				if($this->input->post($uuid) != "")
					{
						$condition 		= array
							(
								"UUID_KUK"	=> "'".$this->input->post($uuid)."'",
								"NOMOR_KUK"	=> "'".$this->input->post($value)."'"					
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
								"NOMOR_KUK"	=> "'".$this->input->post($value)."'"					
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