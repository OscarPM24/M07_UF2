<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* 
Model Centre referenciada a la taula 'centres'
    amb propietats omplenables: 'name', 'address', 'cp', 'city'
    i la id hidden
*/
class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';

    protected $fillable = [
        'name',
        'address',
        'cp',
        'city'
    ];

    protected $hidden = [
        'id'
    ];
}
