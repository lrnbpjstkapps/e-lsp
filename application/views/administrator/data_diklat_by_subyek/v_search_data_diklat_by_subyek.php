<div id="result" class = "animate-bottom">
	<form enctype="multipart/form-data" id="formCariDataDiklatKaryawan">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="fa fa-search"></i>
			  <h3 class="box-title">Cari</h3>
			</div>
			
			
			<div class="box-body pad table-responsive">
				<div class="col-md-6">
					<div class="form-group">
					  <label>Jenis Diklat</label>						
						<select class="form-control"name="jenisDiklat" id="jenisDiklat" onchange="leaveChange(this);">					  
						<option> -- Select All --</option>
						<?php foreach($listJenisDiklat->result() as $row){ ?>
							<option><?php echo $row->JENIS_DIKLAT; ?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					  <label>Nama Subyek</label>
					  <select class="form-control"name="namaSubyek"id="namaSubyek"> 
						<?php $i=0; foreach($namaSubyek->result() as $row){ ?>
							<option> <?php echo $row->NAMA_SUBYEK; ?></option>
						<?php }; ?>
					  </select>
					</div>
				</div>
			</div>
			
			<div class="box-footer text-center">
				<div class="col-md-12">
					<button type="submit" id="cariDataDiklatKaryawanByWilayah" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Cari</button>
				</div>
			</div>
		
		</div>
	</form>
	
	<div id="result2">
	</div>
</div>
<script text="text/javascript">
$(document).ajaxStart(function () {
	Pace.restart()
});
function leaveChange(control) {
	document.getElementById("cariDataDiklatKaryawanByWilayah").disabled = true;
	document.getElementById("namaSubyek").disabled = true;
	var e = document.getElementById("jenisDiklat");
	var jenisDiklat = e.options[e.selectedIndex].value;
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "DataDiklatKaryawanBySubyek/hei",
		beforeSend: function (){
			$("div#divLoading").addClass('show');      
			$('a').on('click.myDisable', function(e) { e.preventDefault(); });
			$(':button').prop('disabled', true);
		},
		data: "jenisDiklat="+jenisDiklat,
		success: function(msg){
			if(msg==''){
				document.getElementById("namaSubyek").disabled = true;
				$("select#namaSubyek").html("<option> Tidak ada data </option>");
			}else{				
				document.getElementById("cariDataDiklatKaryawanByWilayah").disabled = false;
				document.getElementById("namaSubyek").disabled = false;
				$("select#namaSubyek").html(msg);
			}                      
			$("div#divLoading").removeClass('show');  
			$('a').off('click.myDisable');			
			$(':button').prop('disabled', false);                       
		}
	});
};
$(document).ready(function(){		

	$("#formCariDataDiklatKaryawan").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'DataDiklatKaryawanBySubyek/listData',
			type: 'POST',
			data: formData,
			beforeSend: function (){
				$("div#divLoading").addClass('show');      
				$('a').on('click.myDisable', function(e) { e.preventDefault(); });
				$(':button').prop('disabled', true);
			},
			cache: false,
			contentType: false,
			processData: false,
			success: function(data){
				$("#result2").html(data);
				$("div#divLoading").removeClass('show');  
				$('a').off('click.myDisable');			
				$(':button').prop('disabled', false);
			}
		});
		return false;
	});
  });
</script>