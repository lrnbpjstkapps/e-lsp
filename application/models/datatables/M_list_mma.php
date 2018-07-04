<?php
	class m_list_mma extends CI_Model{
		var $table			= "FR_MMA AS MMA";
		var $order			= array('MMA.DTM_CRT' => 'DESC'); 
		var $column_order	= array(
			null, null, null, null, null, null); 
		var $column_search	= array(
			'MMA.NO_DOKUMEN00');
			
		// Method yang berisi syntax - syntax untuk mengambil sejumlah data.
		public function _get_datatables_query(){
			$this->db->select('MMA.UUID_MMA, MMA.NO_DOKUMEN AS NO_DOKUMEN00, APL01.NO_DOKUMEN AS NO_DOKUMEN01, APL02.NO_DOKUMEN AS NO_DOKUMEN02, SKE.NAMA_SKEMA, USER.USER_NAME, MMA.DTM_CRT, MMA.UUID_APL_01, MMA.UUID_APL_02');
			$this->db->from($this->table);
			$this->db->join("FR_APL_01 AS APL01", "MMA.UUID_APL_01 = APL01.UUID_APL01", "LEFT");
			$this->db->join("FR_APL_02 AS APL02", "MMA.UUID_APL_02 = APL02.UUID_APL02", "LEFT");
			$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			$this->db->join("USER", "MMA.UUID_USER = USER.UUID_USER", "LEFT");
			
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
			
			$this->db->where('MMA.IS_ACTIVE', '1');

			if(isset($_POST['order'])){
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order)){
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		// Mengambil sebagian data berdasarkan filternya.
		public function get_datatables(){
			$this->_get_datatables_query();			
			if($_POST['length'] != -1)
				$this->db->limit($_POST['length'], $_POST['start']);
			
			return $this->db->get()->result();
		}

		// Menghitung jumlah data yang ditampilkan.
		public function count_filtered(){
			$this->_get_datatables_query();
			
			return $this->db->get()->num_rows();
		}

		// Menghitung jumlah seluruh data tanpa filter.
		public function count_all(){
			$this->db->select('MMA.UUID_MMA');
			$this->db->from($this->table);
			$this->db->join("FR_APL_01 AS APL01", "MMA.UUID_APL_01 = APL01.UUID_APL01", "LEFT");
			$this->db->join("FR_APL_02 AS APL02", "MMA.UUID_APL_02 = APL02.UUID_APL02", "LEFT");
			$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
			$this->db->join("USER AS USER", "MMA.UUID_USER = USER.UUID_USER", "LEFT");
			$this->db->where('MMA.IS_ACTIVE', '1');
			
			return $this->db->count_all_results();
		}
		
		// Mengirim data sebagai JSON.
		public function get_json($result, $recordsTotal, $recordsFiltered)
			{			
				$data 			= array();
				$no				= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;
						$row[] 	= $values->NO_DOKUMEN00;
						$row[] 	= $values->USER_NAME;
						$row[] 	= $values->NO_DOKUMEN01;
						$row[] 	= $values->NO_DOKUMEN02;
						$row[] 	= $values->NAMA_SKEMA;
						$row[] 	= date('d M y - H:i', strtotime($values->DTM_CRT));
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_MMA."'".','."'".$values->UUID_APL_01."'".','."'".$values->UUID_APL_02."'".')"><i class="fa fa-edit"></i></a>';
						$data[]	= $row;
					}
		
				$output 		= array
					(
						"draw" 				=> $_POST['draw'],
						"recordsTotal" 		=> $recordsTotal, 
						"recordsFiltered" 	=> $recordsFiltered,
						"data"				=> $data
					);
				return $output;
			}			
	}
?>