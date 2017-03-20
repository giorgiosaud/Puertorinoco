<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\TipoDePaseo;
use Illuminate\Http\Request;

class TipoDePaseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TiposDePaseos = TipoDePaseo::all();
        // dd($TiposDePaseos);
        $TiposDepaseosTableStyle = [];
        foreach ($TiposDePaseos as $TipoDePaseo)
        {
            $array = [
                'Id'        => $TipoDePaseo->id,
                'Nombre'    => $TipoDePaseo->nombre,
                'Descripcion'    => $TipoDePaseo->descripcion,
            ];
            array_push($TiposDepaseosTableStyle, $array);
        }

        return view('TiposDePaseos.admin.all', compact('TiposDepaseosTableStyle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
