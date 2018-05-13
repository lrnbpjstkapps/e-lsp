</head>
   <body class="sidebar-mini skin-black">
		<div id="divLoading"></div>
		<div class="wrapper">
		  <header class="main-header">
			<a href="Home" class="logo">
			  <span class="logo-lg"><font face="Segoe UI Semibold">Admin LSP</font></span>			  
			</a>
			
			<nav class="navbar navbar-static-top">
			  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			  </a>	
				  <div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="hidden-xs"><?php echo $this->session->userdata('sdd_nama'); ?></span>
							</a>
							<ul class="dropdown-menu">
								  <li class="user-header">
									<p>
									  <?php echo "NAMA"; ?>
									  <small><?php echo "ROLE"; ?></small>
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

		  <aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Application Manager</li>
        <li><a href="<?php echo base_url(); ?>lsp/about"><i class="fa fa-folder-open"></i> <span>About</span></a></li>
        <li class="header">Asesmen</li>
        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>lsp/skema_sertifikasi"><i class="fa fa-folder-open"></i> Skema Sertifikasi</a></li>
            <li><a href="<?php echo base_url(); ?>lsp/unit_kompetensi"><i class="fa fa-folder-open"></i> Unit Kompetensi</a></li>
            <li><a href="<?php echo base_url(); ?>lsp/elemen_kompetensi"><i class="fa fa-folder-open"></i> Elemen Kompetensi</a></li>
            <li><a href="<?php echo base_url(); ?>lsp/kriteria_unjuk_kerja"><i class="fa fa-folder-open"></i> Kriteria Unjuk Kerja</a></li>
          </ul>
        </li>
		        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Monitoring</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-folder-open"></i> Persetujuan</a></li>
          </ul>
        </li>
      </ul>
			</section>
		  </aside>