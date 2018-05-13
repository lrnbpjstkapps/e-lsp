<?php
	class m_list_ske extends CI_Model{
		var $table = "SKEMA_UK AS SKE_UK";
		var $order1 = array('UK.KODE_UK' => 'asc'); 
		var $order2 = array('SKE.NOMOR_SKEMA' => 'asc'); 
		
		var $column_order = 
			array(
				null, 
				null,
				null,
				null, 
				null,
				null
			); 
			
		var $column_search = 
			array(			
				'UK.KODE_UK',
				'UK.JUDUL_UK',
				'SKE.NOMOR_SKEMA',
				'SKE.NAMA_SKEMA'
			);
			
		public function _get_datatables_query($uuid){
			$this->db->from($this->table);
			$this->db->join("SKEMA AS SKE", "SKE_UK.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			$this->db->join("UNIT_KOMPETENSI AS UK", "SKE_UK.UUID_UK = UK.UUID_UK", "LEFT");
			
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
			
			$this->db->where('SKE_UK.IS_ACTIVE', '1');
			$this->db->where('SKE_UK.UUID_UK', $uuid); 
			
			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order1)){
				$order1 = $this->order1;
				$this->db->order_by(key($order1), $order1[key($order1)]);
				$order2 = $this->order2;
				$this->db->order_by(key($order2), $order2[key($order2)]);
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
			$this->db->join("SKEMA AS SKE", "SKE_UK.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			$this->db->join("UNIT_KOMPETENSI AS UK", "SKE_UK.UUID_UK = UK.UUID_UK", "LEFT");
			$this->db->where('SKE_UK.IS_ACTIVE', '1');
			$this->db->where('SKE_UK.UUID_UK', $uuid); 
			
			return $this->db->count_all_results();
		}
	}
?>