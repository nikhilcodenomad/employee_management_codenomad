<!DOCTYPE html><html><?php $this->load->view('header/index'); ?><body><div class="container login-bg"><form action="<?php echo base_url(); ?>" class="login-form-signin" method="POST">  <div class="login-logo"><img src="<?php echo base_url('media'); ?>/images/logo.png"></div>    <h2 class="login-form-signin-heading">Login Your Account</h2>	<?php if($message_login != ""){?> <div class="has-error"><p class="help-block"><i class="fa fa-times-circle"></i> <?php echo $message_login."</p></div>"; } ?>        <div class="login-wrap">            <input type="text" autofocus placeholder="User ID" class="form-control" required name="username" value="<?php				if(isset($_POST['username']))					{					   echo $this->input->post('username');					}			?>">            <input type="password" placeholder="Password" class="form-control" required name="password" value="<?php				if(isset($_POST['password']))					{					   echo $this->input->post('password');					}			?>">            <select name="designation" id="designation" >			<option value="0">Select Designation</option>				<?php foreach($result as $res){ ?>					<option value="<?php echo $res->id; ?>"					<?php						if(isset($_POST['designation']) && ($res->id == $this->input->post('designation')))						{						   echo "Selected";						}					?>					><?php echo $res->employee_designation; ?></option>				<?php } ?>			</select>			<?php if($message_designation != ""){?> <div class="has-error"><p class="help-block"><i class="fa fa-times-circle"></i> <?php echo $message_designation."</p></div>"; } ?>            <label class="checkbox">                <input type="checkbox" value="remember-me" name="remember" 				 <?php 					if(isset($_POST['remember']))					{					   echo "Checked";					}				 ?>				> Remember me                <span class="pull-right">                    <a href="#myModal" data-toggle="modal"> Forgot Password?</a>                </span>            </label>            <button type="submit" class="btn btn-lg btn-primary btn-block" >Sign in</button>        </div>      </form>    </div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <script src="<?php echo base_url('media'); ?>/js/jquery-1.10.2.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed --> <script src="<?php echo base_url('media'); ?>/bs3/js/bootstrap.min.js"></script></body></html>