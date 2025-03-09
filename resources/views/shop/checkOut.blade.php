@extends('layout.layout')

@section('content')
    <div class="rts-checkout-section">
        <div class="container">
            <h4 class="section-title">Оформление заказа</h4>
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <form id="checkout-form" class="checkout-form" action="{{ route('processOrder') }}" method="POST">
                        @csrf

                        <!-- Скрытые поля для передачи данных -->
                        <input type="hidden" name="shipping_method" value="{{ $shippingMethod }}">
                        <input type="hidden" name="payment_method" value="{{ $paymentMethod }}">
                        <input type="hidden" name="delivery_cost" value="{{ $deliveryCost }}">
                        <input type="hidden" name="final_price" value="{{ $finalPrice }}">

                        <!-- Контактная информация -->
                        <div class="form-section">
                            <h5 class="subsection-title">Контактная информация</h5>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="input-div">
                                        <input type="text" name="name" placeholder="Имя*" value="{{ $userData['name'] }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="input-div">
                                        <input type="text" name="surname" placeholder="Фамилия*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="input-div">
                                        <input type="text" name="phone" placeholder="Номер телефона*" value="{{ $userData['phone'] }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="input-div">
                                        <input type="email" name="email" placeholder="Email адрес*" value="{{ $userData['email'] }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Информация о доставке (показывается только если выбрана доставка) -->
                        @if($shippingMethod == 'delivery')
                            <div class="form-section delivery-fields">
                                <h5 class="subsection-title">Информация о доставке</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="city" placeholder="Город*" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="postal_code" placeholder="Почтовый индекс*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="address" placeholder="Адрес*" value="{{ $userData['address'] }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="address_details" placeholder="Подъезд, номер кв. (опционально)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($paymentMethod == 'card')
                            <div class="form-section payment-card-fields">
                                <h5 class="subsection-title">Данные банковской карты</h5>
                                <div class="card-info-wrapper">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/images/payment/card-front.png') }}" alt="Банковская карта">
                                    </div>
                                    <div class="card-fields">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-div">
                                                    <label>Номер карты</label>
                                                    <input type="text" name="card_number" placeholder="0000 0000 0000 0000" class="card-number-input" maxlength="19" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="input-div">
                                                    <label>Срок действия</label>
                                                    <input type="text" name="card_expiry" placeholder="MM / ГГ" class="card-expiry-input" maxlength="7" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="input-div">
                                                    <label>CVV/CVC</label>
                                                    <input type="password" name="card_cvv" placeholder="***" class="card-cvv-input" maxlength="3" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-div">
                                                    <label>Имя владельца</label>
                                                    <input type="text" name="card_holder" placeholder="ИМЯ ФАМИЛИЯ" class="card-holder-input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-info-notice">
                                            <i class="fas fa-lock"></i> Ваши данные защищены и передаются по шифрованному соединению
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($paymentMethod == 'transfer')
                            <div class="form-section bank-transfer-info">
                                <h5 class="subsection-title">Реквизиты для оплаты</h5>
                                <div class="bank-details">
                                    <div class="bank-info-box">
                                        <p><strong>Получатель:</strong> ООО "ТулГайз"</p>
                                        <p><strong>ИНН/КПП:</strong> 7712345678/771201001</p>
                                        <p><strong>Р/с:</strong> 40702810123450101230</p>
                                        <p><strong>Банк:</strong> АО "Банк ВБРР"</p>
                                        <p><strong>БИК:</strong> 044525745</p>
                                        <p><strong>К/с:</strong> 30101810900000000745</p>
                                        <p><strong>Назначение платежа:</strong> Оплата за аренду инструментов по заказу №[номер заказа]</p>
                                    </div>
                                    <div class="transfer-notice">
                                        <p><strong class="text-danger">Важно!</strong> На оплату заказа у вас есть <strong>1 час</strong>. Используйте указанные выше реквизиты для перевода средств.</p>
                                        <p>Неоплаченный в течение 1 часа заказ будет автоматически отменен, а забронированные инструменты вернутся в свободный доступ.</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($paymentMethod == 'company')
                            <div class="form-section company-fields">
                                <h5 class="subsection-title">Информация о компании</h5>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-div">
                                            <input type="text" name="company_name" placeholder="Название компании*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="inn" placeholder="ИНН*" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-div">
                                            <input type="text" name="kpp" placeholder="КПП">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-div">
                                            <input type="text" name="legal_address" placeholder="Юридический адрес*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="transfer-notice">
                                    <p>После оформления заказа документы будут отправлены на указанный email. Счет необходимо оплатить в течение 3 рабочих дней.</p>
                                </div>
                            </div>
                        @endif

                        <!-- Дополнительная информация -->
                        <div class="form-section">
                            <h5 class="subsection-title">Дополнительная информация</h5>
                            <textarea name="order_notes" cols="80" rows="4" placeholder="Комментарий к заказу (опционально)"></textarea>
                        </div>

                        <!-- Мобильная версия кнопки (отображается только на маленьких экранах) -->
                        <div class="d-block d-xl-none mt-4 mb-4">
                            <button type="submit" class="place-order-btn w-100">Оформить заказ</button>
                        </div>
                    </form>
                </div>

                <!-- Итоги заказа (правая колонка) -->
                <div class="col-xl-4">
                    <div class="action-item">
                        <div class="action-top">
                            <span class="subtotal">Инструменты</span>
                        </div>

                        <div class="order-items-container">
                            @foreach($inventories as $item)
                                <div class="category-item">
                                    <div class="category-item-inner">
                                        <div class="item-info">
                                            <div class="item-title-wrapper">
                                                <span class="category-title">{{ $item['title'] }}</span>
                                            </div>
                                            <div class="rental-details">
                                                <span class="rental-days">{{ $item['days'] }} дн.</span>
                                                @if($item['start_date'] && $item['end_date'])
                                                    <span class="rental-dates">
                                                        {{ \Carbon\Carbon::parse($item['start_date'])->format('d.m.Y') }} — {{ \Carbon\Carbon::parse($item['end_date'])->format('d.m.Y') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="price">{{ number_format($item['price'], 0, ',', ' ') }} ₽</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="action-middle">
                            <span class="subtotal">Стоимость инструментов</span>
                            <span class="total-price">{{ number_format($subtotalPrice, 0, ',', ' ') }} ₽</span>
                        </div>

                        @if($deliveryCost > 0)
                            <div class="shipping-options checkout-options">
                                <div class="action-middle">
                                    <span class="subtotal">Доставка</span>
                                    <span class="total-price">{{ number_format($deliveryCost, 0, ',', ' ') }} ₽</span>
                                </div>
                            </div>
                        @endif

                        <div class="action-bottom">
                            <span class="total">Всего</span>
                            <span class="total-price">{{ number_format($finalPrice, 0, ',', ' ') }} ₽</span>
                        </div>
                    </div>

                    <div class="action-item m-0">
                        <div class="payment-info">
                            <h5 class="subsection-title">Способ получения:</h5>
                            <div class="selected-option">
                                <i class="fas {{ $shippingMethod == 'delivery' ? 'fa-truck' : 'fa-store' }}"></i>
                                <span>{{ $shippingMethod == 'delivery' ? 'Доставка' : 'Самовывоз' }}</span>
                            </div>

                            <h5 class="subsection-title mt-4">Способ оплаты:</h5>
                            <div class="selected-option">
                                <i class="fas
                                    {{ $paymentMethod == 'card' ? 'fa-credit-card' :
                                      ($paymentMethod == 'cash' ? 'fa-money-bill' :
                                      ($paymentMethod == 'transfer' ? 'fa-exchange-alt' : 'fa-building')) }}"></i>
                                <span>
                                    @if($paymentMethod == 'card')
                                        Банковской картой онлайн
                                    @elseif($paymentMethod == 'cash')
                                        Наличными при получении
                                    @elseif($paymentMethod == 'transfer')
                                        Банковским переводом
                                    @elseif($paymentMethod == 'company')
                                        Счет для компании
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопка оформления заказа (скрывается на маленьких экранах) -->
                    <div class="d-none d-xl-block">
                        <button form="checkout-form" type="submit" class="place-order-btn w-100">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Общие стили */
        .section-title {
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
        }

        .subsection-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }

        /* Стили для формы */
        .form-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .checkout-form .input-div {
            margin-bottom: 15px;
        }

        .checkout-form label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 500;
            color: #555;
        }

        .checkout-form input, .checkout-form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .checkout-form textarea {
            min-height: 100px;
        }

        /* Стили для карточных полей */
        .card-info-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 15px;
        }

        .card-image {
            flex: 0 0 auto;
            width: 280px;
            max-width: 100%;
        }

        .card-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .card-fields {
            flex: 1 1 300px;
        }

        .card-info-notice {
            margin-top: 15px;
            font-size: 13px;
            color: #666;
            display: flex;
            align-items: center;
        }

        .card-info-notice i {
            color: #28a745;
            margin-right: 8px;
        }

        /* Стили для банковских реквизитов */
        .bank-details {
            background-color: #f8f8f8;
            border-radius: 8px;
            padding: 20px;
        }

        .bank-info-box p {
            margin-bottom: 8px;
            font-size: 15px;
        }

        .transfer-notice {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed #ddd;
            font-size: 14px;
            color: #666;
            font-style: italic;
        }

        /* Стили для блока заказа */
        .rts-checkout-section .action-item {
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .order-items-container {
            max-height: 300px;
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .order-items-container::-webkit-scrollbar {
            width: 6px;
        }

        .order-items-container::-webkit-scrollbar-thumb {
            background-color: #ddd;
            border-radius: 6px;
        }

        .category-item {
            padding: 12px 20px;
            border-bottom: 1px solid #eee;
        }

        .category-item-inner {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .item-info {
            flex: 1;
            padding-right: 15px;
            min-width: 0; /* Важно для правильного обрезания текста */
        }

        .item-title-wrapper {
            margin-bottom: 5px;
        }

        .category-title {
            font-weight: 500;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        .rental-details {
            display: flex;
            flex-direction: column;
            font-size: 12px;
            color: #666;
        }

        .rental-days {
            font-weight: 500;
        }

        .rental-dates {
            font-size: 11px;
        }

        .price {
            font-weight: 600;
            white-space: nowrap;
            font-size: 15px;
        }

        .action-top, .action-middle, .action-bottom {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .action-top {
            background-color: #f0f0f0;
            font-weight: 600;
        }

        .action-bottom {
            background-color: #f0f0f0;
            font-weight: 700;
            font-size: 18px;
        }

        /* Стили для информации о доставке и оплате */
        .payment-info {
            padding: 20px;
        }

        .selected-option {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #f0f0f0;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .selected-option i {
            margin-right: 10px;
            font-size: 18px;
            color: #333;
        }

        /* Стили для кнопки заказа */
        .place-order-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .place-order-btn:hover {
            background-color: #218838;
            color: #fff;
        }

        /* Адаптивность */
        @media (max-width: 576px) {
            .section-title {
                font-size: 20px;
            }

            .action-bottom {
                font-size: 16px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Форматирование ввода номера карты
            const cardNumberInput = document.querySelector('.card-number-input');
            if (cardNumberInput) {
                cardNumberInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    let formattedValue = '';

                    for (let i = 0; i < value.length; i++) {
                        if (i > 0 && i % 4 === 0) {
                            formattedValue += ' ';
                        }
                        formattedValue += value[i];
                    }

                    e.target.value = formattedValue;
                });
            }

            // Форматирование ввода срока действия карты
            const cardExpiryInput = document.querySelector('.card-expiry-input');
            if (cardExpiryInput) {
                cardExpiryInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    let formattedValue = '';

                    if (value.length > 0) {
                        // Месяц (максимум 12)
                        let month = value.substring(0, 2);
                        if (month.length === 1) {
                            formattedValue = month;
                        } else {
                            // Проверка валидности месяца (01-12)
                            month = parseInt(month, 10);
                            if (month > 12) {
                                month = 12;
                            }
                            formattedValue = month.toString().padStart(2, '0');
                        }

                        // Добавляем разделитель после месяца
                        if (value.length >= 3) {
                            formattedValue += ' / ';

                            // Год
                            const year = value.substring(2);
                            formattedValue += year;
                        }
                    }

                    e.target.value = formattedValue;
                });
            }

            // Форматирование ввода имени владельца карты (все заглавные)
            const cardHolderInput = document.querySelector('.card-holder-input');
            if (cardHolderInput) {
                cardHolderInput.addEventListener('input', function(e) {
                    e.target.value = e.target.value.toUpperCase();
                });
            }
        });
    </script>
@endsection