<div class = "animate-bottom">
	<form enctype="multipart/form-data" id="<?php echo $namaForm; ?>">
		<div class="box box-primary">
			<div class="box-header with-border">
			  <i class="<?php echo $iconAksi;?>"></i>
			  <h3 class="box-title"><?php echo $aksi; ?></h3>
			</div>
			
			<div class="box-body pad table-responsive">
				<input type="hidden" name="uuidUser" id="uuidUser" value="<?php echo $uuid; ?>">
				<div class="col-md-6">
					<div class="form-group">
					  <label for="loginId">Login ID</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" id="loginId" name="loginId" value="<?php echo $loginId; ?>">
					  <?php }else{ ?>
						<input type="text" class="form-control" id="loginId" name="loginId" value="<?php echo $loginId; ?>" placeholder="Login ID" required>
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="role">Role</label>
					  <select class = "form-control" name="uuidRole">
						  <?php foreach($listRole->result() as $row){ ?>
							<?php if($row->UUID_ROLE==$uuidRole){ ?>
								<option selected value="<?php echo $row->UUID_ROLE; ?>"><?php echo $row->ROLE_NAME; ?></option>
							<?php } else{ ?>
								<option value=<?php echo $row->UUID_ROLE;?>><?php echo $row->ROLE_NAME;?></option>
							<?php } ?>
						  <?php } ?>
					  </select>
					</div>				
					<div class="form-group">
					  <label for="nama">Nama</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
					  <?php }else{ ?>
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Full Name" required>
					  <?php } ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					  <label for="email">Email</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
					  <?php }else{ ?>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="noHp">No HP</label>
					  <?php if($namaForm=="formEdit"){?>
						<input type="number" class="form-control" id="noHp" name="noHp" value="<?php echo $noHp; ?>" required>
					  <?php }else{ ?>
						<input type="number" class="form-control" id="noHp" name="noHp" value="<?php echo $noHp; ?>" placeholder="Contoh: 085xxxxxxxxx" required>
					  <?php } ?>
					</div>
					<div class="form-group">
					  <label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
					</div>
				</div>
			</div>
			
			<div class="box-footer">
				<!--button type="button" id="cancel" class="btn btn-default pull-left">Cancel</button-->
				<a onClick="cancel()" class="btn btn-default pull-left">Cancel</a>
				<button type="submit" class="btn btn-primary pull-right"><?php echo $buttonAksi; ?></button>
			</div>
		</div>
	</form>
</div>
<script text="text/javascript">
$(document).ajaxStart(function () {
	Pace.restart()
});

function cancel(){
  $("#result").load("PengelolaUser/listData");
}
$(document).ready(function(){	
	/*$("#result").on("click","#cancel", function(){
		$("#result").load("PengelolaUser/listData");
	});*/
	
	$("#formTambah").unbind('submit').submit(function(){
		var formData = new FormData($(this)[0]);
		var isValid = $("#formTambah").valid();
		if(isValid){
			if(confirm('Are you sure to add data?')){
				$.ajax({
					url: 'PengelolaUser/simpan',
					type: 'POST',
					data: formData,
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
		}
		return false;
	}); 
	
	var namaForm = "<?php echo $namaForm; ?>";
	if(namaForm=="formTambah"){
		$("#<?php echo $namaForm; ?>").validate({	
			rules: {
				loginId: {
					required: true,
					alphanumericunderscores: true,
					maxlength: 15,
					remote : { url : "PengelolaUser/cekExistingLoginId", type :"post"}
				},
				nama: {
					required: true
				}, 
				email:{
					email: true,
					remote : { url : "PengelolaUser/cekExistingEmail/"+namaForm, type :"post"}
				}, 
				noHp:{
					minlength: 12,
					maxlength: 13,
					number: true
				}, 
				password:{
					minlength: 6,
					maxlength: 12,
					required: true
				}
			},
			messages:{
				loginId : { remote : "Login ID sudah ada." },
				email : { remote : "Email sudah ada." }
			}
		});
	}else{
		$("#<?php echo $namaForm; ?>").validate( {
			rules: {
				loginId: {
					required: true,
					alphanumericunderscores: true,
					maxlength: 15,
					remote : { 
						url : "PengelolaUser/cekExistingLoginId/"+namaForm, type :"post",
						data: {
							uuidUser: function() {
								return $("#uuidUser").val();
							}
						}
					}
				},
				nama: {
					required: true
				}, 
				email:{
					email: true,
					remote : { 
						url : "PengelolaUser/cekExistingEmail/"+namaForm, type :"post",
						data: {
							uuidUser: function() {
								return $("#uuidUser").val();
							}
						}
					}
				}, 
				noHp:{
					minlength: 12,
					maxlength: 13,
					number: true
				}
			},
			messages:{
				loginId : { remote : "Login ID sudah ada." },
				email : { remote : "Email sudah ada." }
			}, 
			submitHandler:function (form){
				if(confirm('Are you sure to update the data?')){
					$.ajax({
						url: 'PengelolaUser/update',
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
  });
</script>