<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
	public $timestamps = false;
    protected $fillable = [
    	'texto'
    ];
}
