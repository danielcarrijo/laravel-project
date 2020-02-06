<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'name', 'last_name', 'state', 'city', 'message'
    ];
}
