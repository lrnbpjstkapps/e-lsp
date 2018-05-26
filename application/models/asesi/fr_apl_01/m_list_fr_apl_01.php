<?php
	class m_list_fr_apl_01 extends CI_Model{
		var $table = "FR_APL_01 AS APL01";
		var $order1 = array('APL01.DTM_CRT' => 'desc'); 
		
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
				'ID_DOKUMEN'
			);
			
		public function _get_datatables_query(){
			$this->db->select('APL01.UUID_APL01, APL01.NO_DOKUMEN, SKE.NAMA_SKEMA, APL01.DTM_CRT');
			$this->db->from($this->table);
			$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			
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
			
			$this->db->where('APL01.IS_ACTIVE', '1');
			
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
			$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			$this->db->where('APL01.IS_ACTIVE', '1');
			
			return $this->db->count_all_results();
		}
	}
?>