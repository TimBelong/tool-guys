<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $existingUserByEmail = User::where('email', $request->email)->first();
        if ($existingUserByEmail) {
            return back()->withInput()->withErrors(
                [
                    'email' => 'Этот адрес электронной почты уже используется.',
                ]
            );
        }

        // Проверяем существование паспорта перед валидацией
        $existingUserByPassport = User::where('passport_id', $request->passport_id)->first();
        if ($existingUserByPassport) {
            return back()->withInput()->withErrors(
                [
                    'passport_id' => 'Этот номер паспорта уже зарегистрирован в системе.',
                ]
            );
        }

        // Проверяем существование телефона перед валидацией
        $existingUserByPhone = User::where('phone', $request->phone)->first();
        if ($existingUserByPhone) {
            return back()->withInput()->withErrors(
                [
                    'phone' => 'Этот номер телефона уже зарегистрирован в системе.',
                ]
            );
        }

        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'surname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'passport_id' => ['required', 'string', 'max:20', 'regex:/^[A-Z0-9]+$/', 'unique:' . User::class],
                'phone' => ['required', 'string', 'max:20', 'regex:/^\+?[0-9\s\-\(\)]+$/', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]
        );

        $user = User::create(
            [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'passport_id' => $request->passport_id,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]
        );

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('indexFive'));
    }
}