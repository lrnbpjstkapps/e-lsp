<div class="box box-info">
	<div class="box-header with-border">
	  <?php if($saveMethod=="add"){ ?>
		  <h3 class="box-title"> <?php echo $menu_title[111]; ?> </h3>
	  <?php }else{ ?>
		  <h3 class="box-title"> <?php echo $menu_title[117]; ?> </h3>
	  <?php } ?>
	</div>
	
	<div class="box-body pad table-responsive">
		<form class="form-horizontal">
			<div class="modal-body form">                
				<div class="form-body">					
					<p class="text-muted well well-sm no-shadow"> <?php echo $form_desc[112]; ?> 		
						</br><?php echo $form_desc[113]; ?> 		
						</br><?php echo $form_desc[114]; ?> 		
						</br><?php echo $form_desc[115]; ?> 		
						</br><?php echo $form_desc[116]; ?> 
					</p>						

					<!-- FR-APL-01 -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[158]; ?> </label>
						<div class="col-md-5">
							<select name="<?php echo $form_name[134]; ?>" id="<?php echo $form_id[178]; ?>" onChange="setDt134()" class="form-control">
								<option value = ""><?php echo $form_label[159]; ?></option>
								<?php foreach($listApl01->result() as $row){ ?>
									<?php if($$form_name[134]==$row->UUID_APL01){?>
										<option value = "<?php echo $row->UUID_APL01; ?>" selected><?php echo "(".date('d M y - H:i', strtotime($row->DTM_CRT)).") ".$row->NAMA_SKEMA." (ID ".$row->NO_DOKUMEN.")"; ?></option>
									<?php }else{ ?>
										<option value = "<?php echo $row->UUID_APL01; ?>"><?php echo "(".date('d M y - H:i', strtotime($row->DTM_CRT)).") ".$row->NAMA_SKEMA." (ID ".$row->NO_DOKUMEN.")"; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
							<span class="help-block"></span>
						</div>
					</div>	

					<!-- Nama Peserta -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[155]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[145]; ?>" value="<?php echo $$form_name[145]; ?>" id="<?php echo $form_id[174]; ?>" class="form-control" type="text" readonly>
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
					
					<!-- Judul Skema sertifikasi -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[100]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[100]; ?>" value="<?php echo $$form_name[100]; ?>" id="<?php echo $form_id[101]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>
					
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
