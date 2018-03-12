<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="<?php echo $namaForm; ?>">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="<?php echo $iconAksi;?>"></i>
			  <h3 class="box-title"><?php echo $aksi; ?></h3>
			</div>
			<div class="box-body pad table-responsive">
				<input type="hidden" name="uuidJenisDiklat" id="uuidJenisDiklat" value="<?php echo $uuid; ?>">
				<?php if($namaForm=="formTambah"){ ?>
					<div class="form-group">
					  <div class="checkbox">
						<label>
						  <input type="checkbox" id="mode" name="mode" onchange="doSomething(this)">
						  Upload
						</label>
					  </div>
					</div>
					<div id="form1">
						<div class="form-group">
						  <label for="inputFile">Upload File Data Jenis Diklat</label>
						  <input type="file" id="inputFile" name="userFile">
						</div>
					</div>
				<?php }; ?>
				<div id="form2">  
					<div class="form-group">
					  <label for="namaSubyek">ID Jenis Diklat</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" id="idJenisDiklat" name="idJenisDiklat" value="<?php echo $idJenisDiklat; ?>">
					  <?php }else{ ?>
						<input type="text" class="form-control" id="idJenisDiklat" name="idJenisDiklat" value="<?php echo $idJenisDiklat; ?>" placeholder="ID Jenis Diklat">
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="namaSubyek">Nama Diklat</label>
					  <?php if($namaForm=="formEdit"){?>
						<?php if($this->session->userdata('sdd_roleId')=='SAD'){ ?>
							<input type="text" class="form-control" id="jenisDiklat" name="jenisDiklat" value="<?php echo $jenisDiklat; ?>">
						<?php }else{?>
							<input type="text" class="form-control" id="jenisDiklat" name="jenisDiklat" value="<?php echo $jenisDiklat; ?>" readonly="readonly">
						<?php };?>
					  <?php }else{ ?>
						<input type="text" class="form-control" id="jenisDiklat" name="jenisDiklat" value="<?php echo $jenisDiklat; ?>" placeholder="Nama Diklat">
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="keterangan">Keterangan</label>
					  <?php if($namaForm=="formEdit"){?>
						<textarea class="form-control" id="keterangan" name="keterangan"><?php echo $keterangan; ?></textarea>
					  <?php }else{ ?>
						<textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" maxlength="255"><?php echo $keterangan; ?></textarea>
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
$(document).ajaxStart(function () {
	Pace.restart()
});

	$("#form1").hide();
	document.getElementById('idJenisDiklat').setAttribute('required','required');
	document.getElementById('jenisDiklat').setAttribute('required','required');
	document.getElementById('keterangan').setAttribute('required','required');
	  
	function cancel(){
		$("#result").load("JenisDiklat/listJenisDiklat");
	}
  
	function doSomething(checkboxElem) {
	  if (checkboxElem.checked) {
		$("#form2").hide();
		$("#form1").show();
		document.getElementById('idJenisDiklat').required = false;
		document.getElementById('jenisDiklat').required = false;
		document.getElementById('keterangan').required = false;
		document.getElementById('inputFile').setAttribute('required','required');
	  } else {
		$("#form1").hide();
		$("#form2").show();
		document.getElementById('idJenisDiklat').setAttribute('required','required');
		document.getElementById('jenisDiklat').setAttribute('required','required');
		document.getElementById('keterangan').setAttribute('required','required');
		document.getElementById('inputFile').required = false;	
	  }
	}
	
	var namaForm = "<?php echo $namaForm; ?>";
	if(namaForm=="formTambah"&&document.getElementById('mode').checked){
		$("#<?php echo $namaForm; ?>").validate({	
			submitHandler: function(form){
				$.ajax({
					url: 'JenisDiklat/simpanJenisDiklat',
					type: 'POST',
					data: new FormData($("#formTambah")[0]),
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
				return false;
			}
		});
	}else if(namaForm=="formTambah"&&!document.getElementById('mode').checked){
		$("#<?php echo $namaForm; ?>").validate({	
			rules: {
				idJenisDiklat: {
					required: true,
					alphanumeric: true,
					maxlength: 15,
					remote : { 
						url : "JenisDiklat/cekExistingIdJenisDiklat/"+namaForm, type :"post"
					}
				}
			},
			messages:{
				idJenisDiklat : { remote : "ID Jenis Diklat sudah ada." }
			},
			submitHandler: function(form){
				$.ajax({
					url: 'JenisDiklat/simpanJenisDiklat',
					type: 'POST',
					data: new FormData($("#formTambah")[0]),
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
				return false;
			}
		});
	}else{
		$("#<?php echo $namaForm; ?>").validate({
			rules: {
				idJenisDiklat: {
					required: true,
					alphanumeric: true,
					maxlength: 15,
					remote : { 
						url : "JenisDiklat/cekExistingIdJenisDiklat", 
						type:"post", 
						data: {
							uuidJenisDiklat: function() {
								return $("#uuidJenisDiklat").val();
							}
						}
					}
				}
			},
			messages:{
				idJenisDiklat : { remote : "ID Jenis Diklat sudah ada." }
			}, 
			submitHandler:function (form){
				if(confirm('Are you sure to update the data?')){
					$.ajax({
						url: 'JenisDiklat/update',
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