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
				$data["form_action"]	= $this->getFormAction();
				$data["form_label"]		= $this->getFormLabel();
				$data["form_name"]		= $this->getFormName();
				$data["form_id"]		= $this->getFormId();
				$data["form_button"]	= $this->getFormButton();
				$data["form_desc"]		= $this->getFormDesc();
				$data["ajax_url"]		= $this->getAjaxURL();
				$data["table_column"]	= $this->getTableColumn();	
				$data["layout"]			= $this->getLayout();
				$data["view"]			= $this->getView();	
				$data["isvalid_url"]	= $this->getIsValidUrl();	
				$data["validationMsg"]	= $this->getValidationMsg();	
				
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
				$menu_title[115] 	= "FR-MMA. Merencanakan dan Mengorganisasikan Asesmen - Tambah";
				$menu_title[116] 	= "FR-MMA. Merencanakan dan Mengorganisasikan Asesmen - Edit";
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
				$form_label[101] 	= "Nomor";
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
				$form_label[135] 	= "Nama Lembaga/Perusahaan";
				$form_label[136] 	= "Jabatan";
				$form_label[137] 	= "Alamat kantor";
				$form_label[138] 	= "Fax";
				$form_label[139] 	= "Tujuan asesmen";
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
				return $form_label;
			}	

		public function getFormName()
			{
				$form_name[100]		= "val_skema_sertifikasi_judul";
				$form_name[101]		= "val_skema_sertifikasi_nomor";
				$form_name[102]		= "val_skema_sertifikasi_uuid";
				$form_name[103]		= "val_unit_kompetensi_judul";
				$form_name[104]		= "val_unit_kompetensi_kode";
				$form_name[105]		= "val_unit_kompetensi_uuid";
				$form_name[106]		= "val_skema_sertifikasi_uuid[]";
				$form_name[107]		= "val_elemen_kompetensi_nama";
				$form_name[108]		= "val_elemen_kompetensi_nomor";
				$form_name[109]		= "val_elemen_kompetensi_uuid";
				$form_name[110]		= "val_unit_kompetensi";
				$form_name[111]		= "val_kriteria_unjuk_kerja_pernyataan";
				$form_name[112]		= "val_kriteria_unjuk_kerja_nomor";
				$form_name[113]		= "val_kriteria_unjuk_kerja_uuid";
				$form_name[114]		= "val_kriteria_unjuk_kerja_pertanyaan";
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
				$form_name[136]		= "val_bukti_kelengkapan_uuid";
				$form_name[137]		= "val_bukti_kelengkapan_file";
				$form_name[138]		= "val_bukti_kelengkapan_keterangan";
				$form_name[139]		= "val_bukti_kelengkapan_uuid[]";
				$form_name[140]		= "val_user_uuid";
				$form_name[141]		= "val_apl01_tujuan_asesmen_lainnya_keterangan";
				$form_name[142]		= "val_apl01_skema_sertifikasi";
				$form_name[143]		= "val_unit_kompetensi_uuid[]";
				$form_name[144]		= "val_apl01_jenis_skema_sertifikasi";
				$form_name[145]		= "val_apl02_nama_peserta";
				$form_name[146]		= "val_apl02_uuid";
				$form_name[147]		= "val_apl02_nama_asesor";
				$form_name[148]		= "val_apl02_tuk";
				$form_name[149]		= "val_apl02_penilaian";
				$form_name[150]		= "val_apl01_no_dokumen";
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
				$form_id[174]		= "fr_apl_02_nama_peserta";
				$form_id[175]		= "fr_apl_02_uuid";
				$form_id[176]		= "fr_apl_02_nama_asesor";
				$form_id[177]		= "fr_apl_02_tuk";
				$form_id[178]		= "fr_apl_01_no_dokumen";
				$form_id[179]		= "fr_apl_02_penilaian";
				$form_id[180]		= "fr_apl_02_saveButton";
				$form_id[181]		= "fr_apl_02_form";
				$form_id[182]		= "fr_apl_02_tabel";
				$form_id[183]		= "bukti_kelengkapan_form_edit";
				$form_id[184]		= "bukti_kelengkapan_modal_edit";
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
				$form_desc[111]		= "";
				$form_desc[112]		= "Pada bagian ini, anda diminta untuk menilai diri sendiri terhadap unit (unit - unit) kompetensi yang akan di-ases.";
				$form_desc[113]		= "1. Pelajari seluruh standar Kriteria Unjuk Kerja (KUK), batasan variabel, panduan penilaian dan aspek kritis serta yakinkan bahwa anda sudah benar-benar memahami seluruh isinya.";
				$form_desc[114]		= "2. Laksanakan penilaian mandiri dengan mempelajari dan menilai kemampuan yang anda miliki secara obyektif terhadap seluruh daftar pertanyaan yang ada, serta tentukan apakah anda kompeten (K) atau belum kompeten (BK) dengan memberi tanda (v).";
				$form_desc[115]		= "3. Tuliskan bukti-bukti pendukung yang anda anggap relevan terhadap setiap elemen/KUK sesuai unit kompetensi pada skema sertifikasi yang dipilih.";
				$form_desc[116]		= "4. Bagian Sertifikasi LSP atau Asesor bersama Peserta (Asesi) menandatangani form Asesmen Mandiri.";
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
				$ajax_url[124] 	= base_url()."asesi/fr_apl_01/saveDt";
				$ajax_url[125] 	= base_url()."asesi/fr_apl_01/getList";
				$ajax_url[126] 	= base_url()."asesi/fr_apl_01/getADt/";
				$ajax_url[127] 	= base_url()."asesi/fr_apl_01/updateDt";
				$ajax_url[128] 	= base_url()."asesi/fr_apl_01/deleteDt/";
				$ajax_url[129] 	= base_url()."asesi/fr_apl_01/pagingAdd";
				$ajax_url[130] 	= base_url()."asesi/fr_apl_01/pagingList";
				$ajax_url[131] 	= base_url()."asesi/fr_apl_01/getADt_FN101";
				$ajax_url[132] 	= base_url()."asesi/fr_apl_01/getDt_105";
				$ajax_url[133] 	= base_url()."asesi/fr_apl_01/pagingEdit/";
				$ajax_url[134] 	= base_url()."asesi/fr_apl_01/pagingUpload/";
				$ajax_url[135] 	= base_url()."asesi/fr_apl_01/saveFile";
				$ajax_url[136] 	= base_url()."asesi/fr_apl_01/updateFile/";
				$ajax_url[137] 	= base_url()."asesi/bukti_kelengkapan/saveDt";
				$ajax_url[138] 	= base_url()."asesi/bukti_kelengkapan/getList";
				$ajax_url[139] 	= base_url()."asesi/bukti_kelengkapan/updateDt";
				$ajax_url[140] 	= base_url()."asesi/bukti_kelengkapan/deleteDt/";
				$ajax_url[141] 	= base_url()."asesi/bukti_kelengkapan/getADt/";
				$ajax_url[142] 	= base_url()."asesi/fr_apl_01/getDt_142";
				$ajax_url[143] 	= base_url()."asesi/fr_apl_02/pagingAdd";
				$ajax_url[144] 	= base_url()."asesi/fr_apl_02/pagingUpload/";
				$ajax_url[145] 	= base_url()."asesi/fr_apl_02/pagingList";
				$ajax_url[146] 	= base_url()."asesi/fr_apl_02/pagingEdit/";
				$ajax_url[147] 	= base_url()."asesi/fr_apl_02/getADt_FN134";
				$ajax_url[148] 	= base_url()."asesi/fr_apl_02/pagingChild/";
				$ajax_url[149] 	= base_url()."asesi/fr_apl_02/saveDt";
				$ajax_url[150] 	= base_url()."asesi/fr_apl_02/updateDt";
				$ajax_url[151] 	= base_url()."asesi/fr_apl_02/deleteDt/";
				$ajax_url[152] 	= base_url()."asesi/fr_apl_02/getList";
				$ajax_url[153] 	= base_url()."asesor/fr_mma/pagingList";
				$ajax_url[154] 	= base_url()."asesor/fr_mma/pagingAdd";
				$ajax_url[155] 	= base_url()."asesor/fr_mma/pagingEdit";
				$ajax_url[156] 	= base_url()."asesor/fr_mma/pagingChild";
				$ajax_url[157] 	= base_url()."asesor/fr_mma/getList";
				$ajax_url[158] 	= base_url()."asesor/fr_mma/saveDt";
				$ajax_url[159] 	= base_url()."asesor/fr_mma/updateDt";
				$ajax_url[160] 	= base_url()."asesor/fr_mma/deleteDt";
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
				$isvalid_url[100]	= base_url()."lsp/skema_sertifikasi/isFN101valid";
				$isvalid_url[101]	= base_url()."lsp/unit_kompetensi/isFN104valid";
				$isvalid_url[102]	= base_url()."lsp/elemen_kompetensi/isFN107valid";
				$isvalid_url[103]	= base_url()."lsp/kriteria_unjuk_kerja/isFN112valid";
				$isvalid_url[104]	= base_url()."asesi/bukti_kelengkapan/isFN138valid";
				return $isvalid_url;
			}
	}
?>