<?php
class M_form_apl_02 extends CI_Model {
		
	public function form_add($data, $form_name)
		{			
			$data["saveMethod"]		= "add";
			$data[$form_name[134]] 	= '';
			$data[$form_name[163]] 	= '';
			$data[$form_name[140]] 	= '';
			$data[$form_name[150]] 	= '';
			$data[$form_name[115]] 	= '';
			$data[$form_name[116]] 	= '';
			$data[$form_name[117]] 	= '';
			$data[$form_name[118]] 	= '';
			$data[$form_name[119]] 	= '';
			$data[$form_name[120]] 	= '';
			$data[$form_name[121]] 	= '';
			$data[$form_name[122]] 	= '';
			$data[$form_name[123]] 	= '';
			$data[$form_name[130]] 	= '';
			$data[$form_name[124]] 	= '';
			$data[$form_name[125]] 	= '';
			$data[$form_name[126]] 	= '';
			$data[$form_name[127]] 	= '';
			$data[$form_name[128]] 	= '';
			$data[$form_name[129]] 	= '';
			$data[$form_name[132]] 	= '';
			$data[$form_name[131]] 	= '';
			$data[$form_name[133]] 	= '';
			$data[$form_name[141]] 	= '';
			$data[$form_name[144]] 	= '';
			$data[$form_name[158]] 	= '';
			$data[$form_name[162]] 	= '';
			$data[$form_name[161]] 	= '';
			$data[$form_name[160]] 	= '';
			$data[$form_name[102]] 	= ''; //UUID_SKEMA
			$data[$form_name[105]] 	= ''; //UUID_UK
			$data[$form_name[136]] 	= ''; //UUID_BUKTI
		
			return $data;
		}
		
	public function form_edit($data, $form_name, $result)
		{
			$data["saveMethod"]		= "edit";
			$data[$form_name[134]] 	= $result->UUID_APL01;
			$data[$form_name[163]] 	= $result->UUID_ADM;
			$data[$form_name[140]] 	= $result->UUID_USER;
			$data[$form_name[150]] 	= $result->NO_DOKUMEN;
			$data[$form_name[115]] 	= $result->NAMA_LENGKAP;
			$data[$form_name[116]] 	= $result->TEMPAT_LAHIR;
			$data[$form_name[117]] 	= $result->TGL_LAHIR;
			$data[$form_name[118]] 	= $result->JENIS_KELAMIN;
			$data[$form_name[119]] 	= $result->KEBANGSAAN;
			$data[$form_name[120]] 	= $result->ALAMAT_RUMAH;
			$data[$form_name[121]] 	= $result->KODE_POS_RUMAH;
			$data[$form_name[122]] 	= $result->NO_TLP_RUMAH;
			$data[$form_name[123]] 	= $result->NO_TLP_HP;
			$data[$form_name[130]] 	= $result->NO_TLP_KANTOR;
			$data[$form_name[124]] 	= $result->EMAIL;
			$data[$form_name[125]] 	= $result->PENDIDIKAN_TERAKHIR;
			$data[$form_name[126]] 	= $result->NAMA_PERUSAHAAN;
			$data[$form_name[127]] 	= $result->JABATAN;
			$data[$form_name[128]] 	= $result->ALAMAT_KANTOR;
			$data[$form_name[129]] 	= $result->KODE_POS_PERUSAHAAN;
			$data[$form_name[132]] 	= $result->EMAIL_KANTOR;
			$data[$form_name[131]] 	= $result->FAX_KANTOR;
			$data[$form_name[133]] 	= $result->TUJUAN_ASESMEN;
			$data[$form_name[141]] 	= $result->TUJUAN_ASESMEN_LAINNYA_KETERANGAN;
			$data[$form_name[144]] 	= $result->JENIS_SKEMA;
			$data[$form_name[158]] 	= $result->UUID_SKEMA;
			$data[$form_name[101]] 	= $result->NOMOR_SKEMA;
			$data[$form_name[162]] 	= $result->IS_DITERIMA;
			$data[$form_name[161]] 	= $result->IS_MEMENUHI_SYARAT;
			$data[$form_name[160]] 	= $result->ALASAN_KURANG_SYARAT;
			$data[$form_name[102]] 	= ''; //UUID_SKEMA
			$data[$form_name[105]] 	= ''; //UUID_UK
			$data[$form_name[136]] 	= ''; //UUID_BUKTI
			
			return $data;
		}		
}
