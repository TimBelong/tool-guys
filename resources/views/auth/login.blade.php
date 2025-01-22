<x-default-layout>
    <!-- Session Status -->
   <div class="login-area">
       <div class="row d-flex justify-content-center">
           <div class="col-lg-6 col-md-12 mr-10">
               <div class="login-form">
                   <div class="section-title">
                       <h2>{{ __('Вход') }}</h2>
                   </div>
                   <div class="card">
                       <div class="card-body">
                           <x-auth-session-status class="mb-4" :status="session('status')" />

                           <form method="POST" action="{{ route('login') }}">
                               @csrf

                               <!-- Email Address -->
                               <div class="form">
                                   <x-text-input id="email" class="form-control" type="email"
                                                 name="email" :value="old('email')"
                                                 required autofocus autocomplete="username"
                                                 placeholder="Введите Email"/>
                                   <x-input-error :messages="$errors->get('email')" class="mt-2" />
                               </div>

                               <!-- Password -->
                               <div class="form">
                                  <div class="password-input">
                                      <x-text-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password"
                                                    placeholder="Введите пароль"
                                      />

                                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                  </div>
                               </div>

                               <!-- Remember Me -->
                               <div class="block mt-4">
                                   <label for="remember_me" class="inline-flex items-center">
                                       <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                       <span class="form-label">{{ __('Запомни меня') }}</span>
                                   </label>
                               </div>

                               <div class="form">
                                   <x-primary-button class="btn">
                                       {{ __('Вход') }}
                                   </x-primary-button>
                               </div>

                               <div class="d-flex flex-column">
                                   @if (Route::has('password.request'))
                                       <a class="forgot-password" href="{{ route('password.request') }}">
                                           {{ __('Забыли пароль?') }}
                                       </a>
                                   @endif

                                   <a class="forgot-password" href="{{ route('register') }}">
                                       {{ __('Регистрация') }}
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
