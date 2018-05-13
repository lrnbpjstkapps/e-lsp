<?php
	class m_list_skema extends CI_Model{
		var $table = "SKEMA";
		var $order1 = array('NOMOR_SKEMA' => 'asc'); 
		
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
				'NAMA_SKEMA'
			);
			
		public function _get_datatables_query(){
			$this->db->from($this->table);
			
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
			
			$this->db->where('IS_ACTIVE', '1');
			
			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order1)){
				$order1 = $this->order1;
				$this->db->order_by(key($order1), $order1[key($order1)]);
			}
		}

		public function get_datatables(){
			$this->_get_datatables_query();
			if($_POST['length'] != -1)
				$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		public function count_filtered(){
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