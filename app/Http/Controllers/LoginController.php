<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            // CEK ROLE
            if ($user->role == 'admin') {

                return redirect('/admin/dashboard');

            } elseif ($user->role == 'konselor') {

                return redirect('/konselor/dashboard');

            } else {

                return redirect('/user/dashboard');
            }
        }

        return back()->withErrors([
            'error' => 'Email atau password salah',
        ]);
    }
}