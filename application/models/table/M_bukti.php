<?php
	class M_bukti extends CI_Model{
		public $UUID_BUKTI;
		public $UUID_USER;
		public $KETERANGAN;
		public $URL;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('BUKTI', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_BUKTI			= (!$this->input->post($form_name[136]) ? $this->uuid->v4() : $this->input->post($form_name[136]));
				$this->UUID_USER			= (!$this->input->post($form_name[140]) ? null : $this->input->post($form_name[140]));
				$this->KETERANGAN			= (!$this->input->post($form_name[138]) ? null : $this->input->post($form_name[138]));
				$this->URL					= (!$this->input->post($form_name[164]) ? null : $this->input->post($form_name[164]));
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= null;
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('BUKTI', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_BUKTI			= (!$this->input->post($form_name[136]) ? $data->UUID_BUKTI : $this->input->post($form_name[136]));
				$this->UUID_USER			= (!$this->input->post($form_name[140]) ? $data->UUID_USER : $this->input->post($form_name[140]));
				$this->KETERANGAN			= (!$this->input->post($form_name[138]) ? $data->KETERANGAN : $this->input->post($form_name[138]));
				$this->URL					= (!$this->input->post($form_name[164]) ? $data->URL : $this->input->post($form_name[164]));
				$this->USR_CRT				= $data->USR_CRT;
				$this->DTM_CRT				= $data->DTM_CRT;
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= (!$this->input->post($form_name[165]) ? $data->IS_ACTIVE : $this->input->post($form_name[165]));;
					
				return $this->db->update('BUKTI', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('BUKTI', $condition);
			}
		
	}
?>