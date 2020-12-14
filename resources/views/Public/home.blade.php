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
		<!--Slider Area Start-->
		<div class="slider-area">
		    <div class="hero-slider owl-carousel">
		        <!--Single Slider Start-->
		        <div class="single-slider" style="background-image: url(/public/img/slider/home1-slider1.jpg)"> 
                    <div class="hero-slider-content">
                        <h1>let’s solve hunger together with monthly Offer</h1>
                        <h2>Tumbler  Alarm Clock</h2>
                        <div class="slider-btn">
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
		        </div>
		        <!--Single Slider End-->
		        <!--Single Slider Start-->
		        <div class="single-slider" style="background-image: url(/public/img/slider/home1-slider2.jpg)">   
                    <div class="hero-slider-content">
                        <h1>let’s solve hunger together with monthly Offer</h1>
                        <h2>Perfect Bottle Grinder</h2>
                        <div class="slider-btn">
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
		        </div>
		        <!--Single Slider End-->
		    </div>
		</div>
		<!--Slider Area End-->
		<!--Feature Area Start-->
		<div class="feature-area pt-80 pb-50">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-6">
		                <!--Single Feature Area Start-->
		                <div class="single-feature-area mb-30">
		                    <div class="feature-content">
		                        <h3>free shipping worldwide</h3>
		                    </div>
		                </div>
		                <!--Single Feature Area End-->
		            </div>
		            <div class="col-lg-4 col-md-6">
		                <!--Single Feature Area Start-->
		                <div class="single-feature-area mb-30">
		                    <div class="feature-content">
		                        <h3>free shipping worldwide</h3>
		                    </div>
		                </div>
		                <!--Single Feature Area End-->
		            </div>
		            <div class="col-lg-4 col-md-6">
		                <!--Single Feature Area Start-->
		                <div class="single-feature-area mb-30">
		                    <div class="feature-content">
		                        <h3>free shipping worldwide</h3>
		                    </div>
		                </div>
		                <!--Single Feature Area End-->
		            </div>
		        </div>
		    </div>
		</div>
		<!--Feature Area End-->
		<!--Our Collection Area Start-->
		
		<!--Our Collection Area End-->
		<!--Product Area Start-->
		
		<!--Product Area End-->
		<!--Deal Product Area Start-->
		<!--Deal Product Area End-->
		<!--List Product Area Start-->
		<div class="list-product-area pt-80 pb-30">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-12">
		                <div class="row">
		                    <div class="col-12">
		                        <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>New Arrivals</h2>
                                </div>
                                <!--List Product Section Title End-->
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-12">
		                        <div class="list-product-slider owl-carousel">
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$90.80</span>
                                                    <span class="regular-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product3.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">ASUS ZenBook</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$104.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product4.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$80.80</span>
                                                    <span class="regular-price">$86.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product5.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire E 15</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$602.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product6.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire Desktop</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$98.00</span>
                                                    <span class="regular-price">$122.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Samsung Galaxy Tab A</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$241.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product8.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-12">
		                <div class="row">
		                    <div class="col-12">
		                        <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Best Seller</h2>
                                </div>
                                <!--List Product Section Title End-->
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-12">
		                        <div class="list-product-slider owl-carousel">
                                    <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product4.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$80.80</span>
                                                    <span class="regular-price">$86.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product5.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire E 15</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$602.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product6.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire Desktop</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$98.00</span>
                                                    <span class="regular-price">$122.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$90.80</span>
                                                    <span class="regular-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product3.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">ASUS ZenBook</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$104.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Samsung Galaxy Tab A</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$241.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product8.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-12">
		                <div class="row">
		                    <div class="col-12">
		                        <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Most view</h2>
                                </div>
                                <!--List Product Section Title End-->
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-12">
		                        <div class="list-product-slider owl-carousel">
                                    <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Samsung Galaxy Tab A</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$241.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product8.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$78.80</span>
                                                    <span class="regular-price">$80.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">HP Notebook 15-ay011nr</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$90.80</span>
                                                    <span class="regular-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product3.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">ASUS ZenBook</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$104.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                            <div class="list-slider-group">
		                                <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product4.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$80.80</span>
                                                    <span class="regular-price">$86.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product5.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire E 15</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$602.80</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
                                        <!--Single List Product Start-->
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="single-product.html"><img src="/public/img/product/product6.jpg" alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Acer Aspire Desktop</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$98.00</span>
                                                    <span class="regular-price">$122.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Add To Cart</a>
                                            </div>
                                        </div>
                                        <!--Single List Product End-->
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--List Product Area End-->
		<!--About Area Start-->
		
		<!--About Area End-->
		<!--Brand Area Start-->
		<div class="brand-area pt-70">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="brand-active owl-carousel">
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand1.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand2.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand3.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand4.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand5.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand1.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand4.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/public/img/brand/brand5.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Brand Area End-->
		<!--Blog Area Start-->
		<div class="blog-area pt-10 pb-75">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title 2 Start-->
		                <div class="section-title2">
		                    <h2>from our blogs</h2>
		                </div>
		                <!--Section Title 2 End-->
		            </div>
		        </div>
		        <div class="row">
		            <div class="blog-slider owl-carousel">
                        <div class="col-md-12">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html"><img src="/public/img/blog/small/blog1.jpg" alt=""><span class="icon-view"></span></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="single-blog.html">Best of Hair & Makeup New York Spring/Summer 2016</a></h3>
                                    <div class="blog-meta">
                                        <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                    </div>
                                    <a class="read-btn" href="single-blog.html">read more</a>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-12">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html"><img src="/public/img/blog/small/blog2.jpg" alt=""><span class="icon-view"></span></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="single-blog.html">Dior F/W 2015 First Fashion Show in 360• Experience</a></h3>
                                    <div class="blog-meta">
                                        <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                    </div>
                                    <a class="read-btn" href="single-blog.html">read more</a>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-12">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html"><img src="/public/img/blog/small/blog1.jpg" alt=""><span class="icon-view"></span></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="single-blog.html">Best of Hair & Makeup New York Spring/Summer 2016</a></h3>
                                    <div class="blog-meta">
                                        <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                    </div>
                                    <a class="read-btn" href="single-blog.html">read more</a>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-12">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html"><img src="/public/img/blog/small/blog2.jpg" alt=""><span class="icon-view"></span></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="single-blog.html">Mercedes Benz Fashion Week – Mirror To The Soul 360</a></h3>
                                    <div class="blog-meta">
                                        <p class="author-name">post by: <span>HasTech</span> - 30 Oct 2017</p>
                                    </div>
                                    <a class="read-btn" href="single-blog.html">read more</a>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Blog Area End-->
        <!--Footer Area Start-->
        @include('layouts.includes.footer')
		<!--Footer Area End-->
		<!-- Modal Area Strat -->
        <div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <!--Modal Img-->
                    <div class="col-md-5">
                        <!--Modal Tab Content Start-->
                        <div class="tab-content product-details-large" id="myTabContent">
                          <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="/public/img/single-product/small/single-product1.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="/public/img/single-product/small/single-product2.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="/public/img/single-product/small/single-product3.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="/public/img/single-product/small/single-product4.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="/public/img/single-product/small/single-product5.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                        </div>
                        <!--Modal Content End-->
                        <!--Modal Tab Menu Start-->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
                                <div class="single-tab-menu img-full">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="/public/img/single-product/small/single-product1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="/public/img/single-product/small/single-product2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="/public/img/single-product/small/single-product3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="/public/img/single-product/small/single-product4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="/public/img/single-product/small/single-product5.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tab Menu End-->
                    </div>
                    <!--Modal Img-->
                    <!--Modal Content-->
                    <div class="col-md-7">
                        <div class="modal-product-info">
                            <h1>Sit voluptatem</h1>
                            <div class="modal-product-price">
                               <span class="old-price">$74.00</span>
                               <span class="new-price">$69.00</span>
                           </div>
                           <a href="single-product.html" class="see-all">See all features</a>
                           <div class="add-to-cart quantity">
                                <form class="add-quantity" action="#">
                                     <div class="modal-quantity">
                                         <input type="number" value="1">
                                     </div>
                                    <div class="add-to-link">
                                        <button class="form-button" data-text="add to cart">add to cart</button>
                                    </div>
                                </form>
                           </div>
                           <div class="cart-description">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus.</p>
                           </div>
                            <div class="social-share">
                               <h3>Share this product</h3>
                               <ul class="socil-icon2">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <!--Modal Content-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Area End -->
    </div>
    @stop
