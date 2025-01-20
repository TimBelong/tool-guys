@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '"/>';
    $title='Checkout';
    $subTitle = 'Shop';
    $subTitle2 = 'Checkout';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')

    <div class="rts-checkout-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <form class="checkout-form">
                        <div class="row">
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="Имя*"></div>
                            </div>
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="Фамилия*"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Город*"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Почтовый индекс*"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Адрес*"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text"
                                        placeholder="Подъезд, номер кв. (опционально)"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Номер телефона*"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="email" placeholder="Email адрес*"></div>
                            </div>
                        </div>
{{--                        <div class="check-options">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="checkbox" id="crat">--}}
{{--                                <label class="check-title" for="crat">Create an account?</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="checkbox" id="shadd">--}}
{{--                                <label class="check-title" for="shadd">Ship to a different address?</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <textarea id="orderNotes" cols="80" rows="4" placeholder="Дополнительная информация (опционально)"></textarea>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="action-item">
                        <div class="action-top">
                            <span class="subtotal">Инструменты</span>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Газовый монтажный пистолет × 3</span>
                                </div>
                                <div class="price">1 000 ₽</div>
                            </div>
                        </div>

                        <div class="action-middle">
                            <span class="subtotal">Стоимость инструментов</span>
                            <span class="total-price">3 000 ₽</span>
                        </div>
                        <div class="shipping-options checkout-options">
                            <div class="action-middle">
                                <span class="subtotal">Доставка</span>
                                <span class="total-price">500 ₽</span>
                            </div>
                        </div>
                        <div class="action-bottom">
                            <span class="total">Всего</span>
                            <span class="total-price">3 500 ₽</span>
                        </div>
                    </div>
                    <div class="action-item m-0">
                        <div class="payment-options checkout-options">
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="drbank">
                                    <label class="check-title" for="drbank">Переводом</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="freetrans">
                                    <label class="check-title" for="freetrans">Наличными</label>
                                </div>
                                <div class="form-group last-child">
                                    <input type="checkbox" id="paypl">
                                    <label class="check-title" for="paypl"><a href="{{ route('newsDetails') }}">Картой</a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="{{ route('thankYou') }}" class="place-order-btn">Завершить заказ</a>
                </div>
            </div>
        </div>
    </div>

@endsection