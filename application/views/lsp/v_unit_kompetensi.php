<div id="<?php echo $form_id[116]; ?>" class = "animate-bottom">
	<div class="box">	
		<div class="box-header with-border">
		  <h3 class="box-title"> <?php echo $menu_title[101]; ?> </h3>
		  <a onClick="addDt()" class="btn bg-navy pull-right margin"> <?php echo $form_button[106]; ?> </a>
		</div>
		
		<div class="box-body pad table-responsive">
		 <table id="<?php echo $form_id[114]; ?>" class="table table-hover table-striped dataTable" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th> <?php echo $table_column[100]; ?> </th>					
					<th> <?php echo $table_column[105]; ?> </th>
					<th> <?php echo $table_column[104]; ?> </th>
					<th> <?php echo $table_column[101]; ?> </th>
					<th> <?php echo $table_column[101]; ?> </th>
					<th> <?php echo $table_column[101]; ?> </th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		 </table>
		</div>
	</div>
</div>

<div class="modal fade" id="<?php echo $form_id[113]; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"> Title </h4>
            </div>
			
			<div class="modal-body">
				<form id="<?php echo $form_id[110]; ?>" class="form-horizontal">
					<div class="modal-body form">                
						<input type="hidden" name="<?php echo $form_name[105]; ?>" id="<?php echo $form_id[115]; ?>"/> 
						<div class="form-body">							
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[112]; ?> </label>
								<div class="col-md-9">
									<input name="<?php echo $form_name[104]; ?>" id="<?php echo $form_id[112]; ?>" class="form-control" type="text">
									<span class="help-block"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[111]; ?> </label>
								<div class="col-md-9">
									<textarea name="<?php echo $form_name[103]; ?>" id="<?php echo $form_id[111]; ?>" class="form-control" rows="2" style="resize:none"></textarea>
									<span class="help-block"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[113]; ?> </label>
								<div class="col-md-9">
								  <select class="form-control select2" multiple = "multiple" style="width: 100%;" name="<?php echo $form_name[106]; ?>" id="<?php echo $form_id[105]; ?>"> 
									<?php foreach($listSkema->result() as $row){ ?>
										<option value = "<?php echo $row->UUID_SKEMA; ?>"><?php echo $row->NOMOR_SKEMA." - ".$row->NAMA_SKEMA; ?></option>
									<?php } ?>						
								  </select>
								</div>
							</div>
						</div>                
					</div>
				</form>	
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn bg-navy" onclick="saveDt()"> <?php echo $form_button[101]; ?> </button>
				<button type="button" class="btn bg-navy" data-dismiss="modal"> <?php echo $form_button[100]; ?> </button>
			</div>					
        </div>
    </div>
</div>

<div class="modal fade" id="<?php echo $form_id[106]; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center"> Title </h4>
			</div>	
			
			<div class="modal-body">				
				<dl class="dl-horizontal">
					<dt> <?php echo $form_label[112]; ?> </dt>
					<dd id="<?php echo $form_id[109]; ?>">Text</dd>
					<dt> <?php echo $form_label[111]; ?> </dt>
					<dd id="<?php echo $form_id[108]; ?>">Text</dd>
				</dl>
			  
				<table id="<?php echo $form_id[107]; ?>" class="table table-hover dataTable" width="100%">
				<thead>
					<tr>
						<th> <?php echo $table_column[100]; ?> </th>
						<th> <?php echo $table_column[103]; ?> </th>
						<th> <?php echo $table_column[102]; ?> </th>
					</tr>
				</thead>
					<tbody>
					</tbody>
				</table>			
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn bg-navy" data-dismiss="modal"> <?php echo $form_button[100]; ?> </button>
			</div>			
		</div>
    </div>
</div>