<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Информация профиля') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="profile_form">
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div class="form-item">
                <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" placeholder="Имя"/>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="form-item">
                <x-text-input id="surname" name="surname" type="text" class="form-control" :value="old('surname', $user->surname)" required autocomplete="surname" placeholder="Фамилия"/>
                <x-input-error class="mt-2" :messages="$errors->get('surname')" />
            </div>

            <div class="form-item">
                <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" placeholder="Email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="form-item">
                <x-text-input id="passport_id" name="passport_id" type="text" class="form-control" :value="old('passport_id', $user->passport_id)" required placeholder="Номер паспорта"/>
                <x-input-error class="mt-2" :messages="$errors->get('passport_id')" />
            </div>

            <div class="form-item">
                <x-text-input id="phone" name="phone" type="tel" class="form-control" :value="old('phone', $user->phone)" required placeholder="Телефон"/>
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div class="form mt-10">
                <x-primary-button class="btn">{{ __('Сохранить') }}</x-primary-button>
            </div>

            @if (session('status') === 'profile-updated')
                <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Сохранено.') }}</p>
            @endif
        </form>
    </div>
</section>