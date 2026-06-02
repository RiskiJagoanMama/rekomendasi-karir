<?php

namespace App\Http\Controllers\konselor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryUserController extends Controller
{
    public function index()
    {
        $histories = History::with('user')->get();
        return view('konselor.history', compact('histories'));
    }
}
