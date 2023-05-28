<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected  $table = 'posts';
    protected  $table = 'funcionarios';
    protected $primaryKey = 'cod_func';
    public $incrementing = false;

    protected $fillable = [
        'cod_func',
        'nome_func',
        'idade_func',
        'telefone_func',
        'end_func'
    ];
}
