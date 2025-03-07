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
                                            <form action="{{ route('shop.add-to-cart', ['id' => $inventory->getId()]) }}" class="add-to-cart-form" data-inventory-id="{{ $inventory->getId() }}" method="POST" style="display: inline">
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
                                                                <form action="{{ route('shop.add-to-cart', ['id' => $inventory->getId()]) }}" method="POST" class="add-to-cart-form" data-inventory-id="{{ $inventory->getId() }}" style="display: inline">
                                                                    @csrf
                                                                    <button type="submit" class="select-option-btn">
                                                                        <i class="fal fa-shopping-cart mr--5"></i> В корзину
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
                                    <span class="sub-text">На рынке с 1889</span>
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
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            Перый вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dicta
                                                dolorum incidunt ipsa odio sunt. Accusantium earum illo laborum libero
                                                minus, quasi reprehenderit sint? Ab aspernatur dolorum in rem sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Второй вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nam nobis
                                                tempora. Aperiam consequuntur delectus esse exercitationem laborum nisi
                                                non numquam optio quibusdam, reiciendis repudiandae, sequi, sit sunt vel
                                                voluptatum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            третий вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi
                                                maiores placeat porro! Aliquid dolorem doloremque ex fugit harum
                                                molestiae odit, officia quaerat quia reprehenderit unde velit
                                                voluptatibus. Consectetur, labore, quo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                            Четвертый вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi
                                                autem beatae blanditiis corporis cumque ducimus ea harum ipsam iusto
                                                maiores neque nulla porro quam, quas ratione sapiente unde
                                                veritatis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                            Пятый вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                         aria-labelledby="headingFive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem,
                                                beatae cum doloribus, fugiat ipsam laboriosam laborum nisi odit
                                                quibusdam ratione tempora voluptas? Dolores illo incidunt nihil porro
                                                quas velit?</p>
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
                                                data-bs-target="#collapseSix" aria-expanded="true"
                                                aria-controls="collapseSix">
                                            Шестой вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse show"
                                         aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam,
                                                asperiores blanditiis corporis culpa fugiat iste non possimus quidem rem
                                                voluptatum? Adipisci beatae dolorem, inventore nihil officiis quibusdam
                                                rerum unde voluptatibus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                            Седьмой вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                         aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa
                                                distinctio dolores, dolorum eaque, eius, enim eos eum facilis laborum
                                                magnam nihil perferendis quaerat quasi quia saepe suscipit unde ut.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseEight" aria-expanded="false"
                                                aria-controls="collapseEight">
                                            Восьмой вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                         aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi,
                                                consectetur deleniti deserunt dolore facere fugit labore laboriosam
                                                libero molestiae molestias nesciunt non odit placeat possimus quis quo
                                                quos rerum tempore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseNine" aria-expanded="false"
                                                aria-controls="collapseNine">
                                            Девятый вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                         aria-labelledby="headingNine"
                                         data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis enim
                                                excepturi facere fugiat iusto, laboriosam laborum nam numquam repellat
                                                sunt! Alias aliquam delectus enim nemo nisi porro quasi tempora,
                                                voluptate.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                            Десятый вопрос?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse"
                                         aria-labelledby="headingTen"
                                         data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa enim nemo
                                                neque perspiciatis quia repellendus voluptates voluptatibus. Eos eveniet
                                                facilis fuga fugit, ipsum iste itaque necessitatibus qui sequi vero
                                                voluptatibus.</p>
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