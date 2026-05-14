<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;
use App\Models\Skill;
use App\Models\KarirSkill;

class KarirSkillController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $data = KarirSkill::join('karir', 'karir.id', '=', 'karir_skill.karir_id')
            ->join('skill', 'skill.id', '=', 'karir_skill.skill_id')
            ->select(
                'karir_skill.*',
                'karir.nama_karir',
                'skill.nama_skill'
            )
            ->get();

        return view('karir_skill.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        $karir = Karir::all();

        $skill = Skill::all();

        return view('karir_skill.create',
            compact('karir', 'skill'));
    }

    // SIMPAN
    public function store(Request $request)
    {
        KarirSkill::create([

            'karir_id' => $request->karir_id,

            'skill_id' => $request->skill_id,

            'bobot' => $request->bobot

        ]);

        return redirect('/karir_skill');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = KarirSkill::find($id);

        $karirs = Karir::all();

        $skills = Skill::all();

        return view('karir_skill.edit',
            compact('data', 'karirs', 'skills'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = KarirSkill::find($id);

        $data->update([

            'karir_id' => $request->karir_id,

            'skill_id' => $request->skill_id,

            'bobot' => $request->bobot

        ]);

        return redirect('/karir_skill');
    }

    // HAPUS
    public function destroy($id)
    {
        $data = KarirSkill::find($id);

        $data->delete();

        return redirect('/karir_skill');
    }
}