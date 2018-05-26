<div id="<?php echo $form_id[116]; ?>" class = "animate-bottom">
	<div class="box">
		<div class="box-header with-border">
		  <h3 class="box-title"> <?php echo $menu_title[109]; ?> </h3>
		  <a onClick="addDt()" class="btn bg-navy pull-right margin"> <?php echo $form_button[106]; ?> </a>
		</div>
		
		<div class="box-body pad table-responsive">
		 <table id="<?php echo $form_id[172]; ?>" class="table table-hover table-striped dataTable" cellspacing="0" width="100%">
			<thead>
			<tr>
				<th> <?php echo $table_column[100]; ?> </th>
				<th> <?php echo $table_column[115]; ?> </th>
				<th align = "center" class="sorting_disabled"> <?php echo $table_column[114]; ?> </th>
				<th align = "center" class="sorting_disabled"> <?php echo $table_column[101]; ?> </th>
				<th align = "center" class="sorting_disabled"> <?php echo $table_column[101]; ?> </th>
			</tr>
			</thead>
			<tbody>
			</tbody>
		 </table>
	   </div>
	</div>
</div>

<div class="modal fade" id="<?php echo $form_id[171]; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"> Title </h4>
            </div>
			
			<div class="modal-body">
				<form id="<?php echo $form_id[168]; ?>" enctype="multipart/form-data" class="form-horizontal">
					<div class="modal-body form">                
						<input type="hidden" name="<?php echo $form_name[136]; ?>" id="<?php echo $form_id[173]; ?>"/> 	
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[153]; ?> </label>
								<div class="col-md-9">									
									<input name="<?php echo $form_name[137]; ?>" id="<?php echo $form_id[169]; ?>" class="form-control" type="file">
									<span class="help-block"></span>		
									<i><?php echo $form_desc[110]; ?></i>									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[154]; ?> </label>
								<div class="col-md-9">
									<input name="<?php echo $form_name[138]; ?>" id="<?php echo $form_id[170]; ?>" class="form-control" type="text">
									<span class="help-block"></span>
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

<div class="modal fade" id="<?php echo $form_id[184]; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"> Title </h4>
            </div>
			
			<div class="modal-body">
				<form id="<?php echo $form_id[183]; ?>" class="form-horizontal">
					<div class="modal-body form">                
						<input type="hidden" name="<?php echo $form_name[136]; ?>" id="<?php echo $form_id[173]; ?>"/> 	
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3"> <?php echo $form_label[154]; ?> </label>
								<div class="col-md-9">
									<input name="<?php echo $form_name[138]; ?>" id="<?php echo $form_id[170]; ?>" class="form-control" type="text">
									<span class="help-block"></span>
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