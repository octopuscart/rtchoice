<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$ci = new CI_Controller();
$ci = & get_instance();
$ci->load->helper('url');
?>
 
<?php
include APPPATH . '/views/layout/header.php';
?>
	<!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="content">
            	<h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
				<a href="index.html" class="theme-btn btn-style-three"><span class="txt">Go to Home Page</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->
<?php
include APPPATH . '/views/layout/footer.php';
?>