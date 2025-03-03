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

                            </div>
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Цена</span>
                                </div>
                                <div class="nstSlider" data-range_min="700" data-range_max="20000" data-cur_min="20"
                                     data-cur_max="10000">

                                    <div class="bar"></div>
                                    <div class="leftGrip price-range-grip"></div>
                                    <div class="rightGrip price-range-grip"></div>
                                </div>
                                <div class="range-label-area">
                                    <div class="min-price d-flex">
                                        <span class="currency-symbol">₽</span>

                                        <div class="leftLabel price-range-label"></div>
                                    </div>
                                    <div class="min-price d-flex">
                                        <span class="currency-symbol">₽</span>

                                        <div class="rightLabel price-range-label"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Производитель</span>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox">
                                    <span class="color-name" style="margin-left: 10px">Atlas Copco</span>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox">

                                    <span class="color-name" style="margin-left: 10px">FUBAG</span>
                                </div>
                            </div>

                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Мощность, Вт</span>
                                </div>
                                <div class="nstSlider" data-range_min="2000" data-range_max="8500" data-cur_min="20"
                                     data-cur_max="10000">

                                    <div class="bar"></div>
                                    <div class="leftGrip price-range-grip"></div>
                                    <div class="rightGrip price-range-grip"></div>
                                </div>
                                <div class="range-label-area">
                                    <div class="min-price d-flex">
                                        <div class="leftLabel price-range-label"></div>
                                    </div>
                                    <div class="min-price d-flex">
                                        <div class="rightLabel price-range-label"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Стартер</span>
                                </div>
                                <div class="color-item">
                                    <input type="checkbox">
                                    <span class="color-name"
                                          style="margin-left: 10px">ручной стартер/электростартер</span>
                                </div>
                            </div>

                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Объем топливного бака. л</span>
                                </div>
                                <div class="nstSlider" data-range_min="2000" data-range_max="8500" data-cur_min="20"
                                     data-cur_max="10000">

                                    <div class="bar"></div>
                                    <div class="leftGrip price-range-grip"></div>
                                    <div class="rightGrip price-range-grip"></div>
                                </div>
                                <div class="range-label-area">
                                    <div class="min-price d-flex">
                                        <div class="leftLabel price-range-label"></div>
                                    </div>
                                    <div class="min-price d-flex">
                                        <div class="rightLabel price-range-label"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="shop-product-topbar justify-content-between">
                        <span class="items-onlist">Показано {{ $products->count() }} из {{ $totalCount }} результатов</span>
                        <div class="product-status">
                            <span class="all-products-category ">{{$category}}</span>
                        </div>
                    </div>

                    <div class="products-area products-area3">
                        <div class="row justify-content-start">
                            @foreach($products as $product)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-item product-item2 element-item3 sidebar-left">
                                        <a href="{{ route('productDetails', ['id' => $product->getId()]) }}" class="product-image">
                                            <img src="{{ $product->getAvatar() }}" alt="product-image">
                                        </a>
                                        <div class="bottom-content">
                                            <a href="{{ route('productDetails', ['id' => $product->getId()]) }}"
                                               class="product-name">{{$product->getTitle()}}</a>
                                            <div class="action-wrap">
                                                <span class="product-price">от {{$product->getBuyPrice()}} ₽</span>
                                                <a href="{{ route('cart') }}" class="addto-cart">
                                                    <i class="fal fa-shopping-cart"></i> В корзину
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <a class="product-action wishlist-btn {{ auth()->user() && auth()->user()->favorites->contains($product->getId()) ? 'active' : '' }}"
                                               style="cursor:pointer;"
                                               data-inventory-id="{{ $product->getId() }}">
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
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')">
                                <img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}"
                                        alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')">
                                <img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}"
                                        alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                        src="{{ asset('assets/images/products/product-filt1.jpg') }}"
                                        alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}"
                                        alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}"
                                        alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01"/>
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i
                                        class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                        class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->
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