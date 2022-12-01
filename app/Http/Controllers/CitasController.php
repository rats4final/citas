<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\User;

class CitasController extends Controller
{
    public function index()
    {
        //$User =User::get();
        $Citas =Citas::with('users')->get();

        //return $Citas;
        return view ('admin.Citas.index',compact('Citas'));
    }

    public function create()
    {
        $User = User::get();
        return view('admin.Citas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'fecha_cita'=>['required'],
            'detalles_cita'=>['required','max:50']
            
        ]);
        $input = $request->all();
       Citas::create($input);
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
