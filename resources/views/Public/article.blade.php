@extends('layouts.master')
@section('content')

	<div class="wrapper wrapper-box">
		<!--Header Area Start-->
		<header>
            @include('layouts.includes._defaultheader')
        </header>
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
                                <li>Blog</li>
                            </ul>
                            <h2>Blog</h2>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Breadcrumb Area End-->
		<!--Blog Area Start-->
		<div class="blog-area pb-50">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full">
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog1.jpg" alt=""><span class="icon-view"></span></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">Blog image post</a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full blog-image-gallery">
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog1.jpg" alt=""></a>
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog2.jpg" alt=""></a>
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog3.jpg" alt=""></a>
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog4.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">Post with Gallery </a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full">
                                <div class="blog-audio embed-responsive embed-responsive-16by9">
                                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/423752469&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">Post With Audio</a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full">
                                <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/5T-_dYz8Uvw"></iframe>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">Post with Video</a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full">
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog2.jpg" alt=""><span class="icon-view"></span></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">Best of Hair & Makeup New York Spring/Summer 2016</a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		            <div class="col-md-6">
		                <!--Single Blog Start-->
                        <div class="single-blog mb-30">
                            <div class="blog-img img-full">
                                <a href="single-blog.html"><img src="/public/img/blog/small/blog3.jpg" alt=""><span class="icon-view"></span></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="single-blog.html">London Fashion Week 360° Candy Rock & Royal Fashion Day</a></h3>
                                <div class="blog-meta">
                                    <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                </div>
                                <div class="blog-des">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. </p>
                                </div>
                                <a class="read-btn" href="single-blog.html">read more</a>
                            </div>
                        </div>
                        <!--Single Blog End-->
		            </div>
		        </div>
		    </div>
		</div>
		<!--Blog Area End-->
        <!--Footer Area Start-->
        @include('layouts.includes.footer')
		<!--Footer Area End-->
	</div>
@stop