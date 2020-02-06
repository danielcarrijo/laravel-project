<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
        'titulo', 'subtitulo', 'nome_imagem'
    ];
}
