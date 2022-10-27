<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{

    public function index()
    {
        $sedes = Sede::all();
        return response()->json([
            'sedes' => $sedes
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Sede $sede)
    {
        //
    }


    public function edit(Sede $sede)
    {
        //
    }


    public function update(Request $request, Sede $sede)
    {
        //
    }

    public function destroy(Sede $sede)
    {
        //
    }
}
