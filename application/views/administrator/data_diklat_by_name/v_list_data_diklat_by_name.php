<div id="result2" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <i class="fa fa-file-o"></i>
			  <h3 class="box-title">Hasil Pencarian - <?php echo $namaKaryawan; ?></h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			  <?php if($jumlahData>0){ ?>
				  <form action="DataDiklatKaryawanByName/getPdf" type="GET" target="_blank">
					<input type="hidden" name="namaKaryawan" value="<?php echo $namaKaryawan; ?>">
					<button type="submit" class="btn btn-info pull-right margin"><i class="fa fa-file-pdf-o"></i> Download PDF</button>
				  </form>
				  <form action="DataDiklatKaryawanByName/getXlsx" type="GET">
					<input type="hidden" name="namaKaryawan" value="<?php echo $namaKaryawan; ?>">
					<button type="submit" class="btn btn-info pull-right margin"><i class="fa fa-file-excel-o"></i> Download Excel</button>
				  </form>
			  <?php } ?>
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Kantor Wilayah</th>
						<th>Unit Kerja</th>
						<th>Jenis Diklat</th>
						<th>Subyek</th>	
						<th>Topik</th>	
						<th>Tanggal Mulai</th>	
						<th>Tanggal Selesai</th>	
						<th>Golongan</th>
						<th>Nilai</th>	
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>NO</th>
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Kantor Wilayah</th>
						<th>Unit Kerja</th>
						<th>Jenis Diklat</th>
						<th>Subyek</th>
						<th>Topik</th>		
						<th>Tanggal Mulai</th>		
						<th>Tanggal Selesai</th>		
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
  $(document).ready(function(){	  
	//datatables
    table= $('#table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		"iDisplayLength": 10,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo 'DataDiklatKaryawanByName/ajax_list'; ?>",
            "type": "POST",
			"data": {
				"namaKaryawan": '<?php echo str_replace("'", "\'", $namaKaryawan); ?>'
			}
        },

        //Set column definition initialisation properties.
        "columnDefs": [
			{ 
				"targets": [ 0, 1, 2, 3, 4, 10, 11 ], //first column / numbering column
				"orderable": false, //set not orderable
			},
        ],
    });
  });
</script>