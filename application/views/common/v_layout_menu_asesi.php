</head>
   <body class="sidebar-mini skin-black">
		<div id="divLoading"></div>
		<div class="wrapper">
		  <header class="main-header">
			<a href="Home" class="logo">
			  <span class="logo-lg"><font face="Segoe UI Semibold">Asesi</font></span>			  
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
        <li><a href="<?php echo base_url(); ?>asesi/about"><i class="fa fa-folder-open"></i> <span>About</span></a></li>
        <li class="header">Asesmen</li>
		<li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Data Asesmen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?php echo base_url(); ?>asesi/bukti_kelengkapan"><i class="fa fa-folder-open"></i> Bukti Kelengkapan</a></li>
            <li><a href="<?php echo base_url(); ?>asesi/fr_apl_01"><i class="fa fa-folder-open"></i> FR-APL-01</a></li>
			<li><a href="<?php echo base_url(); ?>asesi/fr_apl_02"><i class="fa fa-folder-open"></i> FR-APL-02</a></li>
			<li><a href="<?php echo base_url(); ?>asesi/fr_mak_02"><i class="fa fa-folder-open"></i> FR-MAK-02</a></li>
			<li><a href="<?php echo base_url(); ?>asesi/fr_mak_03"><i class="fa fa-folder-open"></i> FR-MAK-03</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Pengajuan Asesmen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?php echo base_url(); ?>lsp/elemen_kompetensi"><i class="fa fa-folder-open"></i> Notifikasi</a></li>
            <li><a href="<?php echo base_url(); ?>lsp/skema_sertifikasi"><i class="fa fa-folder-open"></i> Daftar Pengajuan</a></li>
			<li><a href="../examples/invoice.html"><i class="fa fa-folder-open"></i> Daftar Konfirmasi</a></li>
          </ul>
        </li>
		<li><a href="<?php echo base_url(); ?>lsp/about"><i class="fa fa-folder-open"></i> <span> Panduan Penggunaan</span></a></li>
      </ul>
			</section>
		  </aside>