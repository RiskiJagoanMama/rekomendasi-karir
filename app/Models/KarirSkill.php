<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KarirSkill extends Model
{
    protected $table = 'karir_skill';

    protected $fillable = [

        'karir_id',
        'skill_id',
        'bobot'

    ];
}