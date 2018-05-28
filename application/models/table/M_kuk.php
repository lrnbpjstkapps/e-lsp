<?php
	class M_kuk extends CI_Model{
		public $UUID_KUK;
		public $UUID_EK;
		public $NOMOR_KUK;
		public $PERNYATAAN;
		public $PERTANYAAN;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('KRITERIA_UNJUK_KERJA', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_KUK		= (!$this->input->post($form_name[113]) ? $this->uuid->v4() : $this->input->post($form_name[113]));
				$this->UUID_EK		= (!$this->input->post($form_name[109]) ? null : $this->input->post($form_name[109]));
				$this->NOMOR_KUK	= (!$this->input->post($form_name[112]) ? null : $this->input->post($form_name[112]));
				$this->PERNYATAAN	= (!$this->input->post($form_name[111]) ? null : $this->input->post($form_name[111]));
				$this->PERTANYAAN	= (!$this->input->post($form_name[114]) ? null : $this->input->post($form_name[114]));
				$this->USR_CRT		= 'Karid Nurvenus';
				$this->DTM_CRT		= date('Y-m-d H:i:s');
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= null;
				$this->IS_ACTIVE	= '1';
				
				return $this->db->insert('KRITERIA_UNJUK_KERJA', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_KUK		= (!$this->input->post($form_name[113]) ? $data->UUID_KUK : $this->input->post($form_name[113]));
				$this->UUID_EK		= (!$this->input->post($form_name[109]) ? $data->UUID_EK : $this->input->post($form_name[109]));
				$this->NOMOR_KUK	= (!$this->input->post($form_name[112]) ? $data->NOMOR_KUK : $this->input->post($form_name[112]));
				$this->PERNYATAAN	= (!$this->input->post($form_name[111]) ? $data->PERNYATAAN : $this->input->post($form_name[111]));
				$this->PERTANYAAN	= (!$this->input->post($form_name[114]) ? $data->PERTANYAAN : $this->input->post($form_name[114]));
				$this->USR_CRT		= $data->USR_CRT;
				$this->DTM_CRT		= $data->DTM_CRT;
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= date('Y-m-d H:i:s');
				$this->IS_ACTIVE	= (!$this->input->post($form_name[166]) ? $data->IS_ACTIVE : $this->input->post($form_name[166]));
					
				return $this->db->update('KRITERIA_UNJUK_KERJA', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('KRITERIA_UNJUK_KERJA', $condition);
			}
		
	}
?>