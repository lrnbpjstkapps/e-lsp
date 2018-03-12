<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="formTambahDataDiklat">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="fa fa-plus"></i>
			  <h3 class="box-title">Tambah</h3>
			</div>

			<div class="box-body pad table-responsive">
				<div class="form-group">
				  <label for="inputFile">Upload File Data Diklat</label>
				  <input type="file" id="inputFile" name="userfile" required>
				</div>				
			</div>
						
			<div class="box-footer">
				<a onClick="cancel()" class="btn btn-default pull-left"><i class="fa  fa-arrow-left"></i> Cancel</a>
				<button type="submit" id="simpanDataDiklat" class="btn btn-primary pull-right"><i class="fa  fa-floppy-o"></i> Simpan</button>
			</div>
		</div>
	</form>

<script text="text/javascript">
$(document).ajaxStart(function () {
	Pace.restart()
});

	  function cancel(){
		  $("#result").load("DataDiklat/listDataDiklat");
	  }
$(document).ready(function(){		
	$("#formTambahDataDiklat").submit(function(){
		if(confirm('Are you sure to add data?')){
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'DataDiklat/simpanDataDiklat',
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
					$("#result").html(data);
					$("div#divLoading").removeClass('show');  
					$('a').off('click.myDisable');			
					$(':button').prop('disabled', false);
				}
			});
		}
		return false;
	});
  });
</script>