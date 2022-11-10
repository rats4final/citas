<?php

namespace App\Http\Controllers;

use App\Models\TipoRelacion;
use Illuminate\Http\Request;

class TipoRelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipoRelaciones = TipoRelacion::get();
        return view('admin.tipo_relacion.index', compact('TipoRelaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo_relacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        TipoRelacion::create($datos);
        return to_route('TipoRelacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoRelacion  $TipoRelacion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoRelacion $TipoRelacion)
    {
        return view('admin.tipo_relacion.show', compact('TipoRelacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoRelacion  $tipoRelacion
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoRelacion $tipoRelacion)
    {
        return view('admin.tipo_relacion.edit', compact('tipoRelacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoRelacion  $tipoRelacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoRelacion $tipoRelacion)
    {
        $datos = $request->all();
        $tipoRelacion->update($datos);
        return to_route('TipoRelacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoRelacion  $tipoRelacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoRelacion $tipoRelacion)
    {
        $tipoRelacion->delete();
        return to_route('TipoRelacion.index');
    }
}
