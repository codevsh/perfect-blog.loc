<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($data, $request->boolean('remember'))) {
            // если не прошёл валидацию или ввел не верные данные
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        // Если прошёл валидацию
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        // сгенерировать новый идентификатор сессии
        $request->session()->invalidate();
        // сгенерировать новое значение csrf token
        $request->session()->regenerateToken();

        return redirect()->route('main.index');
    }
    public function redirectTo()
    {
        return app()->getLocale() . RouteServiceProvider::HOME;
    }
}
