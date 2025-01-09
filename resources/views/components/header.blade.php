<header id="rtsHeader">
    <div class="header-topbar header-topbar3 header-topbar4">
        <div class="container header-container">
            <div class="header-top-inner">
{{--                <h3 class="welcome-text"><i class="rt-truck"></i> Free shipping for all orders of <span--}}
{{--                            class="value">150$</span></h3>--}}
                <div class="topbar-action">
                    <a href="#" class="action-item mr--40">Пункт проката
                        <span class="separator"></span>
                    </a>
                    <a href="#" class="action-item">
                        <i class="rt-location-dot"></i>
                        г. Москва, Алтуфьевское ш., д.79а, стр.25
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-part navbar-part3 navbar-part4">
            <div class="container">
                <div class="navbar-inner navbar-inner5">
                    <div class="navbar-search-area">
                        <div class="search-input-inner">
                            <select class="custom-select">
                                <option value="hide">Каталог товаров</option>
                                <option value="all">Инструмент</option>
                                <option value="men">Строительное оборудование</option>
                                <option value="women">Садовая техника</option>
                                <option value="shoes">Дополнительная оснастка</option>
                                <option value="shoes">Аккумуляторный инструмент</option>
                                <option value="shoes">Измерительный инструмент</option>
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon"><i class="rt-search mr--10"></i>Поиск</div>
                                <input class="search-input input5" type="text" placeholder="Поиск товаров...">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('index') }}" class="logo">ToolGuys<span>.</span></a>
                    <div class="navbar-select-area">
{{--                        <select class="topbar-select custom-select">--}}
{{--                            <option value="eng">Eng</option>--}}
{{--                            <option value="esp">esp</option>--}}
{{--                            <option value="ban">Ban</option>--}}
{{--                        </select>--}}
{{--                        <select class="topbar-select custom-select last-child">--}}
{{--                            <option value="usd">USD</option>--}}
{{--                            <option value="eur">Euro</option>--}}
{{--                            <option value="tk">Taka</option>--}}
{{--                        </select>--}}
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner inner-2">
                                        <div class="input-div">
                                            <input class="search-input input4" type="text"
                                                   placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><i class="rt-cart"></i><span
                                            class="wishlist-dot icon-dot">3</span></div>
                            </div>
                        </div>
                        <div class="wishlist action-item">
                            <div class="favourite-icon icon"><a href="{{ route('wishlist') }}"><i class="rt-heart"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-sticky lower-navbar-sticky lower-navbar-sticky4">
        <div class="navbar-part navbar-part2 lower-navbar lower-navbar4">
            <div class="container">
                <div class="navbar-inner">
                    <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo4.svg') }}" alt="umart-logo"></a>
                    <div class="navbar-coupon-code">
                        <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag.png') }}" alt="tag-icon"></div>
                        <span class="title">Лучшие цены у нас</span>
                    </div>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown">
                                    <a class="menu-item active1" href="#">Инструменты <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('shop') }}">Гайковерты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarLeft') }}">Отбойные молотки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarRight') }}">Краскопульты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('fullWidthShop') }}">Лобзики</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Фрезеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Шуруповерты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Торцовочные пилы</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails') }}">Монтажные пилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails2') }}">Отбойные молотки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('variableProducts') }}">Перфораторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Пила аллигаторная</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Шлифовальные машины</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Штроборезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Фен строительный</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Реноваторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Рубанки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Сабельные пилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Миксеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Циркулярные пилы</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="menu-item" href="#">Строительное оборудование <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('shop') }}">Алмазное бурение</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarLeft') }}">Бензорезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarRight') }}">Вибраторы глубинные</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('fullWidthShop') }}">Виброплиты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('fullWidthShop') }}">Сантехнический <br> инструмент</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('fullWidthShop') }}">Шлифовальное <br> оборудование</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails') }}">Виброрейки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails2') }}">Генераторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('variableProducts') }}">Затирочные машины <br> по бетону</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Компрессоры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Сварочные аппараты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Швонарезчик</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Осушители воздуха</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Плиткорезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Пылесосы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Тепловые пушки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('account') }}">Фрезеровальные <br> машины по бетону</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="menu-item" href="#">Садовая техника <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('shop') }}">Бензобуры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarLeft') }}">Бензопилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('sidebarRight') }}">Высоторезы и кусторезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('fullWidthShop') }}">Газонокосилка</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails') }}">Измельчители</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('productDetails2') }}">Культиваторы и мотоблоки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('variableProducts') }}">Мойки высокого давления</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Скарификаторы</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('cart') }}">Триммеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('checkOut') }}">Цепные пилы</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a class="menu-item" href="#">Расходные материалы <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('news') }}">Мешки, пакеты, коробки, стретч</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsGrid') }}">Аксессуары для гвоздезабивного инструмента</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsDetails') }}">Аксессуары для сверлильных машин</a>
                                        </li>

                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('news') }}">Алмазные коронки</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsGrid') }}">Алмазные коронки для подрозетников</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsDetails') }}">Диски алмазные</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('news') }}">Круги отрезные</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsGrid') }}">Пильные полотна для аллигаторных пил</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="menu-item" href="{{ route('contact') }}">Дополнительная оснастка <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('news') }}">Буры для перфораторов</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsGrid') }}">Для алмазного бурения</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsDetails') }}">Пневматический инструмент</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('newsDetails') }}">Принадлежности для бензобуров</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
{{--                    <div class="contact-info ml-auto">--}}
{{--                        <span class="title">Get Support</span>--}}
{{--                        <a href="mailto:pixcelsthemes@gmail.com" class="email-address info">info@webexample.com</a>--}}
{{--                    </div>--}}
                    <div class="hamburger"><span></span></div>
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
                        We must explain to you how all seds this mistakens idea denouncing pleasures and praising
                        account.
                    </p>
                </div>
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Get In Touch </h4>
                    <ul>
                        <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a>
                        </li>
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
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left
                                        Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right
                                        Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                        Width Shop</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails') }}">Single
                                        Product
                                        Layout
                                        One</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails2') }}">Single
                                        Product Layout
                                        Two</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link"
                                                           href="{{ route('variableProducts') }}">Variable Product</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link"
                                                           href="{{ route('groupedProducts') }}">Grouped Product</a>
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
</header>