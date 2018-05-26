<div class = "animate-bottom">
	<div class="box">
		<div class="box-header with-border">
		  <h3 class="box-title"> <?php echo $menu_title[102]; ?> </h3> 
			<form id="<?php echo $form_id[118]; ?>" class="form-horizontal">
				<div class="modal-body form">                 
					<div class="form-body">	
						<div class="form-group">
							<label class="control-label col-md-2"> <?php echo $form_label[115]; ?> </label>
							<div class="col-md-6">
							  <select class="form-control select2" style="width: 100%;" name="<?php echo $form_name[105]; ?>" id="<?php echo $form_id[115]; ?>"> 
								<?php foreach($listUK->result() as $row){ ?>
									<option value = "<?php echo $row->UUID_UK; ?>"><?php echo $row->KODE_UK." - ".$row->JUDUL_UK; ?></option>
								<?php } ?>						
							  </select>
							</div>
						</div>
					</div>                
				</div>
			</form>	
			<button type="button" class="btn bg-navy pull-right" onclick="findDt()"> <?php echo $form_button[104]; ?> </button>
		</div>
	</div>	
</div>

<div id="<?php echo $form_id[116]; ?>">
	
</div>

