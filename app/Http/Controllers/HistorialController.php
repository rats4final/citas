<?php

namespace App\Http\Controllers;

use App\Models\Historial;

use App\Models\Sede;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHistorialRequest;
use App\Http\Requests\EditHistorialRequest;



class HistorialController extends Controller
{

    public function index()
    {
        //
        $Historias = Historial::with(['personas:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','users.persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','sede:id_sede,nombre_sede'])->get();
        return view('admin.Historial.index',compact('Historias'));

        //return $Historias;
    }

    public function create()
    {
        //
        $Sedes = Sede::all();
        $Users = User::with('persona')->get();

        return view('admin.Historial.create',compact('Sedes','Users'));

        //return $Users;
    }

    public function store(StoreHistorialRequest $request)
    {
        //
        $Datos_Historia=request()->except('_token');

        Historial::create($Datos_Historia);

        return redirect('/Historial');
    }


    public function show($Historial)
    {

        // $Historia= Historial::find($Historial);
        $Historial = Historial::with(['personas:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','users.persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','sede:id_sede,nombre_sede'])->find($Historial);

        return View ('admin.Historial.show',compact('Historial'));

       //

    }


    public function edit($Historial)
    {
        //
        $Sedes = Sede::all();
        $Users = User::with('persona')->get();
        $Historia = Historial::with(['personas:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','users.persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','sede:id_sede,nombre_sede'])->find($Historial);

        return View ('admin.Historial.edit',compact('Historia','Sedes','Users'));

        //return $Historia;

    }


    public function update(EditHistorialRequest $request, $historial)
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
        return redirect('/Historial');
    }
}
