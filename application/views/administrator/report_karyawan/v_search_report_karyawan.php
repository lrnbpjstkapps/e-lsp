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
					  <label>Kantor Wilayah</label>
					  <select class="form-control"name="wilayah" id="wilayah" onchange="leaveChange1(this);">
						<?php $i=0; foreach($dataWilayah->result() as $row){ ?>
							<option> <?php echo $row->WILAYAH; ?></option>
						<?php }; ?>
					  </select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">							
						<label>Unit Kerja</label>
						<select class="form-control"name="unitKerja" id="unitKerja">
							<option> -- Select All -- </option>
							<?php $i=0; foreach($unitKerja->result() as $row){ ?>
								<option> <?php echo $row->UNIT_KERJA; ?></option>
							<?php }; ?>
						</select>
					</div>
				</div>
				<!--div class="col-md-4">
				  <div class="form-group">
					<label>Jenis Diklat</label>
					<select class="form-control select2" multiple="multiple" data-placeholder="Pilih Jenis Diklat"
							style="width: 100%;" id = "jenisDiklat" name = "jenisDiklat[ ]">
						<!--?php $i=0; foreach($listJenisDiklat->result() as $row){ ?>
							<option value="<!--?php echo $row->UUID_JENIS_DIKLAT; ?>"> <!--?php echo $row->JENIS_DIKLAT; ?></option>
						<!--?php }; ?>
					</select>
				  </div>
				</div-->
			</div>
			
			<div class="box-footer text-center">
				<div class="col-md-12">
					<button type="submit" id="cariDataDiklatKaryawanByUnitKerja" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Cari</button>
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
function leaveChange1(control) {
	document.getElementById("cariDataDiklatKaryawanByUnitKerja").disabled = true;
	document.getElementById("unitKerja").disabled = true;
	var e = document.getElementById("wilayah");
	var wilayah = e.options[e.selectedIndex].value;
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "ReportKaryawan/listDataUnitKerja",
		beforeSend: function (){
			$("div#divLoading").addClass('show');      
			$('a').on('click.myDisable', function(e) { e.preventDefault(); });
			$(':button').prop('disabled', true);
		},
		data: "wilayah="+wilayah,
		success: function(msg){
			if(msg==''){
				document.getElementById("unitKerja").disabled = true;
				$("select#unitKerja").html("<option> Tidak ada data </option>");
			}else{				
				document.getElementById("cariDataDiklatKaryawanByUnitKerja").disabled = false;
				document.getElementById("unitKerja").disabled = false;
				$("select#unitKerja").html(msg);
			}
			$("div#divLoading").removeClass('show');  
			$('a').off('click.myDisable');			
			$(':button').prop('disabled', false);                                             
		}
	});
};
$(function () {
	$('.select2').select2();
});
$(document).ready(function(){	
	$("#formCariDataDiklatKaryawan").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'ReportKaryawan/listData',
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