<script text="text/javascript">
	var table;
	var validator, validator2;
	var save_method;
	var url;
	
	function addDt()
		{
			save_method = "add";		
			$('#<?php echo $form_id[168]; ?>')[0].reset();
			validator.resetForm();
			$('#<?php echo $form_id[168]; ?> .form-control').removeClass('error');
			
			$('.modal-title').text('<?php echo $form_title[112]; ?>');
			$('#<?php echo $form_id[171]; ?>').modal('show');
		};

	function editDt(uuid)
		{
			save_method = "update";	
			$('#<?php echo $form_id[168]; ?>')[0].reset();	
			validator.resetForm(); 
			$('#<?php echo $form_id[168]; ?> .form-control').removeClass('error');			
			
			$.ajax({
				url 		: "<?php echo $ajax_url[141]; ?>" + uuid,
				type		: "GET",
				dataType	: "JSON",
				success		: function(data)
					{						
						$('[name="<?php echo $form_name[136]; ?>"]').val(data.UUID_BUKTI);
						$('[name="<?php echo $form_name[138]; ?>"]').val(data.KETERANGAN);	
					},
				error		: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
			});
			
			$('.modal-title').text('<?php echo $form_title[113]; ?>');
			$('#<?php echo $form_id[184]; ?>').modal('show'); 
		}
		
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[137]; ?>";	
				
				if ($("#<?php echo $form_id[168]; ?>").valid()) {
					$("#<?php echo $form_id[168]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[139]; ?>";
				
				if ($("#<?php echo $form_id[183]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[183]; ?>").submit();						
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
						url 		: "<?php echo $ajax_url[140]; ?>"+uuid,
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
		validator = $("#<?php echo $form_id[168]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[137]; ?>: 
						{
							required	: true,
							extension	: "pdf",
							filesize	: 1000000
						},
					<?php echo $form_name[138]; ?>: 
						{
							required	: true,
							maxlength	: 75,
							remote 		: 
								{ 
									url		: "<?php echo $isvalid_url[104]; ?>", 
									type	:"post",
									data	: 
										{
											<?php echo $form_name[136]; ?>: 
												function() {
													return $("#<?php echo $form_id[173]; ?>").val();
												}
										}
								}
						}
				}, 
			messages:
				{
					<?php echo $form_name[137]; ?> : 
						{ 
							extension : "<?php echo $validationMsg[104]; ?>" 
						},
					<?php echo $form_name[138]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[105]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[168]; ?>")[0]),
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

							$('#<?php echo $form_id[168]; ?>')[0].reset();	
							validator.resetForm(); 
							$('#<?php echo $form_id[168]; ?> .form-control').removeClass('error');	
						}
					});
					return false;
				}
		});
		
		validator2 = $("#<?php echo $form_id[183]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[138]; ?>: 
						{
							required	: true,
							maxlength	: 75,
							remote 		: 
								{ 
									url		: "<?php echo $isvalid_url[104]; ?>", 
									type	:"post",
									data	: 
										{
											<?php echo $form_name[136]; ?>: 
												function() {
													return $("#<?php echo $form_id[173]; ?>").val();
												}
										}
								}
						}
				}, 
			messages:
				{
					<?php echo $form_name[137]; ?> : 
						{ 
							extension : "<?php echo $validationMsg[104]; ?>" 
						},
					<?php echo $form_name[138]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[105]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[183]; ?>")[0]),
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

							$('#<?php echo $form_id[183]; ?>')[0].reset();	
							validator2.resetForm(); 
							$('#<?php echo $form_id[183]; ?> .form-control').removeClass('error');	
						}
					});
					return false;
				}
		});
			
		table = $('#<?php echo $form_id[172]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: false,
			"paging"			: false,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[138]; ?>",
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