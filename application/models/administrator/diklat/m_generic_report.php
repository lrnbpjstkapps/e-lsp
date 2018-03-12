<?php
	class ReportKaryawanModel extends CI_Model{	
	
		var $table = 'NILAI_JENIS_DIKLAT';
		var $column_order = array(
			NULL, NULL, 'UNIT_KERJA', 'NPP',
			'NAMA_PEGAWAI', NULL, NULL, 'STATUS_KEPEGAWAIAN',
			'KARIR_UTAMA','KARIR_MADYA','KARIR_MUDA', 'DIKLAT_DPK', 'DIKLAT_PENSIUN'); 
		var $column_search = array(
			'UNIT_KERJA', 'NPP',
			'NAMA_PEGAWAI', 'STATUS_KEPEGAWAIAN'); 
		var $order1 = array('UNIT_KERJA' => 'asc');	
		var $order2 = array('NAMA_PEGAWAI' => 'asc');
		var $order3 = array('NPP' => 'asc');			
		var $order4 = array('STATUS_KEPEGAWAIAN' => 'asc');
		var $order5 = array('KARIR_UTAMA' => 'asc');
		var $order6 = array('KARIR_MADYA' => 'asc');
		var $order7 = array('KARIR_MUDA' => 'asc');
		var $order8 = array('DIKLAT_DPK' => 'asc');
		var $order9 = array('DIKLAT_PENSIUN' => 'asc');
		
		function selectOne($npp){
			$query = "SELECT * FROM KARYAWAN WHERE NPP='".$npp."'";
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectAll(){
			$this->db->from('NILAI_JENIS_DIKLAT');
			$this->db->where('WILAYAH', $_GET['wilayah']);
			if($_GET['unitKerja']!="-- Select All --"){
				$this->db->where('UNIT_KERJA', $_GET['unitKerja']);
			}
			$order1 = $this->order1;
			$this->db->order_by(key($order1), $order1[key($order1)]);
			$order2 = $this->order2;
			$this->db->order_by(key($order2), $order2[key($order2)]);
			$order3 = $this->order3;
			$this->db->order_by(key($order3), $order3[key($order3)]);
			$order4 = $this->order4;
			$this->db->order_by(key($order4), $order4[key($order4)]);
			$order5 = $this->order5;
			$this->db->order_by(key($order5), $order5[key($order5)]);
			$order6 = $this->order6;
			$this->db->order_by(key($order6), $order6[key($order6)]);
			$order7 = $this->order7;
			$this->db->order_by(key($order7), $order7[key($order7)]);
			$order8 = $this->order8;
			$this->db->order_by(key($order8), $order8[key($order8)]);
			$order9 = $this->order9;
			$this->db->order_by(key($order9), $order9[key($order9)]);
			
			$query = $this->db->get();
			return $query->result();
		}
		
		function selectDistinctUnitKerja($tbl, $field, $sort){
			$query = "SELECT DISTINCT ".$field." FROM ".$tbl." WHERE IS_ACTIVE='1' ORDER BY ".$field." ".$sort;
			$result = $this->db->query($query);
			return $result;
		}
		
		function selectDistinctUnitKerjaByWilayah($tbl, $field, $sort, $wilayah){
			$query = "SELECT DISTINCT ".$field." FROM ".$tbl." WHERE WILAYAH = '".$wilayah."' AND IS_ACTIVE='1' ORDER BY ".$field." ".$sort;
			$result = $this->db->query($query);
			return $result;
		}
		
		function insert($dataTbl){			
			$fields = "(UUID_KARYAWAN, NPP, NAMA_PEGAWAI, UNIT_KERJA, WILAYAH, GOLONGAN, USR_CRT, DTM_CRT, IS_ACTIVE)";
			$values = "(";
			$values.="UUID()";
			$values.=",'".$dataTbl['NPP']."'";
			$values.=",'".str_replace("'", "\'", $dataTbl['NAMA_PEGAWAI'])."'";
			$values.=",'".$dataTbl['UNIT_KERJA']."'";
			$values.=",'".$dataTbl['WILAYAH']."'";
			$values.=",'".$dataTbl['GOLONGAN']."'";
			$values.=",'".$dataTbl['USR_CRT']."'";
			$values.=",NOW()";
			$values.=",'1'";
			$values .= ")";
			$query = "INSERT INTO `KARYAWAN` ".$fields." VALUES ".$values;
			$this->db->query($query);
		}
		
		function update($npp, $dataTbl){
			$query = "UPDATE `KARYAWAN` SET ";
			$query .= "NAMA_PEGAWAI = '".$dataTbl['NAMA_PEGAWAI']."', ";
			$query .= "WILAYAH = '".$dataTbl['WILAYAH']."', ";
			$query .= "GOLONGAN = '".$dataTbl['GOLONGAN']."', ";
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
	 
		private function _get_datatables_query(){
			$this->db->from('NILAI_JENIS_DIKLAT');
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
			$this->db->where('WILAYAH', $_POST['wilayah']);
			if($_POST['unitKerja']!="-- Select All --"){
				$this->db->where('UNIT_KERJA', $_POST['unitKerja']);
			}
			
			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order1)){
				$order1 = $this->order1;
				$this->db->order_by(key($order1), $order1[key($order1)]);
				$order2 = $this->order2;
				$this->db->order_by(key($order2), $order2[key($order2)]);
				$order3 = $this->order3;
				$this->db->order_by(key($order3), $order3[key($order3)]);
				$order4 = $this->order4;
				$this->db->order_by(key($order4), $order4[key($order4)]);
				$order5 = $this->order5;
				$this->db->order_by(key($order5), $order5[key($order5)]);
				$order6 = $this->order6;
				$this->db->order_by(key($order6), $order6[key($order6)]);
				$order7 = $this->order7;
				$this->db->order_by(key($order7), $order7[key($order7)]);
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
			$this->db->where('WILAYAH', $_POST['wilayah']);
			if($_POST['unitKerja']!="-- Select All --"){
				$this->db->where('UNIT_KERJA', $_POST['unitKerja']);
			}
			return $this->db->count_all_results();
		}
	}
?>