<?php
	class M_mak_03 extends CI_Model{
		public $UUID_MAK03;
		public $UUID_ADM;
		public $PENJELASAN_BANDING;
		public $DISKUSI_BANDING_ASESOR;
		public $MELIBATKAN_ORANG;
		public $ALASAN_BANDING;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;

		function uniqidReal($lenght) {
			if (function_exists("random_bytes")) {
				$bytes = random_bytes(ceil($lenght / 2));
			} elseif (function_exists("openssl_random_pseudo_bytes")) {
				$bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
			} else {
				throw new Exception("no cryptographically secure random function available");
			}
			return strtoupper(substr(bin2hex($bytes), 0, $lenght));
		}
		
		public function get_entry($condition)
			{
				return $this->db->get_where('FR_MAK_03', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_APL02			= (!$this->input->post($form_name[146]) ? $this->uuid->v4() : $this->input->post($form_name[146]));
				$this->UUID_ADM				= (!$this->input->post($form_name[163]) ? null : $this->input->post($form_name[163]));
				$this->UUID_USER			= 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f';
				$this->UUID_APL01			= (!$this->input->post($form_name[134]) ? null : $this->input->post($form_name[134]));
				$this->NO_DOKUMEN			= 'APL02'.$this->uniqidReal(7);
				$this->TUK					= (!$this->input->post($form_name[148]) ? null : $this->input->post($form_name[148]));
				$this->IS_KOMPETEN			= (!$this->input->post($form_name[169]) ? null : $this->input->post($form_name[169]));
				$this->ALASAN_BLM_KOMPETEN	= (!$this->input->post($form_name[170]) ? null : $this->input->post($form_name[170]));
				$this->IS_DILANJUTKAN		= (!$this->input->post($form_name[171]) ? null : $this->input->post($form_name[171]));
				$this->CATATAN_1			= (!$this->input->post($form_name[172]) ? null : $this->input->post($form_name[172]));
				$this->CATATAN_2			= (!$this->input->post($form_name[173]) ? null : $this->input->post($form_name[173]));
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= null;
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('FR_MAK_03', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_APL02			= $data->UUID_APL02;
				$this->UUID_ADM				= (!$this->input->post($form_name[163]) ? $data->UUID_ADM : $this->input->post($form_name[163]));
				$this->UUID_USER			= $data->UUID_USER;
				$this->UUID_APL01			= (!$this->input->post($form_name[134]) ? $data->UUID_APL01 : $this->input->post($form_name[134]));
				$this->NO_DOKUMEN			= $data->UUID_USER;
				$this->TUK					= (!$this->input->post($form_name[148]) ? $data->TUK : $this->input->post($form_name[148]));
				$this->IS_KOMPETEN			= (!$this->input->post($form_name[169]) ? $data->IS_KOMPETEN : $this->input->post($form_name[169]));
				$this->ALASAN_BLM_KOMPETEN	= (!$this->input->post($form_name[170]) ? $data->ALASAN_BLM_KOMPETEN : $this->input->post($form_name[170]));
				$this->IS_DILANJUTKAN		= (!$this->input->post($form_name[171]) ? $data->IS_DILANJUTKAN : $this->input->post($form_name[171]));
				$this->CATATAN_1			= (!$this->input->post($form_name[172]) ? $data->CATATAN_1 : $this->input->post($form_name[172]));
				$this->CATATAN_2			= (!$this->input->post($form_name[173]) ? $data->CATATAN_2 : $this->input->post($form_name[173]));
				$this->USR_CRT				= $data->USR_CRT;
				$this->DTM_CRT				= $data->DTM_CRT;
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= (!$this->input->post($form_name[174]) ? $data->IS_ACTIVE : $this->input->post($form_name[174]));;
					
				return $this->db->update('FR_MAK_03', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('FR_MAK_03', $condition);
			}
		
	}
?>