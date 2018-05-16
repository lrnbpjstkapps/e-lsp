<form id="<?php echo $form_id[181]; ?>">
	<input type = "hidden" name = "<?php echo $form_name[134]; ?>" value = "<?php echo $$form_name[134]; ?>">
	<input type = "hidden" name = "<?php echo $form_name[102]; ?>" value = "<?php echo $$form_name[102]; ?>"> 
	
	<div class = "table-responsive">
		<table class = "table table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th rowspan="2"> <?php echo $table_column[100]; ?> </th>
					<!--th rowspan="2"> <?php echo $table_column[105]; ?> </th-->
					<th rowspan="2"> <?php echo $table_column[104]; ?> </th>
					<!--th rowspan="2"> <?php echo $table_column[116]; ?> </th-->
					<th rowspan="2"> <?php echo $table_column[117]; ?> </th>
					<th colspan = "2"> <?php echo $table_column[118]; ?> </th>
					<th rowspan="2" style="width: 15%"> <?php echo $table_column[121]; ?> </th>
					<th class="sorting_disabled" align = "center" rowspan="2"> <?php echo $table_column[101]; ?> </th>
					<th class="sorting_disabled" align = "center" rowspan="2"> <?php echo $table_column[101]; ?> </th>
				</tr>
				<tr>							
					<th> <?php echo $table_column[119]; ?> </th>
					<th> <?php echo $table_column[120]; ?> </th>
				</tr>
			</thead>		
			<tbody>
				<?php 
					$i = 0;		
					foreach($listKUK->result() as $row){ ?>
						<input type = "hidden" name = "<?php echo $form_name[105].'_'.$i; ?>" value = "<?php echo $row->UUID_UK; ?>">
						<input type = "hidden" name = "<?php echo $form_name[113].'_'.$i; ?>" value = "<?php echo $row->UUID_KUK; ?>">
						<input type = "hidden" name = "<?php echo $form_name[109].'_'.$i; ?>" value = "<?php echo $row->UUID_EK; ?>">
						<tr>
							<td>
								<?php echo ($i+1); ?>
							</td>
							<!--td>
								<?php echo $row->KODE_UK; ?>
							</td-->
							<td>
								<?php echo $row->JUDUL_UK; ?>
							</td>
							<!--td>
								<?php echo $row->NOMOR_KUK; ?>
							</td-->
							<td>
								<?php echo $row->PERTANYAAN; ?>
							</td>
							<?php if($saveMethod == "add"){ ?>
								<td>
									<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "1">
								</td>
								<td>
									<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "0"> 
								</td>
								<td>								
									<select multiple="multiple" name="<?php echo $form_name[136].'_'.$i.'[]'; ?>" id="<?php echo $form_id[173]; ?>">															
										<?php foreach($listBukti->result() as $row){ ?>
											<option value = "<?php echo $row->UUID_BUKTI; ?>"><?php echo $row->KETERANGAN; ?></option>
										<?php } ?>
									</select>								
								</td>
							<?php }else{ ?>
								<?php if(${$form_name[149].'_'.$i} == '1'){ ?>
									<td>
										<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "1" checked>
									</td>
									<td>
										<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "0"> 
									</td>
								<?php } else { ?>
									<td>
										<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "1">
									</td>
									<td>
										<input type = "radio" name = "<?php echo $form_name[149].'_'.$i; ?>" id = "<?php echo $form_id[179].'_'.$i; ?>" value = "0" checked> 
									</td>
								<?php } ?>
								<td>								
									<select multiple="multiple" name="<?php echo $form_name[136].'_'.$i.'[]'; ?>" id="<?php echo $form_id[173]; ?>">															
										<?php foreach($listBukti->result() as $row){ ?>
											<?php if(in_array($row->UUID_BUKTI, ${$form_name[136].'_'.$i})){ ?>
												<option value = "<?php echo $row->UUID_BUKTI; ?>" selected><?php echo $row->KETERANGAN; ?></option>
											<?php }else{ ?>
												<option value = "<?php echo $row->UUID_BUKTI; ?>"><?php echo $row->KETERANGAN; ?></option>
											<?php } ?>
										<?php } ?>
									</select>								
								</td>
							<?php } ?>
							
						</tr>					
				<?php 
						$i++; 
					} 
				?>
			</tbody>
		</table>
	</div>
</form>

<script text="text/javascript">
	$('select#<?php echo $form_id[173]; ?>').multipleSelect({width: '100%'});
	var validator;
	var save_method = '<?php echo $saveMethod; ?>';
	
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[149]; ?>";	
				
				if ($("#<?php echo $form_id[181]; ?>").valid()) {
					$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[145]; ?>");
					$("#<?php echo $form_id[181]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[150]; ?>";
				
				if ($("#<?php echo $form_id[181]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[145]; ?>");
						$("#<?php echo $form_id[181]; ?>").submit();						
					}).setting({
						'labels'	: {
							ok		: '<?php echo $form_button[102]; ?>',
							cancel	: '<?php echo $form_button[103]; ?>'
						}
					}).setHeader('<?php echo $form_title[103]; ?>').show();					
				}
			}						
		}
		
	$(document).ready(function() {	
		validator = $("#<?php echo $form_id[181]; ?>").validate({
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[181]; ?>")[0]),
						cache		: false,
						contentType	: false,
						processData	: false,
						success		: function(data){		
							if(save_method == "add"){
								if(data=="1"){		
									alertify.success('<?php echo $form_label[105]; ?>');
								}else{
									alertify.error('<?php echo $form_label[108]; ?>');
								}	
							}else{
								if(data=="1"){		
									alertify.success('<?php echo $form_label[106]; ?>');
								}else{
									alertify.error('<?php echo $form_label[109]; ?>');
								}
							}
							
						}
					});
					return false;
				}
		});		
	});
</script>