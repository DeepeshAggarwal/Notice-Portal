div class="modal-body">
				<div class="container" role="tabpanel" style="margin-top:0px;padding-top:0px;">
					<ul class="nav nav-pills ">
						<li class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">login</a></li>
						<li><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">signup</a></li>
					</ul>
				</div>
				<div class="tab-content" style="margin-top:10px;">
				<!-- login -->
				<div role="tabpanel" class="tab-pane active" id="login">
				<div class="container">
				<div class="md-col-4 center" style="padding-right:5px;border-right:1px #eee solid;float:left">
				
				<p style="float:right">
				forgot password?
				</p>
				<br><br>
				<p style="text-align:left"><small>
				By logging in, you agree to our terms & condition and that you have carefully read our privacy policy
				</small></p>

				</div>
				</div>
				</div>

				<div role="tabpanel" class="tab-pane" id="signup">
				<!-- sign up  -->
				<div class="container">
				<div class="md-col-4 center" style="padding-right:5px;border-right:1px #eee solid;float:left">
				<form method="post" action="user_register.php">
				<div class="form-group">
				<input type="text" class="form-control" id="email" name="email" placeholder="Email-Id" data-validation="email"
				data-validation-error-msg="please enter a valid Email">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" data-validation="number" data-validation-error-msg="please enter a 10 digit mobile number">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" data-validation="length" data-validation-error-msg="please enter minimum 6 digit paasword " data-validation-length="min6">
				</div>
				<button type="submit" class="btn btn-block btn-primary" name="submit">signup</button>
				</form>
				<br><br>
				<p style="text-align:left"><small>
				    By signing up, you agree to our terms & condition and that you have carefully read our privacy policy
				</small></p>

				</div>
				</div>
				</div>
				</div>
			<!-- last -->

			</div>