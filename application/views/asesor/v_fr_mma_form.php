<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title"> <?php echo $menu_title[116]; ?> </h3>
	</div>
	
	<div class="box-body pad table-responsive">
		<form class="form-horizontal">
			<div class="modal-body form">                
				<div class="form-body">	
					<!-- Judul Skema sertifikasi -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[100]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[100]; ?>" value="<?php echo $$form_name[100]; ?>" id="<?php echo $form_id[101]; ?>" class="form-control" type="text" readonly>
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
					
					<!-- LSP -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[160]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[151]; ?>" value="<?php echo $$form_name[151]; ?>" id="<?php echo $form_id[186]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>	
					
					<!-- Nama Asesor -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[156]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[152]; ?>" value="<?php echo $$form_name[152]; ?>" id="<?php echo $form_id[187]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- Tanggal -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[162]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[153]; ?>" value="<?php echo $$form_name[153]; ?>" id="<?php echo $form_id[188]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>
					
					<!-- TUK -->
					<div class="form-group">
						<label class="control-label col-md-2"> <?php echo $form_label[157]; ?> </label>
						<div class="col-md-4">
							<input name="<?php echo $form_name[148]; ?>" value="<?php echo $$form_name[148]; ?>" id="<?php echo $form_id[177]; ?>" class="form-control" type="text" readonly>
							<span class="help-block"></span>
						</div>
					</div>
					
				<!-- 1. Menentukan pendekatan asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[117]; ?> </b> </h5>
						 
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tbody>
							<!-- 1.1 -->
							<tr> 
								<td rowspan = "3"><?php echo $form_label[163]; ?></td>
								<td><?php echo $form_label[155]; ?></td>
								<td style = "width: 75%"><?php echo $form_label[167]; ?> <?php echo $$form_name[115]; ?></td>
							</tr>
							<tr>
								<td><?php echo $form_label[139]; ?></td>
								<td><?php echo $form_label[167]; ?> <?php echo $$form_name[133]; ?></td>
							</tr>
							<tr>
								<td><?php echo $form_label[168]; ?></td>
								<td><?php echo $form_label[167]; ?> zzz</td>
							</tr>
							
							<!-- 1.2 -->
							<tr>
								<td><?php echo $form_label[164]; ?></td>
								<td><?php echo $form_label[169]; ?></td>
								<td><?php echo $form_label[167]; ?> zzz</td>
							</tr>
							
							<!-- 1.3 -->
							<tr>
								<td><?php echo $form_label[165]; ?></td>
								<td><?php echo $form_label[170]; ?></td>
								<td><?php echo $form_label[167]; ?> zzz</td>
							</tr>
							
							<!-- 1.4 -->
							<tr>
								<td><?php echo $form_label[166]; ?></td>
								<td><?php echo $form_label[171]; ?></td>
								<td><?php echo $form_label[167]; ?> zzz</td>
						</tbody>
					</table>
					
				<!-- 2. Mempersiapkan Rencana Asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[118]; ?> </b> </h5>
					
					<?php if($listAnswer->num_rows() > 0){ ?>
						<table class = "table table-hover" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="4"><?php echo $table_column[100]; ?></th>
									<th rowspan="4"><?php echo $table_column[126]; ?></th>
									<th rowspan="4"><?php echo $table_column[125]; ?></th>
									<th colspan = "3" rowspan = "2"><?php echo $table_column[127]; ?></th>
									<th colspan = "8"><?php echo $table_column[140]; ?></th>
									<th class="sorting_disabled" align = "center" rowspan="4"><?php echo $table_column[101]; ?></th>
								</tr>
								<tr>
									<th colspan = "8"><?php echo $table_column[141]; ?></th>
								</tr>
								<tr>
									<th colspan = "3"><?php echo $table_column[142]; ?></th>
									<th colspan = "8"><?php echo $table_column[131]; ?></th>
								</tr>
								<tr>							
									<th> <?php echo $table_column[128]; ?> </th>
									<th> <?php echo $table_column[129]; ?> </th>
									<th> <?php echo $table_column[130]; ?> </th>
									<th> <?php echo $table_column[132]; ?> </th>
									<th> <?php echo $table_column[133]; ?> </th>
									<th> <?php echo $table_column[134]; ?> </th>
									<th> <?php echo $table_column[135]; ?> </th>
									<th> <?php echo $table_column[136]; ?> </th>
									<th> <?php echo $table_column[137]; ?> </th>
									<th> <?php echo $table_column[138]; ?> </th>
									<th> <?php echo $table_column[139]; ?> </th>
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
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" ></td>
										</tr>					
								<?php 
										$i++; 
									} 
								?>
							</tbody>
						</table>
					<?php } ?>
					
					<p class = "text-muted well well-sm no-shadow">
						<?php echo $form_desc[119]; ?>
						</br><?php echo $form_desc[120]." ".$form_desc[121]; ?>
						</br><?php echo $form_desc[122]." ".$form_desc[123]; ?>
					</p>
					
					<table>
						<tbody>
							<tr>
								<td rowspan = "2"><?php echo $table_column[143]; ?></td>
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
