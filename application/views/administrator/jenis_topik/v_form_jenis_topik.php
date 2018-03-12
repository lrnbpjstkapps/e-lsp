<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="<?php echo $namaForm; ?>">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="<?php echo $iconAksi;?>"></i>
			  <h3 class="box-title"><?php echo $aksi; ?></h3>
			</div>
			<div class="box-body pad table-responsive">
				<input type="hidden" name="uuidJenisTopik" id="uuidJenisTopik" value="<?php echo $uuid; ?>">  
				<div class="col-md-6">
					<div class="form-group">
					  <label for="namaTopik">Nama Topik</label>
					  <?php if($namaForm=="formEdit"){?>
						<?php if($this->session->userdata('sdd_roleId')=='SAD'){ ?>
							<input type="text" class="form-control" id="namaTopik" name="namaTopik" value="<?php echo $namaTopik; ?>">
						<?php }else{?>
							<input type="text" class="form-control" id="namaTopik" name="namaTopik" value="<?php echo $namaTopik; ?>" readonly="readonly">
						<?php };?>
					  <?php }else{ ?>
						<input type="text" class="form-control" id="namaTopik" name="namaTopik" value="<?php echo $namaTopik; ?>" placeholder="Nama Topik">
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="alias">Alias</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" id="alias" name="alias" value="<?php echo $alias; ?>">
					  <?php }else{ ?>
						<input type="text" class="form-control" id="alias" name="alias" value="<?php echo $alias; ?>" placeholder="Alias">
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label>Jenis Subyek</label>
					  <select class="form-control" name="uuidJenisSubyek" id="uuidJenisSubyek">
						<?php foreach($listJenisSubyek->result() as $row){ ?>
							<?php if($uuidJenisSubyek==$row->UUID_JENIS_SUBYEK){ ?>
								<option selected value = "<?php echo $row->UUID_JENIS_SUBYEK; ?>"><?php echo $row->NAMA_SUBYEK; ?></option>
							<?php }else{ ?>
								<option value = "<?php echo $row->UUID_JENIS_SUBYEK; ?>"><?php echo $row->NAMA_SUBYEK; ?></option>
							<?php }} ?>						
					  </select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					 <label for="alias">Tanggal Mulai</label>
					 <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" name="tanggalMulai" id="tanggalMulai" data-date-format='yyyy-mm-dd' value="<?php echo $tanggalMulai; ?>">
					 <?php }else{ ?>
						<input type="text" class="form-control" name="tanggalMulai" id="tanggalMulai" data-date-format='yyyy-mm-dd'>
					 <?php } ?>
					</div>
					<div class="form-group">
					 <label for="alias">Tanggal Selesai</label>
					   <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" name="tanggalSelesai" id="tanggalSelesai" data-date-format='yyyy-mm-dd' value="<?php echo $tanggalSelesai; ?>">
					 <?php }else{ ?>
						<input type="text" class="form-control" name="tanggalSelesai" id="tanggalSelesai" data-date-format='yyyy-mm-dd'>
					 <?php } ?>
					</div>
					<div class="form-group">
					  <label for="keterangan">Keterangan</label>
					  <?php if($namaForm=="formEdit"){?>
						<textarea class="form-control" id="keterangan" name="keterangan" ><?php echo $keterangan; ?></textarea>
					  <?php }else{ ?>
						<textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
					  <?php } ?>
					</div>
				</div>
			</div>
			
			<div class="box-footer">
				<a onClick="cancel()" class="btn btn-default pull-left"><i class="fa  fa-arrow-left"></i> Cancel</a>
				<?php if($buttonAksi=="Tambah"){ ?>
					<button type="submit" id="<?php echo $buttonId; ?>" class="btn btn-primary pull-right"><i class="fa  fa-floppy-o"></i> <?php echo $buttonAksi; ?></button>
				<?php }else{ ?>
					<button type="submit" id="<?php echo $buttonId; ?>" class="btn btn-warning pull-right"><i class="fa  fa-floppy-o"></i> <?php echo $buttonAksi; ?></button>
				<?php } ?>
			</div>
		</div>
	</form>
