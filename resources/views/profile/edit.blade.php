<x-default-layout>
    <div class="profile-section py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Табы -->
            <ul class="nav nav-tabs px-40" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="update-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#update-profile" type="button" role="tab" aria-controls="update-profile"
                            aria-selected="true">
                        Обновить информацию профиля
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-password-tab" data-bs-toggle="tab"
                            data-bs-target="#update-password" type="button" role="tab" aria-controls="update-password"
                            aria-selected="false">
                        Обновить пароль
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="purchase-history-tab" data-bs-toggle="tab"
                            data-bs-target="#purchase-history" type="button" role="tab" aria-controls="purchase-history"
                            aria-selected="false">
                        История заказов
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="favorites-tab" data-bs-toggle="tab" data-bs-target="#favorites"
                            type="button" role="tab" aria-controls="favorites" aria-selected="false">
                        Избранное
                    </button>
                </li>
            </ul>

            <!-- Контент табов -->
            <div class="tab-content" id="profileTabsContent">
                <!-- Секция "Обновить профиль" -->
                <div class="tab-pane fade show active" id="update-profile" role="tabpanel"
                     aria-labelledby="update-profile-tab">
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
                                        <td>
                                            <div class="product-thumb"><img
                                                        src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg"
                                                        alt="product-thumb"></div>
                                        </td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>

                                        <td class="last-td">
                                            <div class="status-badge">Оплачено</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-thumb"><img
                                                        src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg"
                                                        alt="product-thumb"></div>
                                        </td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td">
                                            <div class="status-badge">Оплачено</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-thumb"><img
                                                        src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg"
                                                        alt="product-thumb"></div>
                                        </td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td">
                                            <div class="status-badge">Оплачено</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-thumb"><img
                                                        src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg"
                                                        alt="product-thumb"></div>
                                        </td>
                                        <td>
                                            <div class="product-title-area">
                                                <span class="pretitle">Аренда</span>
                                                <h4 class="product-title">Газовый монтажный пистолет GNG1000</h4>
                                            </div>
                                        </td>
                                        <td><span class="product-price">3 000 ₽</span></td>
                                        <td><span class="product-price">3 шт.</span></td>
                                        <td class="last-td">
                                            <div class="status-badge">Оплачено</div>
                                        </td>
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
                                @foreach($favorites as $inventory)
                                    <tr>
                                        <!-- Кнопка удаления из избранного -->
                                        <td class="first-td">
                                            <button class="remove-btn wishlist-btn active"
                                                    data-inventory-id="{{ $inventory->getId() }}">
                                                <i class="fal fa-times"></i>
                                            </button>
                                        </td>

                                        <!-- Изображение и название -->
                                        <td class="first-child">
                                            <a href="{{ route('productDetails', ['id' => $inventory->id]) }}">
                                                <img src="{{ asset($inventory->getAvatar()) }}"
                                                     alt="{{ $inventory->getTitle() }}">
                                            </a>
                                            <a href="{{ route('productDetails', ['id' => $inventory->id]) }}"
                                               class="pretitle">
                                                {{ $inventory->getTitle() }}
                                            </a>
                                        </td>

                                        <!-- Цена -->
                                        <td>
                                            <span class="product-price">
                                                {{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽
                                            </span>
                                        </td>

                                        <!-- Статус наличия -->
                                        <td class="{{ $inventory->state?->getTitle() === 'Свободен' ? 'stock' : 'stock1' }}">
                                            {{ $inventory->state?->getTitle() }}
                                        </td>

                                        <!-- Кнопка добавления в корзину -->
                                        <td class="last-td">
                                            <button class="{{ $inventory->state?->getTitle() === 'Свободен' ? 'cart-btn' : 'cart-btn1' }}">
                                                <i class="rt-basket-shopping"></i> В корзину
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            document.querySelectorAll('.remove-btn').forEach(button => {
                button.addEventListener('click', async function () {
                    let inventoryId = this.dataset.inventoryId;
                    let row = this.closest('tr');

                    if (!inventoryId) {
                        console.error("Inventory ID not found");
                        return;
                    }

                    if (!row) {
                        console.error("Row not found for button:", this);
                        return;
                    }

                    console.log("Found row:", row);

                    let csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
                    let csrfToken = csrfTokenElement ? csrfTokenElement.getAttribute('content') : null;

                    try {
                        let response = await fetch(`/favorites/${inventoryId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'Content-Type': 'application/json',
                            }
                        });

                        console.log("Response status:", response.status);

                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }

                        let data = await response.json();
                        console.log("Server response:", data);

                        if (data.message === 'Removed from favorites') {
                            console.log("Applying fade-out to row:", row);

                            row.style.transition = "opacity 0.5s ease-out, height 0.5s ease-out";
                            row.style.opacity = "0";
                            row.style.height = "0";
                            row.style.overflow = "hidden";

                            setTimeout(() => {
                                row.remove();
                                console.log("Row removed from DOM");
                            }, 500);
                        }
                    } catch (error) {
                        console.error("Error:", error);
                    }
                });
            });
        </script>
    @endpush
</x-default-layout>
