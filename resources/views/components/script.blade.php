<!-- ..::Jquery latest version::.. -->
<script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
<!-- ..::Bootstrap latest version::.. -->
<script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
<!-- ..::Wow.js::.. -->
<script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
<!-- ..::Swiper Slider::.. -->
<script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
<!-- ..::Nice Select::.. -->
<script src="{{ asset('assets/js/vendors/jquery.nice-select.js') }}"></script>
<!-- ..::metisMenu Plugin::.. -->
{{--    <?php echo (isset($script) ? $script   : '')?>--}}
<script src="{{ asset('assets/js/vendors/metisMenu.min.js') }}"></script>
<!-- ..::Main Menu Plugin::.. -->
<script src="{{ asset('assets/js/vendors/rtsmenu.js') }}"></script>
<!-- ..::Magnefic Popup Plugin::.. -->
<script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}"></script>
<!-- ..::Magnefic Popup Plugin::.. -->
<script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/js/vendors/jquery.nstSlider.min.js')  }}"></script>

<script src="{{  asset('assets/js/vendors/zoom.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('live-search-input');
        const resultsContainer = document.getElementById('live-search-results');
        let typingTimer;
        const doneTypingInterval = 300;

        function performLiveSearch() {
            const query = searchInput.value.trim();

            if (query.length < 2) {
                resultsContainer.innerHTML = '';
                resultsContainer.style.display = 'none';
                return;
            }

            resultsContainer.innerHTML = '<div class="live-search-loading">Поиск...</div>';
            resultsContainer.style.display = 'block';

            // Отправляем AJAX запрос
            fetch(`/api/search?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        resultsContainer.innerHTML = '<div class="live-search-no-results">Ничего не найдено</div>';
                        return;
                    }

                    let html = '<ul class="live-search-list">';

                    data.forEach(item => {
                        html += `
                        <li class="live-search-item">
                            <a href="${item.url}" class="live-search-link">
                                <div class="live-search-image">
                                    <img src="${item.avatar_url}" alt="${item.title}">
                                </div>
                                <div class="live-search-info">
                                    <div class="live-search-title">${item.title}</div>
                                    <div class="live-search-category">${item.category_title}</div>
                                    <div class="live-search-price">от ${item.price_formatted} ₽</div>
                                </div>
                            </a>
                        </li>
                    `;
                    });

                    html += '</ul>';

                    resultsContainer.innerHTML = html;
                })
                .catch(error => {
                    console.error('Ошибка при выполнении поиска:', error);
                    resultsContainer.innerHTML = '<div class="live-search-error">Произошла ошибка при поиске</div>';
                });
        }

        // События для обработки ввода
        searchInput.addEventListener('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(performLiveSearch, doneTypingInterval);
        });

        searchInput.addEventListener('keydown', function () {
            clearTimeout(typingTimer);
        });

        // Закрываем результаты при клике вне поля поиска
        document.addEventListener('click', function (event) {
            if (!searchInput.contains(event.target) && !resultsContainer.contains(event.target)) {
                resultsContainer.style.display = 'none';
            }
        });

        // Показываем результаты при фокусе, если есть текст
        searchInput.addEventListener('focus', function () {
            if (searchInput.value.trim().length >= 2) {
                performLiveSearch();
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addToCartForms = document.querySelectorAll('.add-to-cart-form');

        addToCartForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(this);
                const url = this.getAttribute('action');

                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showNotification(data.message);

                            updateCartCounter(data.cartCount);
                        } else if (data.redirect) {
                            window.location.href = data.redirect;
                        }
                    })
                    .catch(error => {
                        console.error('Ошибка:', error);
                    });
            });
        });

        function updateCartCounter(count) {
            const cartCounters = document.querySelectorAll('.wishlist-dot.icon-dot');
            cartCounters.forEach(counter => {
                counter.textContent = count;
            });
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification-toast';
            notification.innerHTML = `
            <div class="notification-content">
                <i class="rt-check-circle"></i>
                <span>${message}</span>
            </div>
        `;

            notification.style.position = 'fixed';
            notification.style.bottom = '20px';
            notification.style.right = '20px';
            notification.style.backgroundColor = 'rgba(76, 175, 80, 0.7)';
            notification.style.color = '#ffffff';
            notification.style.padding = '15px';
            notification.style.borderRadius = '4px';
            notification.style.zIndex = '9999';
            notification.style.display = 'flex';
            notification.style.alignItems = 'center';
            notification.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';

            document.body.appendChild(notification);

            const allElements = notification.querySelectorAll('*');
            allElements.forEach(el => {
                el.style.color = '#ffffff';
            });

            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transition = 'opacity 0.5s ease';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 500);
            }, 3000);
        }

        const removeFromCartForms = document.querySelectorAll('.remove-from-cart-form');

        // Обрабатываем отправку форм
        removeFromCartForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Предотвращаем стандартную отправку формы

                const formData = new FormData(this);
                const url = this.getAttribute('action');

                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Удаляем строку таблицы
                            const row = this.closest('tr');
                            row.remove();

                            // Обновляем общую сумму
                            updateTotalPrice(data.totalPrice);

                            // Обновляем счетчик товаров в корзине
                            updateCartCounter(data.cartCount);

                            // Показываем уведомление об успешном удалении
                            showNotification(data.message);

                            // Если корзина пуста, показываем сообщение
                            if (data.cartCount === 0) {
                                const tbody = document.querySelector('.cart-table-area tbody');
                                tbody.innerHTML = '<tr><td colspan="5" class="text-center">Ваша корзина пуста</td></tr>';
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Ошибка:', error);
                    });
            });
        });

        // Функция для обновления общей суммы
        function updateTotalPrice(totalPrice) {
            const subtotalElements = document.querySelectorAll('.subtotal-price');
            const totalElements = document.querySelectorAll('.total-price');

            subtotalElements.forEach(el => {
                el.textContent = formatPrice(totalPrice) + ' ₽';
            });

            totalElements.forEach(el => {
                el.textContent = formatPrice(totalPrice) + ' ₽';
            });
        }

        // Функция для форматирования цены
        function formatPrice(price) {
            return new Intl.NumberFormat('ru-RU').format(price);
        }
    });
</script>

@stack('script')

<!-- ..::Main Script::.. -->
<script src="{{ asset('assets/js/main.js') }}"></script>