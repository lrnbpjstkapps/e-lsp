<div id="result" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <i class="fa fa-list"></i>
			  <h3 class="box-title">List</h3>
			  <a onClick="tambahData()" class="btn btn-primary pull-right margin">Tambah</a>
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>Login</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>No Hp</th>
						<th>Role</th>
						<th align = "center">&nbsp</th>
						<th class="sorting_disabled">&nbsp</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>NO</th>
						<th>Login</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>No Hp</th>
						<th>Role</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
					</tr>
					</tfoot>
				 </table>
			</div>
		</div>
	</div>
	<script text="text/javascript">    
	  var table;
	  function edit(uuid){
		$("#result").load("PengelolaUser/editData/"+uuid);
	  }
	  function del(uuid){
		if(confirm('Are you sure delete this data?')){
			$("#result").load("PengelolaUser/deleteData/"+uuid);
		}
	  }
	  function tambahData(){
		  $("#result").load("PengelolaUser/tambah");
		}
	  $(document).ready(function(){	
		$("#result").on("click","#tambahUser", function(){
			$("#result").load("PengelolaUser/tambah");
		});
	  
		//datatables
		table = $('#table').DataTable({ 		
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"iDisplayLength": 10,
			"order": [], //Initial no order.

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo 'PengelolaUser/ajax_list'?>",
				"type": "POST"
			},

			//Set column definition initialisation properties.
			"columnDefs": [
			{ 
				"targets": [ 0, 4, 6, 7 ], //first column / numbering column
				"orderable": false, //set not orderable
			},
			],
		});
	  });
	  
	  if("<?php echo $saveResult ?>" == "true"){
			cheers.success({
				title: 'Sukses',
				message: 'Data telah dimasukkan',
				alert: $('select[name="alert"]').val(),
			});
		}else if("<?php echo $updateResult ?>" == "true"){
			cheers.success({
				title: 'Sukses',
				message: 'Data telah diupdate',
				alert: $('select[name="alert"]').val(),
			});
		}else if("<?php echo $deleteResult ?>" == "true"){
			cheers.success({
				title: 'Sukses',
				message: 'Data telah dihapus',
				alert: $('select[name="alert"]').val(),
			});
		}
	</script>
</div>