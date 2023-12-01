<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* 
Model Professorat referenciada a la taula 'professorat'
    amb propietats omplenables: 'name', 'surname', 'email'
    i la id hidden
*/
class Professorat extends Model
{
    use HasFactory;
    protected $table = 'professorat';

    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [
        'id'
    ];
}
