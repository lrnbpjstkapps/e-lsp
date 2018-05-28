<?php
	class M_ek extends CI_Model{
		public $UUID_EK;
		public $UUID_UK;
		public $NOMOR_EK;
		public $NAMA_EK;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('ELEMEN_KOMPETENSI', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_EK		= (!$this->input->post($form_name[109]) ? $this->uuid->v4() : $this->input->post($form_name[109]));
				$this->UUID_UK		= (!$this->input->post($form_name[105]) ? null : $this->input->post($form_name[105]));
				$this->NOMOR_EK		= (!$this->input->post($form_name[108]) ? null : $this->input->post($form_name[108]));
				$this->NAMA_EK		= (!$this->input->post($form_name[107]) ? null : $this->input->post($form_name[107]));
				$this->USR_CRT		= 'Karid Nurvenus';
				$this->DTM_CRT		= date('Y-m-d H:i:s');
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= null;
				$this->IS_ACTIVE	= '1';
				
				return $this->db->insert('ELEMEN_KOMPETENSI', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_EK		= (!$this->input->post($form_name[109]) ? $this->uuid->v4() : $this->input->post($form_name[109]));
				$this->UUID_UK		= (!$this->input->post($form_name[105]) ? $data->UUID_UK : $this->input->post($form_name[105]));
				$this->NOMOR_EK		= (!$this->input->post($form_name[108]) ? $data->NOMOR_EK : $this->input->post($form_name[108]));
				$this->NAMA_EK		= (!$this->input->post($form_name[107]) ? $data->NAMA_EK : $this->input->post($form_name[107]));
				$this->USR_CRT		= $data->USR_CRT;
				$this->DTM_CRT		= $data->DTM_CRT;
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= date('Y-m-d H:i:s');
				$this->IS_ACTIVE	= (!$this->input->post($form_name[167]) ? $data->IS_ACTIVE : $this->input->post($form_name[167]));
					
				return $this->db->update('ELEMEN_KOMPETENSI', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('ELEMEN_KOMPETENSI', $condition);
			}
		
	}
?>