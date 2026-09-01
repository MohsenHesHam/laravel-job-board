<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function ShowSignIn()
    {
        return view('authentication.SignUp');
    }

    public function SignIn(Request $request)
    {
        $attributes = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms'    => ['accepted'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return view('/');
    }

    public function ShowLogIn()
    {
        return view('authentication.LogIn');
    }

    public function LogIn(Request $request)
    {
        $attributes = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($attributes, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function LogOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}