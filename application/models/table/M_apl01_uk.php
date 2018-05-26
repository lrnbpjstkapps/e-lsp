<?php
	class M_apl01_uk extends CI_Model{
		public $UUID_APL01_UK;
		public $UUID_APL01;
		public $UUID_UK;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('APL01_UK', $condition);
			}
			
		public function insert_multiple_entry($form_name, $i)
			{
				$this->UUID_APL01_UK		= $this->uuid->v4();
				$this->UUID_APL01			= (!$this->input->post($form_name[134]) ? null : $this->input->post($form_name[134]));
				$this->UUID_UK				= (!$this->input->post($form_name[143])[$i] ? null : $this->input->post($form_name[143])[$i]);
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('APL01_UK', $this);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('APL01_UK', $condition);
			}
		
	}
?>