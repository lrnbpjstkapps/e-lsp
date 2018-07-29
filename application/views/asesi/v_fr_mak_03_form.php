<div class="box box-info">
	<div class="box-header with-border">
	  <?php if($saveMethod=="add"){ ?>
		  <h3 class="box-title"> <?php echo $menu_title[121]; ?> </h3>
	  <?php }else{ ?>
		  <h3 class="box-title"> <?php echo $menu_title[122]; ?> </h3>
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
					* Coret yang tidak perlu</br></br>
					
					<table class = "table table-hover" cellspacing="0" width="100%">
						<thead>
							<th>Jawablah dengan <b>Ya</b> atau <b>Tidak</b> pertanyaan - pertanyaan berikut ini:</th>
							<th>Ya</th>
							<th>Tidak</th>
						</thead>
						<tr>
							<td>Apakah Proses Banding telah dijelaskan kepada Anda?</td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
						</tr>
						<tr>
							<td>Apakah Anda telah mendiskusikan Banding dengan Asesor?</td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
						</tr>
						<tr>
							<td>Apakah Anda mau melibatkan "orang lain" membantu Anda dalam Proses Banding?</td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
							<td><input type="radio" name="<?php echo $form_name[118]; ?>"></td>
						</tr>
						<tr>
							<td colspan = "3">Banding ini diajukan atas Keputusan Asesmen yang dibuat pada Unit Kompetensi sebagai berikut:</td>			
						</tr>
						<tr>
							<td>Kode Unit Kompetensi</td>
							<td colspan = "2">Judul Unit Kompetensi</td>
						</tr>
						<tr>
							<td>TBS</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>TBS</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td>TBS</td>
							<td>TBS</td>
						</tr>
						<tr>
							<td colspan = "3">Alasan pengajuan banding sebagai berikut: 
								</br><textarea></textarea></td>
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
