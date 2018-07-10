<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title"> <?php echo $menu_title[116]; ?> </h3>
	</div>
	
	<div class="box-body pad table-responsive">
		<form class="form-horizontal">
			<div class="modal-body form">                
				<div class="form-body">	
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tr>
							<td rowspan = "2">Skema Sertifikasi / Klaster Asesmen</td>
							<td>Judul</td>
							<td style = "width: 75%"><?php echo $$form_name[100]; ?></td>
						</tr>
						<tr>
							<td>Nomor</td>
							<td><?php echo $$form_name[101]; ?></td>
						</tr>
						<tr>
							<td>TUK</td>
							<td colspan = "2"><?php echo $$form_name[148]; ?></td>
						</tr>
						<tr>
							<td>Nama Asesor</td>
							<td colspan = "2"><?php echo $$form_name[152]; ?></td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td colspan = "2"><?php echo $$form_name[153]; ?></td>
						</tr>
					</table>
					
				<!-- 1. Menentukan Pendekatan Asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b> 1. Menentukan Pendekatan Asesmen </b> </h5>
						 
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tbody>
							<!-- 1.1 -->
							<tr> 
								<td rowspan = "4">1.1</td>
								<td>Kelompok Target Peserta</td>
								<td style = "width: 75%">: <input type="text" title = "Teridentifikasi Sudah / Belum Memenuhi Aturan Bukti" value = "Teridentifikasi Sudah / Belum Memenuhi Aturan Bukti"></td>
							</tr>
							<tr>
								<td>Tujuan Asesmen</td>
								<td>: <input type = "radio" name = "b"> Sertifikasi 
									<input type = "radio" name = "b"> Sertifikasi Ulang</td>
							</tr>
							<tr>
								<td>Konteks Asesmen</td>
								<td>: <input type="text" title = "TUK simulasi / tempat kerja dengan karakteristik produk / sistem / tempat kerja" value = "TUK simulasi / tempat kerja dengan karakteristik produk / sistem / tempat kerja"></td>
							</tr>
							<tr>
								<td>Pihak Relevan</td>
								<td>: <input type="text"></td>
							</tr>
							
							<!-- -->
							<tr>
								<td></td>
								<td>Aturan Organisasi</td>
								<td>: Aturan BNSP / LSP : <input type="text">
									</br></br>: Aturan Teknis : <input type="text"></td>
							</tr>	
							
							<!-- 1.2 -->
							<tr>
								<td>1.2</td>
								<td>Pendekatan / Jalur Asesmen</td>
								<td>: <input type = "radio" name = "a"> Asesmen Portofolio 
									<input type = "radio" name = "a"> Asesmen Uji Kompetensi 
								</td>
							</tr>
							
							<!-- 1.3 -->
							<tr>
								<td>1.3</td>
								<td>Strategi Asesmen</td>
								<td>Mengikuti: 
									</br> <input type = "checkbox"> Acuan pembanding
									</br> <input type = "checkbox"> Pengaturan asesmen
									</br> <input type = "checkbox"> Metode dan perangkat asesmen
									</br> <input type = "checkbox"> Pengorganisasian asesmen
									</br> <input type = "checkbox"> Aturan pemaketan kompetensi
									</br> <input type = "checkbox"> Persyaratan khusus
									</br> <input type = "checkbox"> Mekanisme jaminan mutu
									</br> <input type = "checkbox"> Identifikasi management resiko									
								</td>
							</tr>
							
							<!-- 1.4 -->
							<tr>
								<td>1.4</td>
								<td>Acuan Pembanding</td>
								<td>Berupa:
									</br> <input type = "checkbox"> Standar kompetensi: <input type="text">
									</br> <input type = "checkbox"> Standar produk: <input type="text">
									</br> <input type = "checkbox"> Standar sistem: <input type="text">
									</br> <input type = "checkbox"> Regulasi teknis: <input type="text">
									</br> <input type = "checkbox"> SOP: <input type="text">
								</td>
						</tbody>
					</table>
					
				<!-- 2. Mempersiapkan Rencana Asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b>2. Mempersiapkan Rencana Asesmen</b> </h5>
					
					<?php if($listAnswer->num_rows() > 0){ ?>
						<table class = "table table-hover" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="4" vertical-align = "middle">#</th>
									<th rowspan="4">Unit Kompetensi</th>
									<th rowspan="4">Kriteria Unjuk Kerja</th>
									<th colspan = "3" rowspan = "2">Jenis Bukti</th>
									<th colspan = "8">Perangkat Asesmen</th>
								</tr>
								<tr>
									<th colspan = "8">CLO: Ceklis Observasi, CLP: Ceklis Portofolio, DPL: Daftar Pertanyaan Lisan, DPT *): Daftar Pertanyaan Tertulis, PW: Pertanyaan Wawancara, VPK: Verifikasi Pihak Ketiga, SK: Studi Kasus</th>
								</tr>
								<tr>
									<th colspan = "3">L: Bukti langsung, TL: Bukti tidak langsung, T: Bukti tambahan</th>
									<th colspan = "8">Metode</th>
								</tr>
								<tr>							
									<th> L </th>
									<th> TL </th>
									<th> T </th>
									<th> Observasi Demonstrasi </th>
									<th> Verifikasi Portofolio </th>
									<th> Tes Lisan </th>
									<th> Tes Tertulis </th>
									<th> Wawancara </th>
									<th> Verifikasi Pihak Ketiga </th>
									<th> Studi Kasus </th>
									<th> Lainnya ... </th>
								</tr>
							</thead>		
							<tbody>
								<?php 
									$i = 0;		
									foreach($listAnswer->result() as $row){ ?>
										<input type = "hidden" name = "<?php echo $form_name[105].'_'.$i; ?>" value = "<?php echo $row->UUID_UK; ?>">
										<input type = "hidden" name = "<?php echo $form_name[113].'_'.$i; ?>" value = "<?php echo $row->UUID_KUK; ?>">
										<input type = "hidden" name = "<?php echo $form_name[109].'_'.$i; ?>" value = "<?php echo $row->UUID_EK; ?>">
										<tr>
											<td>
												<?php echo ($i+1); ?>
											</td>
											<td>
												<?php echo $row->JUDUL_UK; ?>
											</td>
											<td>
												<?php echo $row->PERNYATAAN; ?>
											</td>	
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > L</td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > TL</td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > T</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > CLO</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > CLP</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > DPL</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > DPT</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > PW</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > VPK</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > SK</td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > Lainnya ...</td>
										</tr>					
								<?php 
										$i++; 
									} 
								?>
							</tbody>
						</table>
					<?php } ?>
					
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>
							<tr>
								<td rowspan = "2" colspan = "2"><b>Pemenuhan terhadap seluruh bagian unit standar kompetensi:</b></td>
								<td>Batasan Variabel</td>
								<td>Panduan Asesmen</td>
							</tr>
							<tr>
								<td><input type = "checkbox"> Ya</td>
								<td><input type = "checkbox"> Ya</td>
							</tr>
							<tr>
								<td colspan = "4"><b>Peran dan tanggung jawab Personil yang terlibat:</b> *) Khusus persetujuan Asesi dapat dilakukan pada saat Konsultasi Pra Uji dan ditanda tangani pada formulir khusus persetujuan rencana asesmen.</td>
							</tr>
						</tbody>
					</table>
					
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Jabatan / pekerjaan</th>
								<th>Peran dan tanggung jawab dalam asesmen</th>
								<th>Paraf / tanggal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>TBS</td>
								<td>Asesor</td>
								<td>- Merencanakan asesmen,
									</br>- Mengembangkan perangkat asesmen,
									</br>- Mengorganisasikan asesmen,
									</br>- Melaksanakan asesmen (menetapkan dan memelihara lingkungan asesmen, mengumpulkan bukti, mereview bukti, membuat keputusan asesmen, menyampaikan keputusan asesmen, memberikan umpan balik kepada peserta, meminta umpan balik dari peserta),
									</br>- Meninjau proses asesmen.</td>
								<td><input type = "checkbox" name = "" value = ""> Ya</td>
							</tr>
							<tr>
								<td>TBS</td>
								<td>Penyedia / Lead Asesor</td>
								<td>- Memastikan materi uji kompetensi siap digunakan,
									</br>- Memastikan seluruh personil yang terlibat memahami tugas dan fungsinya masing - masing.</td>
								<td><input type = "checkbox" name = "" value = ""> Ya</td>
							</tr>
							<tr>
								<td>TBS</td>
								<td>Tenaga Teknis TUK</td>
								<td>- Mendukung proses administrasi dan dokumentasi asesmen,
									</br>- Memastikan alat, bahan, dan peralatan uji kompetensi sudah siap di area tempat,
									</br>- Memberi arahan kepada peserta dalam rangka persiapan asesmen,
									</br>- Menyiapkan konsumsi, akomodasi, dan transportasi.</td>
								<td><input type = "checkbox" name = "" value = ""> Ya</td>
							</tr>
							<tr>
								<td>Sumber Daya Fisik (Persyaratan Teknis TUK)</td>
								<td colspan = "3">1. Sarana: Ruang uji teori termasuk <i>layout</i> ruangan, Ruang/Lab/Bengkel termasuk <i>layout</i> ruangan
									</br>2. Peralatan dan perlengkapan: 
									</br>Peralatan: (mesin yang digunakan secara umum)
									</br>Perlengkapan: (dokumen pendukung)
									</br>Material/bahan:
									</br></td>
							</tr>
							<tr>
								<td rowspan = "4">Jangka dan Periode Waktu Asesmen</td>
								<td>Tanggal Uji Kompetensi</td> 
								<td colspan = "2">: <input type = "date" name = ""></td>									
							</tr>
							<tr>
								<td colspan = "3">Durasi Uji Kompetensi:</td>
							</tr>
							<tr>
								<td>1. Observasi</td>
								<td colspan = "2">: <input type = "time" name = ""> - <input type = "time" name = ""></td>
							</tr>
							<tr>
								<td>2. Tes Lisan / Tulis</td>
								<td colspan = "2">: <input type = "time" name = ""> - <input type = "time" name = ""></td>
							</tr>
							<tr>
								<td>Lokasi Asesmen</td>
								<td colspan = "3">TBS</td>
							</tr>
						</tbody>
					</table>
					
				<!-- 3. Kontekstualisasi dan Meninjau Rencana Asesmen -->
					</br><h5 style = "margin-bottom: 10px;"><b>3. Kontekstualisasi dan Meninjau Rencana Asesmen</b></h5>
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>
							<tr>
								<td>3.1 Karakteristik peserta:</td>
								<td>Penyesuaian kebutuhan spesifik peserta:</td>
							</tr>
							<tr>
								<td><input type = "text"></td>
								<td><input type = "text"></td>
							</tr>
							<tr>
								<td rowspan = "2">3.2 Kontekstualisasi standar kompetensi: </br>(untuk mengakomodasi persyaratan spesifik industri, pada batasan variabel dan panduan penilaian)</td>
								<td>Pada batasan variabel:
									</br><input type = "text">
								</td>
							</tr>
							<tr>
								<td>Pada panduan penilaian:
									</br><input type = "text">
								</td>
							</tr>
							<tr>
								<td>3.3. Memeriksa metoda dan perangkat asesmen yang dipilih (sesuai / tidak sesuai) dengan rencana sertifikasi</td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td>3.4 Meninjau perangkat asesmen yang disesuaikan terhadap spesifikasi standar kompetensi (Ya / Tidak)</td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td>3.5 Memperbaharui rencana asesmen sesuai keperluan kontekstualisasi (Ya / Tidak)</td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td>3.6 Menyimpan menelusuri rencana asesmen sesuai prosedur (Ya / Tidak)</td>
								<td><textarea> </textarea></td>
							</tr>
						</tbody>
					</table>
					
				<!-- 4. Mengorganisasikan asesmen -->
					</br><h5 style = "margin-bottom: 10px;" ><b>4. Mengorganisasikan Asesmen</b></h5>
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>	
							<tr>
								<td rowspan = "4">4.1 Pengaturan sumber daya asesmen</td>
								<td><b>Bahan dan Sumberdaya Fisik</b></td>
								<td><b>Status</b></td>
								<td><b>Keterangan</b></td>
							</tr>
							<tr>
								<td>Tempat uji kompetensi</td>
								<td>Disediakan oleh Kepala TUK</td>
								<td>15 menit sebelum asesmen telah siap</td>
							</tr>
							<tr>
								<td>Kelengkapan tempat asesmen (penerangan, AC, in out) meja, kursi dan ATK sudah dipastikan tersedia di ruangan</td>
								<td>Diperiksa ketersediaan dan kelengkapannya oleh Teknisi TUK</td>
								<td>15 menit sebelum asesmen telah siap</td>
							</tr>
							<tr>
								<td>Alat dan bahan yang digunakan</td>
								<td>Diperiksa ketersediaan dan kelengkapannya oleh Teknisi TUK</td>
								<td>15 menit sebelum asesmen telah siap</td>
							</tr>
							<tr>
								<td>4.2 Pengaturan dukungan spesialis</td>
								<td colspan = "3"><input type = "text"></td>
							</tr>
							<tr>
								<td rowspan = "4">4.3 Pengorganisasian personil yang terlibat</td>
								<td>Personil</td>
								<td colspan = "2">Tugas dan Tanggung Jawab</td>
							</tr>
							<tr>
								<td>Asesor</td>
								<td colspan = "2">- Memeriksa kesiapan dokumen / berkas asesmen
									</br>- Memeriksa kesiapan sumber daya asesmen yang dibutuhkan
									</br>- Memberikan arahan kepada peserta asesmen
									</br>- Melakukan & mengawasi proses asesmen
									</br>- Mengumpulkan & memeriksa kelengkapan berkas / dokumen asesmen</td>
							</tr>
							<tr>
								<td>Peserta</td>
								<td colspan = "2">- Peserta ditempatkan / dikumpulkan ditempat yang telah disediakan
										</br>- Peserta diminta mengisi & menandatangani daftar hadir
										</br>- Peserta menerima penjelasan & pengarahan mengenai pelaksanaan asesmen, termasuk tata tertib asesmen yang berlaku
										</br>- Peserta mengikuti jadwal asesmen yang sudah ditetapkan</td>
							</tr>
							<tr>
								<td>Koord. TUK</td>
								<td colspan = "2">- Menyiapkan ruangan - ruangan / fasilitas asesmen
										</br>- Membantu menyiapkan berkas / form asesmen
										</br>- Menyiapkan peralatan tulis yang dibutuhkan
										</br>- Memeriksa, mengumpulkan & mendokumentasikan berkas asesmen
										</br>- Menyiapkan konsumsi, akomodasi, transportasi asesor & peserta</td>
							</tr>
							<tr>
								<td colspan = "4">4.4 Strategi Komunikasi (pilih yang sesuai)</td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> Wawancara, baik secara berhadapan maupun melalui telepon</td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> Email, memo, korespondensi</td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> Rapat</td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> Video Conference / Pembelajaran Berbasis Elektronik</td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> Fokus Group</td>
							</tr>
							<tr>
								<td><b>4.5</b> Penyimpanan Rekaman Asesmen dan Pelaporan</td>
								<td colspan = "3">- Rekaman hasil pengumpulan bukti (hasil observasi demonstrasi dan hasil tes lisan) harus diserahkan kepada Lead Asesor setelah selesai asesmen pada hari pelaksanaan asesmen.
									</br>- Rekaman hasil pengumpulan bukti, rekomendasi dan keputusan asesmen serta berita acara / laporan hasil asesmen disampaikan oleh Lead Asesor kepada TUK setelah selesai pelaksanaan asesmen pada hari pelaksanaan asesmen.
									</br>- Seluruh berkas rekaman pelaksanaan asesmen diterima dan dikumpulkan oleh TUK yang selanjutnya disampaikan ke LSP</td>
							</tr>
						</tbody>
					</table>
					
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>	
							<tr>
								<td colspan = "3"><b>Konfirmasi dengan pihak yang relevan</b></td>
							</tr>
							<tr>
								<td><b>Nama</b></td>
								<td><b>Jabatan</b></td>
								<td><b>Paraf / Tanggal</b></td>
							</tr>
							<tr>
								<td>TBS</td>
								<td>Koord. TUK</td>
								<td><input type = "checkbox"></td>
							</tr>
							<tr>
								<td>TBS</td>
								<td>Manager Sertifikasi LSP</td>
								<td><input type = "checkbox"></td>
							</tr>
							<tr>
								<td>TBS</td>
								<td>Manager / Supervisor di Tempat Kerja</td>
								<td><input type = "checkbox"></td>
							</tr>
						</tbody>
					</table>
					
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>	
							<tr>
								<td rowspan = "3" style = "width: 25%"><b>Penyusun Rencana dan Pengorganisasi Asesmen</b></td>
								<td><b>Nama Asesor</b></td>
								<td>TBS</td>
							</tr>
							<tr>
								<td>No. Reg.</td>
								<td>TBS</td>
							</tr>
							<tr>
								<td>Persetujuan</td>
								<td><input type = "checkbox"></td>
							</tr>
							
							<tr>
								<td rowspan = "3"><b>Diverifikasi oleh Manajemen Sertifikasi</b></td>
								<td><b>Nama</b></td>
								<td>TBS</td>
							</tr>
							<tr>
								<td>Jabatan</td>
								<td>Manager Sertifikasi</td>
							</tr>
							<tr>
								<td>Persetujuan</td>
								<td><input type = "checkbox"></td>
							</tr>
						</tbody>
					</table>
				</div>   
			</div>
					
			<div class = "table-responsive">
				
			</div>
		</form>
	</div>
	
	<div class="box-footer pad table-responsive">
		<a onClick="pagingList()" class="btn bg-navy btn-default pull-right margin"> <?php echo $form_button[103]; ?> </a>
		<a onClick="saveDt()" class="btn bg-navy btn-default pull-right margin" id="<?php echo $form_id[180]; ?>"> <?php echo $form_button[101]; ?> </a>
	</div>
</div>
