<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    // DATA USER
    public function user()
    {
        $users = User::where('role',
            'user')->get();

        return view('admin.data_user',
            compact('users'));
    }

    // DATA KONSELOR
    public function konselor()
    {
        $konselors = User::where('role',
            'konselor')->get();

        return view('admin.data_konselor',
            compact('konselors'));
    }
}