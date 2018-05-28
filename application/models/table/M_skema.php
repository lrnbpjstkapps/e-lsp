<?php
	class M_skema extends CI_Model{
		public $UUID_SKEMA;
		public $NAMA_SKEMA;
		public $NOMOR_SKEMA;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('SKEMA', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_SKEMA			= (!$this->input->post($form_name[102]) ? $this->uuid->v4() : $this->input->post($form_name[102]));
				$this->NAMA_SKEMA			= (!$this->input->post($form_name[100]) ? null : $this->input->post($form_name[100]));
				$this->NOMOR_SKEMA			= (!$this->input->post($form_name[101]) ? null : $this->input->post($form_name[101]));
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= null;
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('SKEMA', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_SKEMA			= (!$this->input->post($form_name[102]) ? $data->UUID_SKEMA : $this->input->post($form_name[102]));
				$this->NAMA_SKEMA			= (!$this->input->post($form_name[100]) ? $data->NAMA_SKEMA : $this->input->post($form_name[100]));
				$this->NOMOR_SKEMA			= (!$this->input->post($form_name[101]) ? $data->NOMOR_SKEMA : $this->input->post($form_name[101]));
				$this->USR_CRT				= $data->USR_CRT;
				$this->DTM_CRT				= $data->DTM_CRT;
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= (!$this->input->post($form_name[155]) ? $data->IS_ACTIVE : $this->input->post($form_name[155]));
					
				return $this->db->update('SKEMA', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('SKEMA', $condition);
			}
		
	}
?>