@extends('layouts.master')
@section('content')

	<div class="wrapper wrapper-box">
		<!--Header Area Start-->
		@include('layouts.includes._defaultheader')
		<!--Header Area Start-->
		<!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><span class="ion-android-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                <form>
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                        <button>
                            <i class="ion-android-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- main-search End -->
		<!--Breadcrumb Area Start-->
		<div class="breadcrumb-area pb-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
                        <div class="breadcrumb-bg">
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ul>
                            <h2>About Us</h2>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Breadcrumb Area End-->
		<!--About Us Area Start-->
        <div class="about-us-area pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!--About Us Image Start-->
                        <div class="about-us-img-wrapper mb-30">
                            <div class="about-us-image img-full">
                                <a href="#"><img src="img/about/about2.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--About Us Image End-->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!--About Us Content Start-->
                        <div class="about-us-content">
                            <h2>Our company</h2>
                            <p class="mb-20">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                            <p class="mb-20">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo volup.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
                            <a href="#" class="default-btn">read more</a>
                        </div>
                        <!--About Us Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Area End-->
        <!--About Us Team Start-->
        <div class="about-us-team-area pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-title mb-50">
                            <h3 class="about-title">our exclusive team</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labo.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="img/team/team1.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Marcos Alonso</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                    <div class="col-md-4">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="img/team/team2.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Md Shohel</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                    <div class="col-md-4">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="img/team/team3.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Charlotte Taylor</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Team End-->
        <!--Testimonial Area Start-->
		<div class="testimonial-area testimonial-bg pt-75 pb-75 mb-80">
		    <div class="container">
		        <div class="row">
		            <div class="testimonial-slider owl-carousel">
		                <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="img/testimonial/testimonial1.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc">  All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you ! ..</p>
                                    <p class="testimonial-author">Alva Ono</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
		                <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="img/testimonial/testimonial2.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc">Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much! ..</p>
                                    <p class="testimonial-author">Amber Laha</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
		                <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="img/testimonial/testimonial3.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc"> Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated. Att Renan Andrade ..</p>
                                    <p class="testimonial-author">Dewey Tetzlaff</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
		                <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="img/testimonial/testimonial4.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc">  All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you ! ..</p>
                                    <p class="testimonial-author">Lavina Wilderman</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
		                <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="img/testimonial/testimonial5.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc">  All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you ! ..</p>
                                    <p class="testimonial-author">Stefano</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Testimonial Area End-->
		<!--Footer Area Start-->
		@include('layouts.includes.footer')
		<!--Footer Area End-->
    </div>
@stop

