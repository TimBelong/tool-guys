<x-default-layout>
    <div class="login-area">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-12 mr-10">
                <div class="login-form">
                    <div class="section-title">
                        <h2>{{ __('Восстановление пароля') }}</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-4">
                                {{ __('Забыли пароль? Не проблема. Просто укажите свой email-адрес, и мы отправим вам ссылку для сброса пароля.') }}
                            </p>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form">
                                    <x-text-input id="email" class="form-control" type="email"
                                                  name="email" :value="old('email')"
                                                  required autofocus
                                                  placeholder="Введите Email"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form">
                                    <x-primary-button class="btn">
                                        {{ __('Отправить') }}
                                    </x-primary-button>
                                </div>

                                <div class="d-flex flex-column">
                                    <a class="forgot-password" href="{{ route('login') }}">
                                        {{ __('Вернуться на страницу входа') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-default-layout>