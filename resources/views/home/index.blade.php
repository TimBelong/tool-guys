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
                                <a href="#" class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Лучшее предложение</span>
                                        <h1 class="product-title">Инструменты для настоящего <br>
                                            <span>профессионала</span></h1>
                                        <span class="product-price">
                                            <span>От:</span>
                                             ₽3500
                                        </span>
                                    </div>
                                    <div class="product-thumb">
                                        <img src="{{ asset('assets/images/slider/slider-1.png') }}" alt="product-thumb">
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Лучшее предложение</span>
                                        <h1 class="product-title">Инструменты для настоящего <br>
                                            <span>профессионала</span></h1>
                                        <span class="product-price">
                                            <span>От:</span>  ₽3500
                                        </span>
                                    </div>
                                    <div class="product-thumb">
                                        <img src="{{ asset('assets/images/slider/slider-1.png') }}" alt="product-thumb">
                                    </div>
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
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icons/shipment.svg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Выгодные цены</h3>
                            <p>Чем больше срок аренды тем дешевле</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/icons/support.svg') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Быстрая доставка</h3>
                            <p>Доставка по Москве и МО возможна в день заказа</p>
                        </div>
                    </div>
                </div>
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
                        @foreach($topInventories as $inventory)
                            <div class="swiper-slide">
                                <div class="product-item product-item4">
                                    <a href="{{ route('productDetails', ['id' => $inventory->getId()]) }}"
                                       class="product-image">
                                        <img src="{{ asset($inventory->getAvatar()) }}"
                                             alt="{{ $inventory->getTitle() }}">
                                    </a>
                                    <div class="bottom-content">
                                        <span class="product-catagory">Инструмент</span>
                                        <a href="{{ route('productDetails', ['id' => $inventory->id]) }}"
                                           class="product-name">
                                            {{ $inventory->getTitle() }}
                                        </a>
                                    </div>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">от {{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽</span>
                                            <form action="{{ route('shop.add-to-cart', ['id' => $inventory->getId()]) }}"
                                                  class="add-to-cart-form" data-inventory-id="{{ $inventory->getId() }}"
                                                  method="POST" style="display: inline">
                                                @csrf
                                                <button type="submit" class="addto-cart">
                                                    <i class="fal fa-shopping-cart"></i> В корзину
                                                </button>
                                            </form>
                                        </div>
                                        <button class="wishlist-btn {{ auth()->user() && auth()->user()->favorites->contains($inventory->getId()) ? 'active' : '' }}"
                                                data-inventory-id="{{ $inventory->getId() }}">
                                            <i class="rt-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- ..::Deal Section Start Here::.. -->
        <div class="rts-deal-section section-gap">
            <div class="container position-relative">
                <div class="section-header section-header4">
                    <div class="flex-wrapper">
                        <span class="section-title section-title-2 mb--5 ">Новинки</span>
                    </div>
                    <a href="{{ route('about') }}" class="go-btn">Все инструменты <i
                                class="fal fa-long-arrow-right"></i></a>
                </div>
                <div class="swiper oneSlide">
                    <div class="swiper-wrapper">
                        @foreach($latestInventories->chunk(2) as $chunk)
                            <div class="swiper-slide">
                                <div class="deal-box">
                                    <div class="deal-box-inner">
                                        @foreach($chunk as $inventory)
                                            <div class="deal-product">
                                                <div class="product-area">
                                                    <div class="product detail-product one filterd-items">
                                                        <div class="product-thumb">
                                                            <img src="{{ asset($inventory->getAvatar()) }}"
                                                                 alt="{{ $inventory->getTitle() }}">
                                                        </div>
                                                        <div class="contents">
                                                            <h2 class="product-title">{{ $inventory->getTitle() }}</h2>
                                                            <span class="product-price">от {{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽</span>
                                                            <div class="product-buttons">
                                                                <form action="{{ route('shop.add-to-cart', ['id' => $inventory->getId()]) }}"
                                                                      method="POST" class="add-to-cart-form"
                                                                      data-inventory-id="{{ $inventory->getId() }}"
                                                                      style="display: inline">
                                                                    @csrf
                                                                    <button type="submit" class="select-option-btn">
                                                                        <i class="fal fa-shopping-cart mr--5"></i> В
                                                                        корзину
                                                                    </button>
                                                                </form>
                                                                <button class="wishlist-btn {{ auth()->user() && auth()->user()->favorites->contains($inventory->getId()) ? 'active' : '' }}"
                                                                        data-inventory-id="{{ $inventory->getId() }}">
                                                                    <i class="rt-heart"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="slider-navigation">
                <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-left"></i></div>
                <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
        </div>
        <!-- ..::Deal Section End Here::.. -->

        <section class="about-us-area pt-120 pb-75 pt-md-60 pb-md-15 pt-xs-50 pb-xs-10">
            <div class="container">
                <div class="image-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-1">
                                <img src="{{ asset('https://gorrent.ru/include/img/mainpage/text_mainpage_2.jpg') }}"
                                     alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-2">
                                <img src="{{ asset('https://gorrent.ru/include/img/mainpage/text_mainpage_3.jpg') }}"
                                     alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="section-title">
                        <div class="title-inner">
                            <div class="wrapper">
                                <div class="sub-content">
                                    <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                    <span class="sub-text">Инструменты под любую задачу</span>
                                    <img class="line-2" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                </div>
                                <h2 class="title">Компания ToolGuys</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-text">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="description">Прокат строительного инструмента – услуга, востребованная у частных
                                лиц и организаций по причине удобства и практической целесообразности. Не секрет, что
                                высокотехнологичное оборудование от ведущих производителей является дорогостоящим, не
                                каждый мастер может позволить себе иметь коллекцию всех необходимых приборов и техники.
                                А в случае, если какой-то вид работ является разовым или Вы выполняете отделку у себя
                                дома, и не занимаетесь этим профессионально, то аренда строительного инструмента –
                                оптимальное решение, не требующее больших вложений.</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="description">Сервис ToolGuys предоставляет только качественное оборудование,
                                имеющее легальное происхождение и необходимые сертификаты. Мы тщательно подходим к
                                созданию карточек товара на сайте и описаниям оборудования, чтобы клиент мог получить
                                максимально полное, достоверное представление. В случае, если информации Вам покажется
                                недостаточно, наши консультанты всегда рады пояснить оставшиеся вопросы. ToolGuys – это
                                так же конкурентоспособные цены и оперативное согласование проката с клиентом: Вам не
                                придется долго ждать.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-list">
                                <ul>
                                    <li><a href="#">Первоклассный сервис</a></li>
                                    <li><a href="#">Регулярное техобслуживание предметов проката</a></li>
                                    <li><a href="#">Приятные цены и гибкие условия проката</a></li>
                                    <li><a href="#">Обмен инструмента ненадлежащего качества</a></li>
                                    <li><a href="#">Оперативная обратная связь</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="features-area">
            <div class="container">
                <div class="features-1">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image-section">
                                <a href="#"><img src="https://compariqo.com/wp-content/uploads/2024/03/trending-tools-uk-construction.jpg" alt="features-1"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-content">
                                <div class="sub-content">
                                    <img class="line-1" src="assets/images/banner/wvbo-icon.png" alt="">
                                    <span class="sub-text">Строй, чини, твори – без переплат!</span>
                                    <img class="line-2" src="assets/images/banner/wvbo-icon.png" alt="">
                                </div>
                                <h2 class="title">Профессиональный инструмент – доступен каждому!</h2>
                                <p class="description">В ""ToolGuys"" мы уверены, что наша аренда и прокат инструмента –
                                    это то, что вам нужно для достижения отличных результатов в ваших проектах. С нами
                                    работать легко и выгодно! Свяжитесь с нами уже сегодня, чтобы получить больше
                                    информации о том, как мы можем помочь вам в реализации ваших планов. Мы гарантируем,
                                    что вы останетесь довольны своим выбором и качеством предоставляемых услуг!</p>
                                <div class="section-button">
                                    <a href="{{ route('contact') }}">Связаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <!-- ..::Newsletter Popup Start Here::.. -->--}}
        {{--            <div class="rts-newsletter-popup">--}}
        {{--                <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>--}}
        {{--                <div class="newsletter-inner">--}}
        {{--                    <h3 class="newsletter-heading">Get Weekly Newsletter</h3>--}}
        {{--                    <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack--}}
        {{--                        PS23. It is a completely modern design</p>--}}
        {{--                    <form>--}}
        {{--                        <div class="input-area">--}}
        {{--                            <div class="input-div"><input type="text" placeholder="Your name">--}}
        {{--                                <div class="input-icon"><i class="far fa-user"></i></div>--}}
        {{--                            </div>--}}
        {{--                            <div class="input-div"><input type="email" placeholder="Email address" required>--}}
        {{--                                <div class="input-icon"><i class="far fa-envelope"></i></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <button type="submit" class="subscribe-btn">Subscribe Now <i--}}
        {{--                                    class="fal fa-long-arrow-right ml--5"></i></button>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        <!-- ..::Newsletter Popup End Here::.. -->--}}

        <section class="faq-area pt-120 pb-90 pt-md-55 pb-md-30 pt-xs-55 pb-xs-30">
            <div class="container">
                <div class="section-header section-header4">
                    <span class="section-title section-title-2 mb--5 ">FAQ</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-que-list mb-30">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Сроки аренды
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Минимальный срок аренды – сутки. Клиент выбирает срок в зависимости
                                                    от потребности в оборудовании. Менеджер согласовывает срок проката и
                                                    его стоимость, эти данные вносятся в договор аренды.
                                                </li>
                                                <li>Выдача товара физическим лицам происходит по факту оплаты,
                                                    юридическим лицам – при поступлении денежных средств на расчетный
                                                    счет.
                                                </li>
                                                <li> В договоре указывается дата завершения аренды – в течение последних
                                                    суток необходимо осуществить возврат в соответствии с графиком
                                                    работы пункта аренды. При нарушении сроков арендодатель назначает
                                                    дополнительную посуточную оплату в зависимости от длительности
                                                    просрочки.
                                                </li>
                                                <li>Клиент может вернуть инструмент досрочно и получить возврат оплаты
                                                    за неиспользованные дни. Размер скидки предоставляемой на срок
                                                    аренды будет пересмотрен исходя из срока аренды.
                                                </li>
                                                <li>Арендодатель вправе отказать в продлении срока аренды в случае
                                                    невыполнения арендатором своих обязательств по договору.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            Продление аренды и возврат инструмента
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Если вы хотите продлить срок, позвоните менеджеру ToolGuys и
                                                    согласуйте дополнительные сутки аренды.
                                                </li>
                                                <li>Оплатите дополнительный срок аренды: юридические лица по счету,
                                                    физические лица наличными либо по ссылке на оплату.
                                                </li>
                                                <li>Если Вы заранее не позвонили сами по вопросу продления, за день до
                                                    окончания аренды менеджер ToolGuys позвонит Вам и напомнит о
                                                    возврате или предложит продление аренды.
                                                </li>
                                                <li>Для передачи инструмента в пункт проката оборудования ToolGuys Вы
                                                    можете выбрать доставку или самовывоз – это не зависит от того,
                                                    каким способом Вы получали заказ.
                                                </li>
                                                <li>При сдаче сотрудник ToolGuys проверяет инструмент.</li>
                                            </ol>
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
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                            Возврат инструмента
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>При сдаче оборудования подписывается акт приема-передачи.</li>
                                                <li>Клиент возвращает оборудование, указанное в договоре аренды.</li>
                                                <li>Если у пункта проката ToolGuys есть замечания к состоянию
                                                    инструмента, они фиксируются.
                                                </li>
                                                <li>Инструмент должен быть сдан в том же состоянии, в котором был выдан
                                                    клиенту.
                                                </li>
                                                <li>Перед сдачей инструмент и оборудование необходимо очистить от
                                                    загрязнений.
                                                </li>
                                                <li>При эксплуатации и очистке важно сохранить заводские этикетки и
                                                    пломбы на корпусе.
                                                </li>
                                                <li>Если клиент по каким-то причинам не может очистить инструмент
                                                    самостоятельно, он оплачивает услугу дополнительно.
                                                </li>
                                                <li>При выявлении дефектов у инструмента его передают на диагностику в
                                                    сервисный центр, затем принимается решение о ремонте. Если причина
                                                    неисправности/поломки - заводской брак или естественный износ,
                                                    ремонт оплачивает ToolGuys. Если инструментом неправильно
                                                    пользовались или он имеет следы механических повреждений, то ремонт
                                                    оплачивает клиент.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                            Преимущества аренды инструментов в "ToolGuys"
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Аренда без залога: Как часто арендаторы сталкиваются с
                                                    необходимостью вносить залог на арендуемое оборудование? Мы решили
                                                    эту проблему, предлагая возможность аренды без залога. Это делает
                                                    процесс аренды более доступным и удобным. Вам не нужно беспокоиться
                                                    о дополнительных расходах, которые могут возникнуть из-за временного
                                                    хранения оборудования.
                                                </li>
                                                <li>Доставка* инструмента на объект: Мы понимаем, как важно сэкономить
                                                    время, когда первоочередной задачей является выполнение работы.
                                                    Поэтому ToolGuys"" предлагает услуги по доставке арендованного
                                                    инструмента прямо на ваш объект. Это особенно удобно для жителей
                                                    Балашихи, Железнодорожного, Реутова, Люберец, Москвы, Мытищи,
                                                    Электросталь, Щелково, Купавна, Электроугли и Ногинск. Просто
                                                    закажите нужный инструмент, и мы берём на себя все заботы о
                                                    транспортировке. <br>
                                                    * - доставка платная, услуги по забору инструмента в стоимость
                                                    доставки не входит и оплачиваются исходя из тарифа.
                                                </li>
                                                <li>
                                                    Широкий ассортимент качественного инструмента: Наша компания
                                                    предлагает разнообразие инструментов для выполнения различных задач
                                                    - от мелкого ремонта в домашних условиях до крупных строительных
                                                    проектов. Модельный ряд включает строительные машины,
                                                    электроприборы, садовый инструментарий и многое другое, чтобы
                                                    удовлетворить потребности каждого клиента. Мы гарантируем, что все
                                                    оборудование находится в отличном состоянии и готово к работе.
                                                </li>
                                                <li>
                                                    Программа лояльности для постоянных клиентов: Мы ценим наших
                                                    клиентов и стремимся предоставить лучшие условия для тех, кто
                                                    работает с нами на постоянной основе. Наша программа лояльности
                                                    включает специальные предложения, такие как скидки на аренду и
                                                    приоритетное обслуживание. Вы можете экономить деньги и получать
                                                    дополнительные преимущества, сотрудничая с ""ToolGuys"".
                                                </li>
                                                <li>Гибкие условия аренды: Мы понимаем, что каждый клиент уникален и
                                                    имеет свои потребности в аренде. Именно поэтому мы предлагаем гибкие
                                                    условия аренды с возможностью выбрать необходимый срок - от одних
                                                    суток до года. Это позволит вам адаптировать аренду под конкретные
                                                    задачи.
                                                </li>
                                                <li>Качество обслуживания: Наша команда профессионалов готова помочь
                                                    вам на каждом этапе: от выбора необходимые инструмента до
                                                    консультаций по его использованию. Мы убеждены, что качественное
                                                    обслуживание – это залог длительного сотрудничества, и стараемся
                                                    сделать это для вас как можно лучше.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('script')
        <script>
            document.querySelectorAll('.wishlist-btn').forEach(button => {
                button.addEventListener('click', function () {
                    let inventoryId = this.dataset.inventoryId;
                    console.log("Clicked inventory ID:", inventoryId);

                    if (!inventoryId) {
                        console.error("Inventory ID not found");
                        return;
                    }

                    let csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
                    if (!csrfTokenElement) {
                        console.error("CSRF token meta tag not found");
                        return;
                    }

                    let csrfToken = csrfTokenElement.getAttribute('content');

                    fetch(`/favorites/${inventoryId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({})
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log("Server response:", data);
                            if (data.status === 'added') {
                                button.classList.add('active');
                            } else if (data.status === 'removed') {
                                button.classList.remove('active');
                            }
                        })
                        .catch(error => console.error("Error:", error));
                });
            });
        </script>
    @endpush
</x-default-layout>