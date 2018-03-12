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
					  <label>Jenis Diklat</label>						
						<select class="form-control"name="valJenisDiklat" id="idJenisDiklat" onchange="leaveChange1(this);">					  
						<option> -- Select All --</option>
						<?php foreach($listJenisDiklat->result() as $row){ ?>
							<option value="<?php echo $row->JENIS_DIKLAT; ?>"><?php echo $row->JENIS_DIKLAT; ?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label>Nama Subyek</label>
					  <select class="form-control"name="valSubyek" id="idSubyek" onchange="leaveChange2(this);"> 
						<option> -- Select All --</option>
						<?php $i=0; foreach($listSubyek->result() as $row){ ?>
							<option value="<?php echo $row->NAMA_SUBYEK; ?>"> <?php echo $row->NAMA_SUBYEK; ?></option>
						<?php }; ?>
					  </select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label>Nama Topik</label>
					  <select class="form-control" name="valTopik" id="idTopik"> 
						<?php $i=0; foreach($listTopik->result() as $row){ ?>
							<option value="<?php echo $row->NAMA_TOPIK; ?>"> <?php echo $row->NAMA_TOPIK; ?></option>
						<?php }; ?>
					  </select>
					</div>
				</div>
			</div>
			
			<div class="box-footer text-center">
				<div class="col-md-12">
					<button type="submit" id="btnSearch" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Cari</button>
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

function leaveChange1(control){
	document.getElementById("btnSearch").disabled = true;
	document.getElementById("idSubyek").disabled = true;
	document.getElementById("idTopik").disabled = true;
	
	var e = document.getElementById("idJenisDiklat");
	var valJenisDiklat = e.options[e.selectedIndex].value;
	
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "DataDiklatKaryawanByTopik/getListSubyek",
		beforeSend: function (){
			$("div#divLoading").addClass('show');      
			$('a').on('click.myDisable', function(e) { e.preventDefault(); });
			$(':button').prop('disabled', true);
		},
		data: "valJenisDiklat="+valJenisDiklat,
		success: function(msg){
			if(msg==''){				
				$("select#idSubyek").html("<option> Tidak ada data </option>");
				$("select#idTopik").html("<option> Tidak ada data </option>");
			}else{
				$("select#idSubyek").html(msg);
				
				document.getElementById("btnSearch").disabled = false;
				document.getElementById("idSubyek").disabled = false;
				document.getElementById("idTopik").disabled = false;
				leaveChange2(valJenisDiklat);
			}                      
			$("div#divLoading").removeClass('show');  
			$('a').off('click.myDisable');			
			$(':button').prop('disabled', false);                       
		}
	});
};

function leaveChange2(valJenisDiklat){
	document.getElementById("btnSearch").disabled = true;
	document.getElementById("idTopik").disabled = true;
	
	var e = document.getElementById("idSubyek");
	var valSubyek = e.options[e.selectedIndex].value;
	
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "DataDiklatKaryawanByTopik/getListTopik",
		beforeSend: function (){
			$("div#divLoading").addClass('show');      
			$('a').on('click.myDisable', function(e) { e.preventDefault(); });
			$(':button').prop('disabled', true);
		},
		data: "valSubyek="+valSubyek,
		success: function(msg){
			if(msg==''){				
				$("select#idTopik").html("<option> Tidak ada data </option>");
			}else{
				$("select#idTopik").html(msg);
				
				document.getElementById("btnSearch").disabled = false;
				document.getElementById("idTopik").disabled = false;
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
			url: 'DataDiklatKaryawanByTopik/listData',
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