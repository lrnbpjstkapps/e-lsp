<?php
	class M_unit_kompetensi extends CI_Model{
		public $UUID_UK;
		public $JUDUL_UK;
		public $KODE_UK;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('UNIT_KOMPETENSI', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_UK		= (!$this->input->post($form_name[102]) ? $this->uuid->v4() : $this->input->post($form_name[102]));
				$this->JUDUL_UK		= (!$this->input->post($form_name[100]) ? null : $this->input->post($form_name[100]));
				$this->KODE_UK		= (!$this->input->post($form_name[101]) ? null : $this->input->post($form_name[101]));
				$this->USR_CRT		= 'Karid Nurvenus';
				$this->DTM_CRT		= date('Y-m-d H:i:s');
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= null;
				$this->IS_ACTIVE	= '1';
				
				return $this->db->insert('UNIT_KOMPETENSI', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_UK		= (!$this->input->post($form_name[102]) ? $data->UUID_UK : $this->input->post($form_name[102]));
				$this->JUDUL_UK		= (!$this->input->post($form_name[100]) ? $data->JUDUL_UK : $this->input->post($form_name[100]));
				$this->KODE_UK		= (!$this->input->post($form_name[101]) ? $data->KODE_UK : $this->input->post($form_name[101]));
				$this->USR_CRT		= $data->USR_CRT;
				$this->DTM_CRT		= $data->DTM_CRT;
				$this->USR_UPD		= 'Karid Nurvenus';
				$this->DTM_UPD		= date('Y-m-d H:i:s');
				$this->IS_ACTIVE	= (!$this->input->post($form_name[156]) ? $data->IS_ACTIVE : $this->input->post($form_name[156]));;
					
				return $this->db->update('UNIT_KOMPETENSI', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('UNIT_KOMPETENSI', $condition);
			}
		
	}
?>