</div>
<script text="text/javascript">
	function cancel(){
		$("#result").load("JenisTopik/listData");
	}
	
    $('#tanggalMulai').datepicker({
		autoclose: true,
		altField:"#tanggalMulai",
		onSelect: function () {
			document.getElementById('#tanggalMulai').value(this.value);
		}
    }).on('change', function() {
        $(this).valid();  
		$('#uuidJenisSubyek').valid();  
		$('#namaTopik').valid(); 
    });
	
	$('#tanggalSelesai').datepicker({
		autoclose: true,
		altField:"#tanggalSelesai",
		onSelect: function () {
			document.getElementById('#tanggalSelesai').value(this.value);
		}
    });
	
	$('#uuidJenisSubyek').change(function(){
		$('#tanggalMulai').valid();  
		$('#namaTopik').valid(); 
	});
	
	$('#namaTopik').change(function(){
		$('#tanggalMulai').valid();  
		$('#uuidJenisSubyek').valid(); 
	});
	
	var namaForm = "<?php echo $namaForm; ?>";
	var isSuccess = false;
	jQuery.validator.addMethod("custom1", function(value, element) {
        $.ajax({
			url: "JenisTopik/cekExistingNamaTopik/"+namaForm,
			type: 'POST',
			async: false,
			data: {
				namaTopik: function() {
					return $("#namaTopik").val();
				},
				uuidJenisTopik: function() {
					return $("#uuidJenisTopik").val();
				},
				uuidJenisSubyek: function() {
					return $("#uuidJenisSubyek").val();
				},
				tanggalMulai: function() {
					return $("#tanggalMulai").val();
				}
			},
			success: function(msg) {
				isSuccess = msg === "true" ? true : false;
			}
		});
		return isSuccess;
	}, "Kombinasi topik, subyek, dan tanggal mulai sudah ada."); 
	
	if(namaForm=="formTambah"){
		$("#<?php echo $namaForm; ?>").validate({
			rules: {
				namaSubyek: {
					required: true,
					remote : { url : "JenisSubyek/cekExistingNamaSubyek/"+namaForm, type :"post"}
				}
			},
			messages:{
				namaSubyek : { remote : "Nama subyek sudah ada." }
			},	
			submitHandler: function(form){			
				$.ajax({
					url: 'JenisSubyek/simpan',
					type: 'POST',
					data: new FormData($("#formTambah")[0]),
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function (){
						$("div#divLoading").addClass('show');      
						$('a').on('click.myDisable', function(e) { e.preventDefault(); });
						$(':button').prop('disabled', true);
					},
					success: function(data){
						$("#result").html(data);
						$("div#divLoading").removeClass('show');  
						$('a').off('click.myDisable');			
						$(':button').prop('disabled', false);
					}
				});	
				return false;
			}
		});
	}else{
		$("#<?php echo $namaForm; ?>").validate({
			rules: {
				/*namaTopik: {
					required: true,
					remote : { 
						url : "JenisTopik/cekExistingNamaTopik/"+namaForm, type :"post",
						data: {
							uuidJenisSubyek: function() {
								return $("#uuidJenisSubyek").val();
							},
							uuidJenisTopik: function() {
								return $("#uuidJenisTopik").val();
							},
							tanggalMulai: function() {
								return $("#tanggalMulai").val();
							}
						}
					}
				}, 
				uuidJenisSubyek: {
					required: true,
					remote : { 
						url : "JenisTopik/cekExistingNamaTopik/"+namaForm, type :"post",
						data: {
							namaTopik: function() {
								return $("#namaTopik").val();
							},
							uuidJenisTopik: function() {
								return $("#uuidJenisTopik").val();
							},
							tanggalMulai: function() {
								return $("#tanggalMulai").val();
							}
						}
					}
				},
				tanggalMulai: {
					required: true,
					remote : { 
						url : "JenisTopik/cekExistingNamaTopik/"+namaForm, type :"post",
						data: {
							uuidJenisSubyek: function() {
								return $("#uuidJenisSubyek").val();
							},
							uuidJenisTopik: function() {
								return $("#uuidJenisTopik").val();
							},
							namaTopik: function() {
								return $("#namaTopik").val();
							}
						}
					}
				}*/
				namaTopik: {custom1: true},
				uuidJenisSubyek: {custom1: true},
				tanggalMulai: {custom1: true}
			},
			messages:{
				namaTopik : { remote : "Kombinasi topik, subyek, dan tanggal mulai sudah ada." },
				uuidJenisSubyek : { remote : "Kombinasi topik, subyek, dan tanggal mulai sudah ada." },
				tanggalMulai : { remote : "Kombinasi topik, subyek, dan tanggal mulai sudah ada." }
			}, 
			submitHandler:function (form){
				if(confirm('Are you sure to update the data?')){
					$.ajax({
						url: 'JenisTopik/update',
						type: 'POST',
						data:  new FormData($("#formEdit")[0]),
						beforeSend: function (){
							$("div#divLoading").addClass('show');      
							$('a').on('click.myDisable', function(e) { e.preventDefault(); });
							$(':button').prop('disabled', true);
						},
						cache: false,
						contentType: false,
						processData: false,
						success: function(data){
							$("#result").html(data);
							$("div#divLoading").removeClass('show');  
							$('a').off('click.myDisable');			
							$(':button').prop('disabled', false);
						}
					});
				}
				return false;
			}
		});
	}
</script>