<x-default-layout>
    <div class="login-area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Регистрация</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form">
                                        <x-text-input id="name"
                                                      class="form-control"
                                                      type="text" name="name"
                                                      :value="old('name')"
                                                      required autofocus autocomplete="name"
                                                      placeholder="Имя*"
                                        />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form">
                                        <x-text-input id="email"
                                                      class="form-control"
                                                      type="email" name="email"
                                                      :value="old('email')"
                                                      required autocomplete="username"
                                                      placeholder="Email*"
                                        />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form">
                                        <x-text-input id="password"
                                                      class="form-control"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="new-password"
                                                      placeholder="Пароль*"
                                        />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form">
                                        <x-text-input id="password_confirmation"
                                                      class="form-control"
                                                      type="password"
                                                      name="password_confirmation"
                                                      required autocomplete="new-password"
                                                      placeholder="Повторите пароль*"
                                        />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="form">
                                        <x-primary-button class="btn">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>

                                    <a class="forgot-password" href="{{ route('login') }}">
                                        {{ __('Уже зарегистрированы?') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>
