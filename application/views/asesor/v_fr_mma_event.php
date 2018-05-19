<script text="text/javascript">
	var table;
	var url;
		
	function deleteDt(uuid)
	{	
		alertify.confirm('<?php echo $form_label[104]; ?>', function(){
			{
				$.ajax({
					url 		: "<?php echo $ajax_url[151]; ?>"+uuid,
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
		table = $('#<?php echo $form_id[182]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: false,
			"paging"			: false,
			"iDisplayLength"	: 10,
			"order"				: [], 
			"ajax"				: 
				{
					"url"		: "<?php echo $ajax_url[157]; ?>",
					"type"		: "POST"
				},
			"columnDefs"		: 
				[
					{ 
						"targets"	: [ 0, 1, 2, 3, 4, 5, 6, 7 ], 
						"orderable"	: false
					}
				],
		});		
		
	});
</script>