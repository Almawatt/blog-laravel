<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "materia";
    protected $fillable = [
        'img',
        'nome',
        'descricao',
        'materia',
        'data'
    ];
    protected $hidden = [

    ];
}
