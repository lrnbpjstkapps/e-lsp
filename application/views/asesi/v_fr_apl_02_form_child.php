<form id="<?php echo $form_id[181]; ?>">
	<input type = "hidden" name = "<?php echo $form_name[134]; ?>" value = "<?php echo $$form_name[134]; ?>">
	<input type = "hidden" name = "<?php echo $form_name[102]; ?>" value = "<?php echo $$form_name[102]; ?>"> 
	<input type = "hidden" name = "<?php echo $form_name[146]; ?>" value = "<?php echo $$form_name[146]; ?>">
	
	<div class = "table-responsive">
		<?php if($listKUK->num_rows() > 0){ ?>
			<table class = "table table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th rowspan="2"> <?php echo $table_column[100]; ?> </th>
						<th rowspan="2"> <?php echo $table_column[104]; ?> </th>
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
							<input type = "hidden" name = "<?php echo $form_name[143]; ?>" value = "<?php echo $row->UUID_UK; ?>">
							<input type = "hidden" name = "<?php echo $form_name[178]; ?>" value = "<?php echo $row->UUID_KUK; ?>">
							<input type = "hidden" name = "<?php echo $form_name[177]; ?>" value = "<?php echo $row->UUID_EK; ?>">
							<tr>
								<td>
									<?php echo ($i+1); ?>
								</td>
								<td>
									<?php echo $row->JUDUL_UK; ?>
								</td>
								<td>
									<?php echo $row->PERTANYAAN; ?>
								</td>
								<?php if($saveMethod == "add"){ ?>
									<td>
										<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "1">
									</td>
									<td>
										<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "0"> 
									</td>
									<td>								
										<select multiple="multiple" name="<?php echo $form_name[136].'['.$i.'][]'; ?>" id="<?php echo $form_id[173]; ?>">															
											<?php foreach($listBukti->result() as $row){ ?>
												<option value = "<?php echo $row->UUID_BUKTI; ?>"><?php echo $row->KETERANGAN; ?></option>
											<?php } ?>
										</select>								
									</td>
								<?php }else{ ?>
									<?php if(${$form_name[169]}[$i] == '1'){ ?>
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "1" checked>
										</td>
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "0"> 
										</td>
									<?php } else if(${$form_name[169]}[$i] == '0'){ ?>
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "1">
										</td>
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "0" checked> 
										</td>
									<?php } else {?>									
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "1">
										</td>
										<td>
											<input type = "radio" name = "<?php echo $form_name[169].'['.$i.']'; ?>" id = "<?php echo $form_id[179]; ?>" value = "0"> 
										</td>
									<?php } ?>
									<td>								
										<select multiple="multiple" name="<?php echo $form_name[136].'['.$i.'][]'; ?>" id="<?php echo $form_id[173]; ?>">															
											<?php foreach($listBukti->result() as $row){ ?>
												<?php if(in_array($row->UUID_BUKTI, ${$form_name[136]}[$i])){ ?>
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
		<?php } ?>
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
		<?php 
			if($listKUK->num_rows()==0)
				{
				?>
					$("#<?php echo $form_id[180]; ?>").attr('onClick','').unbind('click');
					$('#<?php echo $form_id[180]; ?>').attr('disabled', 'disable');
				<?php
				}
			else
				{
				?>
					$("#<?php echo $form_id[180]; ?>").attr('onClick', 'saveDt();');
					$('#<?php echo $form_id[180]; ?>').removeAttr('disabled');
				<?php
				}
		?>
			
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