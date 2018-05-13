<script text="text/javascript">
	var table;
	var validator;
	var save_method;
	var url;
	
	function addDt()
		{
			save_method = "add";		
			$('#<?php echo $form_id[127]; ?>')[0].reset();
			validator.resetForm();
			$('#<?php echo $form_id[127]; ?> .form-control').removeClass('error');
			
			$('[name="<?php echo $form_name[109]; ?>"]').val('<?php echo $uuid2; ?>');
			$('[name="<?php echo $form_name[110]; ?>"]').val('<?php echo $param1." - ".$param2; ?>');
			$('[name="<?php echo $form_name[115]; ?>"]').val('<?php echo $param3." - ".$param4; ?>');
			$('[name="<?php echo $form_name[112]; ?>"]').val('<?php echo $param3."."; ?>');
			
			$('.modal-title').text('<?php echo $form_title[110]; ?>');
			$('#<?php echo $form_id[130]; ?>').modal('show');
		};

	function editDt(uuid)
		{
			save_method = "update";						
			$('#<?php echo $form_id[127]; ?>')[0].reset();	
			validator.resetForm(); 
			$('#<?php echo $form_id[127]; ?> .form-control').removeClass('error');	
							
			$.ajax({
				url 		: "<?php echo $ajax_url[120]; ?>" + uuid,
				type		: "GET",
				dataType	: "JSON",
				success		: function(data)
					{	
						$('[name="<?php echo $form_name[109]; ?>"]').val('<?php echo $uuid2; ?>');
						$('[name="<?php echo $form_name[110]; ?>"]').val('<?php echo $param1." - ".$param2; ?>');
						$('[name="<?php echo $form_name[115]; ?>"]').val('<?php echo $param3." - ".$param4; ?>');
						$('[name="<?php echo $form_name[112]; ?>"]').val('<?php echo $param3."."; ?>');
						
						$('[name="<?php echo $form_name[113]; ?>"]').val(data.UUID_KUK);						
						$('[name="<?php echo $form_name[112]; ?>"]').val(data.NOMOR_KUK);	
						$('[name="<?php echo $form_name[111]; ?>"]').val(data.PERNYATAAN);
						$('[name="<?php echo $form_name[114]; ?>"]').val(data.PERTANYAAN);
					},
				error		: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
			});
			
			$('.modal-title').text('<?php echo $form_title[109]; ?>');
			$('#<?php echo $form_id[130]; ?>').modal('show'); 
		}
		
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[118]; ?>";	
				
				if ($("#<?php echo $form_id[127]; ?>").valid()) {
					$("#<?php echo $form_id[127]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[121]; ?>";
				
				if ($("#<?php echo $form_id[127]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[127]; ?>").submit();						
					}).setting({
						'labels'	: {
							ok		: '<?php echo $form_button[102]; ?>',
							cancel	: '<?php echo $form_button[103]; ?>'
						}
					}).setHeader('<?php echo $form_title[103]; ?>').show();					
				}
			}						
		}
		
	function deleteDt(uuid)
		{	
			alertify.confirm('<?php echo $form_label[104]; ?>', function(){
				{
					$.ajax({
						url 		: "<?php echo $ajax_url[122]; ?>"+uuid,
						type		: "POST",
						dataType	: "JSON",
						success		: function(data)
							{	
								reloadDt();
								
								if(data=="1"){
									alertify.success('<?php echo $form_label[107]; ?>');
								}else{
									alertify.error('<?php echo $form_label[110]; ?>');
								}							
							},
						error		: function (jqXHR, textStatus, errorThrown)
						{
							alertify.error('<?php echo $form_label[110]; ?>');
							reloadDt();
						}				
					});

				}
				
			}).setting({
				'labels'	: {
					ok		: '<?php echo $form_button[102]; ?>',
					cancel	: '<?php echo $form_button[103]; ?>'
				}
			}).setHeader('<?php echo $form_title[104]; ?>').show();
		}
		
	function reloadDt()
		{
			table.ajax.reload(null,false); 
		}

	$(document).ready(function() {
		validator = $("#<?php echo $form_id[127]; ?>").validate({
			rules: 
				{					
					<?php echo $form_name[112]; ?>: 
						{
							required	: true,
							maxlength	: 50,
							remote : { 
								url		: "<?php echo $isvalid_url[103]; ?>", 
								type	:"post",
								data	: 
									{
										<?php echo $form_name[113]; ?>: 
											function() {
												return $("#<?php echo $form_id[132]; ?>").val();
											}
									}
							}
						},
					<?php echo $form_name[111]; ?>: 
						{
							required	: true,
							maxlength	: 200
						},
					<?php echo $form_name[114]; ?>: 
						{
							required	: true,
							maxlength	: 300
						}
				}, 
			messages:
				{
					<?php echo $form_name[112]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[103]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[127]; ?>")[0]),
						cache		: false,
						contentType	: false,
						processData	: false,
						success		: function(data){
							$("[data-dismiss=modal]").trigger({ type: "click" });
							reloadDt();		
							
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

							$('#<?php echo $form_id[127]; ?>')[0].reset();	
							validator.resetForm(); 
							$('#<?php echo $form_id[127]; ?> .form-control').removeClass('error');	
						}
					});
					return false;
				}
		});
			
		table = $('#<?php echo $form_id[131]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: false,
			"paging"			: false,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[119]; ?>"+"<?php echo $uuid2; ?>",
					"type"		: "POST"
				},
			"columnDefs"		: 
				[
					{ 
						"targets"	: [ 0, 1, 2, 3, 4, 5], 
						"orderable"	: false
					}
				],
		});
	});
</script>