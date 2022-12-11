<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;
use App\Http\Requests\StoreEspecialidadRequest;
use App\Http\Requests\EditEspecialidadRequest;

class EspecialidadController extends Controller
{

    public function index()
    {
        //
        $Especialidades = Especialidad::all();
        return view('admin.Especialidades.index',compact('Especialidades'));
    }


    public function create()
    {
        //
         return view('admin.Especialidades.create');
    }


    public function store(StoreEspecialidadRequest $request)
    {
        //
        $Especialidad=request()->except('_token');

        Especialidad::create($Especialidad);

        return redirect('/especialidad');
    }


    public function show($id_especialidad)
    {
        //
        $Especialidad= Especialidad::find($id_especialidad);
        return View ('admin.Especialidades.show',compact('Especialidad'));
    }


    public function edit($id_especialidad)
    {
        //
        $Especialidad= Especialidad::find($id_especialidad);
        return View ('admin.Especialidades.edit',compact('Especialidad'));
    }

    public function update(EditEspecialidadRequest $request, $id_especialidad)
    {
        //
        $input = $request->all();

        $Especialidad = Especialidad::find($id_especialidad);

        $Especialidad->update($input);

    //Redirecionas para no bugear el jalar de datos con reddirect para recargar la vista totalmente
    return redirect('/especialidad');
    }


    public function destroy($id_especialidad)
    {
        //
        Especialidad::destroy($id_especialidad);

        return redirect('/especialidad');
    }
}
