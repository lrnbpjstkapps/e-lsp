<div id="result" class = "animate-bottom">
	<form enctype="multipart/form-data" id="formCariDataDiklatKaryawan">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="fa fa-search"></i>
			  <h3 class="box-title">Cari</h3>
			</div>
						
			<div class="box-body pad table-responsive">
				<div class="col-md-4">
					<div class="form-group">
					  <label>Kantor Wilayah</label>
					  <select class="form-control"name="wilayah" id="wilayah" onchange="leaveChange1(this);">
						<option> -- Select All -- </option>
						<?php $i=0; foreach($dataWilayah->result() as $row){ ?>
							<option> <?php echo $row->WILAYAH; ?></option>
						<?php }; ?>
					  </select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">					
						<label>Unit Kerja</label>
						<select class="form-control"name="unitKerja" id="unitKerja" onchange="leaveChange2(this);">
							<option> -- Select All -- </option>
							<?php $i=0; foreach($unitKerja->result() as $row){ ?>
								<option> <?php echo $row->UNIT_KERJA; ?></option>
							<?php }; ?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">					
						<label>Nama Karyawan</label>
						<select class="form-control"name="namaKaryawan"id="namaKaryawan">
							<?php $i=0; foreach($namaKaryawan->result() as $row){ ?>
								<option> <?php echo $row->NAMA_PEGAWAI; ?></option>
							<?php }; ?>
						</select>
					</div>
				</div>
			</div>
			
			<div class="box-footer text-center">
				<div class="col-md-12">
					<button type="submit" id="cariDataDiklatKaryawanByName" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Cari</button>
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
	document.getElementById("cariDataDiklatKaryawanByName").disabled = true;
	document.getElementById("unitKerja").disabled = true;
	document.getElementById("namaKaryawan").disabled = true;
	var e = document.getElementById("wilayah");
	var wilayah = e.options[e.selectedIndex].value;
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "DataDiklatKaryawanByName/listDataUnitKerja",
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
				//document.getElementById("cariDataDiklatKaryawanByName").disabled = false;
				//document.getElementById("unitKerja").disabled = false;
				//document.getElementById("namaKaryawan").disabled = false;
				$("select#unitKerja").html(msg);
				leaveChange2(wilayah);
			}                                             
		}
	});
};
function leaveChange2(wilayah){
	document.getElementById("cariDataDiklatKaryawanByName").disabled = true;
	//document.getElementById("unitKerja").disabled = true;
	document.getElementById("namaKaryawan").disabled = true;
	var e = document.getElementById("unitKerja");
	var unitKerja = e.options[e.selectedIndex].value;
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "DataDiklatKaryawanByName/listDataPegawai",
		beforeSend: function (){
			$("div#divLoading").addClass('show');      
			$('a').on('click.myDisable', function(e) { e.preventDefault(); });
			$(':button').prop('disabled', true);
		},
		data: "unitKerja="+unitKerja+"&wilayah="+wilayah,
		success: function(msg){
			if(msg==''){
				document.getElementById("namaKaryawan").disabled = true;
				$("select#namaKaryawan").html("<option> Tidak ada data </option>");
			}else{				
				document.getElementById("cariDataDiklatKaryawanByName").disabled = false;
				document.getElementById("namaKaryawan").disabled = false;
				document.getElementById("unitKerja").disabled = false;
				$("select#namaKaryawan").html(msg);
			}         
			$("div#divLoading").removeClass('show');  
			$('a').off('click.myDisable');			
			$(':button').prop('disabled', false);                                    
		}
	});	
}
$(document).ready(function(){		
	$("#formCariDataDiklatKaryawan").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'DataDiklatKaryawanByName/listData',
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