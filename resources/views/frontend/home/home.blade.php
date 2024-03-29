@extends('frontend.home.index')

@section('content')
    
<!-- Start Popular Products Section -->
<section class="popular-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h4>POPULAR PRODUCTS</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="products-slider4 same-nav owl-carousel owl-theme" data-margin="30" data-dots="false" data-nav="true">
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-box common-cart-box">
                            <div class="product-img common-cart-img">
                                <img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                    <div class="add-cart-btn">
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                    <ul class="hover-icon">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                                <a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Products Section -->

<!-- Start Best Saller Section -->
<section class="best-saller">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title text-center">
                	<h4>Best Saller</h4>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="products-slider4 same-nav owl-carousel owl-theme" data-margin="30" data-dots="false" data-nav="true">
                	<div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="Saller-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="Saller-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="saller-box common-cart-box">
                        	<div class="saller-img common-cart-img">
                            	<img src="{{ asset('frontend/image/placeholder_4.jpg') }}" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="saller-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Best Saller Section -->

<!-- Start Review Saller Section -->
<section class="review-section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="carousel_slide1 review-slider bg_red same-nav owl-carousel owl-theme">
                	<div class="item review-box">
                    	<div class="client-img">
                        	<img src="{{ asset('frontend/image/placeholder_6.jpg') }}" alt="client-img">
                        </div>
                        <div class="client-text">
                        	<div class="quote-icon"><img src="{{ asset('frontend
                                /image/quote-icon.png') }}" alt="quote-icon"></div>
                            <p>Maecenas semper aliquam massa. Praesent pharetra semvitae nisi eleifend molestie.Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum ornare.</p>
                            <a href="#">- William Genske</a>
                        </div>
                    </div>
                    <div class="item review-box">
                    	<div class="client-img">
                        	<img src="{{ asset('frontend/image/placeholder_6.jpg') }}" alt="client-img">
                        </div>
                        <div class="client-text">
                        	<div class="quote-icon"><img src="{{ asset('frontend/image/quote-icon.png') }}" alt="quote-icon"></div>
                            <p>Maecenas semper aliquam massa. Praesent pharetra semvitae nisi eleifend molestie.Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum ornare.</p>
                            <a href="#">- William Genske</a>
                        </div>
                    </div>
                    <div class="item review-box">
                    	<div class="client-img">
                        	<img src="{{ asset('frontend/image/placeholder_6.jpg') }}" alt="client-img">
                        </div>
                        <div class="client-text">
                        	<div class="quote-icon"><img src="{{ asset('frontend/image/quote-icon.png') }}" alt="quote-icon"></div>
                            <p>Maecenas semper aliquam massa. Praesent pharetra semvitae nisi eleifend molestie.Aliquam molestie scelerisque ultricies. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor dictum ornare.</p>
                            <a href="#">- William Genske</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Review Section -->

<!-- Start News Section -->
<section class="news-section pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title text-center">
                	<h4>LATEST NEWS</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6 col-sm-6">
            	<div class="news-box box-1">
                	<div class="news-img">
                    	<img src="{{ asset('frontend/image/placeholder_7.jpg') }}" alt="news-img">
                        <div class="date-box text-center text-uppercase">
                        	<h5>03 <br>Jan</h5>
                        </div>
                    </div>
                    <div class="news-info text-center">
                    	<h5><a href="blog-detail.html">Simply tips for beauty</a></h5>
                        <p class="comments">Posted by <a href="#"><i>admin</i> - 2 Comments</a></p>
                        <p class="news-text">Mauris eu euismod tellus curabitur a neque in nulla iaculis...</p>
                        <a href="blog-detail.html" class="read-more">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
            	<div class="news-box box-2">
                	<div class="news-img">
                    	<img src="{{ asset('frontend/image/placeholder_7.jpg') }}" alt="news-img">
                        <div class="date-box text-center text-uppercase">
                        	<h5>03 <br>Jan</h5>
                        </div>
                    </div>
                    <div class="news-info text-center">
                    	<h5><a href="blog-detail.html">Simply tips for beauty</a></h5>
                        <p class="comments">Posted by <a href="#"><i>admin</i> - 5 Comments</a></p>
                        <p class="news-text">Mauris eu euismod tellus curabitur a neque in nulla iaculis...</p>
                        <a href="blog-detail.html" class="read-more">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
            	<div class="news-box box-3">
                	<div class="news-img">
                    	<img src="image/placeholder_7.jpg" alt="news-img">
                        <div class="date-box text-center text-uppercase">
                        	<h5>03 <br>Jan</h5>
                        </div>
                    </div>
                    <div class="news-info text-center">
                    	<h5><a href="blog-detail.html">Simply tips for beauty</a></h5>
                        <p class="comments">Posted by <a href="#"><i>admin</i> - 3 Comments</a></p>
                        <p class="news-text">Mauris eu euismod tellus curabitur a neque in nulla iaculis...</p>
                        <a href="blog-detail.html" class="read-more">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Section -->

<!-- Start Subscribe Section -->
<section class="subscribe-section pt_large pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title white-title text-center">
                	<h4>Follow Our Updates!</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-10 col-sm-12">
            	<div class="subscribe-inner text-center">
                	<p>If you want to get an email from us every time we have a new special offer, then sign up here!</p>
                    <form class="subscribe-form">
                    	<div class="subscribe-input">
                        	<input name="your-email" required="" placeholder="Enter Your Email" type="email">
                        </div>
                        <div class="send-btn">
                        	<button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->

<!-- Start Facility Section-->
<section class="facility-section pb_large pt_large">
	<div class="container">
    	<div class="row">
            <div class="col-md-3 col-6 facility-box box-1">
				<div class="facility-inner">
                    <div class="fb-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="fb-text">
                        <h5>FREE DELIVERY</h5>
                        <span>Worldwide</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 facility-box box-2">
            	<div class="facility-inner">
                    <div class="fb-icon">
                        <i class="fa fa-headphones"></i>
                    </div>
                    <div class="fb-text">
                        <h5>24/ 7 SUPPORT</h5>
                        <span>Customer Support</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 facility-box box-3">
            	<div class="facility-inner">
                    <div class="fb-icon">
                        <i class="fa fa-cc-mastercard"></i>
                    </div>
                    <div class="fb-text">
                        <h5>PAYMENT</h5>
                        <span>Secure System</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 facility-box box-4">
            	<div class="facility-inner">
                    <div class="fb-icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <div class="fb-text">
                        <h5>TRUSTED</h5>
                        <span>enuine Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Facility Section-->
@endsection