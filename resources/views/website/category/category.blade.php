@extends('website.master')

@section('title')
Medico | Website-Doctor
@endsection

@section('body')
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Heart Surgery</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="breadcrumb-wrapper-inner">
                                <span><a title="Dezily" href="{{ route('home') }}" class="home">Home</a></span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>Doctors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title-end -->

<!--site-main start-->
<div class="site-main">
    <section class="ttm-row our-team clearfix">
        <div class="container">
            <div class="row mr_30 ml_30 res-1199-ml-0 res-1199-mr-0">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/01.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="{{ route('doctor.details') }}" tabindex="0">Dr. Sarah Rose</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div>
                                    <p class="mb-1">Designation:</p>
                                    <h6>Assistant Professor</h6>
                                    <p class="mb-1">Exprience:</p>
                                    <h6>3 years</h6>
                                </div>
                            </div>
                            <a href="{{ route('doctor.details') }}" class="btn btn-success mx-auto">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/02.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="team-details.html" tabindex="0">Dr. Gordian Mon</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div class="media-block">
                                    <ul class="social-icons">
                                        <li class="social-facebook"><a href="https://www.facebook.com/themetechMount18" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://twitter.com/themetechmount" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-pinterest"><a href="https://in.pinterest.com/themetechmount/_created/" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/03.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="team-details.html" tabindex="0">Dr. Annia Konikova</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div class="media-block">
                                    <ul class="social-icons">
                                        <li class="social-facebook"><a href="https://www.facebook.com/themetechMount18" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://twitter.com/themetechmount" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-pinterest"><a href="https://in.pinterest.com/themetechmount/_created/" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/04.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="team-details.html" tabindex="0">Dr. Garreth Mills</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div class="media-block">
                                    <ul class="social-icons">
                                        <li class="social-facebook"><a href="https://www.facebook.com/themetechMount18" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://twitter.com/themetechmount" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-pinterest"><a href="https://in.pinterest.com/themetechmount/_created/" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/05.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="team-details.html" tabindex="0">Dr. Maria Gordian</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div class="media-block">
                                    <ul class="social-icons">
                                        <li class="social-facebook"><a href="https://www.facebook.com/themetechMount18" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://twitter.com/themetechmount" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-pinterest"><a href="https://in.pinterest.com/themetechmount/_created/" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-team style2">
                        <div class="featured-thumbnail">
                            <img width="564" height="564" class="img-fluid" src="{{ asset('/') }}website/assets/images/team/06.jpg" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="team-details.html" tabindex="0">Dr. Natalia Zox</a></h3>
                            </div>
                            <div class="featured-iconbox ttm-media-link">
                                <div class="media-block">
                                    <ul class="social-icons">
                                        <li class="social-facebook"><a href="https://www.facebook.com/themetechMount18" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://twitter.com/themetechmount" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-pinterest"><a href="https://in.pinterest.com/themetechmount/_created/" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
