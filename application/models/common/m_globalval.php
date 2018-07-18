<?php
	class m_globalval extends CI_Model{
		/* INITIALITATION */
		var $application	= array();
		var $menu_title		= array();
		var $form_title 	= array();
		var $form_name 		= array();
		var $form_id 		= array();
		var $form_button 	= array();
		var $ajax_url 		= array();
		var $layout			= array();
		var $view			= array();
		var $isvalid_url	= array();
		var $validationMsg	= array();
		
		public function getAllData()
			{
				$data = array();
				
				$data["application"]	= $this->getApplication(); //+
				$data["menu_title"]		= $this->getMenuTitle(); //+
				$data["form_title"]		= $this->getFormTitle(); //+
				$data["form_name"]		= $this->getFormName(); //+
				$data["form_id"]		= $this->getFormId(); //Neutral, lebih baik, karna penamaan id itu bisa jadi 	harus unik dan berpola. Kekurangan: Menambah kompleksitas.
				$data["form_button"]	= $this->getFormButton(); //+
				$data["ajax_url"]		= $this->getAjaxURL(); //+
				$data["layout"]			= $this->getLayout(); //+
				$data["view"]			= $this->getView();	//+
				$data["isvalid_url"]	= $this->getIsValidUrl(); //+
				$data["validationMsg"]	= $this->getValidationMsg(); //+	
				
				return $data;
			}
		
		/* APPLICATION */
		public function getApplication()
			{
				$application[100] 	= "LSP BPJS Ketenagakerjaan"; // Header
				$application[101] 	= "Copyright © 2018 Deputi Direktur Bidang Learning. All rights reserved.";
				$application[102] 	= "Super Admin"; // Siapa yang login
				return $application;
			}
		
		/* MENU */					
		public function getMenuTitle()
			{
				$menu_title[100] 	= "Skema Sertifikasi";
				$menu_title[101] 	= "Unit Kompetensi";
				$menu_title[102] 	= "Elemen Kompetensi";
				$menu_title[103] 	= "Kriteria Unjuk Kerja";
				$menu_title[104] 	= "About";
				$menu_title[105] 	= "FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi";
				$menu_title[106] 	= "FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi - Tambah";
				$menu_title[107] 	= "FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi - Edit";
				$menu_title[108] 	= "FR-APL-01. Formulir Permohonan Sertifikasi Kompetensi - Upload";
				$menu_title[109] 	= "Bukti Kelengkapan";
				$menu_title[110] 	= "FR-APL-02. Asesmen Mandiri";
				$menu_title[111] 	= "FR-APL-02. Asesmen Mandiri - Tambah";
				$menu_title[112] 	= "FR-APL-02. Asesmen Mandiri - Edit";
				$menu_title[113] 	= "FR-APL-02. Asesmen Mandiri - Upload";
				$menu_title[114] 	= "FR-MMA. Merencanakan dan Mengorganisasikan Asesmen";
				$menu_title[115] 	= "";
				$menu_title[116] 	= "FR-MMA. Merencanakan dan Mengorganisasikan Asesmen - Validasi";
				return $menu_title;
			}		
		
		/* FORM */		
		public function getFormTitle()
			{
				$form_title[100] 	= "Tambah Skema Sertifikasi";
				$form_title[102] 	= "Edit Skema Sertifikasi";
				$form_title[103] 	= "Update";
				$form_title[104] 	= "Hapus";
				$form_title[105] 	= "Tambah Unit Kompetensi";
				$form_title[106] 	= "Edit Unit Kompetensi";
				$form_title[107] 	= "List Skema Sertifikasi";
				$form_title[108] 	= "Tambah Elemen Kompetensi";
				$form_title[109] 	= "Edit Elemen Kompetensi";
				$form_title[110] 	= "Tambah Kriteria Unjuk Kerja";
				$form_title[111] 	= "Edit Kriteria Unjuk Kerja";
				$form_title[112] 	= "Unggah Data";
				$form_title[113] 	= "Edit Data";
				return $form_title;
			}	

		public function getFormName()
			{
				$form_name[100]		= "val_skema_nama";
				$form_name[101]		= "val_skema_nomor";
				$form_name[102]		= "val_skema_uuid";
				$form_name[103]		= "val_uk_judul";
				$form_name[104]		= "val_uk_kode";
				$form_name[105]		= "val_uk_uuid";
				$form_name[106]		= "val_skema_uuid[]";
				$form_name[107]		= "val_ek_nama";
				$form_name[108]		= "val_ek_nomor";
				$form_name[109]		= "val_ek_uuid";
				$form_name[110]		= "val_uk";
				$form_name[111]		= "val_kuk_pernyataan";
				$form_name[112]		= "val_kuk_nomor";
				$form_name[113]		= "val_kuk_uuid";
				$form_name[114]		= "val_kuk_pertanyaan";
				$form_name[115]		= "val_apl01_nama";
				$form_name[116]		= "val_apl01_tempat_lahir";
				$form_name[117]		= "val_apl01_tanggal_lahir";
				$form_name[118]		= "val_apl01_jenis_kelamin";
				$form_name[119]		= "val_apl01_kebangsaan";
				$form_name[120]		= "val_apl01_alamat_rumah";
				$form_name[121]		= "val_apl01_kode_pos_rumah";
				$form_name[122]		= "val_apl01_tlp_rumah";
				$form_name[123]		= "val_apl01_hp";
				$form_name[124]		= "val_apl01_email_pribadi";
				$form_name[125]		= "val_apl01_pendidikan";
				$form_name[126]		= "val_apl01_perusahaan";
				$form_name[127]		= "val_apl01_jabatan";
				$form_name[128]		= "val_apl01_alamat_kantor";
				$form_name[129]		= "val_apl01_kode_pos_kantor";
				$form_name[130]		= "val_apl01_tlp_kantor";
				$form_name[131]		= "val_apl01_fax_kantor";
				$form_name[132]		= "val_apl01_email_kantor";
				$form_name[133]		= "val_apl01_tujuan_asesmen";
				$form_name[134]		= "val_apl01_uuid";
				$form_name[135]		= "val_apl01_bukti";
				$form_name[136]		= "val_bukti_uuid";
				$form_name[137]		= "val_bukti_file";
				$form_name[138]		= "val_bukti_keterangan";
				$form_name[139]		= "val_bukti_uuid[]";
				$form_name[140]		= "val_user_uuid";
				$form_name[141]		= "val_apl01_tujuan_asesmen_lainnya_keterangan";
				$form_name[142]		= "val_apl01_skema";
				$form_name[143]		= "val_uk_uuid[]";
				$form_name[144]		= "val_apl01_jenis_skema";
				$form_name[145]		= "val_mma_uuid";
				$form_name[146]		= "val_apl02_uuid";
				$form_name[147]		= "val_apl02_nama_asesor";
				$form_name[148]		= "val_apl02_tuk";
				$form_name[149]		= "";
				$form_name[150]		= "val_apl01_no_dokumen";
				$form_name[151]		= "";
				$form_name[152]		= "";
				$form_name[153]		= "";
				$form_name[154]		= "";
				$form_name[155]		= "val_skema_is_active";
				$form_name[156]		= "val_uk_is_active";
				$form_name[157]		= "val_skema_uk_uuid";
				$form_name[158]		= "val_skema_uuid_2";
				$form_name[159]		= "val_apl01_is_active";
				$form_name[160]		= "val_apl01_alasan_kurang_syarat";
				$form_name[161]		= "val_apl01_is_memenuhi_syarat";
				$form_name[162]		= "val_apl01_is_diterima";
				$form_name[163]		= "val_sa_uuid";
				$form_name[164]		= "val_bukti_url";
				$form_name[165]		= "val_bukti_is_active";
				$form_name[166]		= "val_kuk_is_active";
				$form_name[167]		= "val_ek_is_active";
				$form_name[168]		= "val_apl02_no_dokumen";
				$form_name[169]		= "val_apl02_is_kompeten";
				$form_name[170]		= "val_apl02_alasan_blm_kompeten";
				$form_name[171]		= "val_apl02_is_dilanjutkan";
				$form_name[172]		= "val_apl02_catatan_1";
				$form_name[173]		= "val_apl02_catatan_2";
				$form_name[174]		= "val_apl02_is_active";
				$form_name[175]		= "val_ans_apl02_uuid";
				$form_name[176]		= "val_ans_apl02_is_kompeten";
				$form_name[177]		= "val_ek_uuid[]";
				$form_name[178]		= "val_kuk_uuid[]";
				$form_name[179]		= "val_apl02_is_kompeten[]";
				$form_name[180]		= "val_mma_no_dokumen";
				$form_name[181] 	= "val_mma_kelompok_target_1";
				$form_name[182] 	= "val_mma_kelompok_target_2";
				$form_name[183] 	= "val_mma_tujuan_asesmen";
				$form_name[184] 	= "val_mma_konteks_asesmen_1";
				$form_name[185] 	= "val_mma_konteks_asesmen_2";
				$form_name[186] 	= "val_mma_pihak_relevan";
				$form_name[187] 	= "val_mma_aturan_lsp";
				$form_name[188] 	= "val_mma_aturan_teknis";
				$form_name[189] 	= "val_mma_pendekatan_asesmen";
				$form_name[190] 	= "val_mma_strategi_asesmen[]";
				$form_name[19001] 	= "val_mma_strategi_asesmen";
				$form_name[191] 	= "val_mma_acuan_pembanding[]";
				$form_name[19101] 	= "val_mma_acuan_pembanding";
				$form_name[192] 	= "val_mma_acuan_pembanding_keterangan[]";
				$form_name[19201] 	= "val_mma_acuan_pembanding_keterangan";
				$form_name[19202] 	= "val_mma_acuan_pembanding_kompetensi";
				$form_name[19203] 	= "val_mma_acuan_pembanding_produk";
				$form_name[19204] 	= "val_mma_acuan_pembanding_sistem";
				$form_name[19205] 	= "val_mma_acuan_pembanding_teknis";
				$form_name[19206] 	= "val_mma_acuan_pembanding_sop";
				$form_name[193] 	= "val_mma_batasan_variabel";
				$form_name[194] 	= "val_mma_panduan_asesmen";
				$form_name[195] 	= "val_mma_persetujuan_asesor";
				$form_name[196] 	= "val_mma_persetujuan_asesor_dtm";
				$form_name[197] 	= "val_mma_persetujuan_penyedia";
				$form_name[198] 	= "val_mma_persetujuan_penyedia_dtm";
				$form_name[199] 	= "val_mma_persetujuan_tuk";
				$form_name[200] 	= "val_mma_persetujuan_tuk_dtm";
				$form_name[201] 	= "val_mma_tanggal_uji_kompetensi";
				$form_name[202] 	= "val_mma_durasi_observasi_start";
				$form_name[203] 	= "val_mma_durasi_observasi_end";
				$form_name[204] 	= "val_mma_durasi_tes_lisan_start";
				$form_name[205] 	= "val_mma_durasi_tes_lisan_end";
				$form_name[206] 	= "val_mma_lokasi_asesmen";
				$form_name[207] 	= "val_mma_3_1_karakteristik_peserta";
				$form_name[208] 	= "val_mma_3_1_penyesuaian_kebutuhan_spesifik";
				$form_name[209] 	= "val_mma_3_2_pada_batasan_variabel";
				$form_name[210] 	= "val_mma_3_2_pada_panduan_penilaian";
				$form_name[211] 	= "val_mma_3_3";
				$form_name[212] 	= "val_mma_3_3_catatan";
				$form_name[213] 	= "val_mma_3_4";
				$form_name[214] 	= "val_mma_3_4_catatan";
				$form_name[215] 	= "val_mma_3_5";
				$form_name[216] 	= "val_mma_3_5_catatan";
				$form_name[217] 	= "val_mma_3_6";
				$form_name[218] 	= "val_mma_3_6_catatan";
				$form_name[219] 	= "val_mma_pengaturan_dukungan_spesialis";
				$form_name[220] 	= "val_mma_strategi_komunikasi[]";
				$form_name[22001] 	= "val_mma_strategi_komunikasi";
				$form_name[221] 	= "val_mma_koordinator_tuk";
				$form_name[222] 	= "val_mma_koordinator_tuk_dtm";
				$form_name[223] 	= "val_mma_manager_sertifikasi_lsp";
				$form_name[224] 	= "val_mma_manager_sertifikasi_lsp_dtm";
				$form_name[225] 	= "val_mma_manager_tempat_kerja";
				$form_name[226] 	= "val_mma_manager_tempat_kerja_dtm";
				$form_name[227] 	= "val_mma_penyusun_rencana";
				$form_name[228] 	= "val_mma_penyusun_rencana_no_reg";
				$form_name[229] 	= "val_mma_penyusun_rencana_dtm";
				$form_name[230] 	= "val_mma_manager_sertifikasi";
				$form_name[231] 	= "val_mma_manager_sertifikasi_jabatan";
				$form_name[232] 	= "val_mma_manager_sertifikasi_dtm";			
				$form_name[233] 	= "val_mma_is_active";	
				$form_name[234] 	= "val_mma_kuk_jenis_bukti";
				$form_name[235] 	= "val_mma_kuk_perangkat_asesmen";
				$form_name[236] 	= "val_mma_kuk_uuid";

				return $form_name;
			}		
		
		public function getFormId()
			{
				$form_id[100]		= "skema_sertifikasi_form";
				$form_id[101]		= "skema_sertifikasi_judul";
				$form_id[102]		= "skema_sertifikasi_nomor";
				$form_id[103]		= "skema_sertifikasi_modal";
				$form_id[104]		= "skema_sertifikasi_tabel";
				$form_id[105]		= "skema_sertifikasi_uuid";
				$form_id[106]		= "unit_kompetensi_modal_list";
				$form_id[107]		= "unit_kompetensi_modal_tabel";
				$form_id[108]		= "unit_kompetensi_modal_judul";
				$form_id[109]		= "unit_kompetensi_modal_nomor";
				$form_id[110]		= "unit_kompetensi_form";
				$form_id[111]		= "unit_kompetensi_judul";
				$form_id[112]		= "unit_kompetensi_nomor";
				$form_id[113]		= "unit_kompetensi_modal";
				$form_id[114]		= "unit_kompetensi_tabel";
				$form_id[115]		= "unit_kompetensi_uuid";
				$form_id[116]		= "result1";
				$form_id[117]		= "result2";
				$form_id[118]		= "elemen_kompetensi_form_search";
				$form_id[119]		= "elemen_kompetensi_form";
				$form_id[120]		= "elemen_kompetensi_nama";
				$form_id[121]		= "elemen_kompetensi_nomor";
				$form_id[122]		= "elemen_kompetensi_modal";
				$form_id[123]		= "elemen_kompetensi_tabel";
				$form_id[124]		= "elemen_kompetensi_uuid";
				$form_id[125]		= "unit_kompetensi";
				$form_id[126]		= "kriteria_unjuk_kerja_form_search";
				$form_id[127]		= "kriteria_unjuk_kerja_form";
				$form_id[128]		= "kriteria_unjuk_kerja_pernyataan";
				$form_id[129]		= "kriteria_unjuk_kerja_nomor";
				$form_id[130]		= "kriteria_unjuk_kerja_modal";
				$form_id[131]		= "kriteria_unjuk_kerja_tabel";
				$form_id[132]		= "kriteria_unjuk_kerja_uuid";
				$form_id[133]		= "kriteria_unjuk_kerja_pertanyaan";
				$form_id[134]		= "elemen_kompetensi";
				$form_id[135]		= "btn_search";
				$form_id[136]		= "fr_apl_01_form";
				$form_id[137]		= "fr_apl_01_modal";
				$form_id[138]		= "fr_apl_01_tabel";
				$form_id[139]		= "fr_apl_01_uuid";
				$form_id[140]		= "fr_apl_01_nama";
				$form_id[141]		= "fr_apl_01_tempat_lahir";
				$form_id[142]		= "fr_apl_01_tanggal_lahir";
				$form_id[143]		= "fr_apl_01_jk_laki";
				$form_id[144]		= "fr_apl_01_kebangsaan";
				$form_id[145]		= "fr_apl_01_alamat_rumah";
				$form_id[146]		= "fr_apl_01_kode_pos_rumah";
				$form_id[147]		= "fr_apl_01_tlp_rumah";
				$form_id[148]		= "fr_apl_01_hp";
				$form_id[149]		= "fr_apl_01_email_pribadi";
				$form_id[150]		= "fr_apl_01_pendidikan";
				$form_id[151]		= "fr_apl_01_perusahaan";
				$form_id[152]		= "fr_apl_01_jabatan";
				$form_id[153]		= "fr_apl_01_alamat_kantor";
				$form_id[154]		= "fr_apl_01_kode_pos_kantor";
				$form_id[155]		= "fr_apl_01_tlp_kantor";
				$form_id[156]		= "fr_apl_01_fax_kantor";
				$form_id[157]		= "fr_apl_01_email_kantor";
				$form_id[158]		= "fr_apl_01_tujuan_asesmen_rpl";
				$form_id[159]		= "fr_apl_01_tujuan_asesmen_ppp";
				$form_id[160]		= "fr_apl_01_tujuan_asesmen_rcc";
				$form_id[161]		= "fr_apl_01_tujuan_asesmen_sert";
				$form_id[162]		= "fr_apl_01_tujuan_asesmen_lainnya";
				$form_id[163]		= "fr_apl_01_jk_wanita";
				$form_id[164]		= "fr_apl_01_tujuan_asesmen_lainnya_keterangan";
				$form_id[165]		= "fr_apl_01_jenis_skema_sertifikasi";
				$form_id[166]		= "fr_apl_01_form_upload";
				$form_id[167]		= "fr_apl_01_bukti";
				$form_id[168]		= "bukti_kelengkapan_form";
				$form_id[169]		= "bukti_kelengkapan_file";
				$form_id[170]		= "bukti_kelengkapan_keterangan";
				$form_id[171]		= "bukti_kelengkapan_modal";
				$form_id[172]		= "bukti_kelengkapan_tabel";
				$form_id[173]		= "bukti_kelengkapan_uuid";
				$form_id[174]		= "fr_mma_jenis_bukti";
				$form_id[175]		= "fr_apl_02_uuid";
				$form_id[176]		= "fr_apl_02_nama_asesor";
				$form_id[177]		= "fr_apl_02_tuk";
				$form_id[178]		= "fr_apl_01_no_dokumen";
				$form_id[179]		= "fr_apl_02_is_kompeten";
				$form_id[180]		= "fr_apl_02_saveButton";
				$form_id[181]		= "fr_apl_02_form";
				$form_id[182]		= "fr_apl_02_tabel";
				$form_id[183]		= "bukti_kelengkapan_form_edit";
				$form_id[184]		= "bukti_kelengkapan_modal_edit";
				$form_id[185]		= "fr_mma_tabel";
				$form_id[186]		= "fr_mma_lsp";
				$form_id[187]		= "fr_mma_asesor";
				$form_id[188]		= "fr_mma_tanggal";
				$form_id[189]		= "fr_mma_metode";
				$form_id[190]		= "fr_mma_form";
				$form_id[191]		= "mma_acuan_pembanding_kompetensi";
				$form_id[192]		= "mma_acuan_pembanding_produk";
				$form_id[193]		= "mma_acuan_pembanding_sistem";
				$form_id[194]		= "mma_acuan_pembanding_teknis";
				$form_id[195]		= "mma_acuan_pembanding_sop";
				$form_id[196]		= "mma_acuan_pembanding_kompetensi_ket";
				$form_id[197]		= "mma_acuan_pembanding_produk_ket";
				$form_id[198]		= "mma_acuan_pembanding_sistem_ket";
				$form_id[199]		= "mma_acuan_pembanding_teknis_ket";
				$form_id[200]		= "mma_acuan_pembanding_sop_ket";
				return $form_id;
			}	

		public function getFormButton()
			{
				$form_button[100] 	= "Tutup";
				$form_button[101] 	= "Simpan";
				$form_button[102]	= "Ok";
				$form_button[103] 	= "Batal";
				$form_button[104] 	= "Cari";
				$form_button[105] 	= "Selanjutnya";
				$form_button[106] 	= "Tambah";
				$form_button[107] 	= "Unggah Dokumen";
				return $form_button;
			}

		/* VALIDATION MESSAGE */
		public function getValidationMsg()
			{
				$validationMsg[100]	= "Nomor sudah ada.";
				$validationMsg[101]	= "Kode Unit Kompetensi sudah ada.";
				$validationMsg[102]	= "Nomor Elemen Kompetensi sudah ada.";
				$validationMsg[103]	= "Nomor Kriteria Unjuk Kerja sudah ada.";
				$validationMsg[104]	= "File tidak valid.";
				$validationMsg[105]	= "Keterangan tidak boleh sama.";				
				$validationMsg[106]	= "Data berhasil ditambahkan.";
				$validationMsg[107]	= "Data gagal ditambahkan.";
				$validationMsg[108]	= "Data berhasil diperbarui.";
				$validationMsg[109]	= "Data gagal diperbarui.";
				$validationMsg[110]	= "Data gagal dihapus.";

				return $validationMsg;
			}			
		
		/* AJAX SERVICE */
		public function getAjaxURL()
			{
				$ajax_url[100] 	= base_url()."lsp/skema_sertifikasi/saveDt";
				$ajax_url[101] 	= base_url()."lsp/skema_sertifikasi/getList";
				$ajax_url[102] 	= base_url()."lsp/skema_sertifikasi/getADt/";
				$ajax_url[103] 	= base_url()."lsp/skema_sertifikasi/updateDt";
				$ajax_url[104] 	= base_url()."lsp/skema_sertifikasi/deleteDt/";
				$ajax_url[105] 	= base_url()."lsp/unit_kompetensi/saveDt";
				$ajax_url[106] 	= base_url()."lsp/unit_kompetensi/getList_UK";
				$ajax_url[107] 	= base_url()."lsp/unit_kompetensi/getADt_SKE_UK/";
				$ajax_url[108] 	= base_url()."lsp/unit_kompetensi/updateDt";
				$ajax_url[109] 	= base_url()."lsp/unit_kompetensi/deleteDt/";
				$ajax_url[110] 	= base_url()."lsp/unit_kompetensi/getList_SKE/";
				$ajax_url[111] 	= base_url()."lsp/elemen_kompetensi/getListPage";
				$ajax_url[112] 	= base_url()."lsp/elemen_kompetensi/saveDt";
				$ajax_url[113] 	= base_url()."lsp/elemen_kompetensi/getList/";
				$ajax_url[114] 	= base_url()."lsp/elemen_kompetensi/getADt/";
				$ajax_url[115] 	= base_url()."lsp/elemen_kompetensi/updateDt";
				$ajax_url[116] 	= base_url()."lsp/elemen_kompetensi/deleteDt/";
				$ajax_url[117] 	= base_url()."lsp/kriteria_unjuk_kerja/getListPage";
				$ajax_url[118] 	= base_url()."lsp/kriteria_unjuk_kerja/saveDt";
				$ajax_url[119] 	= base_url()."lsp/kriteria_unjuk_kerja/getList/";
				$ajax_url[120] 	= base_url()."lsp/kriteria_unjuk_kerja/getADt/";
				$ajax_url[121] 	= base_url()."lsp/kriteria_unjuk_kerja/updateDt";
				$ajax_url[122] 	= base_url()."lsp/kriteria_unjuk_kerja/deleteDt/";
				$ajax_url[123] 	= base_url()."lsp/kriteria_unjuk_kerja/getDt_109";
				$ajax_url[124] 	= base_url()."asesi/fr_apl_01/saveDt_apl_01";
				$ajax_url[125] 	= base_url()."asesi/fr_apl_01/getList_apl_01";
				$ajax_url[126] 	= base_url()."asesi/fr_apl_01/getOneDt_apl_01/";
				$ajax_url[127] 	= base_url()."asesi/fr_apl_01/updateDt_apl_01";
				$ajax_url[128] 	= base_url()."asesi/fr_apl_01/deleteDt_apl_01/";
				$ajax_url[129] 	= base_url()."asesi/fr_apl_01/pagingAdd";
				$ajax_url[130] 	= base_url()."asesi/fr_apl_01/pagingList";
				$ajax_url[131] 	= base_url()."asesi/fr_apl_01/getOneDt_nomorSkema";
				$ajax_url[132] 	= base_url()."asesi/fr_apl_01/getAllDt_skema_uk";
				$ajax_url[133] 	= base_url()."asesi/fr_apl_01/pagingEdit/";
				$ajax_url[134] 	= base_url()."asesi/fr_apl_01/pagingUpload/";
				$ajax_url[135] 	= base_url()."asesi/fr_apl_01/saveFile";
				$ajax_url[136] 	= base_url()."asesi/fr_apl_01/updateFile/";
				$ajax_url[137] 	= base_url()."asesi/bukti_kelengkapan/saveDt";
				$ajax_url[138] 	= base_url()."asesi/bukti_kelengkapan/getList";
				$ajax_url[139] 	= base_url()."asesi/bukti_kelengkapan/updateDt";
				$ajax_url[140] 	= base_url()."asesi/bukti_kelengkapan/deleteDt/";
				$ajax_url[141] 	= base_url()."asesi/bukti_kelengkapan/getADt/";
				$ajax_url[142] 	= base_url()."asesi/fr_apl_01/getAllDt_bukti";
				$ajax_url[143] 	= base_url()."asesi/fr_apl_02/pagingAdd";
				$ajax_url[144] 	= base_url()."asesi/fr_apl_02/pagingUpload/";
				$ajax_url[145] 	= base_url()."asesi/fr_apl_02/pagingList";
				$ajax_url[146] 	= base_url()."asesi/fr_apl_02/pagingEdit/";
				$ajax_url[147] 	= base_url()."asesi/fr_apl_02/getOneDt_apl01";
				$ajax_url[148] 	= base_url()."asesi/fr_apl_02/pagingChild/";
				$ajax_url[149] 	= base_url()."asesi/fr_apl_02/saveDt_apl_02";
				$ajax_url[150] 	= base_url()."asesi/fr_apl_02/updateDt_apl_02";
				$ajax_url[151] 	= base_url()."asesi/fr_apl_02/deleteDt_apl_02/";
				$ajax_url[152] 	= base_url()."asesi/fr_apl_02/getList_apl02";
				$ajax_url[153] 	= base_url()."asesor/fr_mma/pagingList";
				$ajax_url[154] 	= base_url()."asesor/fr_mma/updateDt_mma";
				$ajax_url[155] 	= base_url()."asesor/fr_mma/pagingEdit/";
				$ajax_url[156] 	= base_url()."";
				$ajax_url[157] 	= base_url()."asesor/fr_mma/getList_mma";
				$ajax_url[158] 	= base_url()."";
				$ajax_url[159] 	= base_url()."asesor/fr_mma/updateDt_mma";
				$ajax_url[160] 	= base_url()."asesor/fr_mma/deleteDt_mma";
				return $ajax_url;
			}
		
		/* LAYOUT */
		public function getLayout()
			{
				$layout[100]	= "common/v_layout";
				$layout[101]	= "common/v_layout_header";
				$layout[102]	= "common/v_layout_menu_lsp";
				$layout[103]	= "common/v_layout_title";
				$layout[104]	= "common/v_layout_footer";
				$layout[105]	= "common/v_layout_menu_asesi";
				$layout[106]	= "common/v_layout_menu_asesor";
				return $layout;
			}
			
		/* VIEW */
		public function getView()
			{
				$view[100]	= "lsp/v_skema_sertifikasi";
				$view[101]	= "lsp/v_unit_kompetensi";
				$view[102]	= "lsp/v_skema_sertifikasi_event";
				$view[103]	= "lsp/v_unit_kompetensi_event";
				$view[104]	= "lsp/v_elemen_kompetensi";
				$view[105]	= "lsp/v_elemen_kompetensi_event";
				$view[106]	= "lsp/v_elemen_kompetensi_search";
				$view[107]	= "lsp/v_elemen_kompetensi_search_event";
				$view[108]	= "lsp/v_kriteria_unjuk_kerja";
				$view[109]	= "lsp/v_kriteria_unjuk_kerja_event";
				$view[110]	= "lsp/v_kriteria_unjuk_kerja_search";
				$view[111]	= "lsp/v_kriteria_unjuk_kerja_search_event";
				$view[112]	= "lsp/v_about";
				$view[113]	= "lsp/v_about_event";
				$view[114]	= "asesi/v_about";
				$view[115]	= "asesi/v_fr_apl_01";
				$view[116]	= "asesi/v_fr_apl_01_event";
				$view[117]	= "asesi/v_fr_apl_01_form";
				$view[118]	= "asesi/v_fr_apl_01_form_event";
				$view[119]	= "asesi/v_fr_apl_01_paging_event";
				$view[120]	= "asesi/v_fr_apl_02_form_child";
				$view[121]	= "asesi/v_about_event";
				$view[122]	= "asesi/v_bukti_kelengkapan";
				$view[123]	= "asesi/v_bukti_kelengkapan_event";
				$view[124]	= "asesi/v_fr_apl_02";
				$view[125]	= "asesi/v_fr_apl_02_event";
				$view[126]	= "asesi/v_fr_apl_02_form";
				$view[127]	= "asesi/v_fr_apl_02_form_event";
				$view[128]	= "asesi/v_fr_apl_02_paging_event";
				$view[129]	= "asesor/v_fr_mma";
				$view[130]	= "asesor/v_fr_mma_event";
				$view[131]	= "asesor/v_fr_mma_form";
				$view[132]	= "asesor/v_fr_mma_form_event";
				$view[133]	= "asesor/v_fr_mma_form_child";
				$view[134]	= "asesor/v_fr_mma_paging_event";
				$view[135]	= "asesor/v_about";
				$view[136]	= "asesor/v_about_event";
				return $view;
			}
			
		/* VALIDATION URL */
		public function getIsValidUrl()
			{
				$isvalid_url[104]	= base_url()."asesi/bukti_kelengkapan/isFN138valid";
				
				$isvalid_url[100]	= base_url()."Validation/isSkemaNomorExist";
				$isvalid_url[101]	= base_url()."Validation/isUkKodeExist";
				$isvalid_url[102]	= base_url()."Validation/isEkNomorExist";
				$isvalid_url[103]	= base_url()."Validation/isKukNomorExist";
				$isvalid_url[104]	= base_url()."Validation/isFN138valid";
				return $isvalid_url;
			}
	}
?>