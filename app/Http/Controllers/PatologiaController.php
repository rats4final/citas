<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patologia;
use App\Models\TipoPatologia;

class PatologiaController extends Controller
{
    public function index()
    {
        //$TipoPatologia =TipoPatologia::get();
        $Patologia =Patologia::with('tipo_patologia')->get();

        //return $Patologia;
        return view ('admin.Patologia.index',compact('Patologia'));
    }

    public function create()
    {
        $TipoPatologia =TipoPatologia::get();
        return view('admin.Patologia.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
       Patologia::create($input);
        return redirect('Patologia')->with('flash_message', 'Patologia Addedd!');
    }

    public function show($id)
    {
        $Patologia =Patologia::find($id);
        return view('admin.Patologia.show')->with('Patologia', $Patologia);
    }

    public function edit($id)
    {
        $Patologia =Patologia::find($id);
        return view('admin.Patologia.edit')->with('Patologia', $Patologia);
    }

    public function update(Request $request, $id)
    {
        $Patologia =Patologia::find($id);
        $input = $request->all();
        $Patologia->update($input);
        return redirect('Patologia')->with('flash_message', 'Patologia Updated!');
    }

    public function destroy($id)
    {
       Patologia::destroy($id);
        return redirect('Patologia')->with('flash_message', 'Patologia deleted!');
    }
}
