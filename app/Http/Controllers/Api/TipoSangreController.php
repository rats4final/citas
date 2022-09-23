<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoSangre;
use Illuminate\Http\Request;

class TipoSangreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipo_sangre = TipoSangre::all();
        return response()->json([
            'tipo_sangre' => $tipo_sangre
        ]);
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
     * @param  \App\Models\TipoSangre  $tipoSangre
     * @return \Illuminate\Http\Response
     */
    public function show(TipoSangre $tipoSangre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoSangre  $tipoSangre
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoSangre $tipoSangre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoSangre  $tipoSangre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoSangre $tipoSangre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoSangre  $tipoSangre
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoSangre $tipoSangre)
    {
        //
    }
}
