<?php

namespace App\Http\Controllers;

use App\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Texto::all();
        return view('edit/textos/texto', ['textos' => $textos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function show(Texto $texto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $texto = Texto::findorfail($id);
        return view('edit/textos/edit_texto', ['texto' => $texto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $texto = Texto::findorfail($id);
        $texto->texto = $request->texto;
        $texto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Texto $texto)
    {
        //
    }
}
