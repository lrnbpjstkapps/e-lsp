<div id="result" class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header">
			  <i class="fa fa-list"></i>
			  <h3 class="box-title">List</h3>
			  <small class="pull-right">Last Updated <b><?php echo $lastUpdated; ?></b></small>
			  <?php if($this->session->userdata('sdd_roleId')=='SAD'){ ?>
				  <form>
					<a onClick="tambahData()" class="btn btn-primary pull-right margin">Tambah</a>
				  </form>
				  
				  <form action="JenisSubyek/getTemplate" type="GET">
					<button type="submit" class="btn btn-info pull-right margin"><i class="fa  fa-download"></i> Template</button>
				  </form>
			  <?php } ?>
			</div>
			<div class="box-body pad table-responsive">
				<table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>NO</th>
						<th>Nama Subyek</th>
						<th>Jenis Diklat</th>
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
						<th>Nama Subyek</th>
						<th>Jenis Diklat</th>
						<th>Keterangan</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
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
	$("#result").load("JenisSubyek/editJenisSubyek/"+uuid);
  }
  function del(uuid){
	if(confirm('Are you sure delete this data?')){
		$("#result").load("JenisSubyek/deleteData/"+uuid);
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
            "url": "<?php echo 'JenisSubyek/ajax_list'?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0, 3, 4, 5], //first column / numbering column
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