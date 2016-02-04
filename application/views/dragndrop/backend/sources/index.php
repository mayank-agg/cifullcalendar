 	<div id="page-wrapper">
		
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><i class="fa fa-link fa-fw"></i> <?php echo lang('sources_all_heading'); ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
			
			
            <div class="row">
                <div class="col-md-12 col-lg-12"> 
						
						<!-- table --> 
						<div class="table-responsive">
							<div id="toolbar"> 
								<button class="btn btn-primary" data-title="Add" data-toggle="modal" data-target="#add" data-placement="top" ><i class="fa fa-pencil-square-o"></i> <?php echo lang('sources_add_new'); ?></button>  
							</div>							
							<table class="sources_dataTable" id="sources_dataTable" data-toolbar="#toolbar" data-locale="<?php echo $lang ?>" >
								<thead>
									<tr> 
										<th data-field="source_name" data-align="right" data-sortable="true"><?php echo lang('name'); ?></th>
										<th data-field="source_url" data-align="left" data-sortable="true"><?php echo lang('url'); ?></th> 
										<th data-field="operate" data-sortable="false" data-formatter="operateFormatter" data-width="10%"><?php echo lang('edit'); ?></th>   
									</tr>
								</thead>
							</table> 
							<!-- /.table -->		
						</div>
				</div>
				<!-- /.col-md-12 --> 
			</div>
		  <!-- /.modal-dialog --> 
	</div>
	<!-- /.page-wrapper -->

 
		<?php foreach ($sources as $result): ?>		
			 <div class="modal fade" id="edit_<?php echo $result->source_id  ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading"> <?php echo lang('sources_edit_source'); ?></h4>
					  </div>
						<form name="form_<?php echo $result->source_id  ?>" id="form_<?php echo $result->source_id  ?>" method="post" action="<?php echo site_url('profile/sources/edit') . '/';?><?php echo $result->source_id  ?>" >	
							<div class="modal-body">  
								<input name="source_id" id="source_id" value="<?php echo $result->source_id  ?>" type="hidden" >												 
								<div class="form-group">
									<input class="form-control" name="source_name" id="source_name" value="<?php echo $result->source_name  ?>" >
								</div> 
								<div class="form-group">
									<textarea rows="3" name="source_url" id="source_url" class="form-control" ><?php echo $result->source_url  ?></textarea>
								</div> 
							</div>
							<div class="modal-footer ">
								<div class="btn-group">
									<button type="submit" name="submitEdit" class="btn btn-primary" ><i class="fa fa-pencil"></i> <?php echo lang('ok'); ?></button>
								</div>	
								<div class="btn-group">
									<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" > <?php echo lang('cancel'); ?></button>
								</div>	

							</div>
						</form> 
					</div>
					<!-- /.modal-content --> 
				  </div>
					  <!-- /.modal-dialog --> 
				</div>					
				
				<div class="modal fade" id="delete_<?php echo $result->source_id  ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title custom_align" id="Heading"> <?php echo lang('sources_del_source'); ?></h4>
							</div>
							
							<form name="form_<?php echo $result->source_id  ?>" id="form_<?php echo $result->source_id  ?>" method="post" action="<?php echo site_url('profile/sources/del') . '/';?><?php echo $result->source_id  ?>" >	

								<div class="modal-body">
									<input name="source_id" id="source_id" value="<?php echo $result->source_id  ?>" type="hidden" >	
									<div class="alert alert-warning">
										<i class="fa fa-exclamation-triangle btn-lg"></i> <?php echo lang('sources_delete_warning'); ?> <b><?php echo $result->source_name  ?></b> <?php echo lang('source'); ?>?</div>
									</div>
								<div class="modal-footer ">
									<button type="submit" name="submitDelete" class="btn btn-danger" ><i class="fa fa-trash"></i> <?php echo lang('yes'); ?></button>
									<button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true" ><i class="fa fa-remove"></i> <?php echo lang('no'); ?></button>
								</div>
							
							</form> 
						</div>
				<!-- /.modal-content --> 
					</div>
				  <!-- /.modal-dialog --> 
				</div>	 
		<?php endforeach ?>	 	
 

		<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading"> <?php echo lang('sources_add_new'); ?></h4>
					</div>
					<form name="form_add" id="form_add" method="post" action="<?php echo site_url('profile/sources/add');?>" >	 
						<div class="modal-body"> 						 
							<div class="form-group">
								<input class="form-control" name="source_name" id="source_name" placeholder="<?php echo lang('sources_input_name'); ?>" >
							</div> 
							<div class="form-group">
								<textarea rows="3" name="source_url" id="source_url" class="form-control" placeholder="<?php echo lang('sources_input_url'); ?>" ></textarea>
							</div> 
						</div>
						<div class="modal-footer ">
							<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" > <?php echo lang('cancel'); ?></button>
							<button type="submit" name="submitAdd" class="btn btn-success" ><i class="fa fa-pencil-square-o"></i> <?php echo lang('ok'); ?></button> 
						</div> 
					</form> 
				</div>
			<!-- /.modal-content --> 
			</div>
			  <!-- /.modal-dialog --> 
		</div>	 
		
		
		<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading"><?php echo lang('profile_change_password') ?></h4>
					</div>
					
					<form name="form_pass<?php echo $userinfo->id;  ?>" id="form" method="post" action="<?php echo site_url('profile/user/change_password') .'/';?>" >	

						<div class="modal-body">
							<input name="user_id" id="user_id" value="<?php echo $userinfo->id; ?>" type="hidden" >	
							<div class="alert alert-warning">
								<i class="fa fa-exclamation-triangle btn-lg"></i> <?php echo lang('profile_change_warning') ?>
									<?php if(empty($userinfo->first_name) && empty($userinfo->last_name)) : ?>
										<b><?php echo $userinfo->username  ?></b>
									<?php else : ?>
										<b><?php echo $userinfo->first_name  ?> <?php echo $userinfo->last_name  ?></b>
									<?php endif ?> 
								
								<?php echo lang('password') ?>
								
							</div>								 
							<div class="form-group"> 
								<div class="input-group col-md-12">
									<input type="password" name="old_password" id="old_password" class="form-control" placeholder="<?php echo lang('profile_change_old_password') ?>"  />
									 <?php echo form_error('old_password') ?>
								</div>
							</div>								
							<div class="form-group"> 
								<div class="input-group col-md-12">
									<input type="password" name="new_password" id="new_password" class="form-control" placeholder="<?php echo lang('profile_change_new_password') ?>"  />
									 <?php echo form_error('new_password') ?>
								</div>
							</div>									
							<div class="form-group"> 
								<div class="input-group col-md-12">
									<input type="password" name="new_password_confirm" id="new_password_confirm" class="form-control" placeholder="<?php echo lang('profile_change_new_password_confirm') ?>"  />
									 <?php echo form_error('profile_change_new_password_confirm') ?>
								</div>
							</div>
							
						</div>									
						<div class="modal-footer ">
							<button type="submit" name="submitChange" class="btn btn-success" ><i class="fa fa-key"></i> <?php echo lang('yes') ?></button>
							<button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true" ><i class="fa fa-remove"></i> <?php echo lang('no') ?></button>
						</div>
					
					</form> 
				</div>
				<!-- /.modal-content --> 
			</div>
		  <!-- /.modal-dialog --> 
		</div>					