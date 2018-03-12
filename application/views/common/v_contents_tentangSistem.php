<div class = "animate-bottom">
	<div class="box">
		<div id='printarea'>		
			<div class="box-header with-border">
			  <h3 class="box-title">Sistem Data Diklat <b>v1.0.0</b></h3>
            </div>
			<div class="box-body pad table-responsive">				
				<p align="center">
					<strong>Fitur:</strong></br>
					- Login & Logout
					- UI Admin
					- Data Karyawan [Import File]
					- Jenis Diklat [Import File, CRUD Manually, Download Template]
					- Data Diklat [Import File (Add Data Karyawan & Add Jenis Diklat Automatically)]
					- Data Diklat Karyawan By Wilayah [Download as PDF & Excel]
					- Data Diklat Karyawan By Unit Kerja [Download as PDF & Excel]
					- Data Diklat Karyawan Subyek [Download as PDF & Excel]
					- Data Diklat Karyawan Nama [Download as PDF & Excel]
					- Data Karyawan Belum Diklat</br>
					- Upload File Surat Perintah Diklat
				</p>
			</div>
		</div>
	</div>
</div>

<script text="text/javascript">    
  var table;
  $(document).ready(function(){	
	$("#result").on("click","#tambahDataKaryawan", function(){
		$("#result").load("DataKaryawan/tambahDataKaryawan");
	});
  
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
            "targets": [ 0, 5 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
    });
  });
</script>