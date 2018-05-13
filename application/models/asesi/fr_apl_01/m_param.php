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
		public function saveDt($data)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
				
				$param 			= array
					(
						"UUID_APL01"			=> "'".$this->uuid->v4()."'",
						"NO_DOKUMEN"			=> "'".$this->uniqidReal(7)."APL01'",
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
						"USR_CRT"				=> "'".$application[102]."'",
						"DTM_CRT"				=> "NOW()",	
						"IS_ACTIVE"				=> "'1'"							
					);
				
				return $param;
			}
			
		public function saveDt_APL01_UK($data, $uuid)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
			
				for ($i = 0; $i < count($this->input->post($form_name[143])); $i++)
					{
						$paramArr[$i] 		= array
							(
								"UUID_APL01_UK"	=> "UUID()",
								"UUID_APL01"	=> "'".$uuid."'",
								"UUID_UK"		=> "'".$this->input->post($form_name[143])[$i]."'",								
								"USR_CRT"		=> "'".$application[102]."'",
								"DTM_CRT"		=> "NOW()",	
								"IS_ACTIVE"		=> "'1'"						
							);
					}
				
				return $paramArr;
			}
			
		public function saveDt_APL01_bukti($data, $uuid)
			{
				$application	= $data['application'];
				$form_name 		= $data['form_name'];
			
				for ($i = 0; $i < count($this->input->post($form_name[139])); $i++)
					{
						$paramArr[$i] 		= array
							(
								"UUID_APL01_BUKTI"	=> "UUID()",
								"UUID_APL01"		=> "'".$uuid."'",
								"UUID_BUKTI"		=> "'".$this->input->post($form_name[139])[$i]."'",								
								"USR_CRT"			=> "'".$application[102]."'",
								"DTM_CRT"			=> "NOW()",	
								"IS_ACTIVE"			=> "'1'"						
							);
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
						"UUID_APL01"	=> "'".$uuid."'",
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
			
		public function getDt_142($uuid)
			{
				$returnedData			= array();
				$optComp				= array();	
				$optLogic				= array();	
				$order					= array();
				
				$condition 				= array
					(
						"UUID_USER"	=> "'".$uuid."'",
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
			
		public function getADt_FN101($data)
			{
				$form_name 		= $data['form_name'];
				$returnedData	= array();
				$optComp		= array();	
				$optLogic		= array();	
				$order			= array();
				
				$condition 			= array
					(
						"UUID_SKEMA"	=> "'".$this->input->post($form_name[102])."'",
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
			
		public function getDt_102($data)
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
						"NAMA_SKEMA"
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
						$row[] 	= $values->NO_DOKUMEN;
						$row[] 	= $values->NAMA_SKEMA;
						$row[] 	= date('d-M-y H.i', strtotime($values->DTM_CRT));
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_APL01."'".')"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_APL01."'".')"><i class="fa fa-trash"></i></a>';
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
						"UUID_APL01"	=> "'".$uuid."'"
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

			public function deleteDt_APL01_UK($data, $uuid)
			{
				$returnedData	= array();
				$condition		= array();
				$optComp		= array();	
				$optLogic		= array();	 		
				
				$condition		= array
					(
						"UUID_APL01"	=> "'".$uuid."'"
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
			
			public function deleteDt_APL01_bukti($data, $uuid)
			{
				$returnedData	= array();
				$condition		= array();
				$optComp		= array();	
				$optLogic		= array();	 		
				
				$condition		= array
					(
						"UUID_APL01"	=> "'".$uuid."'"
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