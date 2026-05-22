<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::where('user_id', auth()->user()->id)->get();
        return view('user.history', compact('histories'));
    }
}
