<div id="<?php echo $form_id[116]; ?>" class = "animate-bottom">
		
</div>
<script text="text/javascript">		
	function pagingAdd()
		{
			$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[143]; ?>");
		};
		
	function pagingList()
		{
			$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[153]; ?>");
		}
		
	function editDt(uuid)
		{
			$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[146]; ?>"+uuid);
		}
		
	$(document).ready(function(){			
		$("#<?php echo $form_id[116]; ?>").load("<?php echo $ajax_url[153]; ?>");
	});
</script>