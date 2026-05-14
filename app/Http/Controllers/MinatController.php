<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Minat;

class MinatController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $minat = Minat::all();

        return view('minat.index', compact('minat'));
    }

    // HALAMAN TAMBAH
    public function create()
    {
        return view('minat.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        Minat::create([

            'nama_minat' => $request->nama_minat

        ]);

        return redirect('/minat');
    }

    // HALAMAN EDIT
    public function edit($id)
    {
        $minat = Minat::find($id);

        return view('minat.edit', compact('minat'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $minat = Minat::find($id);

        $minat->update([

            'nama_minat' => $request->nama_minat

        ]);

        return redirect('/minat');
    }

    // HAPUS
    public function destroy($id)
    {
        $minat = Minat::find($id);

        $minat->delete();

        return redirect('/minat');
    }
}