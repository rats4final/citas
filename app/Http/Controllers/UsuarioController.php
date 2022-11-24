<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;
use App\Models\User;
use App\Models\Persona;
use App\Models\TipoSangre;

use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = user::with(['persona'])->get();
        return view('admin.user.index', compact('usuarios'));
        //return $usuario;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::get();
        $tipos_sangre = TipoSangre::get();
        return view('admin.user.create', compact('tipos_sangre','personas'));
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
        Persona::create($datos);
        $id = Persona::latest('id_persona')->first();
        //return to_route('personas.index');
        $datos1 = ['rol'=>"1", 'estado'=>1, 'id_persona'=>$id->id_persona];
        $datosUser = array_merge($datos, $datos1);
        User::create($datosUser);
        return redirect('/Usuario');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
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
