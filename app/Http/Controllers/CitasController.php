<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Especialidad;
use App\Models\User;

class CitasController extends Controller
{
    public function index()
    {
        //$User =User::get();
        $Citas =Citas::with(['medico:id,id_persona','medico.persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','paciente:id,id_persona','paciente.persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per'])->get();

        return view ('admin.Citas.index',compact('Citas'));
    }

    public function create()
    {
        $Users = User::with(['persona:id_persona,nombre_per,apellido_pa_per,apellido_ma_per','persona.has_especialidad'])->get();

        $Especialidades =Especialidad::all();

        return view('admin.Citas.create',compact('Users','Especialidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_cita'=>['required'],
            'detalles_cita'=>['required','max:50']
        ]);
        $Cita = $request->all();

        $Nivel=['estado' => 1,'id_paciente'=> 1];
        $Cita= array_merge($Nivel, $Cita);

       Citas::create($Cita);
        return redirect('Citas')->with('flash_message', 'Citas Addedd!');
    }

    public function show($id)
    {
        $Citas = Citas::find($id);
        return view('admin.Citas.show')->with('Citas', $Citas);
    }

    public function edit($id)
    {
        $User = User::all();

        $Citas =Citas::find($id);
        return view('admin.Citas.edit')->with('Citas', $Citas);
    }

    public function update(Request $request, $id)
    {
        $Citas =Citas::find($id);
        $input = $request->all();
        $Citas->update($input);
        return redirect('Citas')->with('flash_message', 'Citas Updated!');
    }

    public function destroy($id)
    {
       Citas::destroy($id);
        return redirect('Citas')->with('flash_message', 'Citas deleted!');
    }
}
