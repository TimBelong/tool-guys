<x-default-layout>
    <div class="profile-section py-12">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
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
                @if(auth()->user()->role === 'admin')
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="admin-panel-tab" data-bs-toggle="tab" data-bs-target="#admin-panel"
                                type="button" role="tab" aria-controls="admin-panel" aria-selected="false">
                            Панель Администратора
                        </button>
                    </li>
                @endif
            </ul>

            <div class="tab-content" id="profileTabsContent">
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
                                        <td class="first-td">
                                            <button class="remove-btn wishlist-btn active"
                                                    data-inventory-id="{{ $inventory->getId() }}">
                                                <i class="fal fa-times"></i>
                                            </button>
                                        </td>

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

                                        <td>
                                            <span class="product-price">
                                                {{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽
                                            </span>
                                        </td>

                                        <td class="{{ $inventory->state?->getTitle() === 'Свободен' ? 'stock' : 'stock1' }}">
                                            {{ $inventory->state?->getTitle() }}
                                        </td>

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

                @if(auth()->user()->role === 'admin')
                    <div class="tab-pane fade" id="admin-panel" role="tabpanel" aria-labelledby="admin-panel-tab">
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Синхронизация данных с CRM</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text mb-4">Запустите процесс синхронизации для обновления
                                                данных из внешней CRM системы.</p>
                                            <div id="sync-status-container" class="mb-3">
                                                @if(session('sync_status'))
                                                    <div class="alert alert-info">
                                                        <h6>Результаты последней синхронизации:</h6>
                                                        <div>{!! session('sync_status') !!}</div>
                                                    </div>
                                                @endif
                                            </div>
                                            <form action="{{ route('sync.all') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn cart-btn">
                                                    <i class="fas fa-sync-alt"></i> Синхронизировать данные
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Создать нового пользователя</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('admin.users.store') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Имя</label>
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           id="name" name="name" value="{{ old('name') }}" required>
                                                    @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           id="email" name="email" value="{{ old('email') }}" required>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Пароль</label>
                                                    <input type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           id="password" name="password" required>
                                                    @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Подтверждение
                                                        пароля</label>
                                                    <input type="password" class="form-control"
                                                           id="password_confirmation" name="password_confirmation"
                                                           required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="role" class="form-label">Роль</label>
                                                    <select class="form-select @error('role') is-invalid @enderror"
                                                            id="role" name="role">
                                                        <option value="">Выберите роль</option>
                                                        @foreach(\App\Enums\UserRoles::listData() as $value => $label)
                                                            <option value="{{ $value }}" {{ old('role') == $value ? 'selected' : '' }}>{{ $label }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn cart-btn">
                                                    <i class="fas fa-user-plus"></i> Создать пользователя
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const syncBtn = document.getElementById('sync-btn');
                const syncLoading = document.getElementById('sync-loading');
                const syncStatusContainer = document.getElementById('sync-status-container');

                if (syncBtn) {
                    syncBtn.addEventListener('click', function (e) {
                        e.preventDefault();

                        syncLoading.classList.remove('d-none');
                        syncBtn.disabled = true;

                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                        fetch('{{ route("sync.all") }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                syncLoading.classList.add('d-none');
                                syncBtn.disabled = false;

                                let statusHtml = '<div class="alert alert-success">';
                                statusHtml += '<h6>Синхронизация успешно завершена!</h6>';

                                if (data.details) {
                                    statusHtml += '<ul class="mb-0">';

                                    if (data.details.categories) {
                                        const cats = data.details.categories;
                                        statusHtml += `<li>Категории: обработано ${cats.processed || 0}, удалено ${cats.deleted || 0}</li>`;
                                    }

                                    if (data.details.states) {
                                        const states = data.details.states;
                                        statusHtml += `<li>Состояния: обработано ${states.processed || 0}</li>`;
                                    }

                                    if (data.details.inventory) {
                                        const inv = data.details.inventory;
                                        statusHtml += `<li>Инвентарь: обработано ${inv.processed || 0}, удалено ${inv.deleted || 0}</li>`;
                                    }

                                    if (data.details.media) {
                                        const media = data.details.media;
                                        statusHtml += `<li>Медиа: обработано ${media.processed || 0}, удалено ${media.deleted || 0}</li>`;
                                    }

                                    if (data.details.options) {
                                        const options = data.details.options;
                                        statusHtml += `<li>Опции: обработано ${options.processed || 0}, удалено ${options.deleted || 0}</li>`;
                                    }

                                    if (data.details.rents) {
                                        const rents = data.details.rents;
                                        statusHtml += `<li>Аренды: создано ${rents.created || 0}, пропущено ${rents.skipped || 0}</li>`;
                                    }

                                    statusHtml += '</ul>';
                                }

                                statusHtml += '</div>';

                                syncStatusContainer.innerHTML = statusHtml;
                            })
                            .catch(error => {
                                syncLoading.classList.add('d-none');
                                syncBtn.disabled = false;

                                syncStatusContainer.innerHTML = `
                            <div class="alert alert-danger">
                                <h6>Ошибка синхронизации</h6>
                                <p>${error.message}</p>
                            </div>
                        `;
                                console.error('Error:', error);
                            });
                    });
                }
            });
        </script>

    @endpush
</x-default-layout>
