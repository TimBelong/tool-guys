@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable7.css') . '" />';
$header='flase';
$footer='flase';
@endphp

@section('content')

    <header id="rtsHeader">
        <div class="header-topbar header-topbar1 header-topbar7">
            <div class="container">
                <div class="header-top-area">
                    <div class="header-top-left">
                        <a href="newsletter" class="newsletter-link"><i class="rt rt-location-dot"></i> Store Locator</a>
                        <h3 class="welcome-text"><i class="far fa-envelope"></i>pixcelsthemes@gmail.com</h3>
                    </div>
                    <div class="slider-div">
                        <div class="swiper rts-topSlide1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Enjoy free shipping on orders 100$ up<a href="#">Discover Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Enjoy free shipping on orders 100$ up<a href="#">Discover Now</a></h3>
                                </div>
                            </div>
                            <div class="slider-navigation2">
                                <div class="swiper-button-prev slider-btn prev"><i
                                        class="rt rt-arrow-left-long"></i></div>
                                <div class="swiper-button-next slider-btn next"><i
                                        class="rt rt-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topbar-select-area">
                        <select class="topbar-select custom-select">
                            <option value="eng">English</option>
                            <option value="esp">español</option>
                            <option value="ban">Bangla</option>
                        </select>
                        <select class="topbar-select custom-select2">
                            <option value="usd">USD</option>
                            <option value="eur">Euro</option>
                            <option value="tk">Taka</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky navbar-sticky7">
            <div class="container">
                <div class="navbar-part navbar-part1 navbar-part5">
                    <div class="navbar-inner">
                        <div class="left-side">
                            <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo8.svg') }}" alt="weiboo-logo"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Main
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexTwo') }}">Fashion
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexNine') }}">Fashion
                                                    Home Two</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexThree') }}">Furniture
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexFour') }}">Decor
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexFive') }}">Electronics
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexSix') }}">Grocery
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link active"
                                                    href="{{ route('indexSeven') }}">Footwear
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('indexEight') }}">Gaming
                                                Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('indexTen') }}">Sunglass
                                                Home</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Shop <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul mega-dropdown">
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('shop') }}">Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('productDetails') }}">Single Product Layout One</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('productDetails2') }}">Single Product Layout Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('variableProducts') }}">Variable
                                                            Product</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('groupedProducts') }}">Grouped
                                                            Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li last-child">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('cart') }}">Cart</a>
                                                    </li>

                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('checkOut') }}">Checkout</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('account') }}">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('faq') }}">FAQ's</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('errorPage') }}">Error
                                                    404</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('news') }}">Blog</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('newsGrid') }}">Blog Grid</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('newsDetails') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="responsive-hamburger">
                                <div class="hamburger-1">
                                    <a href="#" class="nav-menu-link">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                        <span class="dot4"></span>
                                        <span class="dot5"></span>
                                        <span class="dot6"></span>
                                        <span class="dot7"></span>
                                        <span class="dot8"></span>
                                        <span class="dot9"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><a href="#0"><i aria-hidden="true"
                                                class="fas fa-shopping-basket"></i></a><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="{{ route('cart') }}" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                        <p class="mb-30">
                            We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a></li>
                            <li class="info email"><a href="email:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
                            <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                            <li class="info location">13/A, New Pro State, NYC</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		    <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Home <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('index') }}">Main Home</a></li>
                            <li><a href="{{ route('indexTwo') }}">Fashion Home</a></li>
                            <li><a href="{{ route('indexNine') }}">Fashion Home Two</a></li>
                            <li><a href="{{ route('indexThree') }}">Furniture Home</a></li>
                            <li><a href="{{ route('indexFour') }}">Decor Home</a></li>
                            <li><a href="{{ route('indexFive') }}">Electronics Home</a></li>
                            <li><a href="{{ route('indexSix') }}">Grocery Home</a></li>
                            <li><a href="{{ route('indexSeven') }}">Footwear Home</a></li>
                            <li><a href="{{ route('indexEight') }}">Gaming Home</a></li>
                            <li><a href="{{ route('indexTen') }}">Sunglass Home</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('shop') }}">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                            Width Shop</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails') }}">Single Product
                                            Layout
                                            One</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('productDetails2') }}">Single Product Layout
                                            Two</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('variableProducts') }}">Variable Product</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('groupedProducts') }}">Grouped Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('cart') }}">Cart
                                            </a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('checkOut') }}">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('account') }}">My
                                            Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Pages <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('faq') }}">FAQ's</a></li>
                            <li><a href="{{ route('errorPage') }}">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('news') }}">Blog <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('news') }}">Blog</a></li>
                            <li><a href="{{ route('newsGrid') }}">Blog Grid</a></li>
                            <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a class="mm-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="header-action-items header-action-items1 header-action-items-side">
                <div class="search-part">
                    <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                    <div class="search-input-area">
                        <div class="container">
                            <div class="search-input-inner">
                                <select id="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search by keyword or #">
                                </div>
                                <div class="search-close-icon"><i class="rt-xmark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart action-item">
                    <div class="cart-nav">
                        <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                        </div>
                    </div>
                </div>
                <div class="wishlist action-item">
                    <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
            </div>
            <!-- side-mobile-menu end -->
        </aside>
        <!-- ..::Banner Section Start Here::.. -->
        <div class="banner banner-2 banner-7 bg-image">
            <div class="container">
                <div class="banner-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 first-child">
                            <div class="rts-heading">
                                <div class="title-inner">
                                    <div class="sub-title">
                                        <h2>2024</h2>
                                    </div>
                                    <h2 class="title">
                                        <span class="watermark">
                                            New Arrivals
                                        </span>
                                    </h2>
                                </div>
                                <p class="description">Sale up to 30% off
                                </p>
                                <div class="section-btn">
                                    <div class="rts-btn">
                                        <a href="#">Veiw Collections</a>
                                    </div>
                                    <div class="rts-video">
                                        <a href="https://www.youtube.com/watch?v=S05bHj0LBE4" class="popup-videos">
                                            <i class="far fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="product-item2 element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image2 image-slider-variations">
                                    <img src="{{ asset('assets/images/banner/banner-img.webp') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 last-child">
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10 col-lg-12 col-12">
                                    <div class="product-item element-item2">
                                        <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                            <div class="hot">HOT</div>
                                            <div class="swiper productSlide">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="image-vari1 image-vari"><img
                                                                src="{{ asset('assets/images/banner/foot-7-338x450.webp') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image-vari2 image-vari"><img
                                                                src="{{ asset('assets/images/hand-picked/slider-img8_2.jpg') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image-vari2 image-vari"><img
                                                                src="{{ asset('assets/images/hand-picked/slider-img8_3.jpg') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-buttons">
                                                <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i>
                                                </div>
                                                <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="bottom-content">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-name">Apex Men's Shoe</a>
                                            <div class="action-wrap">
                                                <span class="price">$44.00 - $233.00</span>
                                            </div>
                                        </div>
                                        <div class="quick-action-button">
                                            <div class="cta-single cta-plus">
                                                <a href="#"><i class="rt-plus"></i></a>
                                            </div>
                                            <div class="cta-single cta-quickview">
                                                <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                            </div>
                                            <div class="cta-single cta-wishlist">
                                                <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                            </div>
                                            <div class="cta-single cta-addtocart">
                                                <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
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
        <!-- ..::Banner Section End Here::.. -->
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Discount Section Start Here::.. -->
    <div class="rts-discount-section">
        <div class="rt-marquee">
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
            <div class="marquee-tag">
                <h3>Summer Sale Discount <span>off 60%</span></h3>
            </div>
        </div>
    </div>
    <!-- ..::Discount Section End Here::.. -->

    <!-- ..::Offer Section Start Here::.. -->
    <div class="rts-offer-section">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home7/collec-1.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <h4 class="sub-title">New Collections</h4>
                                <h3 class="title">Splash Into Summer</h3>
                                <a href="{{ route('shop') }}" class="btn-text">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home7/collec-2.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <h4 class="sub-title">New Collections</h4>
                                <h3 class="title">20% Off For You</h3>
                                <a href="{{ route('shop') }}" class="btn-text">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="product-item7">
                            <div class="product-image">
                                <img src="{{ asset('assets/images/products/home7/collec-3.webp') }}" alt="">
                            </div>
                            <div class="bottom-text">
                                <h4 class="sub-title">New Collections</h4>
                                <h3 class="title">Special Edition Shoes</h3>
                                <a href="{{ route('shop') }}" class="btn-text">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Offer Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section1 featured-product7">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                        </div>
                        <h2 class="title">Check Our Latest Arrivals</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$39.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item2">
                            <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-10-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-12-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i></div>
                                    <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Shot Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$119.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-6-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-9-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Shoe Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag tag-2">-38%</div>
                                <div class="new-tag product-tag tag-2">HOT</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-8-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-11-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Women's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-3-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-9-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Legacy Lather Sneaker</a>
                                <div class="action-wrap">
                                    <span class="price">$250.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item2">
                            <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                <div class="swiper productSlide2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-5-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-12-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-navigation">
                                    <div class="button-prev2 slider-btn"><i class="rt-arrow-left-long"></i></div>
                                    <div class="button-next2 slider-btn"><i class="rt-arrow-right-long"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$44.00 - $233.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-11-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-8-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Lofer</a>
                                <div class="action-wrap">
                                    <span class="price">$100.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Sprint Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Product Section End Here::.. -->

    <!-- ..::Video Section Start Here::.. -->
    <div class="rts-video-section">
        <div class="container">
            <div class="video-section-inner">
                <div class="rts-video">
                    <div class="about-video-wrapper">
                        <a href="https://www.youtube.com/watch?v=S05bHj0LBE4" class="popup-videos">
                            <i class="rt-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Video Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section4 product-section7">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <p class="select-area area7">
                    <span class="level--filters">Explore our</span>
                    <select class="filters-select select-area7">
                        <option value="*">All Product</option>
                        <option value=".popular">Popular</option>
                        <option value=".best-rate">Best Rate</option>
                        <option value=".on-sale">On sale</option>
                        <option value=".featured">Featured</option>
                    </select>
                </p>
                <div class="fill">
                    <div class="element-item transition popular " data-category="transition">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$100.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item on-sale " data-category="metalloid">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$39.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item on-sale best-rate " data-category="metalloid">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-6-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-9-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Shoe Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$119.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag tag-2">-38%</div>
                                <div class="new-tag product-tag tag-2">HOT</div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item on-sale " data-category="metalloid">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-8-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-11-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Women's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$44.00 - $233.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item transition popular " data-category="transition">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-3-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-9-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Legacy Lather Sneaker</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item on-sale best-rate" data-category="metalloid">
                        <div class="product-item element-item2">
                            <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                <div class="swiper productSlide2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-5-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home7/foot-12-410x410.webp') }}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-navigation">
                                    <div class="button-prev2 slider-btn"><i class="rt-arrow-left-long"></i></div>
                                    <div class="button-next2 slider-btn"><i class="rt-arrow-right-long"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$150.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item on-sale best-rate " data-category="metalloid">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-11-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-8-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Lather Men's Lofer</a>
                                <div class="action-wrap">
                                    <span class="price">$150.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-item featured" data-category="metalloid">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Sprint Men's Canvas</a>
                                <div class="action-wrap">
                                    <span class="price">$220.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Product Section End Here::.. -->

    <!-- ..::Deal Section Start Here::.. -->
    <div class="rts-deal-section1 section-7">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-image">
                            <img src="{{ asset('assets/images/products/home7/shoes.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-inner">
                            <div class="content-box">
                                <div class="sub-content">
                                    <img class="line-1" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                                    <span class="sub-text">Deal Of The Week</span>
                                </div>
                                <h2 class="slider-title">Roland Grand White <br> Black Shoes</h2>
                                <div class="slider-description">
                                    <p>Our intent and our actions have always been informed by progress. We
                                        look at an impact report as a way to measure.</p>
                                </div>
                                <div class="countdown" id="countdown">
                                    <ul>
                                        <li><span id="days"></span>D</li>
                                        <li><span id="hours"></span>H</li>
                                        <li><span id="minutes"></span>M</li>
                                        <li><span id="seconds"></span>S</li>
                                    </ul>
                                </div>
                                <div class="content-bottom">
                                    <div class="img-box"><img src="{{ asset('assets/images/hand-picked/deal-icon.png') }}" alt="">
                                    </div>
                                    <p class="content">Limited time offer. The deal will expires <br>
                                        on November 12, 2024 HURRY UP!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Deal Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section3 section-7">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.webp') }}" alt="">
                        </div>
                        <h2 class="title">BLOG & INSIGHTS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-1.jpg') }}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-2">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-2.jpg') }}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once determined, you need to come up with a name a legal structure</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-3">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-3.jpg') }}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">At the limit, statically generated, edge delivered a food</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Product Section End Here::.. -->

    <!-- ..::Newsletter Popup Start Here::.. -->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
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
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
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

    <!-- ..::Footer Start Here::.. -->
    <div class="footer footer-2 footer-7">
        <div class="container">
            <div class="footer-features">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/box.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free shipping</h3>
                                <p>Free shipping on orders over $65.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/delivery-van.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free Returns</h3>
                                <p>30-days free return policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/credit-card.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Secured Payments</h3>
                                <p>We accept all major credit cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item last-child">
                            <div class="icon"><img src="{{ asset('assets/images/icons/24hours.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Customer Service</h3>
                                <p>Top notch customer setvice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo9.svg') }}" alt="footer-logo"></div>
                            <p class="widget-text">“ This is genuinely the first theme i bought for
                                which i did not had to write one line of code. I
                                would recommand everybody to get it. “</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M23.7025 4.79633C21.2185 3.2643 18.275 2.42188 15.2344 2.42188C6.95734 2.42188 0 8.58852 0 16.4844C0 19.2527 0.86 21.9066 2.49359 24.1985L0.211562 31.363C-0.0295313 32.1198 0.537344 32.8906 1.32836 32.8906C1.50922 32.8906 1.69125 32.8488 1.85922 32.7634L8.79922 29.2347C9.08023 29.3557 9.36477 29.4683 9.65219 29.5728C8.04539 27.0648 7.1875 24.1859 7.1875 21.1719C7.1875 12.1955 14.7405 5.29469 23.7025 4.79633Z" fill="white" fill-opacity="0.1"></path><path d="M37.5064 28.886C39.14 26.5941 40 23.9402 40 21.1719C40 13.2731 33.0397 7.10938 24.7656 7.10938C16.4886 7.10938 9.53125 13.276 9.53125 21.1719C9.53125 29.0706 16.4916 35.2344 24.7656 35.2344C26.9857 35.2344 29.1978 34.782 31.2004 33.922L38.1408 37.4509C38.562 37.665 39.0707 37.6052 39.4308 37.2992C39.7909 36.9932 39.932 36.5009 39.7885 36.0506L37.5064 28.886ZM20 22.3438C19.3528 22.3438 18.8281 21.8191 18.8281 21.1719C18.8281 20.5247 19.3528 20 20 20C20.6472 20 21.1719 20.5247 21.1719 21.1719C21.1719 21.8191 20.6472 22.3438 20 22.3438ZM24.6875 22.3438C24.0403 22.3438 23.5156 21.8191 23.5156 21.1719C23.5156 20.5247 24.0403 20 24.6875 20C25.3347 20 25.8594 20.5247 25.8594 21.1719C25.8594 21.8191 25.3347 22.3438 24.6875 22.3438ZM29.375 22.3438C28.7278 22.3438 28.2031 21.8191 28.2031 21.1719C28.2031 20.5247 28.7278 20 29.375 20C30.0222 20 30.5469 20.5247 30.5469 21.1719C30.5469 21.8191 30.0222 22.3438 29.375 22.3438Z" fill="#BC5B1F"></path></svg>
                                    </div>
                                    <div class="contact-info">
                                        <span class="title">Get Support</span>
                                        <a href="mailto:pixcelsthemes@gmail.com"
                                            class="email-address info info2">pixcelsthemes@gmail.com</a>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M36.7412 29.2C35.6487 28.2838 29.2413 24.2263 28.1763 24.4125C27.6763 24.5013 27.2938 24.9275 26.27 26.1488C25.7966 26.7499 25.2766 27.3128 24.715 27.8325C23.686 27.5839 22.6899 27.2147 21.7475 26.7325C18.0516 24.9331 15.0658 21.9464 13.2675 18.25C12.7853 17.3076 12.4161 16.3115 12.1675 15.2825C12.6872 14.7209 13.2501 14.2009 13.8513 13.7275C15.0713 12.7038 15.4988 12.3237 15.5875 11.8212C15.7738 10.7537 11.7125 4.34875 10.8 3.25625C10.4175 2.80375 10.07 2.5 9.625 2.5C8.335 2.5 2.5 9.715 2.5 10.65C2.5 10.7263 2.625 18.2375 12.1113 27.8888C21.7625 37.375 29.2737 37.5 29.35 37.5C30.285 37.5 37.5 31.665 37.5 30.375C37.5 29.93 37.1962 29.5825 36.7412 29.2V29.2Z" fill="#BC5B1F"></path><path d="M28.75 18.75H31.25C31.247 16.0987 30.1925 13.5569 28.3178 11.6822C26.4431 9.8075 23.9013 8.75298 21.25 8.75V11.25C23.2385 11.252 25.145 12.0428 26.5511 13.4489C27.9572 14.855 28.748 16.7615 28.75 18.75Z" fill="#1D1D1D"></path><path d="M35 18.75H37.5C37.495 14.4418 35.7814 10.3114 32.735 7.265C29.6886 4.2186 25.5582 2.50496 21.25 2.5V5C24.8954 5.0043 28.3903 6.45434 30.968 9.03203C33.5457 11.6097 34.9957 15.1046 35 18.75Z" fill="#1D1D1D"></path></svg>
                                    </div>
                                    <div class="contact-info"><span class="title">Call Us</span>
                                        <a href="tel:75565236595" class="phone-number info info2">755. 652. 365. 95</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering</a></li>
                                <li class="widget-list-item"><a href="#0">Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Social Network</h3>
                        <ul class="footer-widget social-links-footer">
                            <li><a class="platform" href="http://facebook.com" target="_blank"><i
                                        class="fab fa-facebook"></i>
                                    Facebook</a></li>
                            <li><a class="platform" href="http://linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin"></i>
                                    Linkedin</a></li>
                            <li><a class="platform" href="http://twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li><a class="platform" href="http://behance.com" target="_blank"><i
                                        class="fab fa-behance"></i> Behance</a>
                            </li>
                            <li><a class="platform" href="http://youtube.com" target="_blank"><i
                                        class="fab fa-youtube"></i> YouTube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Instagram Feeds</h3>
                            <div class="ig-feed">
                                <div class="row">
                                    <div class="col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0" class="feed-item"><img
                                                src="{{ asset('assets/images/footer/feed.jpg') }}" alt="ig-feed"><i
                                                class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-1.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-2.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-3.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-4.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-5.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright 2024 <span class="site">©Weiboo</span>. All rights reserved.
                        Powered by <a href="http://PixcelsThemes.com" class="brand" target="_blank">PixcelsThemes.</a></span>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

@endsection