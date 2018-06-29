<?php
	class M_fr_apl_02 extends CI_Model{
		public $UUID_APL02;
		public $UUID_ADM;
		public $UUID_USER;
		public $UUID_APL01;
		public $NO_DOKUMEN;
		public $TUK;
		public $IS_KOMPETEN;
		public $ALASAN_BLM_KOMPETEN;
		public $IS_DILANJUTKAN;
		public $CATATAN_1;
		public $CATATAN_2;
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
				return $this->db->get_where('FR_APL_02', $condition);
			}
			
		public function get_detail_entry($condition)
			{
				$this->db->select('APL02.UUID_APL02, APL02.UUID_ADM, APL02.UUID_USER, APL02.UUID_APL01, APL02.NO_DOKUMEN, APL02.TUK, APL02.IS_KOMPETEN, APL02.ALASAN_BLM_KOMPETEN, APL02.IS_DILANJUTKAN, APL02.CATATAN_1, APL02.CATATAN_2, APL01.NAMA_LENGKAP, SKE.NOMOR_SKEMA, SKE.NAMA_SKEMA');
				$this->db->from("FR_APL_02 AS APL02");
				$this->db->join("FR_APL_01 AS APL01", "APL02.UUID_APL01 = APL01.UUID_APL01", "LEFT");
				$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
				$this->db->where($condition);
				return $this->db->get();
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
				
				return $this->db->insert('FR_APL_02', $this);
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
					
				return $this->db->update('FR_APL_02', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('FR_APL_02', $condition);
			}
		
	}
?>