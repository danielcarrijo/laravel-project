<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
        'titulo', 'subtitulo'
    ];
}
