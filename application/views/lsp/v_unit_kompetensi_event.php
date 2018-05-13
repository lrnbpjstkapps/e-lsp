<script text="text/javascript">
	var table1, table2;
	var validator;
	var save_method;
	var url;
			
	function listDt(uuid, param1, param2)
		{			
			table2 = $('#<?php echo $form_id[107]; ?>').DataTable({ 		
				"processing"		: true, 
				"serverSide"		: true,
				"searching"			: false,
				"paging"			: false,
				"iDisplayLength"	: 10,
				"order"				: [], 
				"bDestroy"			: true,
				"ajax"				: 
					{
						"url"		: "<?php echo $ajax_url[110]; ?>" + uuid,
						"type"		: "POST"
					},
				"columnDefs"		: 
					[
						{ 
							"targets"	: [ 0, 1, 2],
							"orderable"	: false
						}
					],
			});	
			
			$('#<?php echo $form_id[109]; ?>').text(param1);
			$('#<?php echo $form_id[108]; ?>').text(param2);
			$('.modal-title').text('<?php echo $form_label[114]; ?> '+param1);
			$('#<?php echo $form_id[106]; ?>').modal('show');			
		}
		
	function addDt()
		{
			save_method = "add";		
			$('#<?php echo $form_id[110]; ?>')[0].reset();
			validator.resetForm();
			$('#<?php echo $form_id[110]; ?> .form-control').removeClass('error');
			$('#<?php echo $form_id[105]; ?>').val('').trigger('change');						
			
			$('.modal-title').text('<?php echo $form_title[105]; ?>');
			$('#<?php echo $form_id[113]; ?>').modal('show');
		};

	function editDt(uuid)
		{
			save_method = "update";	
			$('#<?php echo $form_id[110]; ?>')[0].reset();	
			validator.resetForm(); 
			$('#<?php echo $form_id[110]; ?> .form-control').removeClass('error');
			$('#<?php echo $form_id[105]; ?>').val('').trigger('change');			
			
			$.ajax({
				url 		: "<?php echo $ajax_url[107]; ?>" + uuid,
				type		: "GET",
				dataType	: "JSON",
				success		: function(data)
					{						
						$('[name="<?php echo $form_name[105]; ?>"]').val(data.UUID_UK);
						$('[name="<?php echo $form_name[103]; ?>"]').val(data.JUDUL_UK);
						$('[name="<?php echo $form_name[104]; ?>"]').val(data.KODE_UK);	
						$('#<?php echo $form_id[105]; ?>').val(data.UUID_SKEMA).trigger('change');						
					},
				error		: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
			});
			
			$('.modal-title').text('<?php echo $form_title[106]; ?>');
			$('#<?php echo $form_id[113]; ?>').modal('show'); 
		}
		
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[105]; ?>";	
				
				if ($("#<?php echo $form_id[110]; ?>").valid()) {
					$("#<?php echo $form_id[110]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[108]; ?>";
				
				if ($("#<?php echo $form_id[110]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[110]; ?>").submit();						
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
						url 		: "<?php echo $ajax_url[109]; ?>"+uuid,
						type		: "POST",
						dataType	: "JSON",
						success		: function(data)
							{	
								if(data=="1"){
									alertify.success('<?php echo $form_label[107]; ?>');
								}else{
									alertify.error('<?php echo $form_label[110]; ?>');
								}								
								reloadDt();;
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
			table1.ajax.reload(null,false); 
		}

	$(document).ready(function() {
		validator = $("#<?php echo $form_id[110]; ?>").validate({
			rules: 
				{
					'<?php echo $form_name[106]; ?>': 
						{
							required	: true
						},
					'<?php echo $form_name[103]; ?>': 
						{
							required	: true,
							maxlength	: 100
						},
					'<?php echo $form_name[104]; ?>': 
						{
							required	: true,
							maxlength	: 50,
							remote : { 
								url		: "<?php echo $isvalid_url[101]; ?>", 
								type	:"post",
								data	: 
									{
										<?php echo $form_name[105]; ?>: 
											function() {
												return $("#<?php echo $form_id[115]; ?>").val();
											}
									}
							}
						}
				}, 
			messages:
				{
					<?php echo $form_name[104]; ?> : 
						{ 
							remote : "<?php echo $validationMsg[101]; ?>" 
						}
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[110]; ?>")[0]),
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

							$('#<?php echo $form_id[110]; ?>')[0].reset();	
							validator.resetForm(); 
							$('#<?php echo $form_id[110]; ?> .form-control').removeClass('error');
							$('#<?php echo $form_id[105]; ?>').val('').trigger('change');							
						}
					});
					return false;
				}
		});
			
		table1 = $('#<?php echo $form_id[114]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: true,
			"paging"			: true,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[106]; ?>",
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