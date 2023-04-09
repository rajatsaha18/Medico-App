@extends('website.master')

@section('title')
Medico | Home
@endsection

@section('body')
<div class="banner_slider banner_slider_1">
    <div class="slide s2">
        <div class="slide_img" style="background-image: url({{ asset('/') }}website/assets/images/slides/slider-mainbg-02.jpg);
        background-position: center;">
        </div>
        <div class="slide__content">
            <div class="container g-0 position-relative">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-block d-xl-flex flex-row justify-content-between">
                            <div class="slide__content--headings align-self-center">
                                <div class="slide-icon-img" data-animation="fadeInLeft" data-delay="0.5s" data-duration="0.8s">
                                    <img class="img-fluid d-inline-block" src="{{ asset('/') }}website/assets/images/slide-img.png" width="46" height="44" alt="slide-img">
                                    <span>HEALTHY HEART</span>
                                    <span>HEALTHY BLOOD</span>
                                    <span>HEALTHY BODY</span>
                                </div>
                                <h2 class="ttm-textcolor-white" data-animation="fadeInLeft" data-delay="0.7s" data-duration="0.8s">Healthy Habits Are Your&nbsp;<br>Heart’s Desire</h2>
                                <div class="d-inline-block pt-30" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us.html">Make an Appointment</a>
                                </div>
                            </div>
                            <div class="d-lg-none d-xl-block align-self-center spacing-24">
                                <div class="testimonials style6" data-animation="fadeInRight" data-delay="0.8s" data-duration="0.6s">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/testimonial/15.jpg" alt="testimonial-img" width="140" height="140">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3><a href="our-team.html">Alex Sam Martin</a></h3>
                                            <label>Senior cardiologist</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials style6" data-animation="fadeInRight" data-delay="1s" data-duration="0.6s">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/testimonial/16.jpg" alt="testimonial-img" width="140" height="140">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3><a href="our-team.html">Dr Maria Mithcell</a></h3>
                                            <label>Heart Surgeon</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide s1">
        <div class="slide_img" style="background-image: url({{ asset('/') }}website/assets/images/slides/slider-mainbg-01.jpg);
        background-position: center; background-size: 100%; background-repeat: no-repeat;"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-end">
                        <div class="slide__content--headings">
                            <div class="d-sm-flex justify-content-center" data-animation="fadeInUp" data-delay="1.2s" data-duration="0.6s">
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/ambulance.svg" alt="ambulance-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about-us.html" tabindex="0">Emergency Services</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/stethoscope.svg" alt="stethoscope-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about-us.html" tabindex="0">Outdoor Checkup</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/heart-icon.svg" alt="heart-icon-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about-us.html" tabindex="0">Health Screening</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                            </div>
                        </div>
                        <div>
                            <div class="banner-slider-arrow-info arrow-info1" data-animation="fadeInUp" data-delay="0.3s" data-duration="0.4s">
                                <div class="text-center">
                                    <div class="banner-slider-arrow">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/arrow.png" alt="image" width="16" height="140">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3><a href="team-details.html">Mary Edwards Walker</a></h3>
                                    <span>BAMS (Sr.Heart Surgeon)</span>
                                </div>
                            </div>
                            <div class="banner-slider-arrow-info arrow-info2" data-animation="fadeInUp" data-delay="0.3s" data-duration="0.4s">
                                <div class="text-center">
                                    <div class="banner-slider-arrow">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/arrow.png" alt="image" width="16" height="140">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3><a href="team-details.html">Dr  Jaime Escalante</a></h3>
                                    <span>MBBS (MS in General Surgery)</span>
                                </div>
                            </div>
                            <div class="banner-slider-arrow-info arrow-info3" data-animation="fadeInUp" data-delay="0.3s" data-duration="0.4s">
                                <div class="text-center">
                                    <div class="banner-slider-arrow">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/arrow.png" alt="image" width="16" height="140">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3><a href="team-details.html">Dr Natalie Williams</a></h3>
                                    <span>MCH in Cardiology</span>
                                </div>
                            </div>
                            <div class="banner-slider-arrow-info arrow-info4" data-animation="fadeInUp" data-delay="0.3s" data-duration="0.4s">
                                <div class="text-center">
                                    <div class="banner-slider-arrow">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/arrow.png" alt="image" width="16" height="140">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3><a href="team-details.html">Dr Gertrude Belle Elion</a></h3>
                                    <span>MS in General Surgery.</span>
                                </div>
                            </div>
                            <div class="banner-slider-arrow-info arrow-info5" data-animation="fadeInUp" data-delay="0.3s" data-duration="0.4s">
                                <div class="text-center">
                                    <div class="banner-slider-arrow">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/arrow.png" alt="image" width="16" height="140">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3><a href="team-details.html">Dr Aikenhead</a></h3>
                                    <span>ECG (electro-cardiographic) technologist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide s3">
        <div class="slide_img" style="background-image: url({{ asset('/') }}website/assets/images/slides/slider-mainbg-07.jpg);
        background-position: center;"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide__content--headings text-end">
                            <h3 class="ttm-textcolor-white" data-animation="fadeInDown" data-delay="0.6s" data-duration="0.5s">WE GIVE YOU THE BEST</h3>
                            <h2 class="ttm-textcolor-white" data-animation="fadeInRight" data-delay="0.7s" data-duration="0.8s">We Have Top Level Of Best<br><span class="ttm-textcolor-skincolor">&nbsp;Heart</span> Doctors</h2>
                            <div class="d-inline-block pt-25 res-767-pt-0" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="contact-us.html">See How Can We Help</a>
                            </div>
                            <div class="d-block d-sm-inline-block pt-25 res-767-pt-0 pl-15 res-575-pl-0 res-575-mt-20" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us.html">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end-->

<!--site-main start-->
<div class="site-main">

    <!--welcome-section-->
    <section class="ttm-row welcome-section ttm-bgcolor-grey clearfix">
        <div class="container-fluid">
            <div class="row plr15 res-1199-pl-0 res-1199-pr-0">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <!-- featured-iconbox -->
                    <div class="featured-icon-box icon-align-before-content style19">
                        <!-- featured-icon -->
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                <i class="flaticon flaticon-heart-5"></i>
                            </div>
                        </div>
                        <!-- featured-icon end-->
                        <!-- featured-content -->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="about-us.html" tabindex="0">Personalized Healthcare</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p> You can call ohiical team if your child, teenager or famigh difficulties.</p>
                            </div>
                        </div><!-- featured-content-end -->
                        <div class="featured-bottom">
                            <a class="" href="about-us.html" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                        </div>
                    </div><!-- featured-iconbox-end -->
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <!-- featured-iconbox -->
                    <div class="featured-icon-box icon-align-before-content style19">
                        <!-- featured-icon -->
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                <i class="flaticon flaticon-doctor-1"></i>
                            </div>
                        </div>
                        <!-- featured-icon end-->
                        <!-- featured-content -->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="about-us.html" tabindex="0">Professional Team</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p> Detects the presence or absence of flow into blood vessels via the skin.</p>
                            </div>
                        </div><!-- featured-content-end -->
                        <div class="featured-bottom">
                            <a class="" href="about-us.html" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                        </div>
                    </div><!-- featured-iconbox-end -->
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <!-- featured-iconbox -->
                    <div class="featured-icon-box icon-align-before-content style19">
                        <!-- featured-icon -->
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                <i class="flaticon flaticon-defribillator"></i>
                            </div>
                        </div>
                        <!-- featured-icon end-->
                        <!-- featured-content -->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="about-us.html" tabindex="0">Regularly Checkup</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p> Device provides continuous recording of electrical activity of the heart</p>
                            </div>
                        </div><!-- featured-content-end -->
                        <div class="featured-bottom">
                            <a class="" href="about-us.html" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                        </div>
                    </div><!-- featured-iconbox-end -->
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <!-- featured-iconbox -->
                    <div class="featured-icon-box icon-align-before-content style19">
                        <!-- featured-icon -->
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                <i class="flaticon flaticon-cardiology-2"></i>
                            </div>
                        </div>
                        <!-- featured-icon end-->
                        <!-- featured-content -->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="about-us.html" tabindex="0">Nuclear Stress Testing</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p> Treatment of congenital heart defects, disease and electrophysiology</p>
                            </div>
                        </div><!-- featured-content-end -->
                        <div class="featured-bottom">
                            <a class="" href="about-us.html" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                        </div>
                    </div><!-- featured-iconbox-end -->
                </div>
            </div>
        </div>
    </section><!--welcome-section end-->

    <!--our-info-section-->
    <section class="ttm-row our-info-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/single-img-01.jpg" width="1140" height="1196" alt="single-img-01">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pl-30 pt-50 res-1199-pl-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--section-title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>WHY CHOOSE US</h3>
                                        <h2 class="title">Heart Surgery Specialist Expert Doctors</h2>
                                    </div>
                                </div><!--section-title-end -->
                            </div>
                        </div>
                        <div class="mt_5">
                            <p>Chest pain is the most common warning sign of a heart attack. But there can be other symptoms, too, like lightheadedness.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="featured-icon-box icon-align-before-content style8">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-size-md style1 ttm-icon_element-color-skincolor ttm-bgcolor-grey">
                                            <i class="flaticon flaticon-heart-beat"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Heart Transplante</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Heart symptoms call us for immediate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="featured-icon-box icon-align-before-content style8">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-size-md style1  ttm-icon_element-color-skincolor ttm-bgcolor-grey">
                                            <i class="flaticon flaticon-microsurgery"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Heart Surgery</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Heart is get replaced with healthier</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-horizontal_sep mt-40 mb-40 res-991-mt-30 res-991-mb-30"></div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset('/') }}website/assets/images/single-img-24.jpg" width="960" height="528" alt="single-img-24">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 align-self-center res-575-mt-20">
                                <h3 class="mb-0">Our Cardiology Hospital Services Manufacture Found In 1996</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--our-info-section end-->

    <!--service-section-->
    <section class="ttm-row services-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>SERVICES WE PROVIDE</h3>
                            <h2 class="title">Take The Road To A Healthy Heart Beat</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1020,"settings":{"slidesToShow": 2}} , {"breakpoint":768,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-md-4">
                    <div class="featured-icon-box icon-align-top-content style1">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/heart.svg" width="85" height="85" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="heart-surgery.html">Cardiovascular Care Services</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>A Variety of programs to preventation heart and vascular disease and your overall health rate.</p>
                            </div>
                        </div>
                        <div class="fetured-bottom">
                            <a href="heart-surgery.html" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-exit"></i>
                            </a>
                        </div>
                    </div >
                </div>
                <div class="col-md-4">
                    <div class="featured-icon-box icon-align-top-content style1">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/cardiology.svg" width="85" height="85" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="valve-diseases.html">Heart Screening Technologies</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>The heart screening and detection is the essential to the manage and even preventing disease.</p>
                            </div>
                        </div>
                        <div class="fetured-bottom">
                            <a href="valve-diseases.html" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-exit"></i>
                            </a>
                        </div>
                    </div >
                </div>
                <div class="col-md-4">
                    <div class="featured-icon-box icon-align-top-content style1">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/healthcare.svg" width="85" height="85" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="endocrinology.html">Pacemaker Implant Techniquies</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Implantation electronic devices that is placed in under chest to the  help electronic problem.</p>
                            </div>
                        </div>
                        <div class="fetured-bottom">
                            <a href="endocrinology.html" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-exit"></i>
                            </a>
                        </div>
                    </div >
                </div>
                <div class="col-md-4">
                    <div class="featured-icon-box icon-align-top-content style1">
                        <div class="featured-icon">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/pain.svg" width="85" height="85" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="heart-transplant.html">Ambulatory Surgery Services</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Ambulatory monitors are small, portable machines that are able to record the heart’s rhythm.</p>
                            </div>
                        </div>
                        <div class="fetured-bottom">
                            <a href="heart-transplant.html" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-exit"></i>
                            </a>
                        </div>
                    </div >
                </div>
            </div>
        </div>
    </section>
    <!--service-section end-->

    <!--consultant-section-->
    <section class="ttm-row consultant-section bg-img2 ttm-bgcolor-dark ttm-textcolor-white ttm-bg ttm-bgimage-yes clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row row-title">
                <div class="col-lg-12 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text style2">
                        <div class="title-header">
                            <h3>Heart Care based Solutions</h3>
                            <h2 class="title">We Take Good <span>Health</span> Care of <span>Patients</span> Every Dieses</h2>
                        </div>
                    </div><!-- section title end -->
                    <div class="consutant-doc-info d-sm-flex justify-content-center align-items-center">
                        <div class="pr-30 res-575-pr-0 text-center">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-10" href="contact-us.html" tabindex="0">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--consultant-section-->

    <!--testimonial-section-->
    <section class="ttm-row zero_padding-section testimonial-section-homepage clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-xl-5 col-lg-12">
                    <div class="box-shadow ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-skincolor spacing-21">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- section title -->
                                    <div class="section-title mb-18">
                                        <div class="title-header">
                                            <h3 class="ttm-textcolor-white">PATIENTS TESTIMONIALS</h3>
                                            <h2 class="title">What Are They Saying</h2>
                                        </div>
                                    </div><!-- section title end -->
                                </div>
                            </div>
                            <div class="ttm-horizontal_sep mt-5"></div>
                            <div class="featured-icon-box icon-align-before-content style20">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-white">
                                        <i class="flaticon flaticon-support"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>If you have any questions or need help contact<br>with our team, or call<a href="contact-us.html"><span> (003) 123 456 7890 </span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 pt-60 res-1199-pt-0">
                    <div class="box-shadow ttm-bg ttm-col-bgimage-yes ttm-right-span col-bg-img-eleven spacing-22">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-darkgrey"></div>
                        <div class="layer-content">
                            <div class="row slick_slider g-0" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 1}} , {"breakpoint":768,"settings":{"slidesToShow": 1}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                <div class="testimonials style5">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/testimonial/12.jpg" alt="testimonial-img" width="80" height="80">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Alex Sam Martin</h3>
                                                        <label>Head Dr. at Dezily</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-20 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">I had heart replacement with Dr. Sam. The surgery went smoothly. I am perfectly fit & fine after surgeries. They knew exactly what I needed!!!!!!. Knew exactly what I needed and was very reassuring. Fantastic post-care & a very good staff backing!.
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials style5">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/testimonial/13.jpg" alt="testimonial-img" width="80" height="80">
                                                    </div>
                                                </div>
                                                <div class="testimonial-caption">
                                                    <h3>Metthew Wood</h3>
                                                    <label>Head Dr. at Dezily</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-30 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">Knew exactly what I needed and was very reassuring. Fantastic post-care & a very good staff backing! Dezily’s care has been top-notch. I felt like I was going to be OK.I had heart replacement with Dr. Sam. The surgery went smoothly and success.
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials style5 ">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/testimonial/14.jpg" alt="testimonial-img" width="80" height="80">
                                                    </div>
                                                </div>
                                                <div class="testimonial-caption">
                                                    <h3>Teresa Mayer</h3>
                                                    <label>Head Dr. at Dezily</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-30 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">I had heart replacement with Dr. Sam. The surgery went smoothly. I am perfectly fit & fine after surgeries. They knew exactly what I needed!!!!!!. Knew exactly what I needed and was very reassuring. Fantastic post-care & a very good staff backing!.

                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-section-end-->

    <!--health-cure-type-section-->
    <section class="ttm-row health-cure-type-section bg-layer-equal-height ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-heading">
                        <h3 class="title font-size-26">Happy Customers & Clients</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="spacing-2">
                        <div class="row slick_slider mx-0" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 5}} , {"breakpoint":768,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-01.png" alt="image" width="158" height="67" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-02.png" alt="image" width="163" height="60" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-03.png" alt="image" width="160" height="68" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-04.png" alt="image" width="164" height="57" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-05.png" alt="image" width="157" height="67" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="client-box">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ asset('/') }}website/assets/images/client/client-06.png" alt="image" width="158" height="68" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--health-cure-type-section-end-->

    <!-- portfolio-section-->
    <section class="ttm-row bottom_zero_padding-section clearfix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <!--section-title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>WHAT WE DO</h3>
                            <h2 class="title">Quality Reability With 100% Setisfaction</h2>
                        </div>
                    </div>
                    <!--section-title-end -->
                </div>
            </div>
            <div class="row slick_slider slick-arrows-style1 pt-20 res-991-pt-10" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "dots":false, "autoplay":false, "centerMode":true, "centerPadding":"262px", "infinite":true, "responsive":[
              {"breakpoint":1200,"settings":{"slidesToShow": 3, "centerPadding":"0px","centerMode":false}},
              {"breakpoint":1024,"settings":{"slidesToShow": 3, "centerPadding":"0px","centerMode":false}},
              {"breakpoint":991,"settings":{"slidesToShow": 2, "centerPadding":"0px","centerMode":false }},
              {"breakpoint":767,"settings":{"slidesToShow":2,"centerPadding":"0px","centerMode":false}},
              {"breakpoint":575,"settings":{"slidesToShow":1,"centerPadding":"0px","centerMode":false}},
              {"breakpoint":400,"settings":{"slidesToShow": 1,"centerPadding":"0px","centerMode":false}}
              ]}'>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <div class="ttm-portfolio-featured-wrapper">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset('/') }}website/assets/images/portfolio/portfolio-01.jpg" width="840" height="840" alt="image" >
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="project-details.html" class="ttm_link"><i class="ti ti-plus"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                        </div>
                    </div><!-- featured-imagebox-portfolio -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/portfolio/portfolio-02.jpg" alt="image" width="840" height="840">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a href="project-details.html" class="ttm_link"><i class="ti ti-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div><!-- featured-imagebox-portfolio -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/portfolio/portfolio-03.jpg" alt="image" width="840" height="840">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a href="project-details.html" class="ttm_link"><i class="ti ti-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div><!-- featured-imagebox-portfolio -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/portfolio/portfolio-04.jpg" alt="image" width="840" height="840">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a href="project-details.html" class="ttm_link"><i class="ti ti-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div><!-- featured-imagebox-portfolio -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('/') }}website/assets/images/portfolio/portfolio-05.jpg" alt="image" width="840" height="840">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a href="project-details.html" class="ttm_link"><i class="ti ti-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div><!-- featured-imagebox-portfolio -->
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio-section end-->
    <section class="ttm-row portfolio-experience-section ttm-bgcolor-darkgrey mt_50 res-991-mt-0 pb-65 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-6">
                            <!-- section title -->
                            <div class="section-title mb-0">
                                <div class="title-header">
                                    <h3 class="ttm-textcolor-skincolor">OUR SKILLS</h3>
                                    <h2 class="title">What Are They Saying  About Our Services</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-lg-6 col-md-6 align-self-center">
                            <div class="d-flex justify-content-start justify-content-md-center ">
                                <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-boxed-view ttm-fid-view-lefticon style4 ttm-textcolor-white">
                                    <div class="ttm-fid-icon-wrapper ttm-icon_element-color-skincolor">
                                        <i class="flaticon flaticon-heart-7"></i>
                                    </div>
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="420" data-interval="50" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">420</span>
                                            <span class="ml_10">+</span>
                                        </h4>
                                        <h3 class="ttm-fid-title">Happy Customer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="">
                         <!-- progress-bar -->
                        <div class="pb-20 pt-15 res-991-pb-0">
                            <div class="ttm-progress-bar style3 mb-35 res-991-mb-30" data-percent="75%">
                                <div class="progress-bar-title">Heart Transplant</div><!-- progress-bar-title -->
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor">
                                    </div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="75"></div>
                                <!-- progress-bar-percent -->
                            </div>
                            <div class="ttm-progress-bar style3" data-percent="95%">
                                <div class="progress-bar-title">Heart surgery</div><!-- progress-bar-title -->
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor">
                                    </div>
                                </div>
                                <div class="progress-bar-percent" data-percentage="95"></div>
                                <!-- progress-bar-percent -->
                            </div>
                        </div><!-- progress-bar END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-section-end-->

    <!-- about-section-->
    <section class="ttm-row about-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>READ OUR BLOG</h3>
                            <h2 class="title mb-0">We Provide Special Service For Patients</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
           <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":767,"settings":{"slidesToShow": 2}},
            {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/blog/blog-14.jpg" width="740" height="568" alt="blog-14">
                            <div class="post-meta">
                                <span class="ttm-meta-line">APRIL 17 2022</span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Can depression increase your risk for heart disease?</a></h3>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user-o"></i>&nbsp;&nbsp;KIMOX</span>
                                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-folder-open-o"></i>&nbsp;&nbsp;HEART SURGERY</span>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="blog-single.html">Read More<i class="icon-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/blog/blog-15.jpg" width="740" height="568" alt="blog-15">
                            <div class="post-meta">
                                <span class="ttm-meta-line">APRIL 15 2022</span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Heart Transplant development solutions for great surgery</a></h3>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user-o"></i>&nbsp;&nbsp;KIMOX</span>
                                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-folder-open-o"></i>&nbsp;&nbsp;HEART SURGERY</span>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="blog-single.html">Read More<i class="icon-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/blog/blog-16.jpg" width="740" height="568" alt="blog-16">
                            <div class="post-meta">
                                <span class="ttm-meta-line">APRIL 12 2022</span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Hard Content We Decide Ourselves A Intently Heart Transplant</a></h3>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user-o"></i>&nbsp;&nbsp;KIMOX</span>
                                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-folder-open-o"></i>&nbsp;&nbsp;HEART SURGERY</span>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="blog-single.html">Read More<i class="icon-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/blog/blog-17.jpg" width="740" height="568" alt="blog-17">
                            <div class="post-meta">
                                <span class="ttm-meta-line">APRIL 08 2022</span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3><a href="blog-single.html">How to take care of Heart  Health?</a></h3>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user-o"></i>&nbsp;&nbsp;KIMOX</span>
                                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-folder-open-o"></i>&nbsp;&nbsp;HEART SURGERY</span>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="blog-single.html">Read More<i class="icon-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/images/blog/blog-18.jpg" width="740" height="568" alt="blog-18">
                            <div class="post-meta">
                                <span class="ttm-meta-line">APRIL 03 2022</span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3><a href="blog-single.html">5 Ways to Overcome Your Stumbling Blocks to a Healthy Heart</a></h3>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user-o"></i>&nbsp;&nbsp;KIMOX</span>
                                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-folder-open-o"></i>&nbsp;&nbsp;HEART SURGERY</span>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="blog-single.html">Read More<i class="icon-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </section>
    <!-- about-section-end-->

</div>
@endsection
