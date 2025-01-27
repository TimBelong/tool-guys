<x-default-layout>
    <div class="profile-section py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Табы -->
            <ul class="nav nav-tabs px-40" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="update-profile-tab" data-bs-toggle="tab" data-bs-target="#update-profile" type="button" role="tab" aria-controls="update-profile" aria-selected="true">
                        Обновить информацию профиля
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-password-tab" data-bs-toggle="tab" data-bs-target="#update-password" type="button" role="tab" aria-controls="update-password" aria-selected="false">
                        Обновить пароль
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="purchase-history-tab" data-bs-toggle="tab" data-bs-target="#purchase-history" type="button" role="tab" aria-controls="purchase-history" aria-selected="false">
                        История заказов
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="favorites-tab" data-bs-toggle="tab" data-bs-target="#favorites" type="button" role="tab" aria-controls="favorites" aria-selected="false">
                        Избранное
                    </button>
                </li>
            </ul>

            <!-- Контент табов -->
            <div class="tab-content" id="profileTabsContent">
                <!-- Секция "Обновить профиль" -->
                <div class="tab-pane fade show active" id="update-profile" role="tabpanel" aria-labelledby="update-profile-tab">
                    <div class="d-flex justify-content-center mt-100">
                        <div class="col-lg-4 p-4 sm:p-8">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Секция "Обновить пароль" -->
                <div class="tab-pane fade" id="update-password" role="tabpanel" aria-labelledby="update-password-tab">
                    <div class="d-flex justify-content-center mt-100">
                        <div class="col-lg-4 p-4 sm:p-8">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="purchase-history" role="tabpanel" aria-labelledby="purchase-history-tab">
                    <div class="d-flex justify-content-center mt-100">
                        <div class="col-lg-8 p-4 sm:p-8">
                            <div class="max-w-xl">
                                <div class="shop-product-topbar justify-content-between">
                                    <h2>История заказов</h2>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="product-thumb"><img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="product-thumb"></div></td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>

                                        <td class="last-td"><div class="status-badge">Оплачено</div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="product-thumb"><img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="product-thumb"></div></td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td"><div class="status-badge">Оплачено</div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="product-thumb"><img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="product-thumb"></div></td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td"><div class="status-badge">Оплачено</div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="product-thumb"><img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="product-thumb"></div></td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td"><div class="status-badge">Оплачено</div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="favorites" role="tabpanel" aria-labelledby="update-password-tab">
                    <div class="rts-wishlist-section section-gap">
                        <div class="container">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr class="heading">
                                    <th></th>
                                    <th>Название инструмента</th>
                                    <th>Цена</th>
                                    <th>Статус</th>
                                    <th></th>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                                    <td class="first-child">
                                        <a href="{{ route('productDetails') }}">
                                            <img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="">
                                        </a>
                                        <a href="{{ route('productDetails') }}" class="pretitle">Газовый монтажный пистолет GNG1000</a>
                                    </td>
                                    <td><span class="product-price">1 000 ₽</span></td>
                                    <td class="stock">Есть на складе</td>
                                    <td class="last-td">
                                        <button class="cart-btn"><i class="rt-basket-shopping"></i> В корзину </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                                    <td class="first-child">
                                        <a href="{{ route('productDetails') }}">
                                            <img src="https://gorrent.ru/upload/resize_cache/iblock/96d/250_250_1/7rdx6u8o1dnknj3fij8w38elw53hrwu6.png" alt="">
                                        </a>
                                        <a href="{{ route('productDetails') }}" class="pretitle">Скарификатор-аэратор Patriot бензиновый</a>
                                    </td>
                                    <td><span class="product-price">2 000 ₽</span></td>
                                    <td class="stock1">Нет на складе</td>
                                    <td class="last-td">
                                        <button class="cart-btn1"><i class="rt-basket-shopping"></i> В корзину</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>
