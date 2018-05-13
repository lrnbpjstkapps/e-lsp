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
						"UUID_EK"	=> "UUID()",
						"UUID_UK"	=> "'".$this->input->post($form_name[105])."'",
						"NOMOR_EK"	=> "'".$this->input->post($form_name[108])."'",
						"NAMA_EK"	=> "'".$this->input->post($form_name[107])."'",						
						"USR_CRT"	=> "'".$application[102]."'",
						"DTM_CRT"	=> "NOW()",	
						"IS_ACTIVE"	=> "'1'"							
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
						"UUID_EK"	=> "'".$uuid."'",
						"IS_ACTIVE"		=> "'1'"							
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

		public function getDt_list($result, $recordsTotal, $recordsFiltered)
			{			
				$data 		= array();
				$no			= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;
						$row[] 	= $values->NOMOR_EK;
						$row[] 	= $values->NAMA_EK;
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_EK."'".')"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_EK."'".')"><i class="fa fa-trash"></i></a>';
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
						"NAMA_EK"		=> "'".$this->input->post($form_name[107])."'",
						"NOMOR_EK"		=> "'".$this->input->post($form_name[108])."'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_EK"		=> "'".$this->input->post($form_name[109])."'"
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
						"UUID_EK"	=> "'".$uuid."'"
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
		public function isFN107valid($uuid, $value)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();
				$order			= array();
				
				if($this->input->post($uuid) != "")
					{
						$condition 		= array
							(
								"UUID_EK"	=> "'".$this->input->post($uuid)."'",
								"NOMOR_EK"	=> "'".$this->input->post($value)."'"					
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
								"NOMOR_EK"	=> "'".$this->input->post($value)."'"					
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