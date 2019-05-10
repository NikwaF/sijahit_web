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
				
				 <!-- Breadcrumb -->
				<?php $this->load->view('Templates/Admin/breadcrumb'); ?>
            <!-- /Breadcrumb -->
			<!-- Container -->
            <div class="container">
                <!-- Title -->

                <!-- /Title -->
								
								<!--  isinya disini-->
								<?php $this->load->view($isinya); ?>
								
								
								
								<!--  isinya disini-->
            <!-- /Container -->
			
            <!-- Footer -->
           <?php $this->load->view('Templates/Admin/footer'); ?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
		<!-- Modal -->
		
		
    <!-- jQuery -->
		<?php $this->load->view('Templates/Admin/js'); ?>
    
	
</body>

</html>