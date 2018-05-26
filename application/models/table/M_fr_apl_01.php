<?php
	class M_fr_apl_01 extends CI_Model{
		public $UUID_APL01;
		public $UUID_ADM;
		public $UUID_USER;
		public $NO_DOKUMEN;
		public $NAMA_LENGKAP;
		public $TEMPAT_LAHIR;
		public $TGL_LAHIR;
		public $JENIS_KELAMIN;
		public $KEBANGSAAN;
		public $ALAMAT_RUMAH;
		public $KODE_POS_RUMAH;
		public $NO_TLP_RUMAH;
		public $NO_TLP_HP;
		public $NO_TLP_KANTOR;
		public $EMAIL;
		public $PENDIDIKAN_TERAKHIR;
		public $NAMA_PERUSAHAAN;
		public $JABATAN;
		public $ALAMAT_KANTOR;
		public $KODE_POS_PERUSAHAAN;
		public $EMAIL_KANTOR;
		public $FAX_KANTOR;
		public $TUJUAN_ASESMEN;
		public $TUJUAN_ASESMEN_LAINNYA_KETERANGAN;
		public $JENIS_SKEMA;
		public $UUID_SKEMA;
		public $IS_DITERIMA;
		public $IS_MEMENUHI_SYARAT;
		public $ALASAN_KURANG_SYARAT;
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
				return $this->db->get_where('FR_APL_01', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_APL01			= (!$this->input->post($form_name[134]) ? $this->uuid->v4() : $this->input->post($form_name[134]));
				$this->UUID_ADM				= (!$this->input->post($form_name[163]) ? null : $this->input->post($form_name[163]));
				$this->UUID_USER			= 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f';
				$this->NO_DOKUMEN			= 'APL01'.$this->uniqidReal(7);
				$this->NAMA_LENGKAP			= (!$this->input->post($form_name[115]) ? null : $this->input->post($form_name[115]));
				$this->TEMPAT_LAHIR			= (!$this->input->post($form_name[116]) ? null : $this->input->post($form_name[116]));
				$this->TGL_LAHIR			= (!$this->input->post($form_name[117]) ? null : $this->input->post($form_name[117]));
				$this->JENIS_KELAMIN		= (!$this->input->post($form_name[118]) ? null : $this->input->post($form_name[118]));
				$this->KEBANGSAAN			= (!$this->input->post($form_name[119]) ? null : $this->input->post($form_name[119]));
				$this->ALAMAT_RUMAH			= (!$this->input->post($form_name[120]) ? null : $this->input->post($form_name[120]));
				$this->KODE_POS_RUMAH		= (!$this->input->post($form_name[121]) ? null : $this->input->post($form_name[121]));
				$this->NO_TLP_RUMAH			= (!$this->input->post($form_name[122]) ? null : $this->input->post($form_name[122]));
				$this->NO_TLP_HP			= (!$this->input->post($form_name[123]) ? null : $this->input->post($form_name[123]));
				$this->NO_TLP_KANTOR		= (!$this->input->post($form_name[130]) ? null : $this->input->post($form_name[130]));
				$this->EMAIL				= (!$this->input->post($form_name[124]) ? null : $this->input->post($form_name[124]));
				$this->PENDIDIKAN_TERAKHIR	= (!$this->input->post($form_name[125]) ? null : $this->input->post($form_name[125]));
				$this->NAMA_PERUSAHAAN		= (!$this->input->post($form_name[126]) ? null : $this->input->post($form_name[126]));
				$this->JABATAN				= (!$this->input->post($form_name[127]) ? null : $this->input->post($form_name[127]));
				$this->ALAMAT_KANTOR		= (!$this->input->post($form_name[128]) ? null : $this->input->post($form_name[128]));
				$this->KODE_POS_PERUSAHAAN	= (!$this->input->post($form_name[129]) ? null : $this->input->post($form_name[129]));
				$this->EMAIL_KANTOR			= (!$this->input->post($form_name[132]) ? null : $this->input->post($form_name[132]));
				$this->FAX_KANTOR			= (!$this->input->post($form_name[131]) ? null : $this->input->post($form_name[131]));
				$this->TUJUAN_ASESMEN		= (!$this->input->post($form_name[133]) ? null : $this->input->post($form_name[133]));
				$this->TUJUAN_ASESMEN_LAINNYA_KETERANGAN = (!$this->input->post($form_name[141]) ? null : $this->input->post($form_name[141]));
				$this->JENIS_SKEMA			= (!$this->input->post($form_name[144]) ? null : $this->input->post($form_name[144]));
				$this->UUID_SKEMA			= (!$this->input->post($form_name[100]) ? null : $this->input->post($form_name[100]));
				$this->IS_DITERIMA			= (!$this->input->post($form_name[162]) ? null : $this->input->post($form_name[162]));
				$this->IS_MEMENUHI_SYARAT	= (!$this->input->post($form_name[161]) ? null : $this->input->post($form_name[161]));
				$this->ALASAN_KURANG_SYARAT	= (!$this->input->post($form_name[160]) ? null : $this->input->post($form_name[160]));
				$this->USR_CRT				= 'Karid Nurvenus';
				$this->DTM_CRT				= date('Y-m-d H:i:s');
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= null;
				$this->IS_ACTIVE			= '1';
				
				return $this->db->insert('FR_APL_01', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_APL01			= $data->UUID_APL01;
				$this->UUID_ADM				= (!$this->input->post($form_name[163]) ? $data->UUID_ADM : $this->input->post($form_name[163]));
				$this->UUID_USER			= $data->UUID_USER;
				$this->NO_DOKUMEN			= $data->NO_DOKUMEN;
				$this->NAMA_LENGKAP			= (!$this->input->post($form_name[115]) ? $data->NAMA_LENGKAP : $this->input->post($form_name[115]));
				$this->TEMPAT_LAHIR			= (!$this->input->post($form_name[116]) ? $data->TEMPAT_LAHIR : $this->input->post($form_name[116]));
				$this->TGL_LAHIR			= (!$this->input->post($form_name[117]) ? $data->TGL_LAHIR : $this->input->post($form_name[117]));
				$this->JENIS_KELAMIN		= (!$this->input->post($form_name[118]) ? $data->JENIS_KELAMIN : $this->input->post($form_name[118]));
				$this->KEBANGSAAN			= (!$this->input->post($form_name[119]) ? $data->KEBANGSAAN : $this->input->post($form_name[119]));
				$this->ALAMAT_RUMAH			= (!$this->input->post($form_name[120]) ? $data->ALAMAT_RUMAH : $this->input->post($form_name[120]));
				$this->KODE_POS_RUMAH		= (!$this->input->post($form_name[121]) ? $data->KODE_POS_RUMAH : $this->input->post($form_name[121]));
				$this->NO_TLP_RUMAH			= (!$this->input->post($form_name[122]) ? $data->NO_TLP_RUMAH : $this->input->post($form_name[122]));
				$this->NO_TLP_HP			= (!$this->input->post($form_name[123]) ? $data->NO_TLP_HP : $this->input->post($form_name[123]));
				$this->NO_TLP_KANTOR		= (!$this->input->post($form_name[130]) ? $data->NO_TLP_KANTOR : $this->input->post($form_name[130]));
				$this->EMAIL				= (!$this->input->post($form_name[124]) ? $data->EMAIL : $this->input->post($form_name[124]));
				$this->PENDIDIKAN_TERAKHIR	= (!$this->input->post($form_name[125]) ? $data->PENDIDIKAN_TERAKHIR : $this->input->post($form_name[125]));
				$this->NAMA_PERUSAHAAN		= (!$this->input->post($form_name[126]) ? $data->NAMA_PERUSAHAAN : $this->input->post($form_name[126]));
				$this->JABATAN				= (!$this->input->post($form_name[127]) ? $data->JABATAN : $this->input->post($form_name[127]));
				$this->ALAMAT_KANTOR		= (!$this->input->post($form_name[128]) ? $data->ALAMAT_KANTOR : $this->input->post($form_name[128]));
				$this->KODE_POS_PERUSAHAAN	= (!$this->input->post($form_name[129]) ? $data->KODE_POS_PERUSAHAAN : $this->input->post($form_name[129]));
				$this->EMAIL_KANTOR			= (!$this->input->post($form_name[132]) ? $data->EMAIL_KANTOR : $this->input->post($form_name[132]));
				$this->FAX_KANTOR			= (!$this->input->post($form_name[131]) ? $data->FAX_KANTOR : $this->input->post($form_name[131]));
				$this->TUJUAN_ASESMEN		= (!$this->input->post($form_name[133]) ? $data->TUJUAN_ASESMEN : $this->input->post($form_name[133]));
				$this->TUJUAN_ASESMEN_LAINNYA_KETERANGAN = (!$this->input->post($form_name[141]) ? $data->TUJUAN_ASESMEN_LAINNYA_KETERANGAN : $this->input->post($form_name[141]));
				$this->JENIS_SKEMA			= (!$this->input->post($form_name[144]) ? $data->JENIS_SKEMA : $this->input->post($form_name[144]));
				$this->UUID_SKEMA			= (!$this->input->post($form_name[100]) ? $data->UUID_SKEMA : $this->input->post($form_name[100]));
				$this->IS_DITERIMA			= (!$this->input->post($form_name[162]) ? $data->IS_DITERIMA : $this->input->post($form_name[162]));
				$this->IS_MEMENUHI_SYARAT	= (!$this->input->post($form_name[161]) ? $data->IS_MEMENUHI_SYARAT : $this->input->post($form_name[161]));
				$this->ALASAN_KURANG_SYARAT	= (!$this->input->post($form_name[160]) ? $data->ALASAN_KURANG_SYARAT : $this->input->post($form_name[160]));
				$this->USR_CRT				= $data->USR_CRT;
				$this->DTM_CRT				= $data->DTM_CRT;
				$this->USR_UPD				= 'Karid Nurvenus';
				$this->DTM_UPD				= date('Y-m-d H:i:s');
				$this->IS_ACTIVE			= (!$this->input->post($form_name[159]) ? $data->IS_ACTIVE : $this->input->post($form_name[159]));;
					
				return $this->db->update('FR_APL_01', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('FR_APL_01', $condition);
			}
		
	}
?>