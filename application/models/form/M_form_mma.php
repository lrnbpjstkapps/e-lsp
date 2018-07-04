<?php
class M_form_mma extends CI_Model {
		
	public function form_add($data, $form_name)
		{			
			$data["saveMethod"]		= "add";
			$data[$form_name[146]] 	= '-';
			$data[$form_name[163]] 	= '';
			$data[$form_name[140]] 	= '';
			$data[$form_name[134]] 	= '';
			$data[$form_name[168]] 	= '';
			$data[$form_name[148]] 	= '';
			$data[$form_name[169]] 	= '';
			$data[$form_name[170]] 	= '';
			$data[$form_name[171]] 	= '';
			$data[$form_name[172]] 	= '';
			$data[$form_name[173]] 	= '';
			$data[$form_name[115]]	= '';
			$data[$form_name[101]] 	= '';
			$data[$form_name[100]] 	= '';
			
			return $data;
		}
		
	public function form_edit($data, $form_name, $result)
		{
			$data["saveMethod"]		= "edit";
			$data[$form_name[149]] = $result->UUID_MMA;
			$data[$form_name[140]] = $result->UUID_USER;
			$data[$form_name[134]] = $result->UUID_APL_01;
			$data[$form_name[146]] = $result->UUID_APL_02;
			$data[$form_name[180]] = $result->NO_DOKUMEN;
			$data[$form_name[181]] = $result->KELOMPOK_TARGET;
			$data[$form_name[182]] = $result->TUJUAN_ASESMEN;
			$data[$form_name[183]] = $result->KONTEKS_ASESMEN;
			$data[$form_name[184]] = $result->PIHAK_RELEVAN;
			$data[$form_name[185]] = $result->ATURAN_LSP;
			$data[$form_name[186]] = $result->ATURAN_TEKNIS;
			$data[$form_name[187]] = $result->PENDEKATAN_ASESMEN;
			$data[$form_name[188]] = $result->STRATEGI_ASESMEN;
			$data[$form_name[189]] = $result->ACUAN_PEMBANDING;
			$data[$form_name[190]] = $result->BATASAN_VARIABEL;
			$data[$form_name[191]] = $result->PANDUAN_ASESMEN;
			$data[$form_name[192]] = $result->PERSETUJUAN_ASESOR;
			$data[$form_name[193]] = $result->PERSETUJUAN_PENYEDIA;
			$data[$form_name[194]] = $result->PERSETUJUAN_TUK;
			$data[$form_name[195]] = $result->TANGGAL_UJI_KOMPETENSI;
			$data[$form_name[196]] = $result->DURASI_OBSERVASI_START;
			$data[$form_name[197]] = $result->DURASI_OBSERVASI_END;
			$data[$form_name[198]] = $result->DURASI_TES_LISAN_START;
			$data[$form_name[199]] = $result->DURASI_TES_LISAN_END;
			$data[$form_name[200]] = $result->LOKASI_ASESMEN;
			$data[$form_name[201]] = $result->KARAKTERISTIK_PESERTA;
			$data[$form_name[202]] = $result->PENYESUAIAN_KEBUTUHAN_SPESIFIK;
			$data[$form_name[203]] = $result->PADA_BATASAN_VARIABEL;
			$data[$form_name[204]] = $result->PADA_PANDUAN_PENILAIAN;
			$data[$form_name[205]] = $result->3_1;
			$data[$form_name[206]] = $result->3_1_CATATAN;
			$data[$form_name[207]] = $result->3_2;
			$data[$form_name[208]] = $result->3_2_CATATAN;
			$data[$form_name[209]] = $result->3_3;
			$data[$form_name[210]] = $result->3_3_CATATAN;
			$data[$form_name[211]] = $result->3_4;
			$data[$form_name[212]] = $result->3_4_CATATAN;
			$data[$form_name[213]] = $result->PENGATURAN_DUKUNGAN_SPESIALIS;
			$data[$form_name[214]] = $result->STRATEGI_KOMUNIKASI;
			$data[$form_name[215]] = $result->KOORDINATOR_TUK;
			$data[$form_name[216]] = $result->KOORDINATOR_TUK_DTM;
			$data[$form_name[217]] = $result->MANAGER_SERTIFIKASI_LSP;
			$data[$form_name[218]] = $result->MANAGER_SERTIFIKASI_LSP_DTM;
			$data[$form_name[219]] = $result->MANAGER_TEMPAT_KERJA;
			$data[$form_name[220]] = $result->MANAGER_TEMPAT_KERJA_DTM;
			$data[$form_name[221]] = $result->KET_ASESOR;
			$data[$form_name[222]] = $result->KET_MANAGER_SERTIFIKASI;
			$data[$form_name[223]] = $result->ASESOR;
			$data[$form_name[224]] = $result->MANAGER_SERTIFIKASI;	
			return $data;
		}		
}
