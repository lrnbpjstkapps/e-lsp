<div id="result" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <i class="fa fa-list"></i>
			  <h3 class="box-title">List</h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			  <form>
				<a onClick="tambahData()" class="btn btn-info pull-right margin"><i class="fa fa-plus"></i> Tambah</a>
			  </form>
			  <form action="DataDiklat/getTemplate" type="GET">
				<button type="submit" class="btn btn-success pull-right margin"><i class="fa fa-download"></i> Template</button>
			  </form>
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>Tanggal Mulai</th>		
						<th>Tanggal Selesai</th>	
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Wilayah</th>
						<th>Unit Kerja</th>
						<th>Jenis Diklat</th>
						<th>Subyek</th>
						<th>Topik</th>		
						<th>Golongan</th>
						<th>Nilai</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>NO</th>
						<th>Tanggal Mulai</th>		
						<th>Tanggal Selesai</th>	
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Wilayah</th>
						<th>Unit Kerja</th>
						<th>Jenis Diklat</th>
						<th>Subyek</th>
						<th>Topik</th>						
						<th>Golongan</th>
						<th>Nilai</th>
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
	  $("#result").load("DataDiklat/tambahDataDiklat");
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
            "url": "<?php echo 'DataDiklat/ajax_list'?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0, 10, 11 ], //first column / numbering column
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