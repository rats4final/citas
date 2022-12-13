<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persona;
use App\Models\TipoSangre;
use App\Models\Especialidad;
use App\Models\Usario_has_especialidad;

class MedicoController extends Controller
{

    public function index()
    {
        //
        $usuarios =  User::with(['persona.has_especialidad.especialidad'])->get();

        return view('admin.User_medico.index',compact('usuarios'));
    }


    public function create()
    {
        //
        $tipos_sangre = TipoSangre::get();
        $especialidades = Especialidad::all();


        return view('admin.User_medico.create',compact('tipos_sangre','especialidades'));
    }


    public function store(Request $request)
    {
        $datos = $request->all();
        Persona::create($datos);
        $id = Persona::latest('id_persona')->first();
        //return to_route('personas.index');
        $datos1 = ['rol'=>"1", 'estado'=>1, 'id_persona'=>$id->id_persona];
        $datosUser = array_merge($datos, $datos1);
        User::create($datosUser);
        $id_user= User::latest('id')->first(); //id
        $datos12 = ['id_medico'=>$id_user->id];

        foreach ($request["especialidades"] as $req){
            Usario_has_especialidad::create([
                'id_especialidad'   => $req[0],
                'id_medico'=>$id_user->id
            ]);
        }
        return redirect('/Medico');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //

        $usuarios =  User::with(['persona.has_especialidad.especialidad'])->find($id);

        $tipos_sangre = TipoSangre::get();
        $especialidades = Especialidad::all();

        return view('admin.User_medico.edit',compact('usuarios','tipos_sangre','especialidades'));
    }


    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        return redirect('/Medico');
    }


    public function destroy(Request $request,$medico)
    {
        //
        $input = $request->all();

        $usuarios = User::find($medico);

        $estado = ['estado'=>0];

        $usuarios->update($estado);

    //Redirecionas para no bugear el jalar de datos con reddirect para recargar la vista totalmente
    return redirect('/Medico');
    }
}
