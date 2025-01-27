<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Обновить пароль') }}
        </h2>


    </header>

    <div class="profile_form">
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" placeholder="Старый пароль"/>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div>
                <x-text-input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" placeholder="Новый пароль"/>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div>
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" placeholder="Подтвердите новый пароль" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="form">
                <x-primary-button class="btn">{{ __('Сохранить') }}</x-primary-button>
                @if (session('status') === 'password-updated')
                    <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>
