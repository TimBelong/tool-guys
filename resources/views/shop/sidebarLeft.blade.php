@php
    $css='<link rel="stylesheet" href="' . asset('assets/css/jquery.nstSlider.min.css') . '"/>
          <link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '"/>';
    $header='flase';
    $footer='flase';
@endphp

<x-default-layout>
    <!-- ..::Shop Section Start Here::.. -->
    <div class="rts-shop-section section-gap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="side-sticky">
                        <div class="shop-side-action">
                            <div class="action-item">
                                <span class="action-title">Фильтр</span>

                                <!-- Скрытые поля для хранения значений фильтров -->
                                <input type="hidden" id="price_min" value="{{ request('price_min', 0) }}">
                                <input type="hidden" id="price_max" value="{{ request('price_max', 20000) }}">
                            </div>

                            <!-- Фильтр по цене -->
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Цена</span>
                                </div>
                                <div class="nstSlider" data-range_min="0" data-range_max="20000"
                                     data-cur_min="{{ request('price_min', 0) }}"
                                     data-cur_max="{{ request('price_max', 20000) }}">
                                    <div class="bar"></div>
                                    <div class="leftGrip price-range-grip"></div>
                                    <div class="rightGrip price-range-grip"></div>
                                </div>
                                <div class="range-label-area">
                                    <div class="min-price d-flex">
                                        <span class="currency-symbol">₽</span>
                                        <div class="leftLabel price-range-label">{{ request('price_min', 0) }}</div>
                                    </div>
                                    <div class="min-price d-flex">
                                        <span class="currency-symbol">₽</span>
                                        <div class="rightLabel price-range-label">{{ request('price_max', 20000) }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Наличие -->
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Наличие</span>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox" id="in_stock" {{ request('in_stock') ? 'checked' : '' }}>
                                    <span class="color-name" style="margin-left: 10px">В наличии</span>
                                </div>
                            </div>

                            <!-- Кнопка применения фильтров -->
                            <div class="action-item">
                                <button id="apply_filters" class="btn rts-btn btn-primary">Применить фильтр</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="shop-product-topbar justify-content-between">
                        <span class="items-onlist">Показано {{ $products->count() }} из {{ $totalCount }} результатов</span>
                        <div class="product-status">
                            <span class="all-products-category">{{ $category ?? 'Магазин товаров' }}</span>
                        </div>
                    </div>

                    <div class="products-area products-area3">
                        <div class="row justify-content-start">
                            @foreach($products as $product)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-item product-item2 element-item3 sidebar-left">
                                        <a href="{{ route('productDetails', ['id' => $product->getId()]) }}" class="product-image">
                                            @if($product->getAvatar())
                                                <img src="{{ $product->getAvatar() }}" alt="product-image">
                                            @else
                                                <img src="{{ asset('assets/images/products/no-image.jpg') }}" alt="product-image">
                                            @endif
                                        </a>
                                        <div class="bottom-content">
                                            <a href="{{ route('productDetails', ['id' => $product->getId()]) }}"
                                               class="product-name">{{ $product->getTitle() }}</a>
                                            <div class="action-wrap">
                                                <span class="product-price">{{ number_format($product->getBuyPrice(), 0, ',', ' ') }} ₽</span>
                                                <a href="#" class="addto-cart" data-product-id="{{ $product->getId() }}">
                                                    <i class="fal fa-shopping-cart"></i> В корзину
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <a class="product-action wishlist-btn {{ auth()->user() && auth()->user()->favorites->contains($product->getId()) ? 'active' : '' }}"
                                               style="cursor:pointer;"
                                               data-product-id="{{ $product->getId() }}">
                                                <i class="rt-heart"></i>
                                            </a>
                                            <button class="product-action product-details-popup-btn"><i
                                                        class="fal fa-eye">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="product-pagination-area mt--20">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Shop Section Section End Here::.. -->

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
                                 style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')">
                                <img src="{{ asset('assets/images/products/product-details.jpg') }}"
                                     alt="product-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Товар</span>
                            <div class="stock-status">
                                <span class="in-stock">В наличии</span>
                            </div>
                        </div>
                        <h2 class="product-title">Название товара</h2>
                        <span class="product-price">0 ₽</span>
                        <p class="product-description">
                            Описание товара
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01"/>
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="#" class="addto-cart-btn action-item"><i
                                        class="rt-basket-shopping"></i>
                                Добавить в корзину</a>
                            <a href="#" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Инициализация слайдера цены
                if (typeof $.fn.nstSlider !== 'undefined') {
                    $('.nstSlider').nstSlider({
                        "left_grip_selector": ".leftGrip",
                        "right_grip_selector": ".rightGrip",
                        "value_bar_selector": ".bar",
                        "value_changed_callback": function(cause, leftValue, rightValue) {
                            // Обновляем отображаемые значения
                            $(this).parent().find(".leftLabel").text(leftValue);
                            $(this).parent().find(".rightLabel").text(rightValue);

                            // Обновляем скрытые поля для фильтрации
                            document.getElementById('price_min').value = leftValue;
                            document.getElementById('price_max').value = rightValue;
                        }
                    });
                }

                // Обработчик для кнопки применения фильтра
                document.getElementById('apply_filters').addEventListener('click', function() {
                    // Получаем значения фильтров
                    const priceMin = document.getElementById('price_min').value;
                    const priceMax = document.getElementById('price_max').value;
                    const inStock = document.getElementById('in_stock').checked ? 1 : 0;

                    // Создаем объект URL с текущим путем
                    const url = new URL(window.location.href);
                    const params = url.searchParams;

                    // Устанавливаем параметры фильтрации
                    params.set('price_min', priceMin);
                    params.set('price_max', priceMax);

                    if (inStock) {
                        params.set('in_stock', inStock);
                    } else {
                        params.delete('in_stock');
                    }

                    // Сбрасываем страницу на первую при применении нового фильтра
                    if (params.has('page')) {
                        params.set('page', 1);
                    }

                    // Переходим на URL с установленными параметрами
                    window.location.href = url.toString();
                });

                // Обработчик для кнопки избранного
                document.querySelectorAll('.wishlist-btn').forEach(button => {
                    button.addEventListener('click', function () {
                        let productId = this.dataset.productId;
                        console.log("Clicked product ID:", productId);

                        if (!productId) {
                            console.error("Product ID not found");
                            return;
                        }

                        let csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
                        if (!csrfTokenElement) {
                            console.error("CSRF token meta tag not found");
                            return;
                        }

                        let csrfToken = csrfTokenElement.getAttribute('content');

                        fetch(`/favorites/${productId}`, {
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

                // Обработчик для кнопки "В корзину"
                document.querySelectorAll('.addto-cart').forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();

                        let productId = this.dataset.productId;
                        console.log("Adding to cart product ID:", productId);

                        if (!productId) {
                            console.error("Product ID not found");
                            return;
                        }

                        let csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
                        if (!csrfTokenElement) {
                            console.error("CSRF token meta tag not found");
                            return;
                        }

                        let csrfToken = csrfTokenElement.getAttribute('content');

                        fetch('/cart/add-product', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                product_id: productId,
                                quantity: 1
                            })
                        })
                            .then(response => response.json())
                            .then(data => {
                                console.log("Server response:", data);
                                if (data.success) {
                                    alert('Товар добавлен в корзину!');
                                } else {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else {
                                        alert(data.message || 'Произошла ошибка при добавлении товара в корзину');
                                    }
                                }
                            })
                            .catch(error => {
                                console.error("Error:", error);
                                alert('Произошла ошибка при добавлении товара в корзину');
                            });
                    });
                });
            });
        </script>
    @endpush
</x-default-layout>