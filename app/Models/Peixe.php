<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peixe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'especie',
        'nome_cientifico',
        'codigo_fao',
        'codigo_lota',
        'image',

    ];
}
