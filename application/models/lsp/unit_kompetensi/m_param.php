<?php
	class m_param extends CI_Model{	
	
		// logical operators	: ALL, AND, ANY, BETWEEN, EXISTS, IN, LIKE, NOT, OR, SOME
		// comparison operators	: =, <=, >=, <>, <, >
		// READ		: optComp & optLogic
		// UPDATE	: optComp & optLogic
		// DELETE	: optComp & optLogic
	
		// CREATE
		public function saveDt_UK($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$returnedData	= array();
				
				$param	 				= array
					(
						"UUID_UK"		=> "UUID()",
						"KODE_UK"		=> "'".$this->input->post($form_name[104])."'",
						"JUDUL_UK"		=> "'".$this->input->post($form_name[103])."'",
						"USR_CRT"		=> "'".$application[102]."'",
						"DTM_CRT"		=> "NOW()",	
						"IS_ACTIVE"		=> "'1'"						
					);
					
				return $param;
			}
		
		public function saveDt_SKE_UK($data, $uuid)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$paramArr		= array();
							
				for ($i = 0; $i < count($this->input->post($form_name[106])); $i++)
					{
						$paramArr[$i] 		= array
							(
								"UUID_SKEMA_UK"	=> "UUID()",
								"UUID_SKEMA"	=> "'".$this->input->post($form_name[106])[$i]."'",
								"UUID_UK"		=> "'".$uuid."'",
								"USR_CRT"		=> "'".$application[102]."'",
								"DTM_CRT"		=> "NOW()",	
								"IS_ACTIVE"		=> "'1'"						
							);
					}
					
				return $paramArr;
			}
		
		// READ
		public function getADt_UK($data)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				$form_name 		= $data['form_name'];
				
				$condition 			= array
					(
						"KODE_UK"	=> "'".$this->input->post($form_name[104])."'",
						"IS_ACTIVE"	=> "'1'"							
					);
				$optComp 			= array
					(
						"=",
						"="
					);
				$optLogic 			= array
					(
						"AND"
					);
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
			
		public function getADt_SKE_UK($result)
			{			
				$uuidSkema	= array();
				
				$no			= 0;
				foreach ($result as $values) 
					{			
						$uuidUK 		= $values->UUID_UK;
						$kodeUK 		= $values->KODE_UK;
						$judulUK 		= $values->JUDUL_UK;
						$uuidSkema[$no] = $values->UUID_SKEMA;
						$no++;
					}
			
				$output 	= array
					(
						"UUID_UK" 		=> $uuidUK,
						"KODE_UK" 		=> $kodeUK,
						"JUDUL_UK" 		=> $judulUK, 
						"UUID_SKEMA" 	=> $uuidSkema
					);
				
				return $output;
			}
		
		public function getDt_SKE()
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
						"NOMOR_SKEMA"
					);
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}	
		
		public function getDt_list_uk($result, $recordsTotal, $recordsFiltered)
			{			
				$data 		= array();
				$no			= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;					
						$row[] 	= $values->KODE_UK;
						$row[] 	= $values->JUDUL_UK;
						$row[] 	= '<a href="javascript:void(0)" onclick="listDt('."'".$values->UUID_UK."'".','."'".$values->KODE_UK."'".','."'".$values->JUDUL_UK."'".')" data-toggle="tooltip" title="List Skema Sertifikasi"><i class="fa fa-bars"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_UK."'".')" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_UK."'".')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>';
						$data[]	= $row;
					}
			
				$output 	= array
					(
						"draw" 				=> $_POST['draw'],
						"recordsTotal" 		=> $recordsTotal, 
						"recordsFiltered" 	=> $recordsFiltered,
						"data"	 			=> $data
					);
				
				return $output;
			}
		
		public function getDt_list_ske($result, $recordsTotal, $recordsFiltered)
			{			
				$data 		= array();
				$no			= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;
						$row[] 	= $values->NOMOR_SKEMA;
						$row[] 	= $values->NAMA_SKEMA;
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
		
		//UPDATE
		public function updateDt_UK($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$returnedData	= array();				
				$condition		= array();	
				$optComp		= array();			
				$optLogic		= array(); 
				
				$param 			= array
					(
						"JUDUL_UK"		=> "'".$this->input->post($form_name[103])."'",
						"KODE_UK"		=> "'".$this->input->post($form_name[104])."'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_UK"		=> "'".$this->input->post($form_name[105])."'"
					);
				
				$optComp 		= array
					(
						"="
					);	

				$optLogic 		= array
					(
					
					);	

				$returnedData['param'] 		= $param;				
				$returnedData['condition']	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				
				return $returnedData;
			}
		
		public function updateDt_SKE_UK($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				$returnedData	= array();				
				$condition		= array();	
				$optComp		= array();			
				$optLogic		= array(); 
				
				$param 			= array
					(
						"UUID_SKEMA"	=> "'".$this->input->post($form_name[102])."'",
						"JUDUL_UK"		=> "'".$this->input->post($form_name[103])."'",
						"KODE_UK"		=> "'".$this->input->post($form_name[104])."'",
						"USR_UPD"		=> "'".$application[102]."'",
						"DTM_UPD"		=> "NOW()"						
					);			
				
				$condition		= array
					(
						"UUID_UK"		=> "'".$this->input->post($form_name[105])."'"
					);
				
				$optComp 		= array
					(
						"="
					);	

				$optLogic 		= array
					(
					
					);	

				$returnedData['param'] 		= $param;				
				$returnedData['condition']	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				
				return $returnedData;
			}
		
		//DELETE
		public function deleteDt($uuid)
			{
				$returnedData	= array();
				$condition		= array();
				$optComp		= array();	
				$optLogic		= array();	 		
				
				$condition		= array
					(
						"UUID_UK"		=> "'".$uuid."'"
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
		public function isFN104valid($uuid, $value)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();
				$order			= array();
				
				if($this->input->post($uuid) != "")
					{
						$condition 		= array
							(
								"UUID_UK"	=> "'".$this->input->post($uuid)."'",
								"KODE_UK"	=> "'".$this->input->post($value)."'"					
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
								"KODE_UK"	=> "'".$this->input->post($value)."'"					
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