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
							<td><?php echo $form_label[100]; ?></td>
							<td style = "width: 75%"><?php echo $$form_name[100]; ?></td>
						</tr>
						<tr>
							<td><?php echo $form_label[101]; ?></td>
							<td><?php echo $$form_name[101]; ?></td>
						</tr>
						<tr>
							<td><?php echo $form_label[157]; ?></td>
							<td><?php echo $$form_name[148]; ?></td>
						</tr>
						<tr>
							<td><?php echo $form_label[156]; ?></td>
							<td><?php echo $$form_name[152]; ?></td>
						</tr>
						<tr>
							<td><?php echo $form_label[162]; ?></td>
							<td><?php echo $$form_name[153]; ?></td>
						</tr>
					</table>
					
				<!-- 1. Menentukan pendekatan asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[117]; ?> </b> </h5>
						 
					<table class = "table table-hover" cellspacing="0" width="100%">
						<tbody>
							<!-- 1.1 -->
							<tr> 
								<td rowspan = "4"><?php echo $form_label[163]; ?></td>
								<td><?php echo $form_desc[180]; ?></td>
								<td style = "width: 75%"><?php echo $form_label[167]; ?> <input type="text" title = "Teridentifikasi Sudah / Belum Memenuhi Aturan Bukti" value = "Teridentifikasi Sudah / Belum Memenuhi Aturan Bukti"></td>
							</tr>
							<tr>
								<td><?php echo $form_label[139]; ?></td>
								<td><?php echo $form_label[167]; ?> <input type = "radio" name = "b"> <?php echo $form_desc[183]; ?> <input type = "radio" name = "b"> <?php echo $form_desc[182]; ?></td>
							</tr>
							<tr>
								<td><?php echo $form_label[168]; ?></td>
								<td><?php echo $form_label[167]; ?> <input type="text" title = "TUK simulasi / tempat kerja dengan karakteristik produk / sistem / tempat kerja" value = "TUK simulasi / tempat kerja dengan karakteristik produk / sistem / tempat kerja"></td>
							</tr>
							<tr>
								<td><?php echo $form_desc[181]; ?></td>
								<td><?php echo $form_label[167]; ?> <input type="text"></td>
							</tr>
							
							<!-- -->
							<tr>
								<td></td>
								<td><?php echo $form_desc[184]; ?></td>
								<td><?php echo $form_label[167]; ?> <?php echo $form_desc[185]; ?> : <input type="text">
									</br></br>: <?php echo $form_desc[188]; ?> : <input type="text"></td>
							</tr>		
							<!-- 1.2 -->
							<tr>
								<td><?php echo $form_label[164]; ?></td>
								<td><?php echo $form_desc[187]; ?></td>
								<td><?php echo $form_label[167]; ?> <input type = "radio" name = "a"> <?php echo $form_desc[206]; ?> <input type = "radio" name = "a"> <?php echo $form_desc[207]; ?></td>
							</tr>
							
							<!-- 1.3 -->
							<tr>
								<td><?php echo $form_label[165]; ?></td>
								<td><?php echo $form_label[170]; ?></td>
								<td><?php echo $form_desc[189]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[190]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[191]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[192]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[193]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[194]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[195]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[196]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[197]; ?>
									</br><?php echo $form_desc[198]; ?>									
								</td>
							</tr>
							
							<!-- 1.4 -->
							<tr>
								<td><?php echo $form_label[166]; ?></td>
								<td><?php echo $form_label[171]; ?></td>
								<td><?php echo $form_desc[199]; ?>
									</br> <input type = "checkbox"> <?php echo $form_desc[200]; ?>: <input type="text">
									</br> <input type = "checkbox"> <?php echo $form_desc[201]; ?>: <input type="text">
									</br> <input type = "checkbox"> <?php echo $form_desc[202]; ?>: <input type="text">
									</br> <input type = "checkbox"> <?php echo $form_desc[203]; ?>: <input type="text">
									</br> <input type = "checkbox"> <?php echo $form_desc[204]; ?>: <input type="text">
									</br> <?php echo $form_desc[205]; ?>
								</td>
						</tbody>
					</table>
					
				<!-- 2. Mempersiapkan Rencana Asesmen -->
					</br><h5 style="margin-bottom: 10px;"> <b> <?php echo $form_desc[118]; ?> </b> </h5>
					
					<?php if($listAnswer->num_rows() > 0){ ?>
						<table class = "table table-hover" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="4" vertical-align = "middle"><?php echo $table_column[100]; ?></th>
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
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > <?= $form_label[192] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > <?= $form_label[193] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[145].' '.$i; ?>" id = "<?php echo $form_id[174]; ?>" > <?= $form_label[194] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[195] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[196] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[197] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[198] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[199] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[200] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[201] ?></td>
											<td><input type = "radio" name = "<?php echo $form_name[154].' '.$i; ?>" id = "<?php echo $form_id[189]; ?>" > <?= $form_label[202] ?></td>
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
								<td rowspan = "2" colspan = "2"><?php echo $table_column[143]; ?></td>
								<td><?php echo $table_column[144]; ?></td>
								<td><?php echo $table_column[145]; ?></td>
							</tr>
							<tr>
								<td><input type = "checkbox"> <?php echo $table_column[146]; ?></td>
								<td><input type = "checkbox"> <?php echo $table_column[146]; ?></td>
							</tr>
							<tr>
								<td colspan = "4"><?php echo $table_column[147]; ?></td>
							</tr>
						</tbody>
					</table>
					
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<thead>
							<tr>
								<th><?= $form_label[188] ?></th>
								<th><?= $form_label[189] ?></th>
								<th><?= $form_label[190] ?></th>
								<th><?= $form_label[191] ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Asesor</td>
								<td><?= $form_desc[129] ?></td>
								<td><?= $form_desc[124] ?></td>
								<td><input type = "checkbox" name = "" value = ""> <?= $form_desc[111] ?></td>
							</tr>
							<tr>
								<td>Manajer Sertifikasi</td>
								<td><?= $form_desc[125] ?></td>
								<td><?= $form_desc[126] ?></td>
								<td><?= $form_desc[130] ?></td>
							</tr>
							<tr>
								<td>Koordinator TUK</td>
								<td><?= $form_desc[128] ?></td>
								<td><?= $form_desc[127] ?></td>
								<td><?= $form_desc[130] ?></td>
							</tr>
						</tbody>
					</table>
					
					<table class = "table table-stripped" cellspacing = "0" width = "100%">
						<tbody>
							<tr>
								<td rowspan = "4"><?= $table_column[148] ?></td>
								<td><?= $form_label[179] ?></td> 
								<td colspan = "2">: <input type = "date" name = ""></td>									
							</tr>
							<tr>
								<td colspan = "3"><?= $form_label[180] ?></td>
							</tr>
							<tr>
								<td><?= $form_label[181] ?></td>
								<td colspan = "2">: <input type = "time" name = ""> - <input type = "time" name = ""></td>
							</tr>
							<tr>
								<td><?= $form_label[182]; ?></td>
								<td colspan = "2">: <input type = "time" name = ""> - <input type = "time" name = ""></td>
							</tr>
							<tr>
								<td><?php echo $form_label[186]; ?></td>
								<td colspan = "3"><?php echo $form_label[187]; ?></td>
							</tr>
						</tbody>
					</table>
					
				<!-- 3. Kontekstualisasi dan meninjau rencana asesmen -->
					</br><h5 style = "margin-bottom: 10px;"><?= $form_desc[131] ?></h5>
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>
							<tr>
								<td><?= $form_desc[132] ?></td>
								<td><?= $form_desc[133] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[134] ?></td>
								<td><?= $form_desc[135] ?></td>
							</tr>
							<tr>
								<td rowspan = "2"><?= $form_desc[136] ?></td>
								<td><?= $form_desc[137] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[138] ?></td>
							</tr>
							<tr>
								<td colspan = "2"><?= $form_desc[139] ?></td>							
							</tr>
							<tr>
								<td><?= $form_desc[140] ?></td>
								<td><?= $form_desc[141] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[142] ?></td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td><?= $form_desc[143] ?></td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td><?= $form_desc[144] ?></td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td><?= $form_desc[145] ?></td>
								<td><textarea> </textarea></td>
							</tr>
							<tr>
								<td><?= $form_desc[146] ?></td>
								<td><?= $form_desc[141] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[147] ?></td>
								<td></td>
							</tr>
							<tr>
								<td colspan = "2"><?= $form_desc[148] ?></td>								
							</tr>
							<tr>
								<td colspan = "2"><?= $form_desc[149] ?></td>								
							</tr>
						</tbody>
					</table>
				<!-- 4. Mengorganisasikan asesmen -->
					</br><h5 style = "margin-bottom: 10px;" ><?= $form_desc[150] ?></h5>
					<table class = "table table-hover" cellspacing = "0" width = "100%">
						<tbody>	
							<tr>
								<td rowspan = "4"><?= $form_desc[151] ?></td>
								<td><?= $form_desc[152] ?></td>
								<td><?= $form_desc[153] ?></td>
								<td><?= $form_desc[154] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[155] ?></td>
								<td><?= $form_desc[156] ?></td>
								<td><?= $form_desc[157] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[158] ?></td>
								<td><?= $form_desc[160] ?></td>
								<td><?= $form_desc[157] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[159] ?></td>
								<td><?= $form_desc[160] ?></td>
								<td><?= $form_desc[157] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[161] ?></td>
								<td colspan = "3"><?= $form_desc[162] ?></td>
							</tr>
							<tr>
								<td rowspan = "4"><?= $form_desc[163] ?></td>
								<td><?= $form_desc[164] ?></td>
								<td colspan = "2"><?= $form_desc[165] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[166] ?></td>
								<td colspan = "2"><?= $form_desc[167] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[168] ?></td>
								<td colspan = "2"><?= $form_desc[169] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[170] ?></td>
								<td colspan = "2"><?= $form_desc[171] ?></td>
							</tr>
							<tr>
								<td colspan = "4"><?= $form_desc[172] ?></td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> <?= $form_desc[173] ?></td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> <?= $form_desc[174] ?></td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> <?= $form_desc[175] ?></td>
							</tr>
							<tr>
								<td colspan = "4"><input type = "checkbox"> <?= $form_desc[176] ?></td>
							</tr>
							<tr>
								<td><?= $form_desc[178] ?></td>
								<td colspan = "3"><?= $form_desc[179] ?></td>
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
