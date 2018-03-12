<div id="result" class = "animate-bottom">
	<form enctype="multipart/form-data" id="formCariDataDiklatKaryawan">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="fa fa-search"></i>
			  <h3 class="box-title">Cari</h3>
			</div>
			
			
			<div class="box-body pad table-responsive">
				<div class="form-group">
				  <label>Kantor Wilayah</label>
				  <select class="form-control"name="wilayah">
					<?php $i=0; foreach($dataWilayah->result() as $row){ ?>
						<option> <?php echo $row->WILAYAH; ?></option>
					<?php }; ?>
				  </select>
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
$(document).ready(function(){		
	$("#formCariDataDiklatKaryawan").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'DataDiklatKaryawanByWilayah/listDataKaryawan',
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