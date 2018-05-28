<script text="text/javascript">
	var table;
	var validator;
	var save_method = '<?php echo $saveMethod; ?>';
	
	function saveDt()
		{	
			if(save_method == 'add') {
				url = "<?php echo $ajax_url[124]; ?>";	
				
				if ($("#<?php echo $form_id[136]; ?>").valid()) {
					$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[130]; ?>");
					$("#<?php echo $form_id[136]; ?>").submit();
				}				
			} else {				
				url = "<?php echo $ajax_url[127]; ?>";
				
				if ($("#<?php echo $form_id[136]; ?>").valid()) {
					alertify.confirm('<?php echo $form_label[103]; ?>', function(){
						$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[130]; ?>");
						$("#<?php echo $form_id[136]; ?>").submit();						
					}).setting({
						'labels'	: {
							ok		: '<?php echo $form_button[102]; ?>',
							cancel	: '<?php echo $form_button[103]; ?>'
						}
					}).setHeader('<?php echo $form_title[103]; ?>').show();					
				}
			}						
		}
		
	function reloadDt()
		{
			table.ajax.reload(null,false); 
		}
		
	$(document).ready(function() {
		setDt102();
		dropdown1();
		dropdown2();
		
		validator = $("#<?php echo $form_id[136]; ?>").validate({
			rules: 
				{
					<?php echo $form_name[142]; ?>: 
						{
							date: true
						},
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
						data		: new FormData($("#<?php echo $form_id[136]; ?>")[0]),
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
	
	$('#<?php echo $form_id[142]; ?>').datepicker({
      autoclose: true
    });
	
	function setDt102()
		{	
			var select_id 	= document.getElementById('<?php echo $form_id[101]; ?>');
			var param 		= select_id.options[select_id.selectedIndex].value;
			
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "<?php echo $ajax_url[131]; ?>",
				data: "<?php echo $form_name[102]; ?>="+param,
				success: function(msg){
					document.getElementById('<?php echo $form_id[102]; ?>').value = msg;                  
				}
			});	

			dropdown1();			
		}
		
	function dropdown1()
		{		
			var e 		= document.getElementById("<?php echo $form_id[101]; ?>");
			var valOpt1 = e.options[e.selectedIndex].value;
			
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "<?php echo $ajax_url[132]; ?>",
				beforeSend: function (){
					//loading things
				},
				data: 
					{
						"<?php echo $form_name[102]; ?>": valOpt1,
						"<?php echo $form_name[134]; ?>": '<?php echo $$form_name[134]; ?>'
					},
				success: function(msg){
					if(msg==''){				
						$("select#<?php echo $form_id[115]; ?>").html("");
					}else{
						$('select#<?php echo $form_id[115]; ?>').multipleSelect('destroy');
						$("select#<?php echo $form_id[115]; ?>").html(msg);
						$('select#<?php echo $form_id[115]; ?>').multipleSelect({width: '100%'});
					}                                     
				}
			});						
		}	
		
	function dropdown2()
		{					
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "<?php echo $ajax_url[142]; ?>",
				beforeSend: function (){
					//loading things
				},
				data: 
					{
						"<?php echo $form_name[140]; ?>": 'd8c702c5-4e7f-11e8-bf00-00ff0b0c062f',
						"<?php echo $form_name[134]; ?>": '<?php echo $$form_name[134]; ?>'
					},
				success: function(msg){
					if(msg==''){				
						$("select#<?php echo $form_id[173]; ?>").html("");
					}else{
						$('select#<?php echo $form_id[173]; ?>').multipleSelect('destroy');
						$("select#<?php echo $form_id[173]; ?>").html(msg);
						$('select#<?php echo $form_id[173]; ?>').multipleSelect({width: '100%'});
					}                                     
				}
			});						
		}	
		
</script>