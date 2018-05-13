<?php
	class m_list_kuk extends CI_Model{
		var $table = "KRITERIA_UNJUK_KERJA AS KUK";
		var $order1 = array('KUK.NOMOR_KUK' => 'asc'); 
		
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
				'KUK.NOMOR_KUK',
				'KUK.PERNYATAAN',
				'KUK.PERTANYAAN'
			);
			
		public function _get_datatables_query($uuid){
			$this->db->from($this->table);
			$this->db->join("ELEMEN_KOMPETENSI AS EK", "KUK.UUID_EK = EK.UUID_EK", "LEFT");
			
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
			
			$this->db->where('KUK.IS_ACTIVE', '1');
			$this->db->where('KUK.UUID_EK', $uuid); 
			
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
			$this->db->join("ELEMEN_KOMPETENSI AS EK", "KUK.UUID_EK = EK.UUID_EK", "LEFT");
			$this->db->where('KUK.IS_ACTIVE', '1');
			$this->db->where('KUK.UUID_EK', $uuid); 
			
			return $this->db->count_all_results();
		}
	}
?>