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
                    <a href="#" class="logo">ToolGuys<span>.</span></a>
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
{{--                        <div class="search-part">--}}
{{--                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>--}}
{{--                            <div class="search-input-area">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="search-input-inner inner-2">--}}
{{--                                        <div class="input-div">--}}
{{--                                            <input class="search-input input4" type="text"--}}
{{--                                                   placeholder="Search by keyword or #">--}}
{{--                                        </div>--}}
{{--                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="cart-icon icon mx-4">
                            <a href="{{ route('contact') }}">
                                <i class="rt-phone-flip"></i>
                            </a>
                        </div>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon">
                                    <i class="rt-cart"></i>
                                    <span class="wishlist-dot icon-dot">3</span>
                                </div>
                            </div>
                        </div>
{{--                        <div class="wishlist action-item">--}}
{{--                            <div class="favourite-icon icon"><a href="{{ route('wishlist') }}"><i class="rt-heart"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                    </div>
                    <div class="hamburger" id="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-sticky lower-navbar-sticky lower-navbar-sticky4">
        <div class="navbar-part navbar-part2 lower-navbar lower-navbar4">
            <div class="container">
                <div class="navbar-inner">
                    <a href="#" class="logo">ToolGuys<span>.</span></a>
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
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Гайковерты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Отбойные молотки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Краскопульты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Лобзики</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Фрезеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Шуруповерты</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Торцовочные пилы</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Монтажные пилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Отбойные молотки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Перфораторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Пила аллигаторная</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Шлифовальные машины</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Штроборезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Фен строительный</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Реноваторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Рубанки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Сабельные пилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Миксеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Циркулярные пилы</a>
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
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Виброрейки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Генераторы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Затирочные машины <br> по бетону</a>
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
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Осушители воздуха</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Плиткорезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Пылесосы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Тепловые пушки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Фрезеровальные <br> машины по бетону</a>
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
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Бензобуры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Бензопилы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link"  href="{{ route('groupedProducts') }}">Высоторезы и кусторезы</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Газонокосилка</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Измельчители</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Культиваторы и мотоблоки</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Мойки высокого давления</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Скарификаторы</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Триммеры</a>
                                                </li>
                                                <li class="dropdown-li">
                                                    <a class="dropdown-link" href="{{ route('groupedProducts') }}">Цепные пилы</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a class="menu-item" href="#">Расходные материалы <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Мешки, пакеты, коробки, стретч</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Аксессуары для гвоздезабивного инструмента</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Аксессуары для сверлильных машин</a>
                                        </li>

                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Алмазные коронки</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Алмазные коронки для подрозетников</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Диски алмазные</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Круги отрезные</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Пильные полотна для аллигаторных пил</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="menu-item" href="{{ route('groupedProducts') }}">Дополнительная оснастка <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Буры для перфораторов</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Для алмазного бурения</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Пневматический инструмент</a>
                                        </li>
                                        <li class="dropdown-li">
                                            <a class="dropdown-link" href="{{ route('groupedProducts') }}">Принадлежности для бензобуров</a>
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
            <h3 class="cart-heading">К покупке</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Генератор бензиновый</span>
                        <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Fubag BS6600 /</span>
                                    <span class="size">6,0 кВт</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">1200 ₽</span>
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
                        <span class="product-name">Инверторный цифровой генератор</span>
                        <div class="item-wrapper">
                                <span class="product-variation"><span class="color">FUBAG /</span>
                                    <span class="size">TI 2000</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">750 ₽</span>
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
                        <span class="product-name">Генератор бензиновый с электростартером</span>
                        <div class="item-wrapper">
                                <span class="product-variation"><span class="color">FUBAG /</span>
                                    <span class="size">BS 5500 A ES</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">1 100 ₽</span>
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
{{--                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE--}}
{{--                    FOR FREE SHIPPING</span>--}}
            <span class="total-price">ВСЕГО: <span class="price">10 100 ₽</span></span>
            <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">К оплате</a>
            <a href="{{ route('cart') }}" class="view-btn cart-btn">Корзина</a>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#" id="mobile-hamburger-1"><span><i class="rt-xmark"></i></span></a>
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
                    <a class="mm-link" href="#">Инструмент <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('groupedProducts') }}">Гайковерты</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Отбойные молотки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Краскопульты</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Лобзики</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Фрезеры</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Шуруповерты</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Торцовочные пилы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Монтажные пилы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Отбойные молотки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Перфораторы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Пила аллигаторная</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Шлифовальные машины</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Штроборезы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Фен строительный</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Реноваторы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Рубанки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Сабельные пилы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Миксеры</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Циркулярные пилы</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Строительное оборудование <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li><a href="{{ route('groupedProducts') }}">Алмазное бурение</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Бензорезы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Вибраторы глубинные</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Виброплиты</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Сантехнический инструмент</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Шлифовальное оборудование</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Виброрейки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Генераторы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Затирочные машины по бетону</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Компрессоры</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Сварочные аппараты</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Швонарезчик</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Осушители воздуха</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Плиткорезы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Пылесосы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Тепловые пушки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Фрезеровальные машины по бетону</a></li>

                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Садовая техника <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('groupedProducts') }}">Бензобуры</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Бензопилы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Высоторезы и кусторезы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Газонокосилка</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Измельчители</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Культиваторы и мотоблоки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Мойки высокого давления</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Скарификаторы</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Триммеры</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Цепные пилы</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Расходные материалы <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('groupedProducts') }}">Мешки, пакеты, коробки, стретч</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Аксессуары для гвоздезабивного инструмента</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Аксессуары для сверлильных машин</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Алмазные коронки</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Алмазные коронки для подрозетников</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Диски алмазные</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Круги отрезные</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Пильные полотна для аллигаторных пил</a></li>

                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Дополнительная оснастка <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('groupedProducts') }}">Буры для перфораторов</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Для алмазного бурения</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Пневматический инструмент</a></li>
                        <li><a href="{{ route('groupedProducts') }}">Принадлежности для бензобуров</a></li>
                    </ul>
                </li>
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