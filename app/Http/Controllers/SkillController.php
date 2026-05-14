<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $skill = Skill::all();

        return view('skill.index', compact('skill'));
    }

    // HALAMAN TAMBAH
    public function create()
    {
        return view('skill.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        Skill::create([

            'nama_skill' => $request->nama_skill

        ]);

        return redirect('/skill');
    }

    // HALAMAN EDIT
    public function edit($id)
    {
        $skill = Skill::find($id);

        return view('skill.edit', compact('skill'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);

        $skill->update([

            'nama_skill' => $request->nama_skill

        ]);

        return redirect('/skill');
    }

    // HAPUS
    public function destroy($id)
    {
        $skill = Skill::find($id);

        $skill->delete();

        return redirect('/skill');
    }
}