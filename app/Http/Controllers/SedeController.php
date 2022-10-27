<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sede;

class SedeController extends Controller
{

    public function index()
    {
        //
        $Sedes = Sede::all();
        return view('admin.Sedes.index',compact('Sedes'));
    }


    public function create()
    {
        //
        return view('admin.Sedes.create');
    }


    public function store(Request $request)
    {
        //
        $Datos_Sedes=request()->except('_token');

        Sede::create($Datos_Sedes);

        return redirect('/sedes');
    }


    public function show($Id_Sede)
    {
        //
        $Sede= Sede::find($Id_Sede);
        return View ('admin.Sedes.show',compact('Sede'));
    }


    public function edit($Id_Sede)
    {
        //
        $Sede= Sede::find($Id_Sede);
        return View ('admin.Sedes.edit',compact('Sede'));
    }

    public function update(Request $request, $Id_Sede)
    {
        //

        $input = $request->all();

        $Sede = Sede::find($Id_Sede);

        $Sede->update($input);

    //Redirecionas para no bugear el jalar de datos con reddirect para recargar la vista totalmente
    return redirect('/sedes');
    }


    public function destroy($Id_Sede)
    {
        //
        Sede::destroy($Id_Sede);

        return redirect('/sedes');
    }
}
