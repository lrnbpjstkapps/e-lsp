</head>
<?php 
if($this->session->userdata('sdd_roleId')=='SAD'){
	$bodyClass = "sidebar-mini skin-blue sidebar-collapse";
}else if($this->session->userdata('sdd_roleId')=='ADM'){
	$bodyClass = "sidebar-mini skin-green-light";
}else {
	$bodyClass = "sidebar-mini skin-green-light";
}
?>
<body class="<?php echo $bodyClass; ?>">
<div id="divLoading"></div>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="Home" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-lg"><font face="Segoe UI Semibold">Sistem Data Diklat</font></span>
	  <span class="logo-mini"><img src="assets/dist/img/logosdd3.png" class="logo" style ="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 5px;"></span>
	  <!-- logo for regular state and mobile devices -->
	  
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>	
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('sdd_nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('sdd_nama'); ?>
                  <small><?php echo $this->session->userdata('sdd_role'); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="javascript:void(0)" class="btn btn-default btn-flat" onclick="edit_person()"><i class="fa fa-pencil-square-o"></i> Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="Login/doLogout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
            </ul>
          </div>
	</nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
		  <ul class="sidebar-menu" data-widget="tree">
			<li class="header">Application Manager</li>
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD'){ ?>
			<?php if($segment=="PengelolaUser"){?>
				<li class="active"><a href="PengelolaUser" id="linkPengelolaUser"><i class="fa fa-user"></i> <span>Pengelola User</span></a></li>
			<?php }else{?>
				<li><a href="PengelolaUser" id="linkPengelolaUser"><i class="fa fa-user"></i> <span>Pengelola User</span></a></li>
			<?php };?>
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			<?php if($segment=="DataKaryawan"){?>
				<li class="active"><a href="DataKaryawan" id="linkDataKaryawan"><i class="fa fa-user-circle-o"></i> <span>Data Karyawan</span></a></li>
			<?php }else{?>
				<li><a href="DataKaryawan" id="linkDataKaryawan"><i class="fa fa-user-circle-o"></i> <span>Data Karyawan</span></a></li>
			<?php };?>
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			<?php if($segment=="JenisDiklat"){?>
				<li class="active"><a href="JenisDiklat" id="linkJenisDiklat"><i class="fa fa-circle text-yellow"></i> <span>Jenis Diklat</span></a></li>
			<?php }else{?>
				<li><a href="JenisDiklat" id="linkJenisDiklat"><i class="fa fa-circle text-yellow"></i> <span>Jenis Diklat</span></a></li>
			<?php };?>		
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			<?php if($segment=="JenisSubyek"){?>
				<li class="active"><a href="JenisSubyek" id="linkJenisSubyek"><i class="fa fa-circle text-green"></i> <span>Jenis Subyek</span></a></li>
			<?php }else{?>
				<li><a href="JenisSubyek" id="linkJenisSubyek"><i class="fa fa-circle text-green"></i> <span>Jenis Subyek</span></a></li>
			<?php };?>		
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			<?php if($segment=="JenisTopik"){?>
				<li class="active"><a href="JenisTopik" id="linkJenisTopik"><i class="fa fa-circle text-aqua"></i> <span>Jenis Topik</span></a></li>
			<?php }else{?>
				<li><a href="JenisTopik" id="linkJenisTopik"><i class="fa fa-circle text-aqua"></i> <span>Jenis Topik</span></a></li>
			<?php };?>		
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			<?php if($segment=="DataDiklat"){?>
				<li class="active"><a href="DataDiklat" id="linkDataDiklat"><i class="fa fa-database"></i> <span>Data Diklat</span></a></li>
			<?php }else{?>
				<li><a href="DataDiklat" id="linkDataDiklat"><i class="fa fa-database"></i> <span>Data Diklat</span></a></li>
			<?php };?>		
		<?php } ?>
		
		<?php if($this->session->userdata('sdd_roleId')=='SAD' || $this->session->userdata('sdd_roleId')=='ADM'){ ?>
			</ul>
		<?php } ?>
	  
	  <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Sistem Data Diklat</li>
		<?php if($segment=="DataDiklatKaryawanByName" || 
			$segment=="DataDiklatKaryawanByWilayah" ||
			$segment=="DataDiklatKaryawanByUnitKerja" ||
			$segment=="DataDiklatKaryawanByTopik" ||
			$segment=="DataDiklatKaryawanByWaktu" ||
			$segment=="DataDiklatKaryawanBySubyek"){?>
			<li class="treeview active">
		<?php }else{ ?>
			<li class="treeview">
		<?php }; ?>
          <a href="#">
            <i class="fa fa-search"></i> <span>Data Diklat Karyawan</span> <span class="label label-primary pull-right bg-green">6</span>
            <!--span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span-->
          </a>
          <ul class="treeview-menu">			
			<?php if($segment=="DataDiklatKaryawanByWilayah"){?>
				<li class="active"><a href="DataDiklatKaryawanByWilayah"><i class="fa fa-check"></i> by Wilayah</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanByWilayah"><i class="fa fa-check"></i> by Wilayah</a></li>
			<?php };?>	
			
			<?php if($segment=="DataDiklatKaryawanByUnitKerja"){?>
				<li class="active"><a href="DataDiklatKaryawanByUnitKerja"><i class="fa fa-check"></i> by Unit Kerja</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanByUnitKerja"><i class="fa fa-check"></i> by Unit Kerja</a></li>
			<?php };?>
            
			<?php if($segment=="DataDiklatKaryawanBySubyek"){?>
				<li class="active"><a href="DataDiklatKaryawanBySubyek"><i class="fa fa-check"></i> by Subyek</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanBySubyek"><i class="fa fa-check"></i> by Subyek</a></li>
			<?php };?>	
			
			<?php if($segment=="DataDiklatKaryawanByTopik"){?>
				<li class="active"><a href="DataDiklatKaryawanByTopik"><i class="fa fa-check"></i> by Topik</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanByTopik"><i class="fa fa-check"></i> by Topik</a></li>
			<?php };?>
			
			<?php if($segment=="DataDiklatKaryawanByName"){?>
				<li class="active"><a href="DataDiklatKaryawanByName"><i class="fa fa-check"></i> by Nama</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanByName"><i class="fa fa-check"></i> by Nama</a></li>
			<?php };?>	
			
			<?php if($segment=="DataDiklatKaryawanByWaktu"){?>
				<li class="active"><a href="DataDiklatKaryawanByWaktu"><i class="fa fa-check"></i> by Waktu</a></li>
			<?php }else{?>
				<li><a href="DataDiklatKaryawanByWaktu"><i class="fa fa-check"></i> by Waktu</a></li>
			<?php };?>
          </ul>
        </li>
		<?php if($segment=="ReportKaryawan"){?>
			<li class="active"><a href="ReportKaryawan" id="linkReportKaryawan"><i class="fa fa-file-o"></i> <span>Report Karyawan</span></a></li>
		<?php }else{?>
			<li><a href="ReportKaryawan" id="linkReportKaryawan"><i class="fa fa-file-o"></i> <span>Report Karyawan</span></a></li>
		<?php };?>	
		
		<?php if($segment=="TentangSistem"){?>
			<li class="active"><a href="TentangSistem" id="linkTentangSistem"><i class="fa fa-info"></i> <span>Tentang Sistem</span></a></li>
		<?php }else{?>
			<!--li><a href="TentangSistem" id="linkTentangSistem"><i class="fa fa-bookmark"></i> <span>Tentang Sistem</span></a></li-->
			<li><a href="javascript:void(0)" onclick="tentangSistem()"><i class="fa fa-info"></i><span>Tentang Sistem</span></a></li>
		<?php };?>	
      </ul>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<script type="text/javascript">
function edit_person(){
	$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
}
function tentangSistem(){
	$('#tentangSistem').modal('show'); // show bootstrap modal when complete loaded
}
</script>