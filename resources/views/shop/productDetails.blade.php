@extends('layout.layout')

@section('content')

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="rts-product-details-section section-gap">
        <div class="container">
            <div class="details-product-area mb--70">
                <div class="product-thumb-area col-4">
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)"
                             style="background-image: url('{{ $product->getAvatar() }}')">
                            <img src="{{ $product->getAvatar() }}" alt="product-thumb">
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="product-status">
                        <span class="product-catagory">{{ $product->category?->getTitle() ?? 'Без категории' }}</span>
                    </div>
                    <h2 class="product-title">{{ $product->getTitle() }}
                        <span class="stock">{{ $product->state?->getTitle()}}</span>
                    </h2>
                    <span class="product-price">
                        <span class="old-price">от</span> {{ number_format($product->getBuyPrice(), 0, ',', ' ') }} ₽
                    </span>
                    <div class="product-bottom-action">
                        {{--                        <div class="cart-edit">--}}
                        {{--                            <div class="quantity-edit action-item">--}}
                        {{--                                <button class="button"><i class="fal fa-minus minus"></i></button>--}}
                        {{--                                <input type="text" class="input" value="01"/>--}}
                        {{--                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <a href="{{ route('cart') }}" class="addto-cart-btn action-item">
                            <i class="rt-basket-shopping"></i> В корзину
                        </a>
                    </div>

                    <div class="product-uniques">
                        @if($product->options->isNotEmpty())
                            @foreach($product->options as $option)
                                <span class="tags product-unipue"><span>{{$option->getTitle()}}</span> {{ $option->getValue()}}</span>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
            <div class="product-full-details-area">
                <div class="details-filter-bar2">
                    <button class="details-filter filter-btn active" data-show=".dls-one">Описание</button>
                    <button class="details-filter filter-btn" data-show=".dls-two">Характеристики и дополнения</button>
                    <button class="details-filter filter-btn" data-show=".dls-three">Календарь</button>
                </div>
                <div class="full-details dls-one filterd-items">
                    <div class="full-details-inner">
                        <p class="mb--30"> {{$product->getDescription()}}</p>
                    </div>
                </div>
                <div class="full-details dls-two filterd-items hide">
                    <div class="full-details-inner">
                        @if($product->media->isNotEmpty())
                            <div class="product-gallery">
                                @foreach($product->media as $media)
                                    <img src="{{ $media->getUrl() }}"
                                         alt="Изображение {{ $loop->index + 1 }}"
                                         class="product-thumbnail"
                                         data-full="{{ $media->getUrl() }}">
                                @endforeach
                            </div>
                        @else
                            <p>Нет данных</p>
                        @endif
                    </div>
                </div>

                <!-- Модальное окно -->
                <div id="imageModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="fullImage">
                </div>


                <div class="full-details dls-three filterd-items hide">
                    <div id="calendar" class="mt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    <!-- ..::Related Product Section Start Here::.. -->
{{--    <div class="rts-featured-product-section1 related-product related-product1">--}}
{{--        <div class="container">--}}
{{--            <div class="section-header section-header4">--}}
{{--                <span class="section-title section-title-2 mb--5 ">Похожие товары</span>--}}
{{--                <a href="shop-main" class="go-btn"> <i class="fal fa-long-arrow-right"></i></a>--}}
{{--            </div>--}}
{{--            <div class="products-area">--}}
{{--                <div class="swiper rts-fiveSlide">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="product-item product-item4">--}}
{{--                                <a href="#" class="product-image col-3">--}}
{{--                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/6e0/250_250_1/6ns0asz5owoiqh38p276p2d3wlmvpzrl.webp') }}"--}}
{{--                                         alt="product-image">--}}
{{--                                </a>--}}
{{--                                <div class="bottom-content">--}}
{{--                                    <span class="product-catagory">Инструмент</span>--}}
{{--                                    <a href="#" class="product-name">Генератор бензиновый--}}
{{--                                        Fubag BS6600 6,0 кВт в аренду</a>--}}
{{--                                    <div class="flex-wrap">--}}
{{--                                        <div class="action-wrap">--}}
{{--                                            <span class="product-price">от 1 200 ₽</span>--}}
{{--                                            <a href="{{ route('cart') }}" class="addto-cart"><i--}}
{{--                                                        class="fal fa-shopping-cart"></i> В корзину</a>--}}
{{--                                        </div>--}}
{{--                                        --}}{{--                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="product-item product-item4">--}}
{{--                                <a href="#" class="product-image">--}}
{{--                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/158/250_250_1/o0sf1q1tw7cs11pd325btaje621xbn9y.png') }}"--}}
{{--                                         alt="product-image">--}}
{{--                                </a>--}}
{{--                                <div class="bottom-content">--}}
{{--                                    <span class="product-catagory">Инструмент</span>--}}
{{--                                    <a href="#" class="product-name">Инверторный цифровой--}}
{{--                                        генератор FUBAG TI 2000 в аренду</a>--}}
{{--                                    <div class="flex-wrap">--}}
{{--                                        <div class="action-wrap">--}}
{{--                                            <span class="product-price">от 750 ₽</span>--}}
{{--                                            <a href="{{ route('cart') }}" class="addto-cart"><i--}}
{{--                                                        class="fal fa-shopping-cart"></i> В корзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="product-item product-item4">--}}
{{--                                <a href="#" class="product-image">--}}
{{--                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/116/250_250_1/3smfcm15p0m2bc2eqyxbua2j672aq4jn.png') }}"--}}
{{--                                         alt="product-image">--}}
{{--                                </a>--}}
{{--                                <div class="bottom-content">--}}
{{--                                    <span class="product-catagory">Инструмент</span>--}}
{{--                                    <a href="#" class="product-name">Генератор бензиновый с--}}
{{--                                        электростартером FUBAG BS 5500 A ES в аренду</a>--}}
{{--                                    <div class="flex-wrap">--}}
{{--                                        <div class="action-wrap">--}}
{{--                                            <span class="product-price">от 1 100 ₽</span>--}}
{{--                                            <a href="{{ route('cart') }}" class="addto-cart"><i--}}
{{--                                                        class="fal fa-shopping-cart"></i> В корзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="product-item product-item4">--}}
{{--                                <a href="#" class="product-image">--}}
{{--                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg') }}"--}}
{{--                                         alt="product-image">--}}
{{--                                </a>--}}
{{--                                <div class="bottom-content">--}}
{{--                                    <span class="product-catagory">Инструмент</span>--}}
{{--                                    <a href="#" class="product-name">Газовый монтажный--}}
{{--                                        пистолет GNG1000 в аренду</a>--}}
{{--                                    <div class="flex-wrap">--}}
{{--                                        <div class="action-wrap">--}}
{{--                                            <span class="product-price">от 1 000 ₽</span>--}}
{{--                                            <a href="{{ route('cart') }}" class="addto-cart"><i--}}
{{--                                                        class="fal fa-shopping-cart"></i> В корзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="product-item product-item4">--}}
{{--                                <a href="#" class="product-image">--}}
{{--                                    <img src="{{ asset('https://gorrent.ru/upload/resize_cache/iblock/96d/250_250_1/7rdx6u8o1dnknj3fij8w38elw53hrwu6.png') }}"--}}
{{--                                         alt="product-image">--}}
{{--                                </a>--}}
{{--                                <div class="bottom-content">--}}
{{--                                    <span class="product-catagory">Инструмент</span>--}}
{{--                                    <a href="#" class="product-name">Скарификатор-аэратор--}}
{{--                                        Patriot бензиновый в аренду</a>--}}
{{--                                    <div class="flex-wrap">--}}
{{--                                        <div class="action-wrap">--}}
{{--                                            <span class="product-price">от 2 000 ₽</span>--}}
{{--                                            <a href="{{ route('cart') }}" class="addto-cart"><i--}}
{{--                                                        class="fal fa-shopping-cart"></i> В корзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ..::Related Product Section End Here::.. -->

    <div class="rts-account-section"></div>

@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');

            // Получаем данные аренды, которые уже переданы в шаблон
            const rents = @json($rents);

            // Проверяем ширину экрана
            const isMobile = window.innerWidth <= 768;

            // Преобразуем данные аренды в события календаря
            const events = rents.map(rent => {
                return {
                    title: 'Занято',
                    start: rent.time_start,
                    end: rent.time_end,
                    backgroundColor: '#FF6B6B',
                    borderColor: '#FF6B6B',
                    allDay: true
                };
            });

            // Инициализируем календарь
            const calendar = new FullCalendar.Calendar(calendarEl, {
                // Для мобильных устройств используем список вместо сетки по умолчанию
                initialView: isMobile ? 'listMonth' : 'dayGridMonth',
                locale: 'ru',
                height: 'auto',

                // Настройка панели инструментов
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                },

                // Настраиваем текст кнопок
                buttonText: {
                    today: 'Сегодня',
                    month: 'Месяц',
                    list: 'Список'
                },

                // Добавляем события
                events: events,

                // Настройки для мобильных устройств
                viewDidMount: function(viewInfo) {
                    if (isMobile && viewInfo.view.type === 'dayGridMonth') {
                        // Переключаемся на список для мобильных, если пользователь все же выбрал сетку
                        setTimeout(() => {
                            const listButton = document.querySelector('.fc-listMonth-button');
                            if (listButton) {
                                listButton.click();
                            }
                        }, 100);
                    }
                },

                // Обработка нажатия на дату
                dateClick: function(info) {
                    // Проверяем, доступна ли дата для аренды
                    const clickedDate = info.date;
                    let isAvailable = true;

                    for (let i = 0; i < events.length; i++) {
                        const eventStart = new Date(events[i].start);
                        const eventEnd = new Date(events[i].end);

                        // Устанавливаем одинаковое время для корректного сравнения
                        eventStart.setHours(0, 0, 0, 0);
                        eventEnd.setHours(0, 0, 0, 0);
                        clickedDate.setHours(0, 0, 0, 0);

                        if (clickedDate >= eventStart && clickedDate <= eventEnd) {
                            isAvailable = false;
                            break;
                        }
                    }

                    if (isAvailable) {
                        alert('Дата доступна для аренды!');
                    } else {
                        alert('Эта дата уже занята.');
                    }
                },

                // Настройки для списочного представления
                listDayFormat: { weekday: 'long', month: 'long', day: 'numeric' },
                noEventsContent: 'Нет занятых дат',

                // Обработка изменения размера окна
                windowResize: function(arg) {
                    const newIsMobile = window.innerWidth <= 768;
                    if (newIsMobile !== isMobile) {
                        window.location.reload();
                    }
                }
            });

            // Рендерим календарь
            calendar.render();

            // Если мобильное устройство, принудительно переключаемся на список
            if (isMobile) {
                setTimeout(() => {
                    const listButton = document.querySelector('.fc-listMonth-button');
                    if (listButton) {
                        listButton.click();
                    }
                }, 200);
            }

            const modal = document.getElementById("imageModal");
            const modalImg = document.getElementById("fullImage");
            const closeModal = document.querySelector(".close");

            document.querySelectorAll(".product-thumbnail").forEach(img => {
                img.addEventListener("click", function () {
                    modal.style.display = "flex";
                    modalImg.src = this.getAttribute("data-full");
                });
            });

            closeModal.addEventListener("click", function () {
                modal.style.display = "none";
            });

            modal.addEventListener("click", function (e) {
                if (e.target === modal) {
                    modal.style.display = "none";
                }
            });
        })
    </script>
@endpush
