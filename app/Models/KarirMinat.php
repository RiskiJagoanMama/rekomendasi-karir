<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KarirMinat extends Model
{
    protected $table = 'karir_minat';

    protected $fillable = [

        'karir_id',
        'minat_id',
        'bobot'

    ];
}