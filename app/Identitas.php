<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'nim'
    ];
}
