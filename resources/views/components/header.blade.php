@php
    use App\Repositories\CategoriesRepository;
    use App\Repositories\PurchaseListRepository;
@endphp

@php
    $categories = app(CategoriesRepository::class)->getParentCategories();
@endphp


<header id="rtsHeader">
    <div class="header-topbar header-topbar3 header-topbar4">
        <div class="container header-container">
            <div class="header-top-inner">
                <div class="topbar-action">
                    <a href="#" class="action-item mr--40">Пункт проката
                        <span class="separator"></span>
                    </a>
                    <a href="#" class="action-item">
                        <i class="rt-location-dot"></i>
                        Московская область, г. Балашиха, мкр. Кучино, ул. Центральная, 68, пав. 10
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
                            <div class="select">
                                <a href="{{ route('groupedProducts', ['category' => 'market']) }}">
                                    <select class="custom-select select-hidden">
                                        <option value="hide">Магазин Товаров</option>
                                    </select>
                                </a>
                            </div>
                            <form action="{{ route('search.inventory') }}" method="GET" class="search-form">
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i>Поиск</div>
                                    <input class="search-input input5" type="text" name="query" id="live-search-input"
                                           placeholder="Поиск..." autocomplete="off">
                                </div>
                            </form>
                            <div class="live-search-results" id="live-search-results"></div>
                        </div>
                    </div>
                    <a href="{{route('indexFive')}}" class="logo">ToolGuys<span>.</span></a>

                    <div class="header-action-items header-action-items1">
                        <div class="cart-icon icon mx-3">
                            <a href="{{ route('contact') }}">
                                <i class="rt-phone-flip"></i>
                            </a>
                        </div>

                        @auth
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="icon">
                                        <a href="{{route('cart')}}">
                                            <i class="rt-cart"></i>
                                            <span class="wishlist-dot icon-dot">
                                                {{ Auth::check() ?
                                                    app(PurchaseListRepository::class)->all()
                                                        ->where('user_id', Auth::id())
                                                        ->count() : 0
                                                }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('profile.edit') }}#favorites"><i
                                                class="rt-heart"></i></a></div>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="account"><i class="rt-user-2"></i></a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="log-out-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                </button>
                            </form>
                        @endauth

                        @guest
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="icon">
                                        <a href="{{route('login')}}">
                                            <i class="rt-cart"></i>
                                            <span class="wishlist-dot icon-dot">3</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('login') }}"><i class="rt-heart"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        @endguest
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
                    <a href="{{route('indexFive')}}" class="logo">ToolGuys<span>.</span></a>
                    {{--                    <div class="navbar-coupon-code">--}}
                    {{--                        <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag.png') }}" alt="tag-icon"></div>--}}
                    {{--                        <span class="title">Лучшие цены у нас</span>--}}
                    {{--                    </div>--}}

                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                @foreach($categories as $category)
                                    @php
                                        $children = app(CategoriesRepository::class)->getChildCategories($category->rent_in_hand_id);
                                    @endphp
                                    <li class="has-dropdown">
                                        <a class="menu-item" href="#">{{ $category->title }} <i class="rt-plus"></i></a>

                                        @if($children->isNotEmpty())
                                            <ul class="dropdown-ul mega-dropdown">
                                                @foreach($children->chunk(8) as $chunk)
                                                    <li class="mega-dropdown-li">
                                                        <ul class="mega-dropdown-ul">
                                                            @foreach($chunk as $child)
                                                                <li class="dropdown-li">
                                                                    <a class="dropdown-link"
                                                                       href="{{ route('groupedProducts', ['category' => $child->title]) }}">{{ $child->title }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="hamburger"><span></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"
               id="mobile-hamburger-1"><span><i class="rt-xmark"></i></span></a>
        </div>
        <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
            <ul id="mobile-menu-active">
                @foreach($categories as $category)
                    @php
                        $children = app(\App\Repositories\CategoriesRepository::class)->getChildCategories($category->rent_in_hand_id);
                    @endphp
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="#">{{ $category->title }} <i class="rt-angle-down"></i></a>
                        @if($children->isNotEmpty())
                            <ul class="sub-menu">
                                @foreach($children as $child)
                                    <li>
                                        <a href="{{ route('groupedProducts', ['category' => $child->title]) }}">{{ $child->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </aside>
</header>