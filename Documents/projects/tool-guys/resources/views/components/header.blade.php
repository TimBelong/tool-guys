<header id="rtsHeader">
    <div class="header-topbar header-topbar1">
        <div class="container">
            <div class="header-top-area">
                <div class="slider-div">
                    <div class="swiper rts-topSlide1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover Now</a></h3>
                            </div>
                        </div>
                        <div class="slider-navigation2">
                            <div class="swiper-button-prev slider-btn prev"><i class="rt rt-arrow-left-long"></i></div>
                            <div class="swiper-button-next slider-btn next"><i class="rt rt-arrow-right-long"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-topbar-menu-area">
        <div class="container">
            <div class="menu-area1">
                <div class="menu-item">
                    <nav class="nav navbar">
                        <div class="navbar-menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Whishlist</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-area-right-side">
                    <div class="contact"><i aria-hidden="true" class="fas fa-phone"></i>Need help? <strong>Call us:
                            <a href="call:0020500">+ 0020 500</a></strong></div>
                    <div class="topbar-select-area">
                        <select class="topbar-select custom-select">
                            <option value="eng">English</option>
                            <option value="esp">Español</option>
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
    </div>
    <div class="navbar-sticky">
        <div class="container">
            <div class="navbar-part navbar-part1">
                <div class="navbar-inner">
                    <div class="left-side">
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
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo1.svg') }}" alt="weiboo-logo"></a>
                    </div>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Home') {
                                            echo 'active1';
                                        }
                                        ?>" href="#">Home <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Main
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexTwo') }}">Fashion
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexNine') }}">Fashion
                                                Home Two</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexThree') }}">Furniture
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexFour') }}">Decor
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexFive') }}">Electronics
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexSix') }}">Grocery
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexSeven') }}">Footwear
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexEight') }}">Gaming
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexTen') }}">Sunglass
                                                Home</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Shop') {
                                            echo 'active1';
                                        }
                                        ?>" href="#">Shop <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('shop') }}">Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('productDetails') }}">Single Product Layout One</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('productDetails2') }}">Single Product Layout Two</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('variableProducts') }}">Variable
                                                        Product</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('groupedProducts') }}">Grouped
                                                        Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('cart') }}">Cart</a>
                                                </li>

                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('checkOut') }}">Checkout</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('account') }}">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Pages') {
                                            echo 'active1';
                                        }
                                        ?>" href="#">Pages <i class="rt-plus"></i></a>
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

                                <li class="has-dropdown"><a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Blog') {
                                            echo 'active1';
                                        }
                                        ?>" href="#">Blog <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('news') }}">Blog</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('newsGrid') }}">Blog Grid</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('newsDetails') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-item  <?php
                                        if (isset($subTitle) && $subTitle === 'Contact') {
                                            echo 'active1';
                                        }
                                        ?>" href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
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
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><a href="#0"><i aria-hidden="true" class="fas fa-shopping-basket"></i></a><span class="wishlist-dot icon-dot">3</span></div>
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
            <a class="hamburger-1 mobile-hamburger-1 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
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
        <nav class="side-mobile-menu side-mobile-menu1">
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
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails2') }}">Single Product Layout
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
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('checkOut') }}">Checkout</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('account') }}">My
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
    <div class="page-path">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="path-title"><?php echo $title;?></h1>
                <ul>
                    <li><a class="home-page-link" href="{{ route('index') }}"><?php echo $subTitle;?> <i class="fal fa-angle-right"></i></a></li>
                    <li><a class="current-page" href="#"><?php echo $subTitle2;?></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>