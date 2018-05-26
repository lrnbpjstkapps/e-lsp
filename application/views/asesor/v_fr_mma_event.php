<script text="text/javascript">
	var table;
	
	function reloadDt()
		{
			table.ajax.reload(null,false); 
		}
		
	$(document).ready(function() {					
		table = $('#<?php echo $form_id[185]; ?>').DataTable({ 		
			"processing"		: true, 
			"serverSide"		: true,
			"searching"			: true,
			"paging"			: true,
			"iDisplayLength"	: 25,
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