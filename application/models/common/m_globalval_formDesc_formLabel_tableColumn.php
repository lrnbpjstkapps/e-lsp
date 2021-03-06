<?php
	class m_globalval extends CI_Model{
		/* INITIALITATION */
		var $application	= array();
		var $menu_title		= array();
		var $form_title 	= array();
		var $form_action	= array();
		var $form_label 	= array();
		var $form_name 		= array();
		var $form_id 		= array();
		var $form_button 	= array();
		var $form_desc 		= array();
		var $ajax_url 		= array();
		var $table_column 	= array();
		var $layout			= array();
		var $view			= array();
		var $isvalid_url	= array();
		var $validationMsg	= array();
		
		public function getAllData()
			{
				$data = array();
				
				$data["application"]	= $this->getApplication();
				$data["menu_title"]		= $this->getMenuTitle();
				$data["form_title"]		= $this->getFormTitle();
				$data["form_action"]	= $this->getFormAction(); //NGGAPERLU
				$data["form_label"]		= $this->getFormLabel(); //NGGAPERLU
				$data["form_name"]		= $this->getFormName(); 
				$data["form_id"]		= $this->getFormId(); 
				$data["form_button"]	= $this->getFormButton(); 
				$data["form_desc"]		= $this->getFormDesc(); //NGGAPERLU
				$data["ajax_url"]		= $this->getAjaxURL();
				$data["table_column"]	= $this->getTableColumn(); //NGGAPERLU
				$data["layout"]			= $this->getLayout();
				$data["view"]			= $this->getView();	
				$data["isvalid_url"]	= $this->getIsValidUrl();	
				$data["validationMsg"]	= $this->getValidationMsg();	
				
				return $data;
			}
	
		// $form_label,  $form_desc, $table_column -> $form_desc
		
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

		public function getFormAction()
			{
				$form_action[100] 	= "skema_sertifikasi/saveData";	
				$form_action[101] 	= "skema_sertifikasi/updateData";	
				$form_action[102] 	= "skema_sertifikasi/deleteData";
				$form_action[103] 	= "unit_kompetensi/saveData";	
				$form_action[104] 	= "unit_kompetensi/updateData";	
				$form_action[105] 	= "unit_kompetensi/deleteData";
				return $form_action;
			}	

		public function getFormLabel()
			{
				$form_label[100] 	= "Judul Skema Sertifikasi";
				$form_label[101] 	= "Nomor Skema Sertifikasi";
				$form_label[102] 	= "Apakah anda yakin ingin menyimpan data ini?";
				$form_label[103] 	= "Apakah anda yakin ingin mengupdate data ini?";
				$form_label[104] 	= "Apakah anda yakin ingin menghapus data ini?";
				$form_label[105] 	= "Data berhasil ditambahkan";
				$form_label[106] 	= "Data berhasil diperbarui";
				$form_label[107] 	= "Data berhasil dihapus";
				$form_label[108] 	= "Data gagal ditambahkan";
				$form_label[109] 	= "Data gagal diperbarui";
				$form_label[110] 	= "Data gagal dihapus";
				$form_label[111] 	= "Judul Unit Kompetensi";
				$form_label[112] 	= "Kode Unit Kompetensi";
				$form_label[113] 	= "Skema Sertifikasi";
				$form_label[114] 	= "Daftar Skema";
				$form_label[115] 	= "Unit Kompetensi";
				$form_label[116] 	= "Nama Elemen Kompetensi";
				$form_label[117] 	= "Nomor Elemen Kompetensi";
				$form_label[118] 	= "Elemen Kompetensi";
				$form_label[119] 	= "Pernyataan";
				$form_label[120] 	= "Pertanyaan";
				$form_label[121] 	= "Nomor Kriteria Unjuk Kerja";
				$form_label[122] 	= "Web Version";
				$form_label[123] 	= "Registered Module";
				$form_label[124] 	= "Nama lengkap";
				$form_label[125] 	= "Tempat Lahir";
				$form_label[126] 	= "Jenis kelamin";
				$form_label[127] 	= "Kebangsaan";
				$form_label[128] 	= "Alamat rumah";
				$form_label[129] 	= "Kode pos Rumah";
				$form_label[130] 	= "No. Telepon Rumah";
				$form_label[131] 	= "No. Telepon Kantor";
				$form_label[132] 	= "HP";
				$form_label[133] 	= "E-mail";
				$form_label[134] 	= "Pendidikan Terakhir";
				$form_label[135] 	= "Nama Lembaga / Perusahaan";
				$form_label[136] 	= "Jabatan";
				$form_label[137] 	= "Alamat kantor";
				$form_label[138] 	= "Fax";
				$form_label[139] 	= "Tujuan Asesmen";
				$form_label[140] 	= "Tanggal Lahir";
				$form_label[141] 	= "Jenis Skema Sertifikasi";
				$form_label[142] 	= "Kode pos Kantor";
				$form_label[143] 	= "Laki - laki";
				$form_label[144] 	= "Wanita";
				$form_label[145] 	= "RPL";
				$form_label[146] 	= "Pencapaian proses pembelajaran";
				$form_label[147] 	= "RCC";
				$form_label[148] 	= "Sertifikasi";
				$form_label[149] 	= "Lainnya:";
				$form_label[150] 	= "Klaster";
				$form_label[151] 	= "Okupasi";
				$form_label[152] 	= "KKNI*";
				$form_label[153] 	= "File";
				$form_label[154] 	= "Keterangan";
				$form_label[155]	= "Nama Peserta";
				$form_label[156]	= "Nama Asesor";
				$form_label[157]	= "TUK";
				$form_label[158]	= "FR-APL-01";
				$form_label[159]	= "-- Pilih salah satu --";
				$form_label[160]	= "LSP";
				$form_label[162]	= "Tanggal";
				$form_label[163]	= "1.1";
				$form_label[164]	= "1.2";
				$form_label[165]	= "1.3";
				$form_label[166]	= "1.4";
				$form_label[167]	= ":";
				$form_label[168]	= "Konteks Asesmen";
				$form_label[169]	= "Pendekatan / Jalur asesmen";
				$form_label[170]	= "Strategi asesmen";
				$form_label[171]	= "Acuan Pembanding / Benchmark";
				$form_label[172]	= "Benchmark asesmen (unit kompetensi)";
				$form_label[173]	= "RPL arrangements";
				$form_label[174]	= "Metode dan alat asesmen";
				$form_label[175]	= "Pengorganisasian asesmen";
				$form_label[176]	= "Aturan paket kualifikasi";
				$form_label[177]	= "Persyaratan khusus";
				$form_label[178]	= "Mekanisme jaminan mutu";
				$form_label[179]	= "Tanggal Asesmen:";
				$form_label[180]	= "Durasi per metode:";
				$form_label[181]	= "1. Observasi demonstrasi";
				$form_label[182]	= "2. Tes lisan";
				$form_label[183]	= "pukul";
				$form_label[184]	= "";
				$form_label[185]	= "";
				$form_label[186]	= "Lokasi asesmen";
				$form_label[187]	= "";
				$form_label[188]	= "Nama";
				$form_label[189]	= "Jabatan / pekerjaan";
				$form_label[190]	= "Peran dan tanggung jawab dalam asesmen";
				$form_label[191]	= "Persetujuan";
				$form_label[192]	= "L";
				$form_label[193]	= "TL";
				$form_label[194]	= "T";
				$form_label[195]	= "CLO";
				$form_label[196]	= "CLP";
				$form_label[197]	= "DPL";
				$form_label[198]	= "DPT";
				$form_label[199]	= "PW";
				$form_label[200]	= "VPK";
				$form_label[201]	= "SK";
				$form_label[202]	= "Lainnya";
				return $form_label;
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
				$form_name[145]		= "val_mma_jenis_bukti";
				$form_name[146]		= "val_apl02_uuid";
				$form_name[147]		= "val_apl02_nama_asesor";
				$form_name[148]		= "val_apl02_tuk";
				$form_name[149]		= "val_mma_uuid";
				$form_name[150]		= "val_apl01_no_dokumen";
				$form_name[151]		= "val_mma_lsp";
				$form_name[152]		= "val_mma_asesor";
				$form_name[153]		= "val_mma_tanggal";
				$form_name[154]		= "val_mma_metode";
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
				$form_name[181]		= "val_mma_kelompok_target";
				$form_name[182]		= "val_mma_tujuan_asesmen";
				$form_name[183]		= "val_mma_konteks_asesmen";
				$form_name[184]		= "val_mma_pihak_relevan";
				$form_name[185]		= "val_mma_aturan_lsp";
				$form_name[186]		= "val_mma_aturan_teknis";
				$form_name[187]		= "val_mma_pendekatan_asesmen";
				$form_name[188]		= "val_mma_strategi_asesmen";
				$form_name[189]		= "val_mma_acuan_pembanding";
				$form_name[190]		= "val_mma_batasan_varibel";
				$form_name[191]		= "val_mma_panduan_asesmen";
				$form_name[192]		= "val_mma_persetujuan_asesor";
				$form_name[193]		= "val_mma_persetujuan_penyedia";
				$form_name[194]		= "val_mma_persetujuan_tuk";
				$form_name[195]		= "val_mma_tanggal_uji_kompetensi";
				$form_name[196]		= "val_mma_durasi_observasi_start";
				$form_name[197]		= "val_mma_durasi_observasi_end";
				$form_name[198]		= "val_mma_durasi_tes_lisan_start";
				$form_name[199]		= "val_mma_durasi_tes_lisan_end";
				$form_name[200]		= "val_mma_lokasi_asesmen";
				$form_name[201]		= "val_mma_karateristik_peserta";
				$form_name[202]		= "val_mma_penyesuaian_kebutuhan_spesifik";
				$form_name[203]		= "val_mma_pada_batasan_variabel";
				$form_name[204]		= "val_mma_pada_panduan_penilaian";
				$form_name[205]		= "val_mma_3_1";
				$form_name[206]		= "val_mma_3_1_catatan";
				$form_name[207]		= "val_mma_3_2";
				$form_name[208]		= "val_mma_3_2_catatan";
				$form_name[209]		= "val_mma_3_3";
				$form_name[210]		= "val_mma_3_3_catatan";
				$form_name[211]		= "val_mma_3_4";
				$form_name[212]		= "val_mma_3_4_catatan";
				$form_name[213]		= "val_mma_pengaturan_dukungan_spesialis";
				$form_name[214]		= "val_mma_strategi_komunikasi";
				$form_name[215]		= "val_mma_koordinator_tuk";
				$form_name[216]		= "val_mma_koordinator_tuk_dtm";
				$form_name[217]		= "val_mma_manager_sertifikasi_lsp";
				$form_name[218]		= "val_mma_manager_sertifikasi_lsp_dtm";
				$form_name[219]		= "val_mma_manager_tempat_kerja";
				$form_name[220]		= "val_mma_manager_tempat_kerja_dtm";
				$form_name[221]		= "val_mma_ket_asesor";
				$form_name[222]		= "val_mma_ket_manager_sertifikasi";
				$form_name[223]		= "val_mma_asesor";
				$form_name[224]		= "val_mma_manager_sertifikasi";
				$form_name[225]		= "val_mma_uuid_adm";
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
			
		public function getFormDesc()
			{
				$form_desc[100] 	= "Bagian 1 : Rincian Data Asesi";
				$form_desc[101] 	= "Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.";
				$form_desc[102] 	= "a. Data Pribadi";
				$form_desc[103] 	= "b. Data Pekerjaan Sekarang";
				$form_desc[104] 	= "c. Data Permohonan Sertifikasi";
				$form_desc[105] 	= "Bagian 2 : Daftar Unit Kompetensi";
				$form_desc[106] 	= "Pada bagian 2 ini berisikan Unit Kompetensi yang anda ajukan untuk dinilai/diuji kompetensi dalam rangka mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta pengalaman kerja yang anda miliki. Unit kompetensi yang diajukan sesuai dengan skema sertifikasi";
				$form_desc[107] 	= "Bagian 3 : Bukti Kelengkapan Pemohon";
				$form_desc[108] 	= "Pada bagian ini, asesi diminta untuk memenuhi persyaratan skema sertifikasi. Tuliskan bukti-bukti paling relevan dari rincian pendidikan/pengalaman kerja sesuai dengan <b><i>judul unit kompetensi</i></b> yang diajukan pada kolom <b><i>bukti*</i></b> pada tabel di bawah ini dan lampirkan data-data/dokumen.";
				$form_desc[109] 	= "Untuk selanjutnya bagian sertifikasi LSP atau asesor kompetensi akan menilai kesesuaian bukti-bukti yang diajukan oleh pemohon sebelum mengikuti asesmen kompetensi dengan bukti-bukti yang tertuang dalam persyaratan skema sertifikasi.";
				$form_desc[110] 	= "* File dalam format PDF ( < 1 Mb )";
				$form_desc[111]		= "Ya";
				$form_desc[112]		= "Pada bagian ini, anda diminta untuk menilai diri sendiri terhadap unit (unit - unit) kompetensi yang akan di-ases.";
				$form_desc[113]		= "1. Pelajari seluruh standar Kriteria Unjuk Kerja (KUK), batasan variabel, panduan penilaian dan aspek kritis serta yakinkan bahwa anda sudah benar-benar memahami seluruh isinya.";
				$form_desc[114]		= "2. Laksanakan penilaian mandiri dengan mempelajari dan menilai kemampuan yang anda miliki secara obyektif terhadap seluruh daftar pertanyaan yang ada, serta tentukan apakah anda kompeten (K) atau belum kompeten (BK) dengan memberi tanda (v).";
				$form_desc[115]		= "3. Tuliskan bukti-bukti pendukung yang anda anggap relevan terhadap setiap elemen/KUK sesuai unit kompetensi pada skema sertifikasi yang dipilih.";
				$form_desc[116]		= "4. Bagian Sertifikasi LSP atau Asesor bersama Peserta (Asesi) menandatangani form Asesmen Mandiri.";
				$form_desc[117]		= "1. Menentukan pendekatan asesmen";
				$form_desc[118]		= "2. Mempersiapkan Rencana Asesmen";
				$form_desc[119]		= "Sumber Daya Fisik / Material:";
				$form_desc[120]		= "- Observasi demonstrasi:";
				$form_desc[121]		= "Checklist observasi, perangkat komputer dengan aplikasi ms office, sistem aplikasi man power plan, jaringan internet, peraturan - peraturan terkait, alat komunikasi (telpon / hp), printer, kertas";
				$form_desc[122]	 	= "- Tes lisan:";
				$form_desc[123]		= "Ruangan tes lisan, satu set meja kursi, form tes lisan, alat tulis dan kertas, alat perekam (bila diperlukan)";
				$form_desc[124]		= "- Merencanakan asesmen,</br>
										- Mengembangkan perangkat asesmen,</br>
										- Mengorganisasikan asesmen,</br>
										- Melaksanakan asesmen (menetapkan dan memelihara lingkungan asesmen, mengumpulkan bukti, mereview bukti, membuat keputusan asesmen, menyampaikan keputusan asesmen, memberikan umpan balik kepada peserta, meminta umpan balik dari peserta),</br>
										- Meninjau proses asesmen.";
				$form_desc[125]		= "<b>Manajer Sertifikasi</b>";										
				$form_desc[126]		= "- Memastikan materi uji kompetensi siap digunakan,</br>
										- Memastikan seluruh personil yang terlibat memahami tugas dan fungsinya masing - masing.";										
				$form_desc[127]		= "- Mendukung proses administrasi dan dokumentasi asesmen,</br>
										- Memastikan alat, bahan, dan peralatan uji kompetensi sudah siap di area tempat,</br>
										- Memberi arahan kepada peserta dalam rangka persiapan asesmen,</br>
										- Menyiapkan konsumsi, akomodasi, dan transportasi.";
				$form_desc[128]		= "<b>Koordinator TUK</b>";
				$form_desc[129]		= "<b>Asesor</b>";
				$form_desc[130]		= "<i>Menunggu persetujuan</i>";
				$form_desc[131]		= "<b>3. Kontekstualisasi dan meninjau rencana asesmen</b>";
				$form_desc[132]		= "<b>3.1</b> Karakteristik peserta:";
				$form_desc[133]		= "Penyesuaian kebutuhan spesifik peserta:";
				$form_desc[134]		= "Tidak mempunyai karakteristik tertentu";
				$form_desc[135]		= "Tidak diperlukan";
				$form_desc[136]		= "<b>3.2</b> Kontekstualisasi standar kompetensi:</br>
										(untuk mengakomodasi persyaratan spesifik industri,
										pada batasan variabel dan panduan penilaian)";
				$form_desc[137]		= "Pada batasan variabel:";
				$form_desc[138]		= "Pada panduan penilaian:";
				$form_desc[139]		= "";
				$form_desc[140]		= "";
				$form_desc[141]		= "Catatan";
				$form_desc[142]		= "3.3. Memeriksa metoda dan perangkat asesmen yang dipilih (sesuai / tidak sesuai) dengan rencana sertifikasi";				
				$form_desc[143]		= "3.4 Meninjau perangkat asesmen yang disesuaikan terhadap spesifikasi standar kompetensi (Ya / Tidak)";				
				$form_desc[144]		= "3.5 Memperbaharui rencana asesmen sesuai keperluan kontekstualisasi (Ya / Tidak)";				
				$form_desc[145]		= "3.6 Menyimpan menelusuri rencana asesmen sesuai prosedur (Ya / Tidak)";				
				$form_desc[146]		= "<b>3.4</b> Meninjau perangkat asesmen yang disesuaikan terhadap spesifikasi standar kompetensi";
				$form_desc[147]		= "Tidak ada penyesuaian";
				$form_desc[148]		= "<b>3.5</b> Memperbaharui rencana asesmen sesuai kebutuhan kontekstualisasi dalam pelaksanaan asesmen tidak ada perubahan";
				$form_desc[149]		= "<b>3.6</b> Menyimpan dan menelusuri rencana asesmen sesuai dengan kebijakan dan prosedur sistem asesmen maupun persyaratan hukum / organisasi / etika";
				$form_desc[150]		= "<b>4. Mengorganisasikan asesmen</b>";
				$form_desc[151]		= "<b>4.1</b> Pengaturan sumber daya asesmen";
				$form_desc[152]		= "<b> Bahan dan Sumberdaya Fisik </b>";
				$form_desc[153]		= "<b>Status</b>";
				$form_desc[154]		= "<b>Keterangan</b>";
				$form_desc[155]		= "Tempat Uji Kompetensi";
				$form_desc[156]		= "Disediakan oleh Kepala TUK";
				$form_desc[157]		= "15 menit sebelum asesmen telah siap";
				$form_desc[158]		= "Kelengkapan tempat asesmen (penerangan, AC, in out) meja, kursi dan ATK sudah dipastikan tersedia di ruangan";
				$form_desc[159]		= "Alat dan bahan yang digunakan";
				$form_desc[160]		= "Diperiksa ketersediaan dan kelengkapannya oleh Teknisi TUK";
				$form_desc[161]		= "<b>4.2</b> Pengaturan dukungan spesialis";
				$form_desc[162]		= "Tidak ada";
				$form_desc[163]		= "<b>4.3</b> Pengorganisasian personil yang terlibat";
				$form_desc[164]		= "<b>Personil</b>";
				$form_desc[165]		= "<b>Tugas dan Tanggung Jawab</b>";
				$form_desc[166]		= "Asesor";
				$form_desc[167]		= "- Memeriksa kesiapan dokumen / berkas asesmen</br>
										- Memeriksa kesiapan sumber daya asesmen yang dibutuhkan</br>
										- Memberikan arahan kepada peserta asesmen</br>
										- Melakukan & mengawasi proses asesmen</br>
										- Mengumpulkan & memeriksa kelengkapan berkas / dokumen asesmen";
				$form_desc[168]		= "Peserta";
				$form_desc[169]		= "- Peserta ditempatkan / dikumpulkan ditempat yang telah disediakan</br>
										- Peserta diminta mengisi & menandatangani daftar hadir</br>
										- Peserta menerima penjelasan & pengarahan mengenai pelaksanaan asesmen, termasuk tata tertib asesmen yang berlaku</br>
										- Peserta mengikuti jadwal asesmen yang sudah ditetapkan";
				$form_desc[170]		= "Koordinator TUK";
				$form_desc[171]		= "- Menyiapkan ruangan - ruangan / fasilitas asesmen</br>
										- Membantu menyiapkan berkas / form asesmen</br>
										- Menyiapkan peralatan tulis yang dibutuhkan</br>
										- Memeriksa, mengumpulkan & mendokumentasikan berkas asesmen</br>
										- Menyiapkan konsumsi, akomodasi, transportasi asesor & peserta";
				$form_desc[172]		= "<b>4.4</b> Strategi Komunikasi (pilih yang sesuai)";
				$form_desc[173]		= "Wawancara, baik secara berhadapan maupun melalui telepon";
				$form_desc[174]		= "Email, memo, korespondensi";
				$form_desc[175]		= "Rapat";
				$form_desc[176]		= "Video Conference / Pembelajaran Berbasis Elektronik";
				$form_desc[177]		= "Fokus Group";
				$form_desc[178]		= "<b>4.5</b> Penyimpanan Rekaman Asesmen dan Pelaporan";
				$form_desc[179]		= "- Rekaman hasil pengumpulan bukti (hasil observasi demonstrasi dan hasil tes lisan) harus diserahkan kepada Lead Asesor setelah selesai asesmen pada hari pelaksanaan asesmen.</br>
					- Rekaman hasil pengumpulan bukti, rekomendasi dan keputusan asesmen serta berita acara / laporan hasil asesmen disampaikan oleh Lead Asesor kepada TUK setelah selesai pelaksanaan asesmen pada hari pelaksanaan asesmen.</br>
					- Seluruh berkas rekaman pelaksanaan asesmen diterima dan dikumpulkan oleh TUK yang selanjutnya disampaikan ke LSP";
				$form_desc[180]		= "Kelompok Target Peserta";
				$form_desc[181]		= "Pihak Relevan";
				$form_desc[182]		= "Sertifikasi Ulang";
				$form_desc[183]		= "Sertifikasi";
				$form_desc[184]		= "Aturan Organisasi";
				$form_desc[185]		= "Aturan BNSP / LSP";
				$form_desc[186]		= "Aturan Teknis";
				$form_desc[187]		= "Pendekatan / Jalur Asesmen";
				$form_desc[188]		= "Lokasi Asesmen";
				$form_desc[189]		= "Mengikuti*:";
				$form_desc[190]		= "Acuan Pembanding";
				$form_desc[191]		= "Pengaturan Asesmen";
				$form_desc[192]		= "Metode dan Perangkat Asesmen";
				$form_desc[193]		= "Pengorganisasian Asesmen";
				$form_desc[194]		= "Aturan Pemaketan Kompetensi";
				$form_desc[195]		= "Persyaratan Khusus";
				$form_desc[196]		= "Mekanisme Jaminan Mutu";
				$form_desc[197]		= "Identifikasi Management Resiko";
				$form_desc[198]		= "* <i>pilih yang sesuai</i>";
				$form_desc[199]		= "Berupa**:";
				$form_desc[200]		= "Standar Kompetensi";
				$form_desc[201]		= "Standar Produk";
				$form_desc[202]		= "Standar Sistem";
				$form_desc[203]		= "Regulasi Teknis";
				$form_desc[204]		= "SOP";
				$form_desc[205]		= "** <i>pilih yang sesuai</i>";
				$form_desc[206]		= "Asesmen Portofolio";
				$form_desc[207]		= "Asesmen Uji Kompetensi";
				$form_desc[208]		= "Peran dan tanggung jawab Personil yang terlibat: *) Khusus persetujuan Asesi dapat dilakukan pada saat Konsultasi Pra Uji dan ditanda tangani pada formulir khusus persetujuan rencana asesmen";
				$form_desc[209]		= "<b>Penyedia / Lead Asesor</b>";							
				$form_desc[210]		= "<b>Tenaga Teknis TUK</b>";	
				$form_desc[211]		= "Tanggal Uji Kompetensi";
				$form_desc[212]		= "Durasi Uji Kompetensi:";
				$form_desc[213]		= "1. Observasi";
				$form_desc[214]		= "2. Tes Lisan / Tulis";
				$form_desc[215]		= "Konfirmasi dengan pihak yang relevan";
				$form_desc[216]		= "Nama";
				$form_desc[217]		= "Jabatan";
				$form_desc[218]		= "Persetujuan";
				$form_desc[219]		= "Manager Sertifikasi LSP";	
				$form_desc[220]		= "Manager / Supervisor di Tempat Kerja";
				$form_desc[221]		= "Nama Asesor";
				$form_desc[222]		= "No. Reg.";
				$form_desc[223]		= "";
				$form_desc[224]		= "<b>Diverifikasi oleh Manajemen Sertifikasi</b>";
				$form_desc[225]		= "<b>Penyusun Rencana dan Pengorganisasi Asesmen</b>";
				$form_desc[226]		= "Jabatan";
				$form_desc[227]		= "";
				$form_desc[228]		= "Manager Sertifikasi";
				$form_desc[229]		= "";

				return $form_desc;
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
				$ajax_url[154] 	= base_url()."";
				$ajax_url[155] 	= base_url()."asesor/fr_mma/pagingEdit/";
				$ajax_url[156] 	= base_url()."";
				$ajax_url[157] 	= base_url()."asesor/fr_mma/getList_mma";
				$ajax_url[158] 	= base_url()."";
				$ajax_url[159] 	= base_url()."asesor/fr_mma/updateDt_mma";
				$ajax_url[160] 	= base_url()."asesor/fr_mma/deleteDt_mma";
				return $ajax_url;
			}
		
		/* TABLE */	
		public function getTableColumn()
			{
				$table_column[100]	= "#";
				$table_column[101]	= "&nbsp";
				$table_column[102]	= "Judul Skema Sertifikasi";
				$table_column[103]	= "Nomor";
				$table_column[104]	= "Judul Unit Kompetensi";
				$table_column[105]	= "Kode Unit Kompetensi";
				$table_column[106]	= "Skema Sertifikasi";
				$table_column[107]	= "Nama Elemen Kompetensi";
				$table_column[108]	= "Nomor Elemen Kompetensi";
				$table_column[109]	= "Pernyataan";
				$table_column[110]	= "Nomor Kriteria Unjuk Kerja";
				$table_column[111]	= "Pertanyaan";
				$table_column[112]	= "ID Dokumen";
				$table_column[113]	= "Tanggal";
				$table_column[114]	= "File";
				$table_column[115]	= "Keterangan";
				$table_column[116]	= "Nomor </br>KUK";
				$table_column[117]	= "Daftar Pertanyaan </br>(Asesmen Mandiri/Self Assessment)";
				$table_column[118]	= "Penilaian";
				$table_column[119]	= "K";
				$table_column[120]	= "BK";
				$table_column[121]	= "Bukti - bukti Pendukung";
				$table_column[122]	= "FR-APL-01";
				$table_column[123]	= "FR-APL-02";
				$table_column[124]	= "Calon Asesi";
				$table_column[125]	= "Kriteria Unjuk Kerja";
				$table_column[126]	= "Unit Kompetensi";
				$table_column[127]	= "Jenis Bukti";
				$table_column[128]	= "L";
				$table_column[129]	= "TL";
				$table_column[130]	= "T";
				$table_column[131]	= "Metode";
				$table_column[132]	= "Observasi Demonstrasi";
				$table_column[133]	= "Verifikasi Portofolio";
				$table_column[134]	= "Tes Lisan";
				$table_column[135]	= "Tes Tertulis";
				$table_column[136]	= "Wawancara";
				$table_column[137]	= "Verifikasi Pihak Ketiga";
				$table_column[138]	= "Studi Kasus";
				$table_column[139]	= "Lainnya ...";
				$table_column[140]	= "Perangkat Asesmen";
				$table_column[141]	= "CLO: Ceklis Observasi, CLP: Ceklis Portofolio, DPL: Daftar Pertanyaan Lisan, DPT *): Daftar Pertanyaan Tertulis, PW: Pertanyaan Wawancara, VPK: Verifikasi Pihak Ketiga, SK: Studi Kasus";
				$table_column[142]	= "L: Bukti langsung, TL: Bukti tidak langsung, T: Bukti tambahan";
				$table_column[143]	= "Pemenuhan terhadap seluruh bagian unit standar kompetensi: (bila tersedia)";
				$table_column[144]	= "Batasan Variabel";
				$table_column[145]	= "Panduan Asesmen";
				$table_column[146]	= "Ya";
				$table_column[147]	= "Peran dan tanggung jawab Tim / Personil terkait: *) Khusus persetujuan peserta dapat dilakukan pada saat Pra Asesmen dengan menandatangani FR-MAK-03: Formulir persetujuan asesmen.";
				$table_column[148]	= "Jangka dan periode waktu asesmen";
				return $table_column;
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