<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{

    public function index()
    {
        //
        $Historias = Historial::all();
        return view('admin.Historial.index',compact('Historias'));
    }

    public function create()
    {
        //
        return view('admin.Historial.create');
    }

    public function store(Request $request)
    {
        //
        $Datos_Historia=request()->except('_token');

        Historial::create($Datos_Historia);

        return redirect('/Historial');
    }


    public function show(Historial $Historial)
    {

        // $Historia= Historial::find($Historial);
        return View ('admin.Historial.show',compact('Historial'));

    }


    public function edit($historial)
    {
        //
        $Historia= Historial::find($historial);
        return View ('admin.Historial.edit',compact('Historia'));
    }


    public function update(Request $request, $historial)
    {
        //
        $input = $request->all();

        $Historia = Historial::find($historial);

        $Historia->update($input);

    //Redirecionas para no bugear el jalar de datos con reddirect para recargar la vista totalmente
    return redirect('/Historial');

    }


    public function destroy( $Historial)
    {
        //
        Historial::destroy($Historial);

        // $Historial->delete();

        return redirect('/Historial');
    }
}
