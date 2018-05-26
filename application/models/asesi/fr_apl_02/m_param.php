<?php
	class m_param extends CI_Model{	
	
		// logical operators	: ALL, AND, ANY, BETWEEN, EXISTS, IN, LIKE, NOT, OR, SOME
		// comparison operators	: =, <=, >=, <>, <, >
		// READ		: optComp & optLogic
		// UPDATE	: optComp & optLogic
		// DELETE	: optComp & optLogic
	
		function uniqidReal($lenght) {
			// uniqid gives 10 chars, but you could adjust it to your needs.
			if (function_exists("random_bytes")) {
				$bytes = random_bytes(ceil($lenght / 2));
			} elseif (function_exists("openssl_random_pseudo_bytes")) {
				$bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
			} else {
				throw new Exception("no cryptographically secure random function available");
			}
			return strtoupper(substr(bin2hex($bytes), 0, $lenght));
		}
	
		// CREATE
		public function save_fId_181_APL_02($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				
				$param 			= array
					(
						"UUID_APL02"			=> "'".$this->uuid->v4()."'",
						"UUID_USER"				=> "'d8c702c5-4e7f-11e8-bf00-00ff0b0c062f'",
						"UUID_APL01"			=> "'".$this->input->post($form_name[134])."'",
						"NO_DOKUMEN"			=> "'".$this->uniqidReal('7')."APL02'",
						"USR_CRT"				=> "'".$application[102]."'",
						"DTM_CRT"				=> "NOW()",	
						"IS_ACTIVE"				=> "'1'"							
					);
				
				return $param;
			}
			
		public function save_fId_181_ANS_APL_02($data)
			{
				$application		= $data['application'];
				$form_name 			= $data['form_name'];
				$listKUK			= $data['listKUK'];
				$uuidApl02			= $data['UUID_APL02'];
				
				for($i = 0; $i < $listKUK->num_rows(); $i++){
					if(count($this->input->post($form_name[136].'_'.$i))>0)
						{
							$uuidBukti = "";
							$j = 0;
							foreach($this->input->post($form_name[136].'_'.$i) as $val)
								{
									if($j > 0)
										{
											$uuidBukti .= ';'.$val;
										}
									else
										{
											$uuidBukti .= $val;
										}
									$j++;
								}
								
							$paramArr[$i]	= array
								(
									"UUID_ANS_APL02"		=> "'".$this->uuid->v4()."'",
									"UUID_USER"				=> "'d8c702c5-4e7f-11e8-bf00-00ff0b0c062f'",
									"UUID_APL01"			=> "'".$this->input->post($form_name[134])."'",
									"UUID_APL02"			=> $uuidApl02,
									"UUID_UK"				=> "'".$this->input->post($form_name[105].'_'.$i)."'",
									"UUID_EK"				=> "'".$this->input->post($form_name[109].'_'.$i)."'",
									"UUID_KUK"				=> "'".$this->input->post($form_name[113].'_'.$i)."'",
									"IS_KOMPETEN"			=> "'".$this->input->post($form_name[149].'_'.$i)."'",
									"UUID_BUKTI"			=> "'".$uuidBukti."'",
									"USR_CRT"				=> "'".$application[102]."'",
									"DTM_CRT"				=> "NOW()",	
									"IS_ACTIVE"				=> "'1'"							
								);
						}
					else
						{
							$paramArr[$i]	= array
								(
									"UUID_ANS_APL02"		=> "'".$this->uuid->v4()."'",
									"UUID_USER"				=> "'d8c702c5-4e7f-11e8-bf00-00ff0b0c062f'",
									"UUID_APL01"			=> "'".$this->input->post($form_name[134])."'",
									"UUID_APL02"			=> $uuidApl02,
									"UUID_UK"				=> "'".$this->input->post($form_name[105].'_'.$i)."'",
									"UUID_EK"				=> "'".$this->input->post($form_name[109].'_'.$i)."'",
									"UUID_KUK"				=> "'".$this->input->post($form_name[113].'_'.$i)."'",
									"IS_KOMPETEN"			=> "'".$this->input->post($form_name[149].'_'.$i)."'",
									"USR_CRT"				=> "'".$application[102]."'",
									"DTM_CRT"				=> "NOW()",	
									"IS_ACTIVE"				=> "'1'"							
								);
						}
				}
				
				return $paramArr;
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
						"UUID_APL02"	=> "'".$uuid."'",
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
			
		public function getADt_FN134($data)
			{
				$form_name 		= $data['form_name'];
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 			= array
					(
						"UUID_APL01"	=> "'".$this->input->post($form_name[134])."'",
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
			
		public function getDt_FN136($uuid)
			{
				$returnedData			= array();
				$optComp				= array();	
				$optLogic				= array();	
				$order					= array();
				
				$condition 				= array
					(
						"UUID_USER"		=> "'".$uuid."'",
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
				
				$order 					= array
					(
						"KETERANGAN ASC"
					);
					
				$returnedData['condition'] 	= $condition;
				$returnedData['optComp']	= $optComp;
				$returnedData['optLogic']	= $optLogic;
				$returnedData['order']		= $order;
				return $returnedData;
			}
			
		public function getDt_142($uuid)
			{				
				$condition 				= array
					(
						"UUID_USER"		=> "'".$uuid."'",
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
					
				$order 					= array
					(
						"KETERANGAN ASC"
					);
					
				$returnedData				= array();	
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
						$row[] 	= $values->NO_DOKUMEN02;
						$row[] 	= $values->NO_DOKUMEN01;
						$row[] 	= $values->NAMA_SKEMA;
						$row[] 	= date('d M y - H:i', strtotime($values->DTM_CRT));
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_APL02."'".')"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_APL02."'".')"><i class="fa fa-trash"></i></a>';
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
						//"UUID_ADM"				=> "'".$this->input->post($form_name[100])."'",
						"NAMA_LENGKAP"			=> "'".$this->input->post($form_name[115])."'",
						"TEMPAT_LAHIR"			=> "'".$this->input->post($form_name[116])."'",
						"TGL_LAHIR"				=> "'".$this->input->post($form_name[117])."'",
						"JENIS_KELAMIN"			=> "'".$this->input->post($form_name[118])."'",
						"KEBANGSAAN"			=> "'".$this->input->post($form_name[119])."'",
						"ALAMAT_RUMAH"			=> "'".$this->input->post($form_name[120])."'",
						"KODE_POS_RUMAH"		=> "'".$this->input->post($form_name[121])."'",
						"NO_TLP_RUMAH"			=> "'".$this->input->post($form_name[122])."'",
						"NO_TLP_HP"				=> "'".$this->input->post($form_name[123])."'",
						"EMAIL"					=> "'".$this->input->post($form_name[124])."'",
						"PENDIDIKAN_TERAKHIR"	=> "'".$this->input->post($form_name[125])."'",
						"NAMA_PERUSAHAAN"		=> "'".$this->input->post($form_name[126])."'",
						"JABATAN"				=> "'".$this->input->post($form_name[127])."'",
						"ALAMAT_KANTOR"			=> "'".$this->input->post($form_name[128])."'",
						"KODE_POS_PERUSAHAAN"	=> "'".$this->input->post($form_name[129])."'",
						"NO_TLP_KANTOR"			=> "'".$this->input->post($form_name[130])."'",
						"FAX_KANTOR"			=> "'".$this->input->post($form_name[131])."'",
						"EMAIL_KANTOR"			=> "'".$this->input->post($form_name[132])."'",
						"TUJUAN_ASESMEN"		=> "'".$this->input->post($form_name[133])."'",						
						"JENIS_SKEMA"			=> "'".$this->input->post($form_name[144])."'",						
						"UUID_SKEMA"			=> "'".$this->input->post($form_name[100])."'",						
						"USR_UPD"				=> "'".$application[102]."'",
						"DTM_UPD"				=> "NOW()"										
					);			
				
				$condition		= array
					(
						"UUID_APL01"	=> "'".$this->input->post($form_name[134])."'"
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
						"UUID_APL02"	=> "'".$uuid."'"
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
		public function isFN101valid($uuid, $value)
			{
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();
				$order			= array();
				
				if($this->input->post($uuid) != "")
					{
						$condition 		= array
							(
								"UUID_SKEMA"	=> "'".$this->input->post($uuid)."'",
								"NOMOR_SKEMA"	=> "'".$this->input->post($value)."'"					
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
								"NOMOR_SKEMA"	=> "'".$this->input->post($value)."'"					
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