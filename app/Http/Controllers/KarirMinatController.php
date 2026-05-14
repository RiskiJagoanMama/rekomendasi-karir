<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
use App\Models\Minat;
use App\Models\KarirMinat;

class KarirMinatController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $data = KarirMinat::join('karir', 'karir.id', '=', 'karir_minat.karir_id')
            ->join('minat', 'minat.id', '=', 'karir_minat.minat_id')
            ->select(
                'karir_minat.*',
                'karir.nama_karir',
                'minat.nama_minat'
            )
            ->get();

        return view('karir_minat.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        $karirs = Karir::all();

        $minats = Minat::all();

        return view('karir_minat.create',
            compact('karirs', 'minats'));
    }

    // SIMPAN
    public function store(Request $request)
    {
        KarirMinat::create([

            'karir_id' => $request->karir_id,

            'minat_id' => $request->minat_id,

            'bobot' => $request->bobot

        ]);

        return redirect('/karir_minat');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = KarirMinat::find($id);

        $karirs = Karir::all();

        $minats = Minat::all();

        return view('karir_minat.edit',
            compact('data', 'karirs', 'minats'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = KarirMinat::find($id);

        $data->update([

            'karir_id' => $request->karir_id,

            'minat_id' => $request->minat_id,

            'bobot' => $request->bobot

        ]);

        return redirect('/karir_minat');
    }

    // HAPUS
    public function destroy($id)
    {
        $data = KarirMinat::find($id);

        $data->delete();

        return redirect('/karir_minat');
    }
}