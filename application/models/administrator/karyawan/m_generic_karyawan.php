<?php
	class Karyawan extends CI_Model{	
	
		function selectOne($npp){
			$query = "SELECT * FROM KARYAWAN WHERE NPP='".$npp."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectAll($order, $sort){
			$query = "SELECT * FROM KARYAWAN WHERE IS_ACTIVE='1' ORDER BY ".$order." ".$sort;
			$result = $this->db->query($query);
			return $result;
		}
		
		function getLastUpdated(){
			$query = "SELECT *
				FROM (
					SELECT *
					FROM (SELECT DTM_UPD FROM KARYAWAN ORDER BY DTM_UPD DESC LIMIT 1) AS TBL1 
					UNION 
					SELECT *
					FROM (SELECT DTM_CRT FROM KARYAWAN ORDER BY DTM_CRT DESC LIMIT 1) AS TBL2
				) AS DTM_UPD
				ORDER BY DTM_UPD DESC
				LIMIT 1";
			$result = $this->db->query($query);
			return $result;
		}
		
		function insert($dataTbl){			
			$fields = "(UUID_KARYAWAN, NPP, NAMA_PEGAWAI, UNIT_KERJA, WILAYAH, GRADE, GOLONGAN, STATUS_KEPEGAWAIAN, USR_CRT, DTM_CRT, IS_ACTIVE)";
			$values = "(";
			$values.="UUID()";
			$values.=",'".$dataTbl['NPP']."'";
			$values.=",'".$dataTbl['NAMA_PEGAWAI']."'";
			$values.=",'".$dataTbl['UNIT_KERJA']."'";
			$values.=",'".$dataTbl['WILAYAH']."'";
			$values.=",'".$dataTbl['GRADE']."'";
			$values.=",'".$dataTbl['GOLONGAN']."'";
			$values.=",'".$dataTbl['STATUS_KEPEGAWAIAN']."'";
			$values.=",'".$dataTbl['USR_CRT']."'";
			$values.=",NOW()";
			$values.=",'1'";
			$values .= ")";
			$query = "INSERT INTO `KARYAWAN` ".$fields." VALUES ".$values;
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
			$query .= "GRADE = '".$dataTbl['GRADE']."', ";
			$query .= "GOLONGAN = '".$dataTbl['GOLONGAN']."', ";
			$query .= "UNIT_KERJA = '".$dataTbl['UNIT_KERJA']."', ";
			$query .= "STATUS_KEPEGAWAIAN = '".$dataTbl['STATUS_KEPEGAWAIAN']."', ";
			$query .= "USR_UPD = '".$dataTbl['USR_UPD']."', ";
			$query .= "DTM_UPD = NOW(), ";
			$query .= "IS_ACTIVE = '1' ";
			$query .= "WHERE ( NPP = '".$npp."')";
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
		
		var $table = 'KARYAWAN';
		var $column_order = array(null, 'NPP','NAMA_PEGAWAI','UNIT_KERJA','WILAYAH','GRADE','GOLONGAN','STATUS_KEPEGAWAIAN'); //set column field database for datatable orderable
		var $column_search = array('NPP','NAMA_PEGAWAI','UNIT_KERJA','WILAYAH','GRADE','GOLONGAN','STATUS_KEPEGAWAIAN'); //set column field database for datatable searchable 
		var $order = array('NAMA_PEGAWAI' => 'asc'); // default order 
	 
		private function _get_datatables_query(){
			$this->db->from($this->table);

			$i = 0;
		
			foreach ($this->column_search as $item) // loop column 
			{
				if($_POST['search']['value']) // if datatable send POST for search
				{
					
					if($i===0) // first loop
					{
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i) //last loop
						$this->db->group_end(); //close bracket
				}
				$i++;
			}
			
			$this->db->where('IS_ACTIVE', '1');
			
			if(isset($_POST['order'])) // here order processing
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