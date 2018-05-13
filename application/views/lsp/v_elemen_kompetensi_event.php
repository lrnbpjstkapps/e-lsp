<script text="text/javascript">
	var table;
	var validator;
	var save_method;
	var url;
	
	function addDt()
		{
			save_method = "add";		
			$('#<?php echo $form_id[119]; ?>')[0].reset();
			validator.resetForm();
			$('#<?php echo $form_id[119]; ?> .form-control').removeClass('error');
			
			$('[name="<?php echo $form_name[105]; ?>"]').val('<?php echo $uuid; ?>');
			$('[name="<?php echo $form_name[110]; ?>"]').val('<?php echo $param1." - ".$param2; ?>');
			$('[name="<?php echo $form_name[108]; ?>"]').val('<?php echo $param1."."; ?>');
			
			$('.modal-title').text('<?php echo $form_title[108]; ?>');
			$('#<?php echo $form_id[122]; ?>').modal('show');
		};

	function editDt(uuid)
		{
			save_method = "update";	
			$('#<?php echo $form_id[119]; ?>')[0].reset();	
			validator.resetForm(); 
			$('#<?php echo $form_id[119]; ?> .form-control').removeClass('error');			
			
			$.ajax({
				url 		: "<?php echo $ajax_url[114]; ?>" + uuid,
				type		: "GET",
				dataType	: "JSON",
				success		: function(data)
					{	
						$('[name="<?php echo $form_name[110]; ?>"]').val('<?php echo $param1." - ".$param2; ?>');
						$('[name="<?php echo $form_name[105]; ?>"]').val(data.UUID_UK);
						$('[name="<?php echo $form_name[109]; ?>"]').val(data.UUID_EK);
						$('[name="<?php echo $form_name[107]; ?>"]').val(data.NAMA_EK);
						$('[name="<?php echo $form_name[108]; ?>"]').val(data.NOMOR_EK);	
					},
				error		: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
			});
			
			$('.modal-title').text('<?php echo $form_title[109]; ?>');
			$('#<?php echo $form_id[122]; ?>').modal('show'); 
		}
		
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[112]; ?>";	
				
				if ($("#<?php echo $form_id[119]; ?>").valid()) {
					$("#<?php echo $form_id[119]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[115]; ?>";
				
				if ($("#<?php echo $form_id[119]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[119]; ?>").submit();						
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
						url 		: "<?php echo $ajax_url[116]; ?>"+uuid,
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
		validator = $("#<?php echo $form_id[119]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[107]; ?>: 
						{
							required	: true,
							maxlength	: 100
						},
					<?php echo $form_name[108]; ?>: 
						{
							required	: true,
							maxlength	: 50,
							remote : { 
								url		: "<?php echo $isvalid_url[102]; ?>", 
								type	:"post",
								data	: 
									{
										<?php echo $form_name[109]; ?>: 
											function() {
												return $("#<?php echo $form_id[124]; ?>").val();
											}
									}
							}
						}
				}, 
			messages:
				{
					<?php echo $form_name[108]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[102]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[119]; ?>")[0]),
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

							$('#<?php echo $form_id[119]; ?>')[0].reset();
							validator.resetForm();
							$('#<?php echo $form_id[119]; ?> .form-control').removeClass('error');							
						}
					});
					return false;
				}
		});
			
		table = $('#<?php echo $form_id[123]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: false,
			"paging"			: false,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[113]; ?>"+"<?php echo $uuid; ?>",
					"type"		: "POST"
				},
			"columnDefs"		: 
				[
					{ 
						"targets"	: [ 0, 1, 2, 3, 4], 
						"orderable"	: false
					}
				],
		});
	});
</script>