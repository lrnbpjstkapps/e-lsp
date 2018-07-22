<div class="box box-info">
	<div class="box-header with-border">
	  <?php if($saveMethod=="add"){ ?>
		  <h3 class="box-title"> <?php echo $menu_title[117]; ?> </h3>
	  <?php }else{ ?>
		  <h3 class="box-title"> <?php echo $menu_title[118]; ?> </h3>
	  <?php } ?>
	</div>
	
	<div class="box-body pad table-responsive">
		<form class="form-horizontal">
			<div class="modal-body form">                
				<div class="form-body">					
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tr>
							<td rowspan = "2">Skema Sertifikasi / Klaster Asesmen</td>
							<td>Judul</td>
							<td style = "width: 75%">TBS</td>
						</tr>
						<tr>
							<td>Nomor</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>TUK</td>
							<td colspan = "2">TBS</td>
						</tr>
						<tr>
							<td>Nama Asesor</td>
							<td colspan = "2">TBS</td>
						</tr>
						<tr>
							<td>Nama Peserta</td>
							<td colspan = "2">TBS</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td colspan = "2">TBS</td>
						</tr>
					</table>	

					Asesor diminta untuk :
					</br>1. Mengkaji ulang dan menilai bukti kompetensi peserta yang dikumpulkan, apakah bukti kompetensi tersebut memenuhi aturan bukti Valid, Asli, Terkini dan memadai (VATM).
					</br>2. Membuat keputusan Asesmen atas penilaian bukti kompetensi Peserta, bila Peserta dinyatakan Kompeten tuliskan tanda v pada kolom (K), dan bila dinyatakan Belum Kompeten tuliskan tanda V pada kolom (BK) untuk setiap unit kompetensi sesuai dengan skema sertifikasi.
					</br>3. Memberikan umpan balik kepada Peserta mengenai pencapaian unjuk kerja dan Peserta juga diminta untuk memberikan umpan balik terhadap proses asesmen yang dilaksanakan (kuisioner).
					</br>4. Asesor dan Peserta bersama-sama menandatangani keputusan asesmen
					
					</br></br>Pencapaian Kompetensi:
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tr>
							<td rowspan = "2">No.</td>
							<td rowspan = "2">Kode dan Judul Unit Kompetensi</td>
							<td rowspan = "2">Bukti - bukti</td>
							<td rowspan = "2">Jenis Bukti</td>
							<td>Pencapaian</td>
							<td>Keputusan</td>
						</tr>
						<tr>
							<td>Ya</td>
							<td>Tidak</td>
							<td>K</td>
							<td>BK</td>
						</tr>
					</table>
					
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tr>
							<td>Umpan balik terhadap pencapaian unjuk kerja:
								</br> Seluruh Elemen Kompetensi / Kriteria Unjuk Kerja  (KUK) yang diujikan telah tercapai.
								</br> Terdapat Elemen Kompetensi / Kriteria Unjuk Kerja (KUK) yang diujikan belum tercapai.
							</td>
						</tr>
						<tr>
							<td>Identifikasi kesenjangan pencapaian unjuk kerja:
								</br> Tidak ada kesenjangan pencapaian Elemen Kompetensi / Kriteria Unjuk Kerja (KUK)
								</br> Ditemukan kesenjangan pencapaian Elemen Kompetensi / Kriteria Unjuk Kerja (KUK) sebagai berikut:
							</td>
						</tr>
						<tr>
							<td>Saran tindak lanjut hasil asesmen:
								</br> Peliharalah kompetensi yang telah dicapai
								</br> Perlu dilakukan asesmen ulang pada:
								</br> a. Observasi Demonstrasi No. Elemen / KUK pada Unit Kompetensi:
								</br> b. Tes Lisan No. Elemen / KUK pada unit kompetensi:
								</br> c. Tes Tulis No. Elemen / KUK pada unit kompetensi:
								</br> d. ...
							</td>
						</tr>
					</table>
					
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tr>
							<td rowspan = "8"><b>Rekomendasi Asesor : </b>
								</br>Peserta direkomendasikan 
								</br><b>Kompeten / Belum Kompeten *</b>
								</br>pada skema sertifikasi yang diujikan
							</td>
							<td colspan = "2">
								Asesor:
							</td>
						</tr>
						<tr>
							<td>
								Nama
							</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>
								No. Reg
							</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>
								Tanda Tangan & Tanggal
							</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td colspan = "2">Peserta:</td>							
						</tr>
						<tr>
							<td>Nama</td>			
							<td>TBS</td>
						</tr>
						<tr>
							<td>No. Reg</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>Tanda Tangan & Tanggal</td>
							<td>TBS</td>
						</tr>
					</table>
				</div>   
			</div>
					
				
				
			<div id="<?php echo $form_id[117]; ?>">
				
			</div>
		</form>
	</div>
	
	<div class="box-footer pad table-responsive">
		<a onClick="pagingList()" class="btn bg-navy btn-default pull-right margin"> <?php echo $form_button[103]; ?> </a>
		<a onClick="saveDt()" class="btn bg-navy btn-default pull-right margin" id="<?php echo $form_id[180]; ?>"> <?php echo $form_button[101]; ?> </a>
	</div>
</div>
