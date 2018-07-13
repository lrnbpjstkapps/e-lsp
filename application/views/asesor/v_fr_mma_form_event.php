<script text="text/javascript">
	var validator;
	var save_method = '<?php echo $saveMethod; ?>';
	
	function updateDt()
		{					
			url = "<?php echo $ajax_url[159]; ?>";
			
			if ($("#<?php echo $form_id[190]; ?>").valid()) {
				$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[153]; ?>");
				$("#<?php echo $form_id[190]; ?>").submit();							
			}					
		}
		
	$(document).ready(function() {		
		validator = $("#<?php echo $form_id[190]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[182]; ?>: 
						{
							required: true
						},
				}, 
			messages:
				{
				},
			submitHandler: function (form)
				{
					$.ajax({
						url			: url,
						type		: 'POST',
						data		: new FormData($("#<?php echo $form_id[190]; ?>")[0]),
						cache		: false,
						contentType	: false,
						processData	: false,
						success		: function(data){		
							if(save_method == "add"){
								if(data=="1"){		
									alertify.success('<?php echo $validationMsg[106]; ?>');
								}else{
									alertify.error('<?php echo $validationMsg[107]; ?>');
								}	
							}else{
								if(data=="1"){		
									alertify.success('<?php echo $validationMsg[108]; ?>');
								}else{
									alertify.error('<?php echo $validationMsg[109]; ?>');
								}
							}
							
						}
					});
					return false;
				}
		});		
	});
</script>