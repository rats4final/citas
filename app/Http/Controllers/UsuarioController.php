<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;
use App\Models\User;
use App\Models\Persona;
use App\Models\TipoSangre;

use Illuminate\Http\Request;
class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = user::with(['persona'])->get();
        return view('admin.user.index', compact('usuarios'));
        //return $usuario;
    }

    public function create()
    {
        $personas = Persona::get();
        $tipos_sangre = TipoSangre::get();
        return view('admin.user.create', compact('tipos_sangre','personas'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        Persona::create($datos);
        $id = Persona::latest('id_persona')->first();
        //return to_route('personas.index');
        $datos1 = ['rol'=>"2", 'estado'=>1, 'id_persona'=>$id->id_persona];
        $datosUser = array_merge($datos, $datos1);
        User::create($datosUser);
        return redirect('/Usuario');


    }


    public function show(Usuario $usuario)
    {
        //
    }


    public function edit(Usuario $usuario)
    {
        //
    }


    public function update(Request $request, Usuario $usuario)
    {
        //
    }


    public function destroy(Request $request, $usuario)
    {
        $input = $request->all();

        $usuarios = User::find($usuario);

        $estado = ['estado'=>0];

        $usuarios->update($estado);

    //Redirecionas para no bugear el jalar de datos con reddirect para recargar la vista totalmente
    return redirect('/Usuario');
    }
}
