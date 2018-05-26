<script text="text/javascript">
function findDt()
	{		
		$("#<?php echo $form_id[118]; ?>").submit();		
	}

$(document).ready(function() {
	$("#<?php echo $form_id[116]; ?>").hide();
			
	$("#<?php echo $form_id[118]; ?>").validate({
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
				url: '<?php echo $ajax_url[111]; ?>',
				type: 'POST',
				data: new FormData($("#<?php echo $form_id[118]; ?>")[0]),
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