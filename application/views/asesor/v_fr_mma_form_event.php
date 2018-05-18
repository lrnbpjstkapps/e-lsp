<script text="text/javascript">
	$(document).ready(function() {				
		setDt134();
	});
	
	function setDt134()
		{			
			var select_id 	= document.getElementById('<?php echo $form_id[178]; ?>');
			var param 		= select_id.options[select_id.selectedIndex].value;
			
			if(param != "")
				{
					$.ajax({
						type: "POST",
						dataType: "JSON",
						url: "<?php echo $ajax_url[147]; ?>",
						data: "<?php echo $form_name[134]; ?>="+param,
						success: function(data){
							document.getElementById('<?php echo $form_id[102]; ?>').value = data.NOMOR_SKEMA;                  
							document.getElementById('<?php echo $form_id[101]; ?>').value = data.NAMA_SKEMA;                   
							
							$("#<?php echo $form_id[117]; ?>").load("<?php echo $ajax_url[148]; ?>"+param+"/"+data.UUID_SKEMA+"/"+'<?php echo $saveMethod; ?>'+'/'+'<?php echo $$form_name[146]; ?>');
							$('select#<?php echo $form_id[173]; ?>').multipleSelect({width: '100%'});
							$('#<?php echo $form_id[180]; ?>').attr('onClick', 'saveDt();');
							$('#<?php echo $form_id[180]; ?>').removeAttr('disabled');
						}
					});			
				}
			else{
				$("#<?php echo $form_id[117]; ?>").html("");
				$('#<?php echo $form_id[180]; ?>').attr('onclick','').unbind('click');
				$('#<?php echo $form_id[180]; ?>').attr('disabled','disabled');
			}
		}
</script>