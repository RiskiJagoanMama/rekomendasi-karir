<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';

    protected $fillable = [

        'user_id',

        'konselor_id',

        'pesan',

        'balasan',

        'status'

    ];

    // USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // KONSELOR
    public function konselor()
    {
        return $this->belongsTo(User::class,
            'konselor_id');
    }
}