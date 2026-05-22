<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required', 'min:8'],
            'confirmPassword' => ['required', 'same:password']
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create([
            'email' => $validateData['email'],
            'password' => $validateData['password'],
            'role' => 'user'
        ]);

        return redirect()
            ->to('/login')
            ->with('success', 'Berhasil Membuat akun');

        
    }
}
