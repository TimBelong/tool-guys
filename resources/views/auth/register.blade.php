<x-default-layout>
    <div class="login-area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Регистрация</h2>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <strong>Ошибка!</strong> Пожалуйста, проверьте введенные данные.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form">
                                        <x-text-input id="name"
                                                      class="form-control @error('name') is-invalid @enderror"
                                                      type="text" name="name"
                                                      :value="old('name')"
                                                      required autofocus autocomplete="name"
                                                      placeholder="Имя*"
                                        />
                                    </div>

                                    <!-- Surname -->
                                    <div class="form">
                                        <x-text-input id="surname"
                                                      class="form-control @error('surname') is-invalid @enderror"
                                                      type="text" name="surname"
                                                      :value="old('surname')"
                                                      required autocomplete="surname"
                                                      placeholder="Фамилия*"
                                        />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form">
                                        <x-text-input id="email"
                                                      class="form-control @error('email') is-invalid @enderror"
                                                      type="email" name="email"
                                                      :value="old('email')"
                                                      required autocomplete="username"
                                                      placeholder="Email*"
                                        />
                                    </div>

                                    <!-- Passport ID -->
                                    <div class="form">
                                        <x-text-input id="passport_id"
                                                      class="form-control @error('passport_id') is-invalid @enderror"
                                                      type="text" name="passport_id"
                                                      :value="old('passport_id')"
                                                      required
                                                      placeholder="Номер паспорта*"
                                        />
                                    </div>

                                    <!-- Phone -->
                                    <div class="form">
                                        <x-text-input id="phone"
                                                      class="form-control @error('phone') is-invalid @enderror"
                                                      type="tel" name="phone"
                                                      :value="old('phone')"
                                                      required
                                                      placeholder="Телефон*"
                                        />
                                    </div>

                                    <!-- Password -->
                                    <div class="form">
                                        <x-text-input id="password"
                                                      class="form-control @error('password') is-invalid @enderror"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="new-password"
                                                      placeholder="Пароль*"
                                        />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form">
                                        <x-text-input id="password_confirmation"
                                                      class="form-control @error('password_confirmation') is-invalid @enderror"
                                                      type="password"
                                                      name="password_confirmation"
                                                      required autocomplete="new-password"
                                                      placeholder="Повторите пароль*"
                                        />
                                    </div>

                                    <div class="form">
                                        <x-primary-button class="btn">
                                            {{ __('Регистрация') }}
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