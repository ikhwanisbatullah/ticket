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
                                <li>Single Blog</li>
                            </ul>
                            <h2>Single Blog</h2>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Breadcrumb Area End-->
		<!--Blog Area Start-->
        <div class="blog-area pb-30">
            <div class="container">
                <div class="row">
                    <!--Blog Post Start-->
                    <div class="col-lg-9">
                        <div class="blog_area">
                            <article class="blog_single blog-details">
                                <header class="entry-header">
                                    <span class="post-category">
                                        <a href="#"> Fashion</a>,<a href="#">WordPress</a>
                                    </span>
                                    <h2 class="entry-title">
                                        Blog image post
                                    </h2>
                                    <span class="post-author">
                                    <span class="post-by"> Posts by : </span> admin </span>
                                    <span class="post-separator">|</span>
                                    <span class="post-date"><i class="fas fa-calendar-alt"></i>On March 10, 2018 </span>
                                </header>
                                <div class="post-thumbnail img-full">
                                    <img src="img/blog/blog1.jpg" alt="">
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-info">
                                        <div class="entry-summary blog-post-description">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
                                            <blockquote><p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p></blockquote>
                                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                            <!--Blog Post Tag-->
                                            <div class="single-post-tag">
                                                <a href="#">3 comments</a>
                                                Tags: 
                                                <a href="">fashion</a>,
                                                <a href="">t-shirt</a>,
                                                <a href="">white</a>,
                                            </div>
                                            <!--Blog Post Tag-->
                                            <a href="single-blog.html" class="form-button">Read More</a>
                                            <div class="social-sharing">
                                                <div class="widget widget_socialsharing_widget">
                                                    <h3 class="widget-title">Share this post</h3>
                                                    <ul class="blog-social-icons">
                                                        <li>
                                                            <a target="_blank" title="Facebook" href="#" class="facebook social-icon">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="twitter" href="#" class="twitter social-icon">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="pinterest" href="#" class="pinterest social-icon">
                                                                <i class="fa fa-pinterest"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="linkedin" href="#" class="linkedin social-icon">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="relatedposts">
                                <h3>Related posts</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="relatedthumb">
                                            <div class="image img-full">
                                                <a href="#"><img src="img/blog/blog2.jpg" alt=""></a>
                                            </div>
                                            <h4><a href="#">Post with Gallery</a></h4>
                                            <span class="rl-post-date">December 1, 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="relatedthumb">
                                            <div class="image img-full">
                                                <a href="#"><img src="img/blog/blog4.jpg" alt=""></a>
                                            </div>
                                            <h4><a href="#">Post with Gallery</a></h4>
                                            <span class="rl-post-date">December 1, 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="relatedthumb">
                                            <div class="image img-full">
                                                <a href="#"><img src="img/blog/blog3.jpg" alt=""></a>
                                            </div>
                                            <h4><a href="#">Post with Gallery</a></h4>
                                            <span class="rl-post-date">December 1, 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Comment Area Start-->
                        <div class="comments-area mt-80">
                            <h3>3 comments</h3>
                            <ol class="commentlist">
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-avatar img-full">
                                            <img src="img/icon/author.png" alt="">
                                        </div>
                                        <div class="comment-info">
                                            <a href="#">admin</a>
                                            <div class="reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <span class="date">October 6, 2014 at 1:38 am</span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar img-full">
                                                    <img src="img/icon/admin.jpg" alt="">
                                                </div>
                                                <div class="comment-info">
                                                    <a href="#">admin</a>
                                                    <div class="reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <span class="date">October 6, 2014 at 1:38 am</span>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <ol class="commentlist">
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-avatar img-full">
                                            <img src="img/icon/author.png" alt="">
                                        </div>
                                        <div class="comment-info">
                                            <a href="#">admin</a>
                                            <div class="reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <span class="date">October 6, 2014 at 1:38 am</span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="comment-box mt-30 mb-40">
                            <h3>Leave a Comment</h3>
                            <form action="#">
                               <p class="comment-note"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <label>Comment*</label>
                                            <textarea name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input">
                                            <label>Name*</label>
                                            <input name="commenter-name" id="commenter-name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input">
                                            <label>Email*</label>
                                            <input name="commenter-email" id="commenter-email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input">
                                            <label>Website*</label>
                                            <input name="commenter-url" id="commenter-url" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <button class="form-button" type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--Comment Area End-->
                    </div>
                    <!--Blog Post End-->
                    <!--Blog Sidebar Start-->
                    <div class="col-lg-3">
                        <div class="blog_sidebar">
                            <div class="row_products_side">
                                <div class="product_left_sidbar">
                                    <div class="product-filter  mb-35">
                                      <h5>Search </h5>
                                      <div class="search__sidbar">
                                         <div class="input_form">
                                            <input id="search_input" name="s" value="Search..." class="input_text" type="text">
                                            <button id="blogsearchsubmit" type="submit" class="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                         </div>
                                      </div>
                                    </div>
                                    <div class="product-filter  mb-35">
                                      <h5>Blog Archives </h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <li>
                                                    <a href="#">March 2015</a>&nbsp;(1)</li>
                                                <li>
                                                    <a href="#">December 2014</a>&nbsp;(3)</li>
                                                <li>
                                                    <a href="#">November 2014</a>&nbsp;(4)</li>
                                                <li>
                                                    <a href="#">September 2014</a>&nbsp;(1)</li>
                                                <li>
                                                    <a href="#">August 2014</a>&nbsp;(1)</li>
                                            </ul>
                                      </div>
                                    </div>
                                    <div class="product-filter  mb-35">
                                        <h5>Recent Posts</h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <li> <a href="#">Blog image post</a>&nbsp;(1)</li>
                                                <li> <a href="#">Post with Gallery</a>&nbsp;(3)</li>
                                                <li><a href="#">Post with Audio</a>&nbsp;(4)</li>
                                                <li><a href="#">Post with Video</a>&nbsp;(1)</li>
                                                <li><a href="#">Post with Text</a>&nbsp;(1)</li>
                                                
                                            </ul>
                                      </div>
                                    </div>
                                    <div class="product-filter  mb-35">
                                        <h5>instagram</h5>
                                        <ul id="instagram-feed"></ul>
                                    </div>
                                    <div class="product-filter  mb-35">
                                        <div class="anadi-single-banner">
                                            <div class="banner-img img-full">
                                                <a href="#"><img src="img/banner/shop-sidebar.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-filter mb-35">
                                        <h5>tags</h5>
                                       <div class="product-tag-style blog-tag">
                                            <ul>
                                                <li><a href="#">brand</a></li>
                                                <li><a href="#">black</a></li>
                                                <li><a href="#">white</a></li>
                                                <li><a href="#">chire</a></li>
                                                <li><a href="#">table</a></li>
                                                <li><a href="#">Lorem</a></li>
                                                <li><a href="#">ipsum</a></li>
                                                <li><a href="#">dolor</a></li>
                                                <li><a href="#">sit</a></li>
                                                <li><a href="#">amet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Sidebar End-->
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
                                <img src="img/single-product/small/single-product1.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/small/single-product2.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/small/single-product3.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/small/single-product4.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="img/single-product/small/single-product5.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                        </div>
                        <!--Modal Content End-->
                        <!--Modal Tab Menu Start-->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
                                <div class="single-tab-menu img-full">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="img/single-product/small/single-product1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="img/single-product/small/single-product2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="img/single-product/small/single-product3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="img/single-product/small/single-product4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="img/single-product/small/single-product5.jpg" alt=""></a>
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
                                   <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                   <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                   <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                   <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href=""><i class="fa fa-linkedin"></i></a></li>
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
