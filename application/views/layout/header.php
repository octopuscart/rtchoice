<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="/manifest.webmanifest">
        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Costco Development Team">
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Multi Solution Company",
            "name": "RIGHT CHOICE GLOBAL LTD.",

            "datePublished": "2022-03-01",
            "description": "We are a multi solution company & ready to give all kind of services for your business needs.",
            "prepTime": "PT20M"
            }
        </script>




        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

        <!-- Color Switcher Mockup -->
        <link href="<?php echo base_url(); ?>assets/css/color-switcher-design.css" rel="stylesheet">

        <!-- Color Themes -->
        <link id="theme-color-file" href="<?php echo base_url(); ?>assets/css/color-themes/default-theme.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
        <link href="<?php echo base_url(); ?>assets/css/custom-style.css" rel="stylesheet">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>
    <?php
    $mainmenu = [
        array("title" => "HOME"),
        array("title" => "GALLERY"),
        array("title" => "SERVICES"),
        array("title" => "ABOUT"),
        array("title" => "CONTACT"),
    ];
    ?>
    <body class="hidden-bar-wrapper">

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header-->
            <header class="main-header header-style-one">

                <!-- Header Top -->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="clearfix">
                            <!-- Top Left -->
                            <div class="top-left">
                                <!-- Info List -->
                                <ul class="info-list">
                                    <li><a href="mailto:info@rightchoicehk.com"><span class="icon flaticon-email"></span> info@rightchoicehk.com</a></li>
                                    <li><a href="tel:+(852) 9109 3079"><span class="icon flaticon-telephone"></span>+(852) 9109 3079</a></li>
                                </ul>
                            </div>

                            <!-- Top Right -->
                            <div class="top-right pull-right">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-youtube"></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current "><a href="#">Home</a>

                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="faq">FAQ's</a></li>
                                                <li><a href="testimonial">Testimonial</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
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
                                        </li>
                                        <li class=""><a href="#">Projects</a>

                                        </li>

                                        <li><a href="contact">Contact us</a></li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">



                                <!-- Nav Btn -->
                                <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                                <!-- Quote Btn -->
                                <div class="btn-box">
                                    <a href="contact" class="theme-btn btn-style-one"><span class="icon flaticon-telephone"></span>  <span class="txt">Call Us</span></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--End Header Upper-->

                <!-- Sticky Header  -->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="" title=""><img src="<?php echo base_url(); ?>assets/images/logo-small.png" alt="" title=""></a>
                        </div>
                        <!--Right Col-->
                        <div class="pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav><!-- Main Menu End-->

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">


                                <!-- Nav Btn -->
                                <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                            </div>

                        </div>
                    </div>
                </div><!-- End Sticky Menu -->

                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                    <nav class="menu-box">
                        <div class="nav-logo"><a href=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" title=""></a></div>
                        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                    </nav>
                </div><!-- End Mobile Menu -->

            </header>
            <!-- End Main Header -->

            <!-- Sidebar Cart Item -->
            <div class="xs-sidebar-group info-group">
                <div class="xs-overlay xs-bg-black"></div>
                <div class="xs-sidebar-widget">
                    <div class="sidebar-widget-container">
                        <div class="widget-heading">
                            <a href="#" class="close-side-widget">
                                X
                            </a>
                        </div>
                        <div class="sidebar-textwidget">

                            <!-- Sidebar Info Content -->
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo">
                                        <a href=""><img src="images/logo-2.png" alt="" /></a>
                                    </div>
                                    <div class="content-box">
                                        <h2>About Us</h2>
                                        <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                                    </div>
                                    <div class="contact-info">
                                        <h2>Contact Info</h2>
                                        <ul class="list-style-one">
                                            <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                            <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                            <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                                            <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                        </ul>
                                    </div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                        <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                        <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END sidebar widget item -->



