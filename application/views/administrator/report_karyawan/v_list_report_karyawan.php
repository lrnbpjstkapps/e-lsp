<div id="result2" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <i class="fa fa-file-o"></i>
			  <h3 class="box-title">Hasil Pencarian - 
			  <?php 
				if( $this->input->post("unitKerja")!="-- Select All --"){ 
					echo $unitKerja; 
				}else{
					echo $wilayah; 
				}
			  ?>
			  </h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			  <!--?php if($jumlahData>0){ ?-->
				  <form action="ReportKaryawan/getPdf" type="GET" target="_blank">
					<input type="hidden" name="wilayah" value="<?php echo $wilayah; ?>">
					<input type="hidden" name="unitKerja" value="<?php echo $unitKerja; ?>">
					<button type="submit" class="btn btn-info pull-right margin"><i class="fa  fa-file-pdf-o"></i> Download PDF</button>
				  </form>
				  <form action="ReportKaryawan/getXlsx" type="GET">
					<input type="hidden" name="wilayah" value="<?php echo $wilayah; ?>">
					<input type="hidden" name="unitKerja" value="<?php echo $unitKerja; ?>">
					<button type="submit" class="btn btn-info pull-right margin"><i class="fa fa-file-excel-o"></i> Download Excel</button>
				  </form>
			  <!--?php } ?-->
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>No</th>						
						<th>Kantor Wilayah</th>			
						<th>Unit Kerja</th>						
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Grade</th>
						<th>Golongan</th>
						<th>Status Kepegawaian</th>
						<th>Diklat Karir Utama</th>	
						<th>Diklat Karir Madya</th>	
						<th>Diklat Karir Muda</th>		
						<th>Diklat DPK</th>	
						<th>Diklat Pensiun</th>							
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
					<tr>
						<th>No</th>						
						<th>Kantor Wilayah</th>			
						<th>Unit Kerja</th>						
						<th>NPP</th>
						<th>Nama Pegawai</th>
						<th>Grade</th>
						<th>Golongan</th>
						<th>Status Kepegawaian</th>
						<th>Diklat Karir Utama</th>	
						<th>Diklat Karir Madya</th>	
						<th>Diklat Karir Muda</th>		
						<th>Diklat DPK</th>	
						<th>Diklat Pensiun</th>								
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
            "url": "<?php echo 'ReportKaryawan/ajax_list'; ?>",
            "type": "POST",
			"data": {
				"wilayah": '<?php echo $wilayah; ?>',
				"unitKerja": '<?php echo $unitKerja; ?>'
			}
        },

        //Set column definition initialisation properties.
        "columnDefs": [
			{ 
				"targets": [ 0, 1, 5, 6], //first column / numbering column
				"orderable": false, //set not orderable
			},
			{ 
				"targets": [ 0, 1, 3, 5, 6, 8, 9, 10, 11, 12], 
				"className": "text-center",
			},
        ],
    });
  });
</script>