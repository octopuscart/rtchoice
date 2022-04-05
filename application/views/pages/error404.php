<?php
$this->load->view('layout/header');
?>


<!--Error Section-->
<section class="error-section" style='padding-top: 100px;'>
    <div class="auto-container">
        <div class="content">
            <h1>404</h1>
            <h2>Oops! That page can’t be found</h2>
            <div class="text">Sorry, but the page you are looking for does not existing</div>
            <a href="<?php echo site_url("/"); ?>" class="theme-btn btn-style-three"><span class="txt">Go to Home Page</span></a>
        </div>
    </div>
</section>
<!--End Error Section-->
<!--End 404 Error-->

<?php
$this->load->view('layout/footer');
?>