<div>
      <section class="content"> 
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- DataKaryawan -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $this->Karyawan->count_all()?></h3>
                  <p>Data Karyawan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user-circle-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>DataKaryawan" class="small-box-footer" target="_blank">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- Diklat-->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php $query = $this->db->where('IS_ACTIVE', 1)->get('nilai'); echo $query->num_rows()?></h3>
                  <p>Data Diklat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a href="<?php echo base_url(); ?>DataDiklat" class="small-box-footer" target="_blank">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

			<div class="col-lg-3 col-xs-6">
              <!-- Jenis Diklat-->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php $query = $this->db->where('IS_ACTIVE', 1)->get('jenis_diklat'); echo $query->num_rows()?></h3>
                  <p>Jenis Diklat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-circle"></i>
                </div>
                <a href="<?php echo base_url(); ?>JenisDiklat" class="small-box-footer" target="_blank">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			  </div>
			  <div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $this->db->count_all('user')?></h3>
                  <p>Pengelola User</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user-circle-o"></i></i></span>

            <div class="info-box-content">
              <span class="info-box-text">KARYAWAN TETAP</span>
              <span class="info-box-number"><?php $query = $this->db->where('STATUS_KEPEGAWAIAN', 'Karyawan Tetap')->where('IS_ACTIVE', '1')->get('karyawan'); echo $query->num_rows()?></span>
			</div>
			
            <!-- /.info-box-content -->
          </div>
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-user-circle-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CALON KARYAWAN</span>
              <span class="info-box-number"><?php $query = $this->db->where('STATUS_KEPEGAWAIAN', 'Calon Karyawan')->where('IS_ACTIVE', '1')->get('karyawan'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
		   <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user-circle-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MASA PERSIAPAN PENSIUN</span>
              <span class="info-box-number"><?php $query = $this->db->where('STATUS_KEPEGAWAIAN', 'Masa Persiapan Pensiun')->where('IS_ACTIVE', '1')->get('karyawan'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DIKLAT KARIR MUDA</span>
              <span class="info-box-number"><?php $query = $this->db->where('KARIR_MUDA', '1')->get('nilai_jenis_diklat'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DIKLAT KARIR MADYA</span>
              <span class="info-box-number"><?php $query = $this->db->where('KARIR_MADYA', '1')->get('nilai_jenis_diklat'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
		  <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DIKLAT KARIR UTAMA</span>
              <span class="info-box-number"><?php $query = $this->db->where('KARIR_UTAMA', '1')->get('nilai_jenis_diklat'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
		 
		   <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DIKLAT DPK</span>
              <span class="info-box-number"><?php $query = $this->db->where('DIKLAT_DPK', '1')->get('nilai_jenis_diklat'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
		  
		  <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DIKLAT PENSIUN</span>
              <span class="info-box-number"><?php $query = $this->db->where('DIKLAT_PENSIUN', '1')->get('nilai_jenis_diklat'); echo $query->num_rows()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
		 <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php $query = $this->db->where('IS_ACTIVE', 1)->get('jenis_subyek'); echo $query->num_rows()?></h3>
                  <p>Jenis Subyek</p>
                </div>
                <div class="icon">
                  <i class="fa fa-circle"></i>
                </div>
                <a href="<?php echo base_url(); ?>JenisSubyek" class="small-box-footer" target="_blank">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
			  
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php $query = $this->db->where('IS_ACTIVE', 1)->get('jenis_topik'); echo $query->num_rows()?></h3>
                  <p>Jenis Topik</p>
                </div>
                <div class="icon">
                  <i class="fa fa-circle"></i>
                </div>
                <a href="<?php echo base_url(); ?>JenisTopik" class="small-box-footer" target="_blank">info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->
			
          </div><!-- /.row -->
        </section><!-- /.content -->
   </div><!-- /.content-wrapper -->
   
  
	   