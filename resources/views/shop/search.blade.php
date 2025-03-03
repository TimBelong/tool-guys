@extends('layout.layout')

@section('content')
    <!-- ..::Breadcrumb Section Start Here::.. -->
    <div class="rts-bread-crumb-area ptb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-wrapper">
                        <div class="content">
                            <h1 class="title">Результаты поиска</h1>
                            <p>Поиск по запросу: "{{ $query }}"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Breadcrumb Section End Here::.. -->

    <!-- ..::Shop Products Start Here::.. -->
    <div class="rts-shop-page-area">
        <div class="container">
            <div class="row">
                @if($results->count() > 0)
                    <div class="col-lg-12">
                        <div class="product-counter-wrapper">
                            <p class="filter-result">Найдено <span>{{ $results->total() }}</span> товаров</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="product-wrapper product-wrapper-4-column mt--20">
                            @foreach($results as $product)
                                <div class="rts-product-item">
                                    <div class="thumbnail">
                                        <a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                            <img src="{{ $product->getAvatar() }}" alt="{{ $product->getTitle() }}">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-header">
                                            <div class="product-header-top">
                                                <span class="categories">{{ $product->category?->getTitle() ?? 'Без категории' }}</span>
                                            </div>
                                            <div class="product-header-bottom">
                                                <h6 class="product-title">
                                                    <a href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->getTitle() }}</a>
                                                </h6>
                                                <div class="product-price-wrapper">
                                                    <span class="product-price">от {{ number_format($product->getBuyPrice(), 0, ',', ' ') }} ₽</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <a href="{{ route('cart') }}" class="addto-cart">
                                                <i class="rt-cart"></i>
                                                <span>В корзину</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="rts-shop-page-pagination mt--50">
                            {{ $results->appends(['query' => $query])->links() }}
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <div class="empty-search-results">
                            <h3>По вашему запросу ничего не найдено</h3>
                            <p>Попробуйте изменить запрос или поискать в другой категории</p>
                            <a href="{{ route('indexFive') }}" class="btn btn-primary mt-4">Вернуться на главную</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- ..::Shop Products End Here::.. -->
@endsection

@push('style')
    <style>
        .empty-search-results {
            text-align: center;
            padding: 50px 0;
        }

        .empty-search-results h3 {
            margin-bottom: 20px;
        }

        .search-button {
            background: transparent;
            border: none;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
@endpush