 	<div id="page-wrapper">
		
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><?php if(empty($userinfo->first_name) && empty($userinfo->last_name)) : ?><b><?php echo $userinfo->username  ?></b><?php else : ?><b><?php echo $userinfo->first_name  ?> <?php echo $userinfo->last_name  ?></b><?php endif ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
			
			
            <div class="row">
                <div class="col-md-12 col-lg-12">	
					
					<?php echo form_open('profile/user/change_password', array('id' => 'form_pass', 'name' => 'form_pass', 'role' => 'form' )); ?>  
								 
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
							<a href="<?php echo site_url('profile');?>" class="btn btn-warning" ><i class="fa fa-remove"></i> <?php echo lang('no') ?></a>
						</div>
					
					<?php echo form_close(); ?>	 
					
				</div>
				<!-- /.modal-content --> 
			</div>
		  <!-- /.modal-dialog --> 
		</div>	 