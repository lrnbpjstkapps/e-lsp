<script text="text/javascript">
function findDt()
	{		
		$("#<?php echo $form_id[126]; ?>").submit();		
	}

function dropdown1()
	{		
		var e = document.getElementById("<?php echo $form_id[115]; ?>");
		var valOpt1 = e.options[e.selectedIndex].value;
		
		$.ajax({
			type: "POST",
			dataType: "html",
			url: "<?php echo $ajax_url[123]; ?>",
			beforeSend: function (){
				//loading things
			},
			data: "<?php echo $form_name[105]; ?>="+valOpt1,
			success: function(msg){
				if(msg==''){				
					$("select#<?php echo $form_id[124]; ?>").html("");
					document.getElementById("<?php echo $form_id[135]; ?>").disabled = true;
				}else{
					$("select#<?php echo $form_id[124]; ?>").html(msg);
					document.getElementById("<?php echo $form_id[135]; ?>").disabled = false;
				}                                     
			}
		});
	}
	
$(document).ready(function() {
	$("#<?php echo $form_id[116]; ?>").hide();
	dropdown1();
			
	$("#<?php echo $form_id[126]; ?>").validate({
		rules: {
			valTglMulai: {
				required: true,
				date: true
			},
			valTglSelesai: {
				required: true,
				date: true
			}
		},
		submitHandler: function(form){			
			$.ajax({
				url: '<?php echo $ajax_url[117]; ?>',
				type: 'POST',
				data: new FormData($("#<?php echo $form_id[126]; ?>")[0]),
				beforeSend: function (){
					//loading's thing
				},
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){					
					$("#<?php echo $form_id[116]; ?>").html(data);
					$("#<?php echo $form_id[116]; ?>").show();
				}
			});
			return false;
		}
	});
});
</script>