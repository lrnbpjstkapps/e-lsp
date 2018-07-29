<?php
class M_form_mma extends CI_Model {
		
	public function form_add($data, $form_name)
		{			
			$data["saveMethod"]		= "add";
			$data[$form_name[145]] 	= "";
			$data[$form_name[140]] 	= "";
			$data[$form_name[134]] 	= "";
			$data[$form_name[146]] 	= "";
			$data[$form_name[180]] 	= "";
			$data[$form_name[181]] 	= "";
			$data[$form_name[182]] 	= "";
			$data[$form_name[183]] 	= "";
			$data[$form_name[184]] 	= "";
			$data[$form_name[185]] 	= "";
			$data[$form_name[186]] 	= "";
			$data[$form_name[187]] 	= "";
			$data[$form_name[188]] 	= "";
			$data[$form_name[189]] 	= "";
			$data[$form_name[190]] 	= "";
			$data[$form_name[191]] 	= "";
			$data[$form_name[192]] 	= "";
			$data[$form_name[193]] 	= "";
			$data[$form_name[194]] 	= "";
			$data[$form_name[195]] 	= "";
			$data[$form_name[196]] 	= "";
			$data[$form_name[197]] 	= "";
			$data[$form_name[198]] 	= "";
			$data[$form_name[199]] 	= "";
			$data[$form_name[200]] 	= "";
			$data[$form_name[201]] 	= "";
			$data[$form_name[202]] 	= "";
			$data[$form_name[203]] 	= "";
			$data[$form_name[204]] 	= "";
			$data[$form_name[205]] 	= "";
			$data[$form_name[206]] 	= "";
			$data[$form_name[207]] 	= "";
			$data[$form_name[208]] 	= "";
			$data[$form_name[209]] 	= "";
			$data[$form_name[210]] 	= "";
			$data[$form_name[211]] 	= "";
			$data[$form_name[212]] 	= "";
			$data[$form_name[213]] 	= "";
			$data[$form_name[214]] 	= "";
			$data[$form_name[215]] 	= "";
			$data[$form_name[216]] 	= "";
			$data[$form_name[217]] 	= "";
			$data[$form_name[218]] 	= "";
			$data[$form_name[219]] 	= "";
			$data[$form_name[220]] 	= "";
			$data[$form_name[221]] 	= "";
			$data[$form_name[222]] 	= "";
			$data[$form_name[223]] 	= "";
			$data[$form_name[224]] 	= "";
			$data[$form_name[225]] 	= "";
			$data[$form_name[226]] 	= "";
			$data[$form_name[227]] 	= "";
			$data[$form_name[228]] 	= "";
			$data[$form_name[229]] 	= "";
			$data[$form_name[230]] 	= "";
			$data[$form_name[231]] 	= "";
			$data[$form_name[232]] 	= "";			
			return $data;
		}
		
	public function form_edit($data, $form_name, $result)
		{
			$data["saveMethod"]		= "edit";
			$data[$form_name[145]] 	= $result->UUID_MMA;
			$data[$form_name[140]] 	= $result->UUID_USER;
			$data[$form_name[134]] 	= $result->UUID_APL_01;
			$data[$form_name[146]] 	= $result->UUID_APL_02;
			$data[$form_name[180]] 	= $result->NO_DOKUMEN;
			$data[$form_name[181]] 	= $result->KELOMPOK_TARGET_1;
			$data[$form_name[182]] 	= $result->KELOMPOK_TARGET_2;
			$data[$form_name[183]] 	= $result->TUJUAN_ASESMEN;
			$data[$form_name[184]] 	= $result->KONTEKS_ASESMEN_1;
			$data[$form_name[185]] 	= $result->KONTEKS_ASESMEN_2;
			$data[$form_name[186]] 	= $result->PIHAK_RELEVAN;
			$data[$form_name[187]] 	= $result->ATURAN_LSP;
			$data[$form_name[188]] 	= $result->ATURAN_TEKNIS;
			$data[$form_name[189]] 	= $result->PENDEKATAN_ASESMEN;
			$data[$form_name[19001]] = explode("|", $result->STRATEGI_ASESMEN);
			$data[$form_name[19101]] = explode("|", $result->ACUAN_PEMBANDING);
			$data[$form_name[19201]] = explode("|", $result->ACUAN_PEMBANDING_KETERANGAN);

			for($i = 0; $i < count (explode("|", $result->ACUAN_PEMBANDING_KETERANGAN)); $i++)
				{
					$words 		= explode("|", $result->ACUAN_PEMBANDING)[$i];
					$words_ket 	= explode("|", $result->ACUAN_PEMBANDING_KETERANGAN)[$i];

					if($words == "Standar kompetensi")
						{
							$data[$form_name[19202]] = $words_ket;
						}
					else if($words == "Standar produk")
						{
							$data[$form_name[19203]] = $words_ket;
						}
					else if($words == "Standar sistem")
						{
							$data[$form_name[19204]] = $words_ket;
						}
					else if($words == "Regulasi teknis")
						{
							$data[$form_name[19205]] = $words_ket;
						}
					else if($words == "SOP")
						{
							$data[$form_name[19206]] = $words_ket;
						}
				}

			if(empty($data[$form_name[19202]]))
			{
				$data[$form_name[19202]] = "";
			}
			if(empty($data[$form_name[19203]]))
			{
				$data[$form_name[19203]] = "";
			}
			if(empty($data[$form_name[19204]]))
			{
				$data[$form_name[19204]] = "";
			}
			if(empty($data[$form_name[19205]]))
			{
				$data[$form_name[19205]] = "";
			}
			if(empty($data[$form_name[19206]]))
			{
				$data[$form_name[19206]] = "";
			}

			$data[$form_name[193]] 	= $result->BATASAN_VARIABEL;
			$data[$form_name[194]] 	= $result->PANDUAN_ASESMEN;
			$data[$form_name[195]] 	= $result->PERSETUJUAN_ASESOR;
			$data[$form_name[196]] 	= $result->PERSETUJUAN_ASESOR_DTM;
			$data[$form_name[197]] 	= $result->PERSETUJUAN_PENYEDIA;
			$data[$form_name[198]] 	= $result->PERSETUJUAN_PENYEDIA_DTM;
			$data[$form_name[199]] 	= $result->PERSETUJUAN_TUK;
			$data[$form_name[200]] 	= $result->PERSETUJUAN_TUK_DTM;
			$data[$form_name[201]] 	= $result->TANGGAL_UJI_KOMPETENSI;
			$data[$form_name[202]] 	= $result->DURASI_OBSERVASI_START;
			$data[$form_name[203]] 	= $result->DURASI_OBSERVASI_END;
			$data[$form_name[204]] 	= $result->DURASI_TES_LISAN_START;
			$data[$form_name[205]] 	= $result->DURASI_TES_LISAN_END;
			$data[$form_name[206]] 	= $result->LOKASI_ASESMEN;
			$data[$form_name[207]] 	= $result->_3_1_KARAKTERISTIK_PESERTA;
			$data[$form_name[208]] 	= $result->_3_1_PENYESUAIAN_KEBUTUHAN_SPESIFIK;
			$data[$form_name[209]] 	= $result->_3_2_PADA_BATASAN_VARIABEL;
			$data[$form_name[210]] 	= $result->_3_2_PADA_PANDUAN_PENILAIAN;
			$data[$form_name[211]] 	= $result->_3_3;
			$data[$form_name[212]] 	= $result->_3_3_CATATAN;
			$data[$form_name[213]] 	= $result->_3_4;
			$data[$form_name[214]] 	= $result->_3_4_CATATAN;
			$data[$form_name[215]] 	= $result->_3_5;
			$data[$form_name[216]] 	= $result->_3_5_CATATAN;
			$data[$form_name[217]] 	= $result->_3_6;
			$data[$form_name[218]] 	= $result->_3_6_CATATAN;
			$data[$form_name[219]] 	= $result->PENGATURAN_DUKUNGAN_SPESIALIS;
			$data[$form_name[220]] 	= $result->STRATEGI_KOMUNIKASI;
			$data[$form_name[22001]] = explode("|", $result->STRATEGI_KOMUNIKASI);
			$data[$form_name[221]] 	= $result->KOORDINATOR_TUK;
			$data[$form_name[222]] 	= $result->KOORDINATOR_TUK_DTM;
			$data[$form_name[223]] 	= $result->MANAGER_SERTIFIKASI_LSP;
			$data[$form_name[224]] 	= $result->MANAGER_SERTIFIKASI_LSP_DTM;
			$data[$form_name[225]] 	= $result->MANAGER_TEMPAT_KERJA;
			$data[$form_name[226]] 	= $result->MANAGER_TEMPAT_KERJA_DTM;
			$data[$form_name[227]] 	= $result->PENYUSUN_RENCANA;
			$data[$form_name[228]] 	= $result->PENYUSUN_RENCANA_NO_REG;
			$data[$form_name[229]] 	= $result->PENYUSUN_RENCANA_DTM;
			$data[$form_name[230]] 	= $result->MANAGER_SERTIFIKASI;
			$data[$form_name[231]] 	= $result->MANAGER_SERTIFIKASI_JABATAN;
			$data[$form_name[232]] 	= $result->MANAGER_SERTIFIKASI_DTM;
			$data[$form_name[163]] 	= $result->UUID_ADM;			

			return $data;
		}		
}
