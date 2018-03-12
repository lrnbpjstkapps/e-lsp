<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="formTambahDataKaryawan">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="fa fa-pencil-square-o"></i>
			  <h3 class="box-title">Edit</h3>
			</div>

			<div class="box-body pad table-responsive">
				<div class="form-group">
				  <label for="inputFile">Upload File Data Karyawan</label>
				  <input type="file" id="inputFile" name="userfile" required>
				</div>
			</div>
			
			<div class="box-footer">
				<a onClick="cancel()" class="btn btn-default pull-left"><i class="fa  fa-arrow-left"></i> Cancel</a>
				<button type="submit" id="simpanDataKaryawan" class="btn btn-warning pull-right"><i class="fa fa-floppy-o"></i> Update</button>
			</div>
		</div>
	</form>
</div>
<script text="text/javascript">
$(document).ajaxStart(function () {
	Pace.restart()
});
function cancel(){
  $("#result").load("DataKaryawan/listDataKaryawan");
}
$(document).ready(function(){		
	$("#formTambahDataKaryawan").submit(function(){
		if(confirm('Are you sure to update data karyawan?')){
			$("#loadingScreen").show();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'DataKaryawan/simpanDataKaryawan',
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
			$("#loadingScreen").hide();			
			return false;
		}		
	});
  });
</script>