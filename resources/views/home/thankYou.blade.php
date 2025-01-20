@extends('layout.layout')

@php
    $title='Thank You';
    $subTitle = 'Home';
    $subTitle2 = 'Thank You';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')

    <!--thanks-area start-->
    <div class="thanks-area">
        <div class="container">
            <div class="section-inner">
                <div class="section-icon">
                    <i class="fal fa-check"></i>
                </div>
                <div class="section-title">
                    <h2 class="sub-title">Спасибо за ваш заказ!</h2>
                    <h3 class="sect-title">Вы получите всю информацию о заказе на ваш email адрес.</h3>
                </div>
                <div class="section-button">
                    <a class="btn-1" href="index.php"><i class="fal fa-long-arrow-left"></i> Вернуться на главную</a>
                    <h3>
                        В случае люьых вопросов, пожалуйста,
                        <a class="btn-2" href="contact.php"> свяжитесь с нами</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!--thanks-area end-->

@endsection