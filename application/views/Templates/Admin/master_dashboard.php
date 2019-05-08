<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
  <?php $this->load->view('Templates/Admin/header'); ?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <?php $this->load->view('Templates/Admin/top_navbar');?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
       <?php $this->load->view('Templates/Admin/vertical_navbar'); ?>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Welcome Back!</h2>
						<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
					</div>
				</div>
                <!-- /Title -->
								
								<!--  isinya disini-->
								
								
								
								
								<!--  isinya disini-->
            <!-- /Container -->
			
            <!-- Footer -->
           <?php $this->load->view('Templates/Admin/footer'); ?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

		<?php $this->load->view('Templates/Admin/js'); ?>
    <!-- jQuery -->
    
	
</body>

</html>