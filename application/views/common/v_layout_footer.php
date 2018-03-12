		</div>
	</div>
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 Deputi Direktur Bidang Learning.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->

    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"><i class="fa fa-pencil-square-o"></i> Ubah Password</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="formUbahPassword" name="formUbahPassword" class="form-horizontal">
                    <input type="hidden" value="<?php echo $this->session->userdata('sdd_loginId'); ?>" name="loginId"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Password Lama</label>
                            <div class="col-md-9">
                                <input name="passwordLama" id="passwordLama" placeholder="Password Lama" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password Baru</label>
                            <div class="col-md-9">
                                <input name="passwordBaru" id="passwordBaru" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Konfirmasi Password</label>
                            <div class="col-md-9">
                                <input name="konfirmasiPassword" id="konfirmasiPassword" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>                
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnSave" class="btn btn-warning"><i class="fa  fa-floppy-o"></i> Update</button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa  fa-arrow-left"></i> Cancel</button>
            </div>
			</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade in" id="tentangSistem" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Sistem Data Diklat</h3>
            </div>
            <div class="modal-body form">				
                <p align="center">
					<img src="assets/dist/img/Screenshoot.JPG" class="logo"></br></br>
					<strong>Fitur - fitur Versi <b>1.0.0</b> :</strong></br>
					Data Karyawan |
					Jenis Diklat |
					Jenis Subyek |
					Jenis Topik |
					Data Diklat |
					Data Diklat By Wilayah |
					Data Diklat By Unit Kerja |
					Data Diklat By Subyek |
					Data Diklat By Nama |
					Report Karyawan
				</p>               
            </div>
            <div class="modal-footer">
				<p align="center">
					<strong>Copyright &copy; 2018 Deputi Direktur Bidang Learning.</strong> All rights reserved.
				</p>
			</div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script text="text/javascript">
	jQuery.validator.addMethod("notEqualPassword", function(value, element, param) {
	  return this.optional(element) || value != $(param).val();
	}, "Password baru tidak sama dengan password lama");

	jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
	}, "Masukkan hanya huruf dan angka."); 
	
	jQuery.validator.addMethod("alphanumericunderscores", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9_.]+$/.test(value);
	}, "Masukkan hanya huruf, angka, titik, dan garis bawah .");
	
	$("#formUbahPassword").validate( {
		rules: {
			passwordLama: {
				required: true,
				alphanumeric: true,
				minlength: 8,
				maxlength: 15,
				remote : { 
					url : "Login/cekMatch", 
					type :"post",
					data: {
						loginId: function(){
							return "<?php echo $this->session->userdata('sdd_loginId'); ?>";
						}
					}
				}
			},
			passwordBaru: {
				required: true,
				alphanumeric: true,
				minlength: 8,
				maxlength: 15,
				notEqualPassword: "#passwordLama"
			}, 
			konfirmasiPassword: {
				required: true,
				alphanumeric: true,
				minlength: 8,
				maxlength: 15,
				equalTo : "#passwordBaru"
			}
		},
		messages:{
			passwordLama : { remote : "Password salah." },
			konfirmasiPassword : { equalTo : "Password tidak cocok." }
		}, 
		submitHandler:function (form){
			$.ajax({
				url: 'Login/update',
				type: 'POST',
				data:  new FormData($("#formUbahPassword")[0]),
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data=="true"){
						cheers.success({
							title: 'Sukses',
							message: 'Password telah diubah',
							alert: $('select[name="alert"]').val(),
						});
					}else{
						cheers.warning({
							title: 'Gagal',
							message: 'Update gagal, hubungi system administrator untuk info lebih lanjut.',
							alert: $('select[name="alert"]').val(),
						  });
					}
					$('#modal_form').modal('hide');
				}
			});
			return false;
		}
	});
</script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>
</html>