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

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        searchInput.addEventListener('keyup', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(performLiveSearch, doneTypingInterval);
        });

        searchInput.addEventListener('keydown', function() {
            clearTimeout(typingTimer);
        });

        // Закрываем результаты при клике вне поля поиска
        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target) && !resultsContainer.contains(event.target)) {
                resultsContainer.style.display = 'none';
            }
        });

        // Показываем результаты при фокусе, если есть текст
        searchInput.addEventListener('focus', function() {
            if (searchInput.value.trim().length >= 2) {
                performLiveSearch();
            }
        });
    });
</script>


@stack('script')

<!-- ..::Main Script::.. -->
<script src="{{ asset('assets/js/main.js') }}"></script>