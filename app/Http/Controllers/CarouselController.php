<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('edit/carousel/carousel', ['carousels' => $carousels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edit/carousel/create_carousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousel = new Carousel;
        $carousel->titulo = $request->titulo;
        $carousel->subtitulo = $request->subtitulo;
        $carousel->nome_imagem = $_FILES["imagem"]["name"];
        move_uploaded_file($_FILES["imagem"]["tmp_name"], ("img/Originals/") . $_FILES["imagem"]["name"]);
        $carousel->save();
        return redirect()->route('carousel.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::findorfail($id);
        return view('edit/carousel/edit_carousel', ['carousel' => $carousel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carousel = Carousel::findorfail($id);
        $carousel->fill([
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo
        ]);
        if ($request->imagem != null) {
           $carousel->nome_imagem = $_FILES["imagem"]["name"];
            move_uploaded_file($_FILES["imagem"]["tmp_name"], ("img/Originals/") . $_FILES["imagem"]["name"]);
        
        }
        $carousel->save();
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::findorfail($id);
        if (count(Carousel::all()) > 1) {
            $carousel->delete();
            return redirect()->route('carousel.index');
        }
        else {
            return redirect()->route('carousel.index')->with('message', 'Deve-se deixar ao menos um slide');
        }
    }
}
