<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta content="<?php echo base_url(); ?>asset/public/energy-logo.png" property="og:image">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--- This Should Placed First Off All Other Scripts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/revolution_settings.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/eislider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/tipsy.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/isotop_animation.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/_color-chooser.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/_colorpicker.css">
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/style.css'>
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/responsive.css'>
        <link rel='stylesheet' href="<?php echo base_url(); ?>asset/public/css/mixed-flat-colors.css">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/public/img/icon.png" />
    </head>

    <body>
        <div id="myNicPanel"></div>
        <span id="process_underway"></span>
        <div class="sticky-navigation" id="sticky-navigation"></div>
        <div id="wrapper">
            <div class="top_wrapper">
                <header class="top-header shadow">
                    <div class="container">
                        <div class="row header">
                            <!-- Logo -->
                            <div class="col-md-2 col-sm-4 col-xs-4 logo">
                                <a href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>asset/public/energy-logo.png" alt="Uddian Energy"/>
                                </a>
                            </div>
                            <!-- End Logo -->
                            <!-- Navigation File -->
                            <div class="col-md-12">
                                <!-- Mobile Button Menu -->
                                <div class="mobile-menu-button">
                                    <i class="icon-reorder"></i>
                                </div>
                                <!-- End Mobile Button Menu -->
                                <!-- Search Box -->
                                <div class="searchbox">
                                    <form action="<?php echo base_url(); ?>" method="get">
                                        <input type="text" placeholder="Search" class="searchbox-inputtext" id="searchbox-inputtext" name="q" />
                                        <label class="searchbox-icon" for="searchbox-inputtext"><i class="fa fa-search"></i></label>
                                    </form>
                                </div>
                                <!-- End Search Box -->
                                <nav>
                                    <ul class="navigation">
                                        <li><a href='<?php echo base_url(); ?>/#'>About</a>
                                            <ul style='z-index: 1;'>
                                                <li><a href='<?php echo base_url(); ?>home/about'>About Uddipan</a></li>
                                                <li><a href='<?php echo base_url(); ?>home/mission'>Mission</a></li>
                                                <li><a href='<?php echo base_url(); ?>home/service'>Service Standards</a></li>
                                                <li><a href='<?php echo base_url(); ?>home/management'>Management</a></li>
                                                <li><a href='<?php echo base_url(); ?>home/achievement'>Our Achievement (So Far)</a></li>
                                                <li><a href='<?php echo base_url(); ?>home/map'>Working Area</a></li>
                                            </ul>
                                        </li>
                                        <li><a href='<?php echo base_url(); ?>home/news'>News</a></li>
                                        <li><a href='<?php echo base_url(); ?>home/portfolio'>Portfolio</a></li>
                                        <li><a href='<?php echo base_url(); ?>home/it_service'>IT Service</a></li>
                                        <li><a href='<?php echo base_url(); ?>home/contact'>Contact</a></li>
                                        <li><a href='<?php echo base_url(); ?>home/career'>Career</a></li>
                                        <li><a href='<?php echo base_url(); ?>home'>HOTLINE: 09614800803, 09614800800</a></li>
                                    </ul>
                                </nav>
                                <!-- Mobile Nav Container -->
                                <ul class="mobile-nav">
                                    <li class="responsive-searchbox"></li>
                                </ul>
                                <!-- End Mobile Nav Container -->
                            </div>
                            <!-- Nav -->
                        </div>
                    </div>
                    <div class="headre_bellow"></div>
                </header>
                <!-- End Header -->
                <?php echo $home; ?>
                <footer>
                    <div class="footer">
                        <div class="container">
                            <div class="footer-wrapper">
                                <div class="row">
                                    <!-- Footer Col -->
                                    <div class="col-md-3 col-sm-3 footer-col">
                                        <div class="space-sep"></div>
                                        <div class="space-sep"></div>
                                        <div class="footer-content">
                                            <ul class="footer-category-list">
                                                <li>
                                                    <a href="<?php echo base_url(); ?>">Home</a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo base_url(); ?>asset/public/img/innovation.png"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 footer-col">
                                        <div class="footer-title">
                                            About us
                                        </div>
                                        <div class="footer-content">
                                            <ul class="footer-category-list">
                                                <li>
                                                    <a href="<?php echo base_url(); ?>home/about">Company Profile</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>home/partner">Partner</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>home/press">Press</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>home/career">Career</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 footer-col">
                                        <div class="footer-title">
                                            Quick Links
                                        </div>
                                        <div class="footer-content">
                                            <ul class="footer-category-list">
                                                <li>
                                                    <a href="">Product FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="">Energy University</a>
                                                </li>
                                                <li>
                                                    <a href="">Operations around the world</a>
                                                </li>
                                                <li>
                                                    <a href="">Events</a>
                                                </li>
                                                <li>
                                                    <a href="">Share price</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 footer-col">
                                        <div class="footer-title">
                                            Get in touch
                                        </div>
                                        <div class="footer-content">
                                            <div class="footer_getintouch footer-contact">
                                                <form action="http://www.uddipanenergy.com/subscribe" method="POST" id="footer-contact-form">
                                                    <div class="footer-getintouch-row">
                                                        <input name="subscriber_mail" id="email" type="email" class="input" placeholder="E-mail" required/>
                                                    </div>
                                                    <div class="footer-getintouch-row">
                                                        <input type="submit" value="Subscribe">
                                                    </div>
                                                </form>
                                            </div>
                                            <ul id="com">
                                                <li><a target="_blank" href="https://www.twitter.com" original-title="facebook"><img src="<?php echo base_url(); ?>asset/public/img/twiter.png"/></a></li>
                                                <li><a target="_blank" href="https://www.facebook.com/uddipanenergy?fref=ts" original-title="facebook"><img src="<?php echo base_url(); ?>asset/public/img/facebook.png"/></a></li>
                                                <li><a target="_blank" href="https://www.linkdin.com" original-title="facebook"><img src="<?php echo base_url(); ?>asset/public/img/linkdin.png"/></a></li>
                                                <li><a target="_blank" href="https://www.google.com" original-title="facebook"><img src="<?php echo base_url(); ?>asset/public/img/google.png"/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6" style="font-size: 13px; font-weight: bold;">
                                        <div class="copyright-text">&copy; 2015 - 2016 UDDIPAN ENERGY LIMITED</div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="social-icons" style="float: right;font-size: 13px;font-weight: bold;">
                                            Developed By 
                                            <a href="http://www.labtrio.it" target="_blank">LabTrio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script src="<?php echo base_url(); ?>asset/public/js/_jq.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/_jquery.placeholder.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/bootstrap.min.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/activeaxon_menu.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/animationEnigne.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/arwa.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.carouFredSel-6.2.1-packed.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.cycle.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.cycle2.carousel.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.easing.1.3.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.easytabs.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.eislideshow.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.isotope.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.prettyPhoto.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.themepunch.plugins.min.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.themepunch.revolution.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.tipsy.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jquery.validate.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/jQuery.XDomainRequest.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/retina.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/timeago.js"></script>
                <script src="<?php echo base_url(); ?>asset/public/js/tweetable.jquery.js"></script>
            </div>
    </body>
</html>