<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* 
Model Alumnat referenciada a la taula 'alumnat'
    amb propietats omplenables: 'name', 'surname', 'email'
    i la id hidden
*/
class Alumnat extends Model
{
    use HasFactory;
    protected $table = 'alumnat';

    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [
        'id'
    ];
}
