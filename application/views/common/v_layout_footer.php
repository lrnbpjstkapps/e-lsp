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
  <div class="control-sidebar-bg"></div>
</div>

		<div class="modal fade in" id="tentangSistem" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title">Sistem Data Diklat</h3>
					</div>
					<div class="modal-body form">				
						<p align="center">
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
				</div>
			</div>
		</div>		
		<script text="text/javascript">
			$('.select2').select2();
			
			jQuery.validator.addMethod("notEqualPassword", function(value, element, param) {
			  return this.optional(element) || value != $(param).val();
			}, "Password baru tidak sama dengan password lama");

			jQuery.validator.addMethod("alphanumeric", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
			}, "Masukkan hanya huruf dan angka."); 
			
			jQuery.validator.addMethod("alphanumericunderscores", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9_.]+$/.test(value);
			}, "Masukkan hanya huruf, angka, titik, dan garis bawah .");
			
			$.validator.addMethod('filesize', function (value, element, param) {
				return this.optional(element) || (element.files[0].size <= param)
			}, 'Ukuran file melebihi batas.');
		</script>
	</body>
</html>