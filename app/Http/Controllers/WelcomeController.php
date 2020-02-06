<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;
use App\Carousel;
use App\Texto;
class WelcomeController extends Controller
{
    public function index() {   
    	$cards = Cards::all();
    	$carousels = Carousel::all();
    	$textos = Texto::all();
        return view('welcome', [
        	'cards' => $cards,
        	'carousels' => $carousels,
        	'textos' => $textos
        ]);
    }
}
