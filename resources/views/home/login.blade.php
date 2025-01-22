@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '" />';
$title = 'Log In';
$subTitle='Home';
$subTitle2='Log In';
@endphp

@section('content')

    <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Вход</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form">
                                        <x-text-input id="email" class="form-control"
                                                      type="email"
                                                      name="email" :value="old('email')"
                                                      required autofocus autocomplete="username"
                                                      placeholder="Логин*" required
                                        />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <x-text-input
                                                    type="password" class="form-control"
                                                    id="password"
                                                    placeholder="Пароль*" required
                                                    required autocomplete="current-password"/>
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
{{--                                    <div class="form">--}}
{{--                                        <input type="checkbox" class="form-check-input" id="remember" />--}}
{{--                                        <label for="remember" class="form-label">Remember Me</label>--}}
{{--                                    </div>--}}
                                    <div class="form">
                                        <x-primary-button class="btn">Вход</x-primary-button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="forgot-password" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ml-10">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Регистрация</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Имя*" required />
                                    </div>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                               placeholder="Номер телефона*" required />
                                    </div>
                                    <div class="form">
                                        <input type="email" class="form-control" id="username"
                                            placeholder="Повторите Email*" required />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Пароль*" required />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Регистрация</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login-area end-->

@endsection