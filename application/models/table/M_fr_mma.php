<?php
	class M_fr_mma extends CI_Model{
		public $UUID_MMA;
		public $UUID_USER;
		public $UUID_APL_01;
		public $UUID_APL_02;
		public $NO_DOKUMEN;
		public $KELOMPOK_TARGET_1;
		public $KELOMPOK_TARGET_2;
		public $TUJUAN_ASESMEN;
		public $KONTEKS_ASESMEN_1;
		public $KONTEKS_ASESMEN_2;
		public $PIHAK_RELEVAN;
		public $ATURAN_LSP;
		public $ATURAN_TEKNIS;
		public $PENDEKATAN_ASESMEN;
		public $STRATEGI_ASESMEN;
		public $ACUAN_PEMBANDING;
		public $ACUAN_PEMBANDING_KETERANGAN;
		public $BATASAN_VARIABEL;
		public $PANDUAN_ASESMEN;
		public $PERSETUJUAN_ASESOR;
		public $PERSETUJUAN_ASESOR_DTM;
		public $PERSETUJUAN_PENYEDIA;
		public $PERSETUJUAN_PENYEDIA_DTM;
		public $PERSETUJUAN_TUK;
		public $PERSETUJUAN_TUK_DTM;
		public $TANGGAL_UJI_KOMPETENSI;
		public $DURASI_OBSERVASI_START;
		public $DURASI_OBSERVASI_END;
		public $DURASI_TES_LISAN_START;
		public $DURASI_TES_LISAN_END;
		public $LOKASI_ASESMEN;
		public $_3_1_KARAKTERISTIK_PESERTA;
		public $_3_1_PENYESUAIAN_KEBUTUHAN_SPESIFIK;
		public $_3_2_PADA_BATASAN_VARIABEL;
		public $_3_2_PADA_PANDUAN_PENILAIAN;
		public $_3_3;
		public $_3_3_CATATAN;
		public $_3_4;
		public $_3_4_CATATAN;
		public $_3_5;
		public $_3_5_CATATAN;
		public $_3_6;
		public $_3_6_CATATAN;
		public $PENGATURAN_DUKUNGAN_SPESIALIS;
		public $STRATEGI_KOMUNIKASI;
		public $KOORDINATOR_TUK;
		public $KOORDINATOR_TUK_DTM;
		public $MANAGER_SERTIFIKASI_LSP;
		public $MANAGER_SERTIFIKASI_LSP_DTM;
		public $MANAGER_TEMPAT_KERJA;
		public $MANAGER_TEMPAT_KERJA_DTM;
		public $PENYUSUN_RENCANA;
		public $PENYUSUN_RENCANA_NO_REG;
		public $PENYUSUN_RENCANA_DTM;
		public $MANAGER_SERTIFIKASI;
		public $MANAGER_SERTIFIKASI_JABATAN;
		public $MANAGER_SERTIFIKASI_DTM;
		public $UUID_ADM;
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
				return $this->db->get_where('FR_MMA', $condition);
			}
			
		public function insert_entry($form_name)
			{
				$this->UUID_MMA 					= (!$this->input->post($form_name[145]) ? $this->uuid->v4() : $this->input->post($form_name[145]));
				$this->UUID_USER 					= (!$this->input->post($form_name[140]) ? null : $this->input->post($form_name[140]));
				$this->UUID_APL_01 					= (!$this->input->post($form_name[134]) ? null : $this->input->post($form_name[134]));
				$this->UUID_APL_02 					= (!$this->input->post($form_name[146]) ? null : $this->input->post($form_name[146]));
				$this->NO_DOKUMEN 					= 'MMA'.$this->uniqidReal(7);
				$this->KELOMPOK_TARGET_1 			= (!$this->input->post($form_name[181]) ? null : $this->input->post($form_name[181]));
				$this->KELOMPOK_TARGET_2 			= (!$this->input->post($form_name[182]) ? null : $this->input->post($form_name[182]));
				$this->TUJUAN_ASESMEN 				= (!$this->input->post($form_name[183]) ? null : $this->input->post($form_name[183]));
				$this->KONTEKS_ASESMEN_1 			= (!$this->input->post($form_name[184]) ? null : $this->input->post($form_name[184]));
				$this->KONTEKS_ASESMEN_2 			= (!$this->input->post($form_name[185]) ? null : $this->input->post($form_name[185]));
				$this->PIHAK_RELEVAN 				= (!$this->input->post($form_name[186]) ? null : $this->input->post($form_name[186]));
				$this->ATURAN_LSP 					= (!$this->input->post($form_name[187]) ? null : $this->input->post($form_name[187]));
				$this->ATURAN_TEKNIS 				= (!$this->input->post($form_name[188]) ? null : $this->input->post($form_name[188]));
				$this->PENDEKATAN_ASESMEN 			= (!$this->input->post($form_name[189]) ? null : $this->input->post($form_name[189]));
				$this->STRATEGI_ASESMEN 			= (!$this->input->post($form_name[190]) ? null : $this->input->post($form_name[190]));
				$this->ACUAN_PEMBANDING 			= (!$this->input->post($form_name[191]) ? null : $this->input->post($form_name[191]));
				$this->ACUAN_PEMBANDING_KETERANGAN 	= (!$this->input->post($form_name[192]) ? null : $this->input->post($form_name[192]));
				$this->BATASAN_VARIABEL 			= (!$this->input->post($form_name[193]) ? null : $this->input->post($form_name[193]));
				$this->PANDUAN_ASESMEN 				= (!$this->input->post($form_name[194]) ? null : $this->input->post($form_name[194]));
				$this->PERSETUJUAN_ASESOR 			= (!$this->input->post($form_name[195]) ? null : $this->input->post($form_name[195]));
				$this->PERSETUJUAN_ASESOR_DTM 		= (!$this->input->post($form_name[196]) ? null : $this->input->post($form_name[196]));
				$this->PERSETUJUAN_PENYEDIA 		= (!$this->input->post($form_name[197]) ? null : $this->input->post($form_name[197]));
				$this->PERSETUJUAN_PENYEDIA_DTM 	= (!$this->input->post($form_name[198]) ? null : $this->input->post($form_name[198]));
				$this->PERSETUJUAN_TUK 				= (!$this->input->post($form_name[199]) ? null : $this->input->post($form_name[199]));
				$this->PERSETUJUAN_TUK_DTM 			= (!$this->input->post($form_name[200]) ? null : $this->input->post($form_name[200]));
				$this->TANGGAL_UJI_KOMPETENSI 		= (!$this->input->post($form_name[201]) ? null : $this->input->post($form_name[201]));
				$this->DURASI_OBSERVASI_START 		= (!$this->input->post($form_name[202]) ? null : $this->input->post($form_name[202]));
				$this->DURASI_OBSERVASI_END 		= (!$this->input->post($form_name[203]) ? null : $this->input->post($form_name[203]));
				$this->DURASI_TES_LISAN_START 		= (!$this->input->post($form_name[204]) ? null : $this->input->post($form_name[204]));
				$this->DURASI_TES_LISAN_END 		= (!$this->input->post($form_name[205]) ? null : $this->input->post($form_name[205]));
				$this->LOKASI_ASESMEN 				= (!$this->input->post($form_name[206]) ? null : $this->input->post($form_name[206]));
				$this->_3_1_KARAKTERISTIK_PESERTA	= (!$this->input->post($form_name[207]) ? null : $this->input->post($form_name[207]));
				$this->_3_1_PENYESUAIAN_KEBUTUHAN_SPESIFIK	= (!$this->input->post($form_name[208]) ? null : $this->input->post($form_name[208]));
				$this->_3_2_PADA_BATASAN_VARIABEL 	= (!$this->input->post($form_name[209]) ? null : $this->input->post($form_name[209]));
				$this->_3_2_PADA_PANDUAN_PENILAIAN 	= (!$this->input->post($form_name[210]) ? null : $this->input->post($form_name[210]));
				$this->_3_3 						= (!$this->input->post($form_name[211]) ? null : $this->input->post($form_name[211]));
				$this->_3_3_CATATAN 				= (!$this->input->post($form_name[212]) ? null : $this->input->post($form_name[212]));
				$this->_3_4 						= (!$this->input->post($form_name[213]) ? null : $this->input->post($form_name[213]));
				$this->_3_4_CATATAN 				= (!$this->input->post($form_name[214]) ? null : $this->input->post($form_name[214]));
				$this->_3_5 						= (!$this->input->post($form_name[215]) ? null : $this->input->post($form_name[215]));
				$this->_3_5_CATATAN 				= (!$this->input->post($form_name[216]) ? null : $this->input->post($form_name[216]));
				$this->_3_6 						= (!$this->input->post($form_name[217]) ? null : $this->input->post($form_name[217]));
				$this->_3_6_CATATAN 				= (!$this->input->post($form_name[218]) ? null : $this->input->post($form_name[218]));
				$this->PENGATURAN_DUKUNGAN_SPESIALIS = (!$this->input->post($form_name[219]) ? null : $this->input->post($form_name[219]));
				$this->STRATEGI_KOMUNIKASI 			= (!$this->input->post($form_name[220]) ? null : $this->input->post($form_name[220]));
				$this->KOORDINATOR_TUK 				= (!$this->input->post($form_name[221]) ? null : $this->input->post($form_name[221]));
				$this->KOORDINATOR_TUK_DTM 			= (!$this->input->post($form_name[222]) ? null : $this->input->post($form_name[222]));
				$this->MANAGER_SERTIFIKASI_LSP 		= (!$this->input->post($form_name[223]) ? null : $this->input->post($form_name[223]));
				$this->MANAGER_SERTIFIKASI_LSP_DTM 	= (!$this->input->post($form_name[224]) ? null : $this->input->post($form_name[224]));
				$this->MANAGER_TEMPAT_KERJA 		= (!$this->input->post($form_name[225]) ? null : $this->input->post($form_name[225]));
				$this->MANAGER_TEMPAT_KERJA_DTM 	= (!$this->input->post($form_name[226]) ? null : $this->input->post($form_name[226]));
				$this->PENYUSUN_RENCANA 			= (!$this->input->post($form_name[227]) ? null : $this->input->post($form_name[227]));
				$this->PENYUSUN_RENCANA_NO_REG 		= (!$this->input->post($form_name[228]) ? null : $this->input->post($form_name[228]));
				$this->PENYUSUN_RENCANA_DTM 		= (!$this->input->post($form_name[229]) ? null : $this->input->post($form_name[229]));
				$this->MANAGER_SERTIFIKASI 			= (!$this->input->post($form_name[230]) ? null : $this->input->post($form_name[230]));
				$this->MANAGER_SERTIFIKASI_JABATAN 	= (!$this->input->post($form_name[231]) ? null : $this->input->post($form_name[231]));
				$this->MANAGER_SERTIFIKASI_DTM 		= (!$this->input->post($form_name[232]) ? null : $this->input->post($form_name[232]));
				$this->UUID_ADM 					= (!$this->input->post($form_name[163]) ? null : $this->input->post($form_name[163]));
				$this->USR_CRT						= 'Karid Nurvenus';
				$this->DTM_CRT						= date('Y-m-d H:i:s');
				$this->USR_UPD						= 'Karid Nurvenus';
				$this->DTM_UPD						= null;
				$this->IS_ACTIVE					= '1';
				
				return $this->db->insert('FR_MMA', $this);
			}
			
		public function update_entry($form_name, $data, $condition)
			{
				$this->UUID_MMA 					= $data->UUID_MMA;
				$this->UUID_USER 					= (!$this->input->post($form_name[140]) ? $data->UUID_USER : $this->input->post($form_name[140]));
				$this->UUID_APL_01 					= (!$this->input->post($form_name[134]) ? $data->UUID_APL_01 : $this->input->post($form_name[134]));
				$this->UUID_APL_02 					= (!$this->input->post($form_name[146]) ? $data->UUID_APL_02 : $this->input->post($form_name[146]));
				$this->NO_DOKUMEN 					= (!$this->input->post($form_name[180]) ? $data->NO_DOKUMEN : $this->input->post($form_name[180]));
				$this->KELOMPOK_TARGET_1 			= (!$this->input->post($form_name[181]) ? $data->KELOMPOK_TARGET_1 : $this->input->post($form_name[181]));
				$this->KELOMPOK_TARGET_2 			= (!$this->input->post($form_name[182]) ? $data->KELOMPOK_TARGET_2 : $this->input->post($form_name[182]));
				$this->TUJUAN_ASESMEN 				= (!$this->input->post($form_name[183]) ? $data->TUJUAN_ASESMEN : $this->input->post($form_name[183]));
				$this->KONTEKS_ASESMEN_1 			= (!$this->input->post($form_name[184]) ? $data->KONTEKS_ASESMEN_1 : $this->input->post($form_name[184]));
				$this->KONTEKS_ASESMEN_2 			= (!$this->input->post($form_name[185]) ? $data->KONTEKS_ASESMEN_2 : $this->input->post($form_name[185]));
				$this->PIHAK_RELEVAN 				= (!$this->input->post($form_name[186]) ? $data->PIHAK_RELEVAN : $this->input->post($form_name[186]));
				$this->ATURAN_LSP 					= (!$this->input->post($form_name[187]) ? $data->ATURAN_LSP : $this->input->post($form_name[187]));
				$this->ATURAN_TEKNIS 				= (!$this->input->post($form_name[188]) ? $data->ATURAN_TEKNIS : $this->input->post($form_name[188]));
				$this->PENDEKATAN_ASESMEN 			= (!$this->input->post($form_name[189]) ? $data->PENDEKATAN_ASESMEN : $this->input->post($form_name[189]));
				$this->STRATEGI_ASESMEN 			= (!$this->input->post($form_name[190]) ? null : implode(',', $this->input->post($form_name[190])));
				$this->ACUAN_PEMBANDING 			= (!$this->input->post($form_name[191]) ? null : implode(',', $this->input->post($form_name[191])));
				$this->ACUAN_PEMBANDING_KETERANGAN 	= (!$this->input->post($form_name[192]) ? null : implode('|', $this->input->post($form_name[192])));
				$this->BATASAN_VARIABEL 			= (!$this->input->post($form_name[193]) ? 'Tidak' : $this->input->post($form_name[193]));
				$this->PANDUAN_ASESMEN 				= (!$this->input->post($form_name[194]) ? 'Tidak' : $this->input->post($form_name[194]));
				$this->PERSETUJUAN_ASESOR 			= (!$this->input->post($form_name[195]) ? $data->PERSETUJUAN_ASESOR : $this->input->post($form_name[195]));
				$this->PERSETUJUAN_ASESOR_DTM 		= (!$this->input->post($form_name[196]) ? null : date('Y-m-d H:i:s'));
				$this->PERSETUJUAN_PENYEDIA 		= (!$this->input->post($form_name[197]) ? $data->PERSETUJUAN_PENYEDIA : $this->input->post($form_name[197]));
				$this->PERSETUJUAN_PENYEDIA_DTM 	= (!$this->input->post($form_name[198]) ? null : date('Y-m-d H:i:s'));
				$this->PERSETUJUAN_TUK 				= (!$this->input->post($form_name[199]) ? $data->PERSETUJUAN_TUK : $this->input->post($form_name[199]));
				$this->PERSETUJUAN_TUK_DTM 			= (!$this->input->post($form_name[200]) ? null : date('Y-m-d H:i:s'));
				$this->TANGGAL_UJI_KOMPETENSI 		= (!$this->input->post($form_name[201]) ? $data->TANGGAL_UJI_KOMPETENSI : $this->input->post($form_name[201]));
				$this->DURASI_OBSERVASI_START 		= (!$this->input->post($form_name[202]) ? $data->DURASI_OBSERVASI_START : $this->input->post($form_name[202]));
				$this->DURASI_OBSERVASI_END 		= (!$this->input->post($form_name[203]) ? $data->DURASI_OBSERVASI_END : $this->input->post($form_name[203]));
				$this->DURASI_TES_LISAN_START 		= (!$this->input->post($form_name[204]) ? $data->DURASI_TES_LISAN_START : $this->input->post($form_name[204]));
				$this->DURASI_TES_LISAN_END 		= (!$this->input->post($form_name[205]) ? $data->DURASI_TES_LISAN_END : $this->input->post($form_name[205]));
				$this->LOKASI_ASESMEN 				= (!$this->input->post($form_name[206]) ? $data->LOKASI_ASESMEN : $this->input->post($form_name[206]));
				$this->_3_1_KARAKTERISTIK_PESERTA 	= (!$this->input->post($form_name[207]) ? $data->_3_1_KARAKTERISTIK_PESERTA : $this->input->post($form_name[207]));
				$this->_3_1_PENYESUAIAN_KEBUTUHAN_SPESIFIK = (!$this->input->post($form_name[208]) ? $data->_3_1_PENYESUAIAN_KEBUTUHAN_SPESIFIK : $this->input->post($form_name[208]));
				$this->_3_2_PADA_BATASAN_VARIABEL 	= (!$this->input->post($form_name[209]) ? $data->_3_2_PADA_BATASAN_VARIABEL : $this->input->post($form_name[209]));
				$this->_3_2_PADA_PANDUAN_PENILAIAN 	= (!$this->input->post($form_name[210]) ? $data->_3_2_PADA_PANDUAN_PENILAIAN : $this->input->post($form_name[210]));
				$this->_3_3 						= (!$this->input->post($form_name[211]) ? $data->_3_3 : $this->input->post($form_name[211]));
				$this->_3_3_CATATAN 				= (!$this->input->post($form_name[212]) ? $data->_3_3_CATATAN : $this->input->post($form_name[212]));
				$this->_3_4 						= (!$this->input->post($form_name[213]) ? $data->_3_4 : $this->input->post($form_name[213]));
				$this->_3_4_CATATAN 				= (!$this->input->post($form_name[214]) ? $data->_3_4_CATATAN : $this->input->post($form_name[214]));
				$this->_3_5 						= (!$this->input->post($form_name[215]) ? $data->_3_5 : $this->input->post($form_name[215]));
				$this->_3_5_CATATAN 				= (!$this->input->post($form_name[216]) ? $data->_3_5_CATATAN : $this->input->post($form_name[216]));
				$this->_3_6 						= (!$this->input->post($form_name[217]) ? $data->_3_6 : $this->input->post($form_name[217]));
				$this->_3_6_CATATAN 				= (!$this->input->post($form_name[218]) ? $data->_3_6_CATATAN : $this->input->post($form_name[218]));
				$this->PENGATURAN_DUKUNGAN_SPESIALIS = (!$this->input->post($form_name[219]) ? $data->PENGATURAN_DUKUNGAN_SPESIALIS : $this->input->post($form_name[219]));
				$this->STRATEGI_KOMUNIKASI 			= (!$this->input->post($form_name[220]) ? null : implode(';', $this->input->post($form_name[220])));
				$this->KOORDINATOR_TUK 				= (!$this->input->post($form_name[221]) ? $data->KOORDINATOR_TUK : $this->input->post($form_name[221]));
				$this->KOORDINATOR_TUK_DTM 			= (!$this->input->post($form_name[222]) ? null : date('Y-m-d H:i:s'));
				$this->MANAGER_SERTIFIKASI_LSP 		= (!$this->input->post($form_name[223]) ? $data->MANAGER_SERTIFIKASI_LSP : $this->input->post($form_name[223]));
				$this->MANAGER_SERTIFIKASI_LSP_DTM 	= (!$this->input->post($form_name[224]) ? null : date('Y-m-d H:i:s'));
				$this->MANAGER_TEMPAT_KERJA 		= (!$this->input->post($form_name[225]) ? $data->MANAGER_TEMPAT_KERJA : $this->input->post($form_name[225]));
				$this->MANAGER_TEMPAT_KERJA_DTM 	= (!$this->input->post($form_name[226]) ? null : date('Y-m-d H:i:s'));
				$this->PENYUSUN_RENCANA 			= (!$this->input->post($form_name[227]) ? $data->PENYUSUN_RENCANA : $this->input->post($form_name[227]));
				$this->PENYUSUN_RENCANA_NO_REG 		= (!$this->input->post($form_name[228]) ? $data->PENYUSUN_RENCANA_NO_REG : $this->input->post($form_name[228]));
				$this->PENYUSUN_RENCANA_DTM 		= (!$this->input->post($form_name[229]) ? null : date('Y-m-d H:i:s'));
				$this->MANAGER_SERTIFIKASI 			= (!$this->input->post($form_name[230]) ? $data->MANAGER_SERTIFIKASI : $this->input->post($form_name[230]));
				$this->MANAGER_SERTIFIKASI_JABATAN 	= (!$this->input->post($form_name[231]) ? $data->MANAGER_SERTIFIKASI_JABATAN : $this->input->post($form_name[231]));
				$this->MANAGER_SERTIFIKASI_DTM 		= (!$this->input->post($form_name[232]) ? null : date('Y-m-d H:i:s'));
				$this->USR_CRT						= $data->USR_CRT;
				$this->DTM_CRT						= $data->DTM_CRT;
				$this->USR_UPD						= 'Karid Nurvenus';
				$this->DTM_UPD						= date('Y-m-d H:i:s');
				$this->IS_ACTIVE					= (!$this->input->post($form_name[233]) ? $data->IS_ACTIVE : $this->input->post($form_name[233]));
					
				return $this->db->update('FR_MMA', $this, $condition);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('FR_MMA', $condition);
			}
		
	}
?>