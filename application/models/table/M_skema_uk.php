<?php
	class M_skema_uk extends CI_Model{
		public $UUID_SKEMA_UK;
		public $UUID_SKEMA;
		public $UUID_UK;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('SKEMA_UK', $condition);
			}
		
		public function get_detail_entry($condition)
			{
				$this->db->select('skemauk.UUID_SKEMA_UK, skemauk.UUID_SKEMA, skemauk.UUID_UK,
					skemauk.USR_CRT, skemauk.DTM_CRT, skemauk.USR_UPD, skemauk.DTM_UPD, skemauk.IS_ACTIVE,
					skema.NAMA_SKEMA, skema.NOMOR_SKEMA, uk.JUDUL_UK, uk.KODE_UK');
				$this->db->from("SKEMA_UK skemauk");
				$this->db->join("SKEMA AS skema", "skemauk.UUID_SKEMA = skema.UUID_SKEMA", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS uk", "skemauk.UUID_UK = uk.UUID_UK", "LEFT");
				$this->db->where($condition);
				return $this->db->get();
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_SKEMA_UK	= (!$this->input->post($form_name[157]) ? $this->uuid->v4() : $this->input->post($form_name[157]));
				$this->UUID_SKEMA		= (!$this->input->post($form_name[102]) ? null : $this->input->post($form_name[102]));
				$this->UUID_UK			= (!$this->input->post($form_name[105]) ? null : $this->input->post($form_name[105]));
				$this->USR_CRT			= 'Karid Nurvenus';
				$this->DTM_CRT			= date('Y-m-d H:i:s');
				$this->USR_UPD			= 'Karid Nurvenus';
				$this->DTM_UPD			= null;
				$this->IS_ACTIVE		= '1';
				
				return $this->db->insert('SKEMA_UK', $this);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('SKEMA_UK', $condition);
			}
		
	}
?>