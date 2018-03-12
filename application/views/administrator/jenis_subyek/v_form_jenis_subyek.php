<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="<?php echo $namaForm; ?>">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="<?php echo $iconAksi;?>"></i>
			  <h3 class="box-title"><?php echo $aksi; ?></h3>
			</div>
			<div class="box-body pad table-responsive">
				<input type="hidden" name="uuidJenisSubyek" id="uuidJenisSubyek" value="<?php echo $uuid; ?>">
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
						  <label for="inputFile">Upload File Data Subyek</label>
						  <input type="file" id="inputFile" name="userFile">
						</div>
					</div>
				<?php }; ?>
				<div id="form2">  
					<div class="form-group">
					  <label for="namaSubyek">Nama Subyek</label>
					  <?php if($namaForm=="formEdit"){?>
						<?php if($this->session->userdata('sdd_roleId')=='SAD'){ ?>
							<input type="text" class="form-control" id="namaSubyek" name="namaSubyek" value="<?php echo $namaSubyek; ?>">
						<?php }else{?>
							<input type="text" class="form-control" id="namaSubyek" name="namaSubyek" value="<?php echo $namaSubyek; ?>" readonly="readonly">
						<?php };?>
					  <?php }else{ ?>
						<input type="text" class="form-control" id="namaSubyek" name="namaSubyek" value="<?php echo $namaSubyek; ?>" placeholder="Nama Subyek">
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label>Jenis Diklat</label>
					  <select class="form-control"name="uuidJenisDiklat">
						<?php foreach($listJenisDiklat->result() as $row){ ?>
							<?php if($uuidJenisDiklat==$row->UUID_JENIS_DIKLAT){ ?>
								<option selected value = "<?php echo $row->UUID_JENIS_DIKLAT; ?>"><?php echo $row->JENIS_DIKLAT; ?></option>
							<?php }else{ ?>
								<option value = "<?php echo $row->UUID_JENIS_DIKLAT; ?>"><?php echo $row->JENIS_DIKLAT; ?></option>
							<?php }} ?>						
					  </select>
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
	$("#form1").hide();
	document.getElementById('namaSubyek').setAttribute('required','required');
	document.getElementById('keterangan').setAttribute('required','required');
	function cancel(){
		$("#result").load("JenisSubyek/listData");
	}
   
	function doSomething(checkboxElem) {
	  if (checkboxElem.checked) {		
		$("#form2").hide();		
		document.getElementById('namaSubyek').required = false;
		document.getElementById('keterangan').required = false;
		document.getElementById('inputFile').setAttribute('required','required');
		$("#form1").show();
	  } else {
		$("#form1").hide();		
		document.getElementById('namaSubyek').setAttribute('required','required');
		document.getElementById('keterangan').setAttribute('required','required');
		document.getElementById('inputFile').required = false;	
		$("#form2").show();
	  }
	}
	
	var namaForm = "<?php echo $namaForm; ?>";
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
				namaSubyek: {
					required: true,
					remote : { 
						url : "JenisSubyek/cekExistingNamaSubyek/"+namaForm, type :"post",
						data: {
							uuidJenisSubyek: function() {
								return $("#uuidJenisSubyek").val();
							}
						}
					}
				}
			},
			messages:{
				namaSubyek : { remote : "Nama Subyek sudah ada." }
			}, 
			submitHandler:function (form){
				if(confirm('Are you sure to update the data?')){
					$.ajax({
						url: 'JenisSubyek/update',
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