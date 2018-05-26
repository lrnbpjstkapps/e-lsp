<?php
	class m_list_ek extends CI_Model{
		var $table = "ELEMEN_KOMPETENSI AS EK";
		var $order1 = array('EK.NOMOR_EK' => 'asc'); 
		
		var $column_order = 
			array(
				null, 
				null,
				null,
				null, 
				null
			); 
			
		var $column_search = 
			array(			
				'EK.NOMOR_EK',
				'EK.NAMA_EK'
			);
			
		public function _get_datatables_query($uuid){
			$this->db->from($this->table);
			$this->db->join("UNIT_KOMPETENSI AS UK", "EK.UUID_UK = UK.UUID_UK", "LEFT");
			
			$i = 0;
			foreach ($this->column_search as $item){
				if($_POST['search']['value']){					
					if($i===0)
						{
							$this->db->group_start(); 
							$this->db->like($item, $_POST['search']['value']);
						}
					else
						{
							$this->db->or_like($item, $_POST['search']['value']);
						}
					if(count($this->column_search) - 1 == $i) 
						$this->db->group_end(); 
				}
				$i++;
			}
			
			$this->db->where('EK.IS_ACTIVE', '1');
			$this->db->where('UK.UUID_UK', $uuid); 
			
			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order1)){
				$order1 = $this->order1;
				$this->db->order_by(key($order1), $order1[key($order1)]);
			}
		}

		public function get_datatables($uuid){
			$this->_get_datatables_query($uuid);
			if($_POST['length'] != -1)
				$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		public function count_filtered($uuid){
			$this->_get_datatables_query($uuid);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function count_all($uuid){
			$this->db->from($this->table);
			$this->db->join("UNIT_KOMPETENSI AS UK", "EK.UUID_UK = UK.UUID_UK", "LEFT");
			$this->db->where('EK.IS_ACTIVE', '1');
			$this->db->where('UK.UUID_UK', $uuid); 
			
			return $this->db->count_all_results();
		}
	}
?>