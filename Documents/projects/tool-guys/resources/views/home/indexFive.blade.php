
@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '" />';
$header='flase';
$footer='flase';
@endphp

<x-default-layout>
    <!-- ..::Header Section Start Here::.. -->
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Banner Section Start Here::.. -->
    <div class="banner banner-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper bannerSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ route('productDetails') }}" class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Weekend Discount</span>
                                        <h1 class="product-title">Инструменты для настоящего <br>
                                            <span>профессионала</span></h1>
                                        <span class="product-price">
                                            <span>От:</span>
                                             ₽3500
                                        </span>
                                    </div>
                                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/slider-1.png') }}"
                                                                    alt="product-thumb"></div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Weekend Discount</span>
                                        <h1 class="product-title">Инструменты для настоящего <br>
                                            <span>профессионала</span></h1>
                                        <span class="product-price">
                                            <span>От:</span>  ₽3500
                                        </span>
                                    </div>
                                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/slider-1.png') }}"
                                                                    alt="product-thumb"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-up"></i></div>
                            <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-12">--}}
{{--                            <a href="{{ route('productDetails') }}" class="product-box product-box-medium">--}}
{{--                                <div class="contents">--}}
{{--                                    <span class="pretitle">-45% Offer</span>--}}
{{--                                    <h1 class="product-title">New--}}
{{--                                        <span>Smartphone</span></h1>--}}
{{--                                    <p>Don't miss the last opportunity</p>--}}
{{--                                </div>--}}
{{--                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/iphone-13.webp') }}"--}}
{{--                                                                alt="product-thumb"></div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-12">--}}
{{--                            <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium2">--}}
{{--                                <div class="contents">--}}
{{--                                    <span class="pretitle">Great Stores</span>--}}
{{--                                    <h1 class="product-title">Call for up to 30% off</h1>--}}
{{--                                    <div class="view-collections go-btn">View Collections <i--}}
{{--                                                class="fal fa-long-arrow-right"></i></div>--}}
{{--                                </div>--}}
{{--                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/headphone.webp') }}"--}}
{{--                                                                alt="product-thumb"></div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-12">--}}
{{--                            <a href="{{ route('productDetails') }}"--}}
{{--                               class="product-box product-box-medium product-box-medium3 product-box-bg">--}}
{{--                                <div class="contents">--}}
{{--                                    <span class="pretitle">SUPER DISCOUNT</span>--}}
{{--                                    <h1 class="product-title">Home Speaker</h1>--}}
{{--                                    <div class="view-collections go-btn">Shop Now <i--}}
{{--                                                class="fal fa-long-arrow-right"></i></div>--}}
{{--                                </div>--}}
{{--                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/speaker.webp') }}"--}}
{{--                                                                alt="product-thumb"></div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- ..::Banner Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="rts-services-section section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/shipment.svg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Выгодные цены</h3>
                            <p>Чем больше срок аренды тем дешевле</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/support.svg') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Быстрая доставка</h3>
                            <p>Доставка по Москве и МО возможна в день заказа</p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-3 col-md-6">--}}
{{--                    <div class="service-item">--}}
{{--                        <div class="service-icon"><img src="{{ asset('assets/images/icons/return.svg') }}" alt="service-icon">--}}
{{--                        </div>--}}
{{--                        <div class="contents">--}}
{{--                            <h3 class="service-title">Money Return</h3>--}}
{{--                            <p>Orders are shipped seamlessly--}}
{{--                                between countries</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-xl-3 col-md-12">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icons/discount.svg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Выгодные цены</h3>
                            <p> Чем больше срок аренды тем дешевле</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Featured Products Section Start Here::.. -->
    <div class="rts-featured_products-section section-5 section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5 ">Лидеры проката</span>
                <a href="shop-main" class="go-btn"> <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="products-area">
                <div class="swiper rts-fiveSlide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/1.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Pronix Smart Laptop</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/2.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Pronix Smart Laptop</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/3.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Pronix Camera</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/5.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Extra Powerful PC Cooler</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/6.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Extra Powerful PC Cooler</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area">
                        <div class="swiper-pag"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Products Section End Here::.. -->

    <!-- ..::Posters Section Start Here::.. -->
    <div class="rts-posters-section section-5 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium2">
                        <div class="contents">
                            <span class="pretitle">Great Stores</span>
                            <h1 class="product-title">Last Call for up <br> to 30% off</h1>
                            <div class="view-collections go-btn">View Collections <i
                                        class="fal fa-long-arrow-right"></i></div>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/pot.png') }}" alt="product-thumb">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium mid">
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">New
                                <span>Smartphone</span></h1>
                            <p>Don't miss the last opportunity</p>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/phones.png') }}"
                                                        alt="product-thumb"></div>
                    </a>
                </div>
                <div class="col-xl-3">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <span class="pretitle">ELECTRONICS</span>
                            <h1 class="product-title">Home Speaker</h1>
                            <div class="view-collections go-btn">Shop Now <i class="fal fa-long-arrow-right"></i></div>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/machine.png') }}"
                                                        alt="product-thumb"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Posters Section End Here::.. -->

    <!-- ..::Deal Section Start Here::.. -->
    <div class="rts-deal-section section-gap">
        <div class="container position-relative">
            <div class="section-header section-header4">
                <div class="flex-wrapper">
                    <span class="section-title section-title-2 mb--5
                ">Super Deals Of The Week</span>
                    <div class="countdown" id="countdown">
                        <ul>
                            <li><span id="days"></span>D</li>
                            <li><span id="hours"></span>H</li>
                            <li><span id="minutes"></span>M</li>
                            <li><span id="seconds"></span>S</li>
                        </ul>
                    </div>
                </div>
                <a href="shop-main" class="go-btn">All Products <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="swiper oneSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="deal-box">
                            <div class="deal-box-inner">
                                <div class="deal-product">
                                    <div class="filter-buttons">
                                        <div class="filter-btn" data-show=".one"><img
                                                    src="{{ asset('assets/images/products/home4/deal/1.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn" data-show=".two"><img
                                                    src="{{ asset('assets/images/products/home4/deal/2.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn" data-show=".three"><img
                                                    src="{{ asset('assets/images/products/home4/deal/3.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn last-child" data-show=".four"><img
                                                    src="{{ asset('assets/images/products/home4/deal/4.png') }}" alt="filter-image"></div>
                                    </div>
                                    <div class="product-area">
                                        <div class="product detail-product one filterd-items">
                                            <div class="product-thumb"><img
                                                        src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                        alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                            class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                                class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                                class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product two filterd-items hide">
                                            <div class="product-thumb"><img
                                                        src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                        alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                            class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                                class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                                class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product three filterd-items hide">
                                            <div class="product-thumb"><img
                                                        src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                        alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                            class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                                class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                                class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product four filterd-items hide">
                                            <div class="product-thumb"><img
                                                        src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                        alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                            class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                                class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                                class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-box">
                                    <div class="product">
                                        <div class="product-thumb"><img
                                                    src="{{ asset('assets/images/products/home4/deal/side-product.png') }}"
                                                    alt="product-thumb"></div>
                                        <div class="contents">
                                            <span class="product-catagory">Electronics</span>
                                            <h2 class="product-title">Samsung Ultra Wide 92” Monitor</h2>
                                            <span class="product-price">$230,00<span
                                                        class="old-price">$460,00</span></span>
                                            <button class="cart-btn"><i class="fal fa-shopping-cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-navigation">
            <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-right"></i></div>
        </div>
    </div>
    <!-- ..::Deal Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="rts-best-catagory-section section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Best Category</span>
                <a href="shop-main" class="go-btn">Other Category <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Cell Phones</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">iPhone <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Phone Accessories <i class="fal fa-angle-right"></i></a>
                                </li>
                                <li><a href="{{ route('category') }}">Phone Cases <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Postpaid Phones <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">All Cell Phones <i
                                        class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/1.png') }}"
                                                         alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Headphones</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Noise Canceling <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Over-EAR <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Premium Headphones <i class="fal fa-angle-right"></i></a>
                                </li>
                                <li><a href="{{ route('category') }}">Sports & Fitness <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">Headphones <i
                                        class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/2.png') }}"
                                                         alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Watches</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Sport Watches <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Timex Watches <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Watch Brands <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Women Watches <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">All Watches <i
                                        class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/3.png') }}"
                                                         alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Monitors</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Gaming <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Ultra Wide <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Office <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">TV <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">All Monitors <i
                                        class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/4.png') }}"
                                                         alt="category-thumb"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Feeds Section Start Here::.. -->
    <div class="rts-feeds-section rts-feeds-section2 section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Blog & Insights</span>
                <a href="shop-main" class="go-btn">Other Category <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed4.jpg') }}"
                                                                                     alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed5.jpg') }}"
                                                                                     alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item last-child">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed6.jpg') }}"
                                                                                     alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Feeds Section End Here::.. -->

    <!-- ..::brands Section Start Here::.. -->
{{--    <div class="rts-brands-section">--}}
{{--        <div class="container">--}}
{{--            <div class="recent-products-header section-header section-header2">--}}
{{--                <span class="section-pretitle mb--10">Sponsors</span>--}}
{{--                <span class="section-title-2">100+ Happy Users</span>--}}
{{--            </div>--}}
{{--            <div class="brands-section-inner">--}}
{{--                <div class="row justify-content-center align-items-center">--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/1.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/2.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/3.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/4.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/5.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/6.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/7.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/8.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">--}}
{{--                        <div class="brand-item">--}}
{{--                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/9.png') }}" alt="brand"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ..::brands Section End Here::.. -->

    <!-- ..::Newsletter Popup Start Here::.. -->
{{--    <div class="rts-newsletter-popup">--}}
{{--        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>--}}
{{--        <div class="newsletter-inner">--}}
{{--            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>--}}
{{--            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack--}}
{{--                PS23. It is a completely modern design</p>--}}
{{--            <form>--}}
{{--                <div class="input-area">--}}
{{--                    <div class="input-div"><input type="text" placeholder="Your name">--}}
{{--                        <div class="input-icon"><i class="far fa-user"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="input-div"><input type="email" placeholder="Email address" required>--}}
{{--                        <div class="input-icon"><i class="far fa-envelope"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button type="submit" class="subscribe-btn">Subscribe Now <i--}}
{{--                            class="fal fa-long-arrow-right ml--5"></i></button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ..::Newsletter Popup End Here::.. -->

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                        src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                        class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->
    <section class="faq-area pt-120 pb-90 pt-md-55 pb-md-30 pt-xs-55 pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-que-list mb-30">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        How do you prioritize your work?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        How do you prioritize your work?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="faq-que-list mb-30">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        What is your pricing strategy and why?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                     aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        Do you know anyone that works with our company?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                     aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                     aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                     data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                     data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-default-layout>