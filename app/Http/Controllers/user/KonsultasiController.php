<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konsultasi;
use App\Models\User;

class KonsultasiController extends Controller
{
    // HALAMAN KONSULTASI USER
    public function index()
    {
        $konselors = User::where(
            'role',
            'konselor'
        )->get();

        return view('user.konsultasi',
            compact('konselors'));
    }

    // SIMPAN PERTANYAAN
    public function store(Request $request)
    {
        $request->validate([
            'konselor_id' => 'required',
            'pesan' => 'required'
        ]);

        Konsultasi::create([
            'user_id' => auth()->user()->id,
            'konselor_id' => $request->konselor_id,
            'pesan' => $request->pesan,
            'status' => 'pending'
        ]);

        return back()->with(
            'success',
            'Pertanyaan berhasil dikirim'
        );
    }

    // HALAMAN KONSELOR
    public function konsultasiKonselor()
    {
        $konsultasis = Konsultasi::where(
            'konselor_id',
            auth()->user()->id
            )->with('user')->latest()->get();

        return view(
            'konselor.konsultasi',
            compact('konsultasis')
        );
    }

    // FORM BALAS
    public function balas($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);

        return view(
            'konselor.balas',
            compact('konsultasi')
        );
    }

    // SIMPAN BALASAN
    public function simpanBalasan(Request $request,$id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->update([
        'balasan' => $request->balasan,
        'status' => 'dibalas'
    ]);

        return redirect('/konselor/konsultasi')->with(
        'success',
        'Balasan berhasil dikirim'
        );
      
    }

    // USER MELIHAT BALASAN
    public function historyUser()
    {
        $konsultasis = Konsultasi::where(
            'user_id',
            auth()->user()->id
        )->with('konselor')->latest()->get();

        return view(
            'user.history-konsultasi',
            compact('konsultasis')
        );
    }
}