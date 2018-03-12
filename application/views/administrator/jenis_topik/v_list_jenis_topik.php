<div id="result" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header">
			  <i class="fa fa-list"></i>
			  <h3 class="box-title">List</h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>Nama Topik</th>
						<th>Alias</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Jenis Subyek</th>
						<th>Keterangan</th>
						<th align = "center">&nbsp</th>
						<th class="sorting_disabled">&nbsp</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>NO</th>
						<th>Nama Topik</th>
						<th>Alias</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Jenis Subyek</th>
						<th>Keterangan</th>
					</tr>
					</tfoot>
				 </table>
			</div>
		</div>
	</div>
</div>

<script text="text/javascript">    
  var table;
  function edit(uuid){
	$("#result").load("JenisTopik/editJenisTopik/"+uuid);
  }
  function del(uuid){
	if(confirm('Are you sure delete this data?')){
		$("#result").load("JenisTopik/deleteData/"+uuid);
	}
  }
    function tambahData(){
	  $("#result").load("JenisSubyek/tambahJenisSubyek");
  }
  $(document).ready(function(){  
	//datatables
    table = $('#table').DataTable({ 		
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		"iDisplayLength": 10,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo 'JenisTopik/ajax_list'?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0, 3, 4, 6, 7, 8], //first column / numbering column
            "orderable": false, //set not orderable
        },
		{ 
            "targets": [ 3, 4 ], 
            "className": "text-center",
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