<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Minat;
use App\Models\History;

class RekomendasiController extends Controller
{
    // HALAMAN REKOMENDASI
    public function index()
    {
        $skills = Skill::all();

        $minats = Minat::all();

        return view('user.rekomendasi',
            compact('skills', 'minats'));
    }

    // PROSES SAW
    public function proses(Request $request)
    {
        $skillUser = $request->skill;

        $minatUser = $request->minat;

        $karirs = \App\Models\Karir::all();

        $hasil = [];

        foreach ($karirs as $karir) {

            $total = 0;

            // HITUNG SKILL
            $karirSkills = \App\Models\KarirSkill::where(
                'karir_id',
                $karir->id
            )->get();

            foreach ($karirSkills as $skill) {

                if (in_array(
                    $skill->skill_id,
                    $skillUser
                )) {

                    $total += $skill->bobot;
                }
            }

            // HITUNG MINAT
            $karirMinats = \App\Models\KarirMinat::where(
                'karir_id',
                $karir->id
            )->get();

            foreach ($karirMinats as $minat) {

                if (in_array(
                    $minat->minat_id,
                    $minatUser
                )) {

                    $total += $minat->bobot;
                }
            }

            // SIMPAN HASIL
            $hasil[] = [

                'karir' => $karir->nama_karir,

                'deskripsi' => $karir->deskripsi,

                'nilai' => $total
            ];
        }

        // SORTING NILAI
        usort($hasil, function ($a, $b) {

            return $b['nilai'] <=> $a['nilai'];

        });

        // AMBIL HASIL TERBAIK
        $terbaik = $hasil[0];

        // SIMPAN HISTORY
        History::create([

            'user_id' => auth()->user()->id,

            'karir' => $terbaik['karir'],

            'nilai' => $terbaik['nilai']

        ]);

        return view('user.hasil',
            compact('hasil'));
    }

    // HISTORY USER
    public function history()
    {
        $histories = History::where(
            'user_id',
            auth()->user()->id
        )->latest()->get();

        return view('user.history',
            compact('histories'));
    }
    public function adminHistory()
{
    $histories = History::with('user')
        ->latest()
        ->get();

    return view('admin.history',
        compact('histories'));
}
}