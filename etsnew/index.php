<?php include "includes/head-logo.php"; ?>

<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img style="width: 100px;" src="assets/images/logo.jpg" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form style="padding-bottom: 50px;" action="dashboard.php" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="recover-password.php" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
								<!-- <input type="text" class="button" value="PASSWORD" onclick="this.value='';this.onclick='test';this.style.color='#000'; setAttribute('type', 'password');" onfocus="if (this.value == 'PASSWORD') {this.value = ''; setAttribute('type', 'password');}"   onblur="if (this.value == '') {this.value = 'PASSWORD';setAttribute('type', 'text');}" name="password"  /> -->
									<input name="pwd" id="pwd" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<!-- <button onclick="function () {

												var passwordField = document.getElementById('pwd');
												var value = passwordField.value;

												if(passwordField.type == 'password') {
													passwordField.type = 'text';
												}
												else {
													passwordField.type = 'password';
												}

												passwordField.value = value;

												} "></button> --><i class="fa fa-eye"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="input-group">
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">$</span>
    <span class="input-group-text">0.00</span>
  </div>
</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<!-- <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a> -->

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. <a href="http://www.kavinindia.com/" target="_blank"> Kavin India Pvt Ltd </a>.</p>
			</div>
		</section>
        
        <?php include "includes/footer.php"; ?>
