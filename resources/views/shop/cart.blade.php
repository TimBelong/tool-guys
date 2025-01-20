@extends('layout.layout')

@section('content')

    <!-- ..::Cart Section Start Here::.. -->
    <div class="rts-cart-section">
        <div class="container">
            <h4 class="section-title">Список товаров</h4>
            <div class="row justify-content-between">
                <div class="col-xl-7">
                    <div class="cart-table-area">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="product-thumb"><img src="https://gorrent.ru/upload/resize_cache/iblock/7d9/250_250_1/mgvid2ol2ehuipzhpz68skhc26txx4fy.jpg" alt="product-thumb"></div></td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Аренда</span>
                                            <h4 class="product-title">Газовый монтажный пистолет
                                                <br></br>GNG1000</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">3 000 ₽</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Удалить</button></td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="coupon-apply">
                            <span class="coupon-text">Промокод:</span>
                            <div class="apply-input">
                                <input type="text" placeholder="Введите промо код">
                                <button type="submit" class="apply-btn">Применить</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <div class="subtotal-area">
                                <span class="title">Стоимость товаров</span>
                                <span class="subtotal-price">3 000 ₽</span>
                            </div>
                            <div class="shipping-check">
                                <div class="check-options">
                                    <form>
                                          <div class="form-group">
                                            <input type="checkbox" id="fltrt">
                                            <label class="check-title" for="fltrt">Доставка</label>
                                          </div>
                                          <div class="form-group">
                                            <input type="checkbox" id="frsh">
                                            <label class="check-title" for="frsh">Самовывоз</label>
                                          </div>
                                    </form>
                                </div>
                            </div>

                            <div class="total-area">
                                <span class="title">Всего</span>
                                <span class="total-price">3 000 ₽</span>
                            </div>
                        </div>
                        <a href="{{ route('checkOut') }}" class="procced-btn">Перейти к оплате</a>
                        <a href="{{ route('indexFive') }}" class="continue-shopping"><i class="fal fa-long-arrow-left"></i>Вернуться к покупкам</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Cart Section End Here::.. -->

@endsection