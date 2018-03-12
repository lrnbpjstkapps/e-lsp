<div id="result" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <i class="fa fa-list"></i>
			  <h3 class="box-title">List</h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			  <form>
				<a onClick="tambahData()" class="btn btn-warning pull-right margin"><i class="fa  fa-edit"></i> Edit</a>
			  </form>
			  <form action="DataKaryawan/getTemplate" type="GET">
				<button type="submit" class="btn btn-success pull-right margin"><i class="fa  fa-download"></i> Template</button>
			  </form>
			</div>		

			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Unit Kerja</th>
						<th>Wilayah</th>
						<th>Grade</th>
						<th>Golongan</th>
						<th>Status Kepegawaian</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>NO</th>
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Unit Kerja</th>
						<th>Wilayah</th>
						<th>Grade</th>
						<th>Golongan</th>
						<th>Status Kepegawaian</th>
					</tr>
					</tfoot>
				 </table>
			</div>
		</div>
	</div>
</div>

<script text="text/javascript">    
  var table;
  function tambahData(){
	  $("#result").load("DataKaryawan/tambahDataKaryawan");
  }
  $(document).ready(function(){	
	/*$("#result").on("click","#tambahDataKaryawan", function(){
		$("#result").load("DataKaryawan/tambahDataKaryawan");
	});*/
  
	//datatables
    table = $('#table').DataTable({ 		
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		"iDisplayLength": 10,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo 'DataKaryawan/ajax_list'?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0, 5, 6 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
    });
  });
	if("<?php echo $saveResult ?>" == "true"){
		cheers.success({
			title: 'Sukses',
			message: 'Data karyawan telah diperbarui',
			alert: $('select[name="alert"]').val(),
		});
	}
</script>