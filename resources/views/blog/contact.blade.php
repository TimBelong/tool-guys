@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '"/>';
    $title = 'Contact ';
    $subTitle='Contact';
    $subTitle2='Contact ';
@endphp

@section('content')
     
    <!--contact-area start-->
    <div class="contact-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12">
                    <form class="contact-form mb-10">
                        <div class="section-header section-header5 text-start">
                            <div class="wrapper">
                                <div class="sub-content">
                                    <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                    <span class="sub-text">Свяжитесь с нами!</span>
                                </div>
                                <h2 class="title">Сделайте запрос на обратную связь</h2>
                            </div>
                        </div>
                        <div class="info-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box mb-20">
                                        <input type="text" id="validationDefault01" placeholder="Имя" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box mail-input mb-20">
                                        <input type="email" id="validationDefault02" placeholder="E-mail"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box number-input mb-30">
                                        <input type="number" id="validationDefault03" placeholder="Номер телефона"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="input-box sub-input mb-30">
                                        <input type="text" id="validationDefault04" placeholder="Тема..." required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="input-box text-input mb-20">
                                        <textarea name="Message" id="validationDefault05" cols="30" rows="10"
                                            placeholder="Введите сообщение" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-15">
                                    <a href="#" class="form-btn form-btn4">
                                        Отправить запрос
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="col-lg-4">--}}
{{--                    <div class="right-side">--}}
{{--                        <div class="get-in-touch">--}}
{{--                            <h3 class="section-title2">--}}
{{--                               Наши контакты--}}
{{--                            </h3>--}}
{{--                            <div class="contact">--}}
{{--                                <ul>--}}
{{--                                    <li class="one">--}}
{{--                                        г. Москва, Алтуфьевское ш., д.79а, стр.25--}}
{{--                                    </li>--}}
{{--                                    <li class="two"><a href="tel:7905786897809">+7 (905) 786 897 809</a></li>--}}
{{--                                    <li class="three">Рабочие часы: <br>--}}
{{--                                        Пн - Суб: 9:00-20:00</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-6">
                    <div class="map" id="map">
                        <p>
                            <iframe src="https://yandex.com/map-widget/v1/?ll=37.951324%2C55.751771&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNTc5MDYxNzYzEo0B0KDQvtGB0YHQuNGPLCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0JHQsNC70LDRiNC40YXQsCwg0LzQuNC60YDQvtGA0LDQudC-0L0g0JrRg9GH0LjQvdC-LCDQptC10L3RgtGA0LDQu9GM0L3QsNGPINGD0LvQuNGG0LAsIDY4IgoNJ84XQhXQAV9C&z=17.14"
                               height="500" style="border:0;" allowfullscreen="" loading="lazy"
                               referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--contact-area end-->
    
@endsection