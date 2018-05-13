<script text="text/javascript">
	var table;
	var validator;
	var save_method;
	var url;
	
	function addDt()
		{
			save_method = "add";		
			$('#<?php echo $form_id[100]; ?>')[0].reset();
			validator.resetForm();
			$('#<?php echo $form_id[100]; ?> .form-control').removeClass('error');
			
			$('.modal-title').text('<?php echo $form_title[100]; ?>');
			$('#<?php echo $form_id[103]; ?>').modal('show');
		};

	function editDt(uuid)
		{
			save_method = "update";	
			$('#<?php echo $form_id[100]; ?>')[0].reset();	
			validator.resetForm(); 
			$('#<?php echo $form_id[100]; ?> .form-control').removeClass('error');			
			
			$.ajax({
				url 		: "<?php echo $ajax_url[102]; ?>" + uuid,
				type		: "GET",
				dataType	: "JSON",
				success		: function(data)
					{						
						$('[name="<?php echo $form_name[102]; ?>"]').val(data.UUID_SKEMA);
						$('[name="<?php echo $form_name[100]; ?>"]').val(data.NAMA_SKEMA);
						$('[name="<?php echo $form_name[101]; ?>"]').val(data.NOMOR_SKEMA);	
					},
				error		: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
			});
			
			$('.modal-title').text('<?php echo $form_title[102]; ?>');
			$('#<?php echo $form_id[103]; ?>').modal('show'); 
		}
		
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[100]; ?>";	
				
				if ($("#<?php echo $form_id[100]; ?>").valid()) {
					$("#<?php echo $form_id[100]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[103]; ?>";
				
				if ($("#<?php echo $form_id[100]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[100]; ?>").submit();						
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
						url 		: "<?php echo $ajax_url[104]; ?>"+uuid,
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
		validator = $("#<?php echo $form_id[100]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[100]; ?>: 
						{
							required	: true,
							maxlength	: 50
						},
					<?php echo $form_name[101]; ?>: 
						{
							required	: true,
							maxlength	: 50,
							remote : { 
								url		: "<?php echo $isvalid_url[100]; ?>", 
								type	:"post",
								data	: 
									{
										<?php echo $form_name[102]; ?>: 
											function() {
												return $("#<?php echo $form_id[105]; ?>").val();
											}
									}
							}
						}
				}, 
			messages:
				{
					<?php echo $form_name[101]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[100]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[100]; ?>")[0]),
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

							$('#<?php echo $form_id[100]; ?>')[0].reset();	
							validator.resetForm(); 
							$('#<?php echo $form_id[100]; ?> .form-control').removeClass('error');	
						}
					});
					return false;
				}
		});
			
		table = $('#<?php echo $form_id[104]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: false,
			"paging"			: false,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[101]; ?>",
					"type"		: "POST"
				},
			"columnDefs"		: 
				[
					{ 
						"targets"	: [ 0, 1, 2, 3, 4 ], 
						"orderable"	: false
					}
				],
		});
	});
</script>