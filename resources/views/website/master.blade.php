<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/dezily/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 15:21:39 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Dezily - Medical and Healthcare HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" />
<title>@yield('title')</title>

<link rel="shortcut icon" href="{{ asset('/') }}website/assets/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/themify-icons.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/fontello.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/slider.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/twentytwenty.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/shortcodes.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/main.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/megamenu.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}website/assets/css/responsive.css"/>

</head>
<body>


    <!--page start-->
    <div class="page">


        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- site-branding -->
                                        <div class="site-branding">
                                            <a class="home-link" href="{{ route('home') }}" title="Dezily" rel="home">
                                                <h5 class="text-white text-center">MEDICO</h4>
                                            </a>
                                        </div><!-- site-branding end -->
                                        <div class="site-menubar">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="main-menu menu-mobile" id="menu">
                                                <ul class="menu">
                                                    <li class="mega-menu-item active">
                                                        <a href="{{ route('home') }}" class="mega-menu-link">Home</a>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">Services</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="about-us.html">About Us 1</a></li>
                                                            <li><a href="about-us-2.html">About Us 2</a></li>
                                                            <li><a href="services-1.html">Services 1</a></li>
                                                            <li><a href="services-2.html">Services 2</a></li>
                                                            <li><a href="our-team.html">Our Team</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                            <li><a href="error.html">Error Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">Doctor</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="{{ route('doctor.category') }}">Heart Surgery </a></li>
                                                            <li><a href="valve-diseases.html">Valve Diseases</a></li>
                                                            <li><a href="children-services.html">Children Services</a></li>
                                                            <li><a href="heart-transplant.html">Heart Transplant</a></li>
                                                            <li><a href="endocrinology.html">Endocrinology </a></li>
                                                            <li><a href="cardiac-surgery.html">Cardiac Surgery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">Hospital</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="project-style-1.html">Project Style One</a></li>
                                                            <li><a href="project-details.html">Project Single View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">About</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="blog.html">Blog Classic</a></li>
                                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                            <li><a href="blog-single.html">Blog Single View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">Contact Us</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="contact-us.html">Contact Us</a></li>
                                                            <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav><!-- menu end -->
                                        </div>
                                    </div>
                                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                        <div class="widget_info d-flex flex-row align-items-center">
                                            <div class="widget_icon align-self-center">
                                                <i class="flaticon-phone-call-1"></i>
                                            </div>
                                            <div class="widget_content align-self-center">
                                                <h3 class="widget_title">Call Us Now!</h3>
                                                <p class="widget_desc"><a href="tel:+182222-3555">+18 - 2222 - 3555</a></p>
                                            </div>
                                        </div>
                                        <div class="widget_info d-flex flex-row align-items-center">
                                            <div class="widget_icon align-self-center">
                                                <i class="flaticon-bubble-chat"></i>
                                            </div>
                                            <div class="widget_content align-self-center">
                                                <h3 class="widget_title">Talk to us</h3>
                                                <p class="widget_desc"><a href="mailto:examplle@gmail.com">examplle@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!--header end-->

        <!-- Banner -->
        @yield('body')
        <!--site-main end-->

        <!--footer start-->
        <footer class="widget-footer ttm-textcolor-white clearfix">
            <div class="ttm-bgcolor-darkgrey">
                <div class="first-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="newsletter-form-div">
                                    <div class="newsletter-form-title">
                                        <h3 class="widget-title">Subscribe With Us</h3>
                                        <p>For any help mail us. 24/7 emergency services</p>
                                    </div>
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="ttm_subscribe_form">
                                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">message</button>
                                        </div>
                                        <div class="subscribe-response"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 res-767-pl-0 res-767-pr-0">
                                        <div class="">
                                            <p>With More 25+ Hospitals</p>
                                            <p>In United States,Europe, and Asia</p>
                                        </div>
                                        <div class="ttm-horizontal_sep mt-25 res-991-w-50"></div>
                                        <div class="">
                                            <div class="ttm-fid inside style6">
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">25</span>
                                                        <span>+</span>
                                                    </h4>
                                                    <h3>Hospitals</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center res-767-pl-0 res-767-pr-0">
                                        <div class="d-flex justify-content-start justify-content-lg-end">
                                            <a href="contact-us.html" class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white">View Our locations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                                <div class="widget widget-widget_contact clearfix">
                                    <h3 class="widget-title">About Dezily</h3>
                                    <div class="textwidget widget-text">
                                        <p>Our Hospital has grown to provide a world class facilities for the clinically advanced restorative heart ralated treatments available.
                                        </p>
                                    </div>
                                    <div class="social-icons pt-20">
                                        <ul class="list-inline">
                                            <li class="social-facebook">
                                                <a href="https://www.facebook.com/themetechMount18" rel="noopener" aria-label="facebook" target="_blank"><i class="ti ti-facebook"></i></a>
                                            </li>
                                            <li class="social-linkedin">
                                                <a href="https://www.linkedin.com/company/themetech-mount/" rel="noopener" aria-label="linkedin" target="_blank"><i class="ti ti-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social-twitter">
                                                <a href="https://twitter.com/themetechmount" rel="noopener" aria-label="twitter" target="_blank"><i class="ti ti-twitter-alt"></i>
                                                </a>
                                            </li>
                                            <li class="social-pinterest">
                                                <a href="https://in.pinterest.com/themetechmount/_created/" rel="noopener" aria-label="pinterest" target="_blank"><i class="ti ti-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                                <div class="widget widget_nav_menu clearfix">
                                   <h3 class="widget-title">Useful Links</h3>
                                    <div class="d-flex">
                                        <ul class="menu-footer-service-link menu">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                            <li><a href="services-1.html">How IT Works</a></li>
                                            <li><a href="services-2.html">Partners</a></li>
                                            <li><a href="blog.html">Projects</a></li>
                                        </ul>
                                        <ul class="menu-footer-service-link menu">
                                            <li><a href="faq.html">FAQ's</a></li>
                                            <li><a href="services-1.html">Pricing Plans</a></li>
                                            <li><a href="contact-us.html">Feedback</a></li>
                                            <li><a href="contact-us.html">Policies</a></li>
                                            <li><a href="contact-us-2.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                                <div class="widget widget-recent-post clearfix">
                                   <h3 class="widget-title">Popular Posts</h3>
                                    <ul class="widget-post ttm-recent-post-list">
                                        <li>
                                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/footer-post-01.jpg" width="72" height="80" alt="post-img">
                                            <div class="post-detail">
                                                <span class="post-date">April 17, 2021</span>
                                                <a href="blog-single.html">Can Depression Increase Of Your Risk.</a>
                                            </div>
                                        </li>
                                        <li>
                                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/footer-post-02.jpg" width="72" height="80" alt="post-img">
                                            <div class="post-detail">
                                                <span class="post-date">April 17, 2021</span>
                                                <a href="blog-single.html">Heart Transplant For The Development Services.</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                                <div class="widget widget-widget_contact clearfix">
                                    <h3 class="widget-title">Get In Touch</h3>
                                    <ul class="widget_contact_wrapper">
                                        <li>Mail:<a href="mailto:needhelp@company.com"> needhelp@company.com </a></li>
                                        <li>Fax: +123 456 7890</li>
                                        <li>Fax: +000 78945 666</li>
                                        <li>Location: Fair Oaks Blvd,<br>San Francisco,USA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <div class="copyright">
                                    <div class="d-sm-flex align-items-center justify-content-center">
                                        <div>Copyright © 2022 <a href="index.html" class="ttm-textcolor-white"> Dezily </a>. All rights reserved</div>
                                    </div>
                                </div>
                                <div>
                                    <ul class="footer-nav-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

    <!-- Javascript -->

    <script src="{{ asset('/') }}website/assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/tether.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery.easing.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery-waypoints.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery-validate.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('/') }}website/assets/js/slick.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/numinate.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/imagesloaded.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery-isotope.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery.event.move.js"></script>
    <script src="{{ asset('/') }}website/assets/js/jquery.twentytwenty.js"></script>
    <script src="{{ asset('/') }}website/assets/js/circle-progress.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/main.js"></script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/dezily/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 15:22:31 GMT -->
</html>


