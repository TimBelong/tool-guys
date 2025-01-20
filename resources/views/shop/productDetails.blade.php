@extends('layout.layout')

@section('content')

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="rts-product-details-section section-gap">
        <div class="container">
            <div class="details-product-area mb--70">
                <div class="product-thumb-area">
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)"
                            style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                src="https://gorrent.ru/upload/resize_cache/iblock/116/250_250_1/3smfcm15p0m2bc2eqyxbua2j672aq4jn.png" alt="product-thumb">
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
                </div>
                <div class="contents">
                    <div class="product-status">
                        <span class="product-catagory">Категория</span>
{{--                        <div class="rating-stars-group">--}}
{{--                            <div class="rating-star"><i class="fas fa-star"></i></div>--}}
{{--                            <div class="rating-star"><i class="fas fa-star"></i></div>--}}
{{--                            <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>--}}
{{--                            <span>10 Reviews</span>--}}
{{--                        </div>--}}
                    </div>
                    <h2 class="product-title">Генератор бензиновый Fubag BS6600 6,0 кВт <span class="stock">Доступен</span></h2>
                    <span class="product-price"><span class="old-price">от</span> 1 100 ₽</span>
                    <div class="product-bottom-action">
                        <div class="cart-edit">
                            <div class="quantity-edit action-item">
                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                <input type="text" class="input" value="01" />
                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                            </div>
                        </div>
                        <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                            В корзину
                        </a>
{{--                        <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>--}}
                    </div>
                    <div class="product-uniques">
                        <span class="sku product-unipue"><span>Тип: </span> Бензиновый генератор</span>
                        <span class="catagorys product-unipue"><span>Мощность: </span> Вт 6600</span>
                        <span class="tags product-unipue"><span>Вес, кг: </span>  83,9</span>
                        <span class="tags product-unipue"><span>Объем топливного бака. л: </span>  25</span>
                    </div>

                </div>
            </div>
            <div class="product-full-details-area">
                <div class="details-filter-bar2">
                    <button class="details-filter filter-btn active" data-show=".dls-one">Описание</button>
                    <button class="details-filter filter-btn" data-show=".dls-two">Технические характеристики</button>
{{--                    <button class="details-filter filter-btn" data-show=".dls-three">Reviews (0)</button>--}}
                </div>
                <div class="full-details dls-one filterd-items">
                    <div class="full-details-inner">
                        <p class="mb--30">  Бензиновый генератор Fubag BS6600 мощностью 6,0 кВт - это надежный и удобный инструмент для обеспечения электричеством в любых условиях. Он идеально подходит для использования на строительных площадках, во время отключения электричества или на открытых мероприятиях. Генератор оснащен мощным двигателем, который обеспечивает стабильную работу и высокую производительность. Он может использоваться для питания различных электроинструментов, светильников, бытовой техники и других устройств. Бензиновый генератор Fubag BS6600 - это надежный и удобный инструмент, который обеспечит вас электричеством в любых условиях.</p>

                    </div>
                </div>
                <div class="full-details dls-two filterd-items hide">
                    <div class="full-details-inner">
                        <p class="mb--30">
                            3 розетки – 2 для стандартных потребителей (16A) и 1 для силовая (32A)
                            Мультифункциональный цифровой дисплей для контроля основных параметров работы станции
                            Система защиты от перегрузки, короткого замыкания и низкого уровня масла
                            Мощность (кВт), кВт 6,0
                            Объем бака, л 25
                            Объем двигателя, см3 420
                            Способ запуска Ручной стартер
                            Рекомендуемое топливо АИ-92
                            Количество фаз 1
                            Время работы на полном баке, ч 8
                            Напряжение, В 230
                            Объем маслянного картера, л 1,0
                            Номинальный ток, А 26
                            Кол-во розеток 230 В (16 А/32 А) 2/1
                            Датчик уровня масла Да
                            Номинальная частота, Гц 50
                            Мощность (л.с.) 10,9
                            Мощность (Вт) 6000
                            Класс защиты IP23
                            Уровень шума, дБ 80
                            Функция сварки Нет
                            Охлаждение двигателя Воздушное
                            Тактность двигателя 4-х тактный
                            Температура эксплуатации, °С От -20 до +40
                            Размеры, мм 694х540х575
                        </p>
                    </div>
                </div>
{{--                <div class="full-details dls-three filterd-items hide">--}}
{{--                    <div class="full-details-inner">--}}
{{--                        <p>There are no reveiws yet.</p>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12 col-md-12 mr-10">--}}
{{--                                <div class="reveiw-form">--}}
{{--                                    <h2 class="section-title">--}}
{{--                                        Be the first to reveiw <strong> <a href="{{ route('productDetails') }}">"Wide Cotton Tunic Dress"</a></strong></h2>--}}
{{--                                        <h4 class="sect-title">Your email address will not be published. Required fields are marked* </h4>--}}
{{--                                        <div class="reveiw-form-main mb-10">--}}
{{--                                            <div class="contact-form">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-lg-6 col-sm-12">--}}
{{--                                                        <div class="input-box text-input mb-20">--}}
{{--                                                            <textarea name="Message" id="validationDefault01"  cols="30" rows="10"--}}
{{--                                                                placeholder="Your Review*" required></textarea>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-lg-6 col-sm-12">--}}
{{--                                                        <div class="col-lg-12">--}}
{{--                                                            <div class="input-box mb-20">--}}
{{--                                                                <input type="text" id="validationDefault02" placeholder="Name*" required>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-12">--}}
{{--                                                            <div class="input-box mail-input mb-20">--}}
{{--                                                                <input type="text" id="validationDefault03" placeholder="E-mail*" required>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-12">--}}
{{--                                                            <div class="rating">--}}
{{--                                                                <p>Your Rating :</p>--}}
{{--                                                                <div class="rating-icon">--}}
{{--                                                                    <span class="one"><a href="#"> <i class="fal fa-star"></i></a></span>--}}
{{--                                                                    <span class="two"><a href="#"> <i class="fal fa-star"></i></a></span>--}}
{{--                                                                    <span class="three"><a href="#"> <i class="fal fa-star"></i></a></span>--}}
{{--                                                                    <span class="four"><a href="#"> <i class="fal fa-star"></i></a></span>--}}
{{--                                                                    <span class="five"><a href="#"> <i class="fal fa-star"></i></a></span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 mb-15">--}}
{{--                                                            <button class="form-btn form-btn4">--}}
{{--                                                                Submit <i class="fal fa-long-arrow-right"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--            --}}
{{--                                        </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    <!-- ..::Related Product Section Start Here::.. -->
    <div class="rts-featured-product-section1 related-product related-product1">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5 ">Похожие товары</span>
                <a href="shop-main" class="go-btn"> <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="products-area">
                <div class="swiper rts-fiveSlide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/6e0/250_250_1/6ns0asz5owoiqh38p276p2d3wlmvpzrl.webp') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Инструмент</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Генератор бензиновый Fubag BS6600 6,0 кВт в аренду</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от 1 200 ₽</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> В корзину</a>
                                        </div>
                                        {{--                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/158/250_250_1/o0sf1q1tw7cs11pd325btaje621xbn9y.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Инструмент</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Инверторный цифровой генератор FUBAG TI 2000 в аренду</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от 750 ₽</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/116/250_250_1/3smfcm15p0m2bc2eqyxbua2j672aq4jn.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Инструмент</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Генератор бензиновый с электростартером FUBAG BS 5500 A ES в аренду</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от 1 100 ₽</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Инструмент</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Газовый монтажный пистолет GNG1000 в аренду</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от 1 000 ₽</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('productDetails') }}" class="product-image">
                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/96d/250_250_1/7rdx6u8o1dnknj3fij8w38elw53hrwu6.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Инструмент</span>
                                    <a href="{{ route('productDetails') }}" class="product-name">Скарификатор-аэратор Patriot бензиновый в аренду</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от 2 000 ₽</span>
                                            <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> В корзину</a>
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
    <!-- ..::Related Product Section End Here::.. -->

    <div class="rts-account-section"></div>

@endsection