<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'seller';

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'telefone',
        'morada',
        'cep',
        'nif',
        'iban',
        'porto',
        'fishing_zone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
