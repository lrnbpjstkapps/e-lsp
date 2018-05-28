<?php
	class M_apl01_bukti extends CI_Model{
		public $UUID_APL01_BUKTI;
		public $UUID_APL01;
		public $UUID_BUKTI;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('APL01_BUKTI', $condition);
			}
		
		public function get_detail_entry($condition)
			{
				$this->db->select('apl01bukti.UUID_APL01_BUKTI, apl01bukti.UUID_APL01, apl01bukti.UUID_BUKTI, 
					apl01bukti.USR_CRT, apl01bukti.DTM_CRT, apl01bukti.USR_UPD, apl01bukti.DTM_UPD, apl01bukti.IS_ACTIVE,
					bukti.UUID_USER, bukti.KETERANGAN, bukti.URL');
				$this->db->from("APL01_BUKTI AS apl01bukti");
				$this->db->join("BUKTI AS bukti", "apl01bukti.UUID_BUKTI = bukti.UUID_BUKTI", "LEFT");
				$this->db->where($condition);
				return $this->db->get();
			}
			
		public function insert_multiple_entry($form_name, $i)
			{
				$this->UUID_APL01_BUKTI		= $this->uuid->v4();
				$this->UUID_APL01			= (!$this->input->post($form_name[134]) ? null : $this->input->post($form_name[134]));
				$this->UUID_BUKTI			= (!$this->input->post($form_name[139])[$i] ? null : $this->input->post($form_name[139])[$i]);
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('APL01_BUKTI', $this);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('APL01_BUKTI', $condition);
			}
		
	}
?>