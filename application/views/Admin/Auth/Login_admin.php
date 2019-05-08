<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Si Jahit | Login</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		
		<!-- Toggles CSS -->
		<link href="<?= base_url('assets/brunette');?>/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url('assets/brunette');?>/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="<?= base_url('assets/brunette');?>/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
								<!-- ini nanti buat logo -->
									<form>
										<h1 class="display-4 text-center mb-10">Selamat Datang :)</h1>
										<p class="text-center mb-30">Silahkan Login.</p> 
										<div class="form-group">
											<input class="form-control" name="username" placeholder="Username" type="text">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" name="password" placeholder="Password" type="password">
											</div>
										</div>
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?= base_url('assets/brunette');?>/vendors/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url('assets/brunette');?>/vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="<?= base_url('assets/brunette');?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?= base_url('assets/brunette');?>/dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="<?= base_url('assets/brunette');?>/dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- FeatherIcons JavaScript -->
		<script src="<?= base_url('assets/brunette');?>/dist/js/feather.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?= base_url('assets/brunette');?>/dist/js/init.js"></script>
	</body>
</html>