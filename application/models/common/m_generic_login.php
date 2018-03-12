<?php
	class User extends CI_Model{	
		function login($loginId, $password){
			$query = "SELECT * FROM USER AS USR JOIN ROLE AS ROL ON USR.UUID_ROLE = ROL.UUID_ROLE WHERE USR.LOGIN_ID='".$loginId."' AND USR.PASSWORD='".$password."'";
			$result = $this->db->query($query);
			//echo $query;
			return $result;
		}
		function selectOneByUuid($uuid){
			$query = "SELECT * FROM USER WHERE UUID_USER='".$uuid."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectOneByLoginId($loginId){
			$query = "SELECT * FROM USER WHERE LOGIN_ID='".$loginId."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectOneCustomCekExistingLoginId($loginIdLama, $loginIdBaru){
			$query = "SELECT * FROM USER WHERE LOGIN_ID='".$loginIdBaru."' AND LOGIN_ID != '".$loginIdLama."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectOneByEmail($email){
			$query = "SELECT * FROM USER WHERE EMAIL='".$email."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectOneCustomCekExistingEmail($emailLama, $emailBaru){
			$query = "SELECT * FROM USER WHERE EMAIL='".$emailBaru."' AND EMAIL != '".$emailLama."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectAll($order, $sort){
			$query = "SELECT * FROM KARYAWAN WHERE IS_ACTIVE='1' ORDER BY ".$order." ".$sort;
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectDistinctByAColumn($tbl, $field, $sort){
			$query = "SELECT DISTINCT ".$field." FROM ".$tbl." WHERE IS_ACTIVE='1' ORDER BY ".$field." ".$sort;
			$result = $this->db->query($query);
			return $result;
		}
		
		function insert($dataTbl){			
			$fields = "(UUID_USER, UUID_ROLE, LOGIN_ID, NAMA, EMAIL, NO_HP, PASSWORD,
			USR_CRT, DTM_CRT, IS_ACTIVE)";
			$values = "(";
			$values.="UUID()";
			$values.=",'".$dataTbl['UUID_ROLE']."'";
			$values.=",'".$dataTbl['LOGIN_ID']."'";
			$values.=",'".$dataTbl['NAMA']."'";
			$values.=",'".$dataTbl['EMAIL']."'";
			$values.=",'".$dataTbl['NO_HP']."'";
			$values.=",'".$dataTbl['PASSWORD']."'";
			$values.=",'".$dataTbl['USR_CRT']."'";
			$values.=",NOW()";
			$values.=",'1'";
			$values .= ")";
			$query = "INSERT INTO `USER` ".$fields." VALUES ".$values;
			$this->db->query($query);
		}
		
		function insertByIsActive($dataTbl, $isActive){			
			$fields = "(UUID_KARYAWAN, NPP, NAMA_PEGAWAI, UNIT_KERJA, WILAYAH, GOLONGAN, USR_CRT, DTM_CRT, IS_ACTIVE)";
			$values = "(";
			$values.="UUID()";
			$values.=",'".$dataTbl['NPP']."'";
			$values.=",'".$dataTbl['NAMA_PEGAWAI']."'";
			$values.=",'".$dataTbl['UNIT_KERJA']."'";
			$values.=",'".$dataTbl['WILAYAH']."'";
			$values.=",'".$dataTbl['GOLONGAN']."'";
			$values.=",'".$dataTbl['USR_CRT']."'";
			$values.=",NOW()";
			$values.=",'".$isActive."'";
			$values .= ")";
			$query = "INSERT INTO `KARYAWAN` ".$fields." VALUES ".$values;
			$this->db->query($query);
		}
		
		function update($npp, $dataTbl){
			$query = "UPDATE `KARYAWAN` SET ";
			$query .= "NAMA_PEGAWAI = '".$dataTbl['NAMA_PEGAWAI']."', ";
			$query .= "WILAYAH = '".$dataTbl['WILAYAH']."', ";
			$query .= "GOLONGAN = '".$dataTbl['GOLONGAN']."', ";
			if($dataTbl['PASSWORD']!=""){
				$query .= "PASSWORD = '".$dataTbl['PASSWORD']."', ";
			}
			$query .= "USR_UPD = '".$dataTbl['USR_UPD']."', ";
			$query .= "DTM_UPD = NOW(), ";
			$query .= "IS_ACTIVE = '1' ";
			$query .= "WHERE ( NPP = '".$npp."')";
			$this->db->query($query);
		}
		
		function updateByLoginId($loginId, $dataTbl){
			$query = "UPDATE `USER` SET ";	
			$query .= "PASSWORD = '".$dataTbl['PASSWORD']."', ";
			$query .= "DTM_UPD = NOW()";
			$query .= "WHERE ( LOGIN_ID = '".$loginId."')";
			$this->db->query($query);
		}
		
		function updateByUuid($uuid, $dataTbl){
			$query = "UPDATE `USER` SET ";			
			$query .= "UUID_USER = '".$dataTbl['UUID_USER']."', ";
			$query .= "UUID_ROLE = '".$dataTbl['UUID_ROLE']."', ";			
			$query .= "LOGIN_ID = '".$dataTbl['LOGIN_ID']."', ";
			$query .= "NAMA = '".$dataTbl['NAMA']."', ";
			$query .= "EMAIL = '".$dataTbl['EMAIL']."', ";			
			$query .= "NO_HP = '".$dataTbl['NO_HP']."', ";
			$query .= "USR_UPD = '".$dataTbl['USR_UPD']."', ";
			if($dataTbl['PASSWORD']!=""){
				$query .= "PASSWORD = '".$dataTbl['PASSWORD']."', ";
			}
			$query .= "DTM_UPD = NOW(), ";
			$query .= "IS_ACTIVE = '".$dataTbl['IS_ACTIVE']."' ";
			$query .= "WHERE ( UUID_USER = '".$uuid."')";
			$this->db->query($query);
		}
		
		function delete($npp, $usr){
			$query = "UPDATE `KARYAWAN` SET ";
			$query .= "IS_ACTIVE = '0', ";
			$query .= "USR_UPD = '".$usr."', ";
			$query .= "DTM_UPD = NOW() ";
			$query .= "WHERE ( NPP = '".$npp."')";
			$this->db->query($query);
		}
		
		function deleteByUuid($uuid, $usr){
			$query = "UPDATE `USER` SET ";
			$query .= "IS_ACTIVE = '0', ";
			$query .= "USR_UPD = '".$usr."', ";
			$query .= "DTM_UPD = NOW() ";
			$query .= "WHERE ( UUID_USER = '".$uuid."')";
			$this->db->query($query);
		}
		
		var $table = 'USER AS USE';
		var $column_order = array(null, 'LOGIN_ID','NAMA','EMAIL',null, 'ROLE_NAME', null, null); 
		var $column_search = array('LOGIN_ID','NAMA','EMAIL', 'ROLE_NAME'); 
		var $order = array('NAMA' => 'asc'); 
	 
		private function _get_datatables_query(){
			$this->db->from($this->table);
			$this->db->join("ROLE AS ROL", "USE.UUID_ROLE=ROL.UUID_ROLE", "LEFT");
			$i = 0;
		
			foreach ($this->column_search as $item){
				if($_POST['search']['value']){					
					if($i===0){
						$this->db->group_start(); 
						$this->db->like($item, $_POST['search']['value']);
					}
					else{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i) 
						$this->db->group_end(); 
				}
				$i++;
			}
			
			$this->db->where('USE.IS_ACTIVE', '1');
			
			if(isset($_POST['order'])) 
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		function get_datatables(){
			$this->_get_datatables_query();
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		function count_filtered(){
			$this->_get_datatables_query();
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function count_all(){
			$this->db->from($this->table);
			$this->db->where('IS_ACTIVE', '1');
			return $this->db->count_all_results();
		}
	}
?>