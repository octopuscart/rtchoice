
<!-- Info Section -->
<section class="info-section" style="background-image: url(<?php echo base_url(); ?>assets/images/background/6.jpg)">
    <div class="auto-container">
        <div class="row clearfix">



            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-pin"></span></div>
                    <ul>
                        <li><strong>Address</strong></li>
                        <li>ROOM 701, 7/F, NO. 23 <br/> HILLWOOD ROAD, TST, <br/> KOWLOON, HONG KONG<br/>
                            香港九龍尖沙咀23號山林道701室</li>
                    </ul>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                    <ul>
                        <li><strong>Phone</strong></li>
                        <li>+(852) 9109 3079<li/>

                        <li>+(86) 187 1773 3711</li>       
                        <li>+(852) 9259 4859</li>
                    </ul>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-email-1"></span></div>
                    <ul>
                        <li><strong>E-Mail</strong></li>
                        <li>    info@rightchoicehk.com</li>
                        <li>    terry@rightchoicehk.com</li>
                        <li>    beatrice@rightchoicehk.com</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Info Section -->

<!-- Main Footer -->
<footer class="main-footer style-three">
    <div class="pattern-layer-three" style="background-image: url(<?php echo base_url(); ?>assets/images/background/pattern-14.png)"></div>
    <div class="pattern-layer-four" style="background-image: url(<?php echo base_url(); ?>assets/images/background/pattern-15.png)"></div>
    <!--Waves end-->
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <h5>RIGHT CHOICE GLOBAL LTD.<br/>

                            輝蘊有限公司 </h5>
                        <div class="text">We are specialized consulting firm to serve the business community through the expertise and technical skills of
                            its professional team and their dedication to providing high quality professional services.<br/><br/>
                            We have provided professional services to large organizations in Hong Kong and other countries.</div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h5>Quick Links</h5>
                        <ul class="list-link">
                            <?php
                             $servicesblock1 = [
                    array("title" => "Anti Covid-19", "description" => "", "imges" => ""),
                    array("title" => "F&B Services", "description" => "", "imges" => ""),
                    array("title" => "Construction", "description" => "", "imges" => ""),
                    array("title" => "Business Services", "description" => "", "imges" => ""),
                    array("title" => "Trading Services ", "description" => "", "imges" => ""),
                    array("title" => "Company Formation ", "description" => "", "imges" => ""),
                    array("title" => "Accounting", "description" => "", "imges" => ""),
                    array("title" => "IT Services", "description" => "", "imges" => ""),
                ];
                foreach ($servicesblock1 as $key => $value) {
                    ?>
                              <li><a href="#"><?php
                              echo $value["title"];
                              ?></a></li>
                        <?php
                }
                            ?>
                          
                         
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget subscribe-widget">
                        <h5>Subscribe Newsletter</h5>
                        <div class="text">Sign up today for hints, tips and <br> the latest product news</div>
                        <!--Emailed Form-->
                        <div class="emailed-form">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email" required>
                                    <button type="submit" class="theme-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">Copyright &copy; <?php echo date("Y") ?> by www.rightchoicehk.com | All Rights Reserved.</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>assets/js/appear.js"></script>
<script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tilt.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.paroller.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
<script src="<?php echo base_url(); ?>assets/js/nav-tool.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/color-settings.js"></script>

</body>

</html>