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
		
	function disableKompetensiKet() {
		var kompetensi		= document.getElementById("<?= $form_id[191]; ?>");
		var kompetensi_ket	= document.getElementById("<?= $form_id[196]; ?>");

		if (kompetensi.checked == true){
			kompetensi_ket.value = "<?= $$form_name[19202]; ?>";
			kompetensi_ket	= kompetensi_ket.readOnly = false;
		} else {
			kompetensi_ket.value = null;
			kompetensi_ket	= kompetensi_ket.readOnly = true;
		}
	}
	
	function disableProdukKet() {
		var produk		= document.getElementById("<?= $form_id[192]; ?>");
		var produk_ket	= document.getElementById("<?= $form_id[197]; ?>");

		if (produk.checked == true){
			produk_ket.value = "<?= $$form_name[19203]; ?>";
			produk_ket	= produk_ket.readOnly = false;
		} else {
			produk_ket.value = null;
			produk_ket	= produk_ket.readOnly = true;
		}
	}
	
	function disableSistemKet() {
		var sistem		= document.getElementById("<?= $form_id[193]; ?>");
		var sistem_ket	= document.getElementById("<?= $form_id[198]; ?>");

		if (sistem.checked == true){
			sistem_ket.value = "<?= $$form_name[19204]; ?>";
			sistem_ket	= sistem_ket.readOnly = false;
		} else {
			sistem_ket.value = null;
			sistem_ket	= sistem_ket.readOnly = true;
		}
	}
	
	function disableTeknisKet() {
		var teknis		= document.getElementById("<?= $form_id[194]; ?>");
		var teknis_ket	= document.getElementById("<?= $form_id[199]; ?>");

		if (teknis.checked == true){
			teknis_ket.value = "<?= $$form_name[19205]; ?>";
			teknis_ket	= teknis_ket.readOnly = false;
		} else {
			teknis_ket.value = null;
			teknis_ket	= teknis_ket.readOnly = true;
		}
	}
	
	function disableSOPKet() {
		var sop		= document.getElementById("<?= $form_id[195]; ?>");
		var sop_ket	= document.getElementById("<?= $form_id[200]; ?>");

		if (sop.checked == true){
			sop_ket.value = "<?= $$form_name[19206]; ?>";
			sop_ket	= sop_ket.readOnly = false;
		} else {
			sop_ket.value = null;
			sop_ket	= sop_ket.readOnly = true;
		}
	}
		
	$(document).ready(function() {
		disableKompetensiKet();
		disableProdukKet();
		disableSistemKet();
		disableTeknisKet();
		disableSOPKet();
		
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