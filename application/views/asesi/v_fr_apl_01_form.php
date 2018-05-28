<div class="box box-info">
	<div class="box-header with-border">
	  <?php if($saveMethod=="add"){ ?>
		  <h3 class="box-title"> <?php echo $menu_title[106]; ?> </h3>
	  <?php }else{ ?>
		  <h3 class="box-title"> <?php echo $menu_title[107]; ?> </h3>
	  <?php } ?>
	</div>
	
	<div class="box-body pad table-responsive">
		<form id="<?php echo $form_id[136]; ?>" class="form-horizontal">
			<div class="modal-body form">                
				<input type="hidden" name="<?php echo $form_name[134]; ?>" value="<?php echo $$form_name[134]; ?>" id="<?php echo $form_id[139]; ?>"/> 
				<div class="form-body">
				<!-- Bagian 1 : Rincian Data Asesi -->
					<h6 class="page-header">  <?php echo $form_desc[100]; ?> </h6>
					<p class="text-muted well well-sm no-shadow"> <?php echo $form_desc[101]; ?> </p>		
					
				<!-- a. Data Pribadi -->
					<h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[102]; ?> </b> </h5>
					<!-- Nama lengkap -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[124]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[115]; ?>" value="<?php echo $$form_name[115]; ?>" id="<?php echo $form_id[140]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- Tempat Lahir -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[125]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[116]; ?>" value="<?php echo $$form_name[116]; ?>" id="<?php echo $form_id[141]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>	

					<!-- Tanggal Lahir -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[140]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[117]; ?>" value="<?php echo $$form_name[117]; ?>" id="<?php echo $form_id[142]; ?>" class="form-control" placeholder="yyyy-mm-dd" data-date-format='yyyy-mm-dd'>
							<span class="help-block"></span>
						</div>
					</div>						

					<!-- Jenis kelamin -->
					<div class="form-group">
					<label class="control-label col-md-2"> <?php echo $form_label[126]; ?> </label>
						<div class="col-md-4">
							<div class="radio">
								<?php if($$form_name[118] == $form_label[144]){ ?>									
									<label>									
										<input type="radio" name="<?php echo $form_name[118]; ?>" id="<?php echo $form_id[143]; ?>" value="<?php echo $form_label[143]; ?>">
										<?php echo $form_label[143]; ?>
									</label>
									&nbsp
									<label>
										<input type="radio" name="<?php echo $form_name[118]; ?>" id="<?php echo $form_id[163]; ?>" value="<?php echo $form_label[144]; ?>" checked>
										<?php echo $form_label[144]; ?>
									</label>
								<?php }else{ ?> 
									<label>									
										<input type="radio" name="<?php echo $form_name[118]; ?>" id="<?php echo $form_id[143]; ?>" value="<?php echo $form_label[143]; ?>" checked>
										<?php echo $form_label[143]; ?>
									</label>
									&nbsp
									<label>
										<input type="radio" name="<?php echo $form_name[118]; ?>" id="<?php echo $form_id[163]; ?>" value="<?php echo $form_label[144]; ?>">
										<?php echo $form_label[144]; ?>
									</label>
								<?php } ?>							
							</div>
						</div>		  
					</div>	

					<!-- Kebangsaan -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[127]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[119]; ?>" value="<?php echo $$form_name[119]; ?>" id="<?php echo $form_id[144]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>	

					<!-- Alamat Rumah -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[128]; ?> </label>
						<div class="col-md-4">
							<textarea name="<?php echo $form_name[120]; ?>" id="<?php echo $form_id[145]; ?>" class="form-control" rows="3" style="resize:none"><?php echo $$form_name[120]; ?></textarea>
							<span class="help-block"></span>
						</div>
					</div>						
					
					<!-- Kode pos Rumah-->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[129]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[121]; ?>" value="<?php echo $$form_name[121]; ?>" id="<?php echo $form_id[146]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- No. Telepon Rumah -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[130]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[122]; ?>" value="<?php echo $$form_name[122]; ?>" id="<?php echo $form_id[147]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- HP -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[132]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[123]; ?>" value="<?php echo $$form_name[123]; ?>" id="<?php echo $form_id[148]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- E-mail Pribadi-->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[133]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[124]; ?>" value="<?php echo $$form_name[124]; ?>" id="<?php echo $form_id[149]; ?>" class="form-control" type="email">
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- Pendidikan Terakhir -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[134]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[125]; ?>" value="<?php echo $$form_name[125]; ?>" id="<?php echo $form_id[150]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					
				<!-- b. Data Pekerjaan Sekarang -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[103]; ?> </b> </h5>
					<!-- Nama Lembaga/Perusahaan -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[135]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[126]; ?>" value="<?php echo $$form_name[126]; ?>" id="<?php echo $form_id[151]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>	

					<!-- Jabatan -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[136]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[127]; ?>" value="<?php echo $$form_name[127]; ?>" id="<?php echo $form_id[152]; ?>" class="form-control" type="text">
							<span class="help-block"></span>
						</div>
					</div>						
					
					<!-- Alamat kantor -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[137]; ?> </label>
						<div class="col-md-4">
							<textarea name="<?php echo $form_name[128]; ?>" id="<?php echo $form_id[153]; ?>" class="form-control" rows="3" style="resize:none"><?php echo $$form_name[128]; ?></textarea>
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- Kode Pos Kantor -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[142]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[129]; ?>" value="<?php echo $$form_name[129]; ?>" id="<?php echo $form_id[154]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- No. Telepon Kantor -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[131]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[130]; ?>" value="<?php echo $$form_name[130]; ?>" id="<?php echo $form_id[155]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- Fax -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[138]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[131]; ?>" value="<?php echo $$form_name[131]; ?>" id="<?php echo $form_id[156]; ?>" class="form-control" type="number">
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- E-mail Kantor -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[133]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[132]; ?>" value="<?php echo $$form_name[132]; ?>" id="<?php echo $form_id[157]; ?>" class="form-control" type="email">
							<span class="help-block"></span>
						</div>
					</div>
					
				<!-- c. Data Permohonan Sertifikasi -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[104]; ?> </b> </h5>
					
					<!-- Tujuan asesmen -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[139]; ?> </label>
						<div class="col-md-7">
							<input type="checkbox" name="<?php echo $form_name[133]; ?>" value="<?php echo $$form_name[133]; ?>" id="<?php echo $form_id[158]; ?>" value = "<?php echo $form_label[145]; ?>" disabled> <?php echo $form_label[145]; ?>
							&nbsp <input type="checkbox" name="<?php echo $form_name[133]; ?>" value="<?php echo $$form_name[133]; ?>" id="<?php echo $form_id[159]; ?>" value = "<?php echo $form_label[146]; ?>" disabled> <?php echo $form_label[146]; ?>
							&nbsp <input type="checkbox" name="<?php echo $form_name[133]; ?>" value="<?php echo $$form_name[133]; ?>" id="<?php echo $form_id[160]; ?>" value = "<?php echo $form_label[147]; ?>" disabled> <?php echo $form_label[147]; ?>
							&nbsp <input type="checkbox" name="<?php echo $form_name[133]; ?>" value="<?php echo $$form_name[133]; ?>" id="<?php echo $form_id[161]; ?>" value = "<?php echo $form_label[148]; ?>" checked readonly> <?php echo $form_label[148]; ?>
							&nbsp <input type="checkbox" name="<?php echo $form_name[133]; ?>" value="<?php echo $$form_name[133]; ?>" id="<?php echo $form_id[162]; ?>" value = "<?php echo $form_label[149]; ?>" disabled> <?php echo $form_label[149]; ?>
							</br></br><input name="<?php echo $form_name[141]; ?>" value="<?php echo $$form_name[141]; ?>" id="<?php echo $form_id[164]; ?>" class="form-control" type="text" disabled>
							<span class="help-block"></span>
						</div>
					</div>		
					
					<!-- Skema sertifikasi -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[141]; ?> </label>
						<div class="col-md-4">
							<select name="<?php echo $form_name[144]; ?>" value="<?php echo $$form_name[144]; ?>" id="<?php echo $form_id[165]; ?>" class="form-control" readonly>
								<option value = "<?php echo $form_label[150]; ?>"> <?php echo $form_label[150]; ?> </option>
								<option value = "<?php echo $form_label[151]; ?>" disabled readonly> <?php echo $form_label[151]; ?> </option>
								<option value = "<?php echo $form_label[152]; ?>" disabled readonly> <?php echo $form_label[152]; ?> </option>
							</select>
						</div>
					</div>	
					
				<!-- Bagian 2 : Daftar Unit Kompetensi -->
					</br><h6 class="page-header">  <?php echo $form_desc[105]; ?> </h6>
					<p class="text-muted well well-sm no-shadow"> <?php echo $form_desc[106]; ?> </p>
					
					<!-- Judul Skema sertifikasi -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[113]; ?> </label>
						<div class="col-md-4">
							<select name="<?php echo $form_name[102]; ?>" id="<?php echo $form_id[101]; ?>" onclick="setDt102()" class="form-control">
								<?php foreach($listSkema->result() as $row){ ?>
									<?php if($$form_name[158]==$row->UUID_SKEMA){?>
										<option value = "<?php echo $row->UUID_SKEMA; ?>" selected><?php echo $row->NAMA_SKEMA; ?></option>
									<?php }else{ ?>
										<option value = "<?php echo $row->UUID_SKEMA; ?>"><?php echo $row->NAMA_SKEMA; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
							<span class="help-block"></span>
						</div>
					</div>	

					<!-- Nomor Skema sertifikasi -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[101]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[101]; ?>" value="<?php echo $$form_name[101]; ?>" id="<?php echo $form_id[102]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- Unit Kompetensi yang diujikan -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[115]; ?> </label>
						<div class="col-md-6">
							<select multiple="multiple" name="<?php echo $form_name[143]; ?>" value="<?php echo $$form_name[105]; ?>" id="<?php echo $form_id[115]; ?>"></select>
						</div>
					</div>	
					
				<!-- Bagian 3 : Bukti Kelengkapan Pemohon -->
					</br><h6 class="page-header">  <?php echo $form_desc[107]; ?> </h6>
					<p class="text-muted well well-sm no-shadow"> <?php echo $form_desc[108]; ?> 
					</br></br> <?php echo $form_desc[109]; ?> </p>
					
					<!-- Bukti Kelengkapan Pemohon -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[153]; ?> </label>
						<div class="col-md-6">
							<select multiple="multiple" name="<?php echo $form_name[139]; ?>" value="<?php echo $$form_name[136]; ?>" id="<?php echo $form_id[173]; ?>"></select>
						</div>
					</div>	
					
				</div>                
			</div>
		</form>	
	</div>
	
	<div class="box-footer pad table-responsive">
		<a onClick="pagingList()" class="btn bg-navy btn-default pull-right margin"> <?php echo $form_button[103]; ?> </a>
		<a onClick="saveDt()" class="btn bg-navy btn-default pull-right margin"> <?php echo $form_button[101]; ?> </a>
	</div>
</div>
