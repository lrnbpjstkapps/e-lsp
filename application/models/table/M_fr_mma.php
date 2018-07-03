<?php
	class M_fr_mma extends CI_Model{
		public UUID_MMA;
		public UUID_USER;
		public UUID_APL_01;
		public UUID_APL_02;
		public NO_DOKUMEN;
		public KELOMPOK_TARGET;
		public TUJUAN_ASESMEN;
		public KONTEKS_ASESMEN;
		public PIHAK_RELEVAN;
		public ATURAN_LSP;
		public ATURAN_TEKNIS;
		public PENDEKATAN_ASESMEN;
		public STRATEGI_ASESMEN;
		public ACUAN_PEMBANDING;
		public BATASAN_VARIABEL;
		public PANDUAN_ASESMEN;
		public PERSETUJUAN_ASESOR;
		public PERSETUJUAN_PENYEDIA;
		public PERSETUJUAN_TUK;
		public TANGGAL_UJI_KOMPETENSI;
		public DURASI_OBSERVASI_START;
		public DURASI_OBSERVASI_END;
		public DURASI_TES_LISAN_START;
		public DURASI_TES_LISAN_END;
		public LOKASI_ASESMEN;
		public KARAKTERISTIK_PESERTA;
		public PENYESUAIAN_KEBUTUHAN_SPESIFIK;
		public PADA_BATASAN_VARIABEL;
		public PADA_PANDUAN_PENILAIAN;
		public 3_1;
		public 3_1_CATATAN;
		public 3_2;
		public 3_2_CATATAN;
		public 3_3;
		public 3_3_CATATAN;
		public 3_4;
		public 3_4_CATATAN;
		public PENGATURAN_DUKUNGAN_SPESIALIS;
		public STRATEGI_KOMUNIKASI;
		public KOORDINATOR_TUK;
		public KOORDINATOR_TUK_DTM;
		public MANAGER_SERTIFIKASI_LSP;
		public MANAGER_SERTIFIKASI_LSP_DTM;
		public MANAGER_TEMPAT_KERJA;
		public MANAGER_TEMPAT_KERJA_DTM;
		public KET_ASESOR;
		public KET_MANAGER_SERTIFIKASI;
		public ASESOR;
		public MANAGER_SERTIFIKASI;
		public UUID_ADM;
		public USR_CRT;
		public DTM_CRT;
		public USR_UPD;
		public DTM_UPD;
		public IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('FR_MMA', $condition);
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
				
				return $this->db->insert('FR_MMA', $this);
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
					
				return $this->db->update('FR_MMA', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('FR_MMA', $condition);
			}
		
	}
?>