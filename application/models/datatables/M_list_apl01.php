<?php
	class m_list_apl01 extends CI_Model{
		var $table			= "FR_APL_01 AS apl01";
		var $order			= array('apl01.DTM_CRT' => 'DESC'); 
		var $column_order	= array(
			null, null, null, null, null, null); 
		var $column_search	= array(
			'apl01.NO_DOKUMEN');
			
		public function _get_datatables_query(){
			$this->db->select('apl01.UUID_APL01, apl01.NO_DOKUMEN, skema.NAMA_SKEMA, apl01.DTM_CRT');
			$this->db->from($this->table);
			$this->db->join("SKEMA AS skema", "apl01.UUID_SKEMA = skema.UUID_SKEMA", "LEFT");
			$this->db->where('apl01.IS_ACTIVE', '1');
			
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
			
			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order)){
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		public function get_datatables(){
			$this->_get_datatables_query();
			
			if($_POST['length'] != -1)
				$this->db->limit($_POST['length'], $_POST['start']);
			
			return $this->db->get()->result();
		}

		public function count_filtered(){
			$this->_get_datatables_query();
			
			return $this->db->get()->num_rows();
		}

		public function count_all(){
			$this->db->select('apl01.UUID_APL01, apl01.NO_DOKUMEN, skema.NAMA_SKEMA, apl01.DTM_CRT');
			$this->db->from($this->table);
			$this->db->join("SKEMA AS skema", "apl01.UUID_SKEMA = skema.UUID_SKEMA", "LEFT");
			$this->db->where('apl01.IS_ACTIVE', '1');
			
			return $this->db->count_all_results();
		}
		
		public function get_json($result, $recordsTotal, $recordsFiltered)
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
	}
?>