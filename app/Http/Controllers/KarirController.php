<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirController extends Controller
{
    // MENAMPILKAN DATA
    public function index()
    {
        $karirs = Karir::all();

        return view('karir.index', compact('karirs'));
    }

    // HALAMAN TAMBAH
    public function create()
    {
        return view('karir.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        Karir::create([

            'nama_karir' => $request->nama_karir,
            'deskripsi' => $request->deskripsi

        ]);

        return redirect('/karir');
    }

    // HALAMAN EDIT
    public function edit($id)
    {
        $karir = Karir::find($id);

        return view('karir.edit', compact('karir'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $karir = Karir::find($id);

        $karir->update([

            'nama_karir' => $request->nama_karir,
            'deskripsi' => $request->deskripsi

        ]);

        return redirect('/karir');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $karir = Karir::find($id);

        $karir->delete();

        return redirect('/karir');
    }
}