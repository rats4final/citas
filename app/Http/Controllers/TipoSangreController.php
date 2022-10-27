<?php

namespace App\Http\Controllers;

use App\Models\TipoSangre;
use Illuminate\Http\Request;

class TipoSangreController extends Controller
{
    public function index()
    {
        $TipoSangre =TipoSangre::all();
        return view ('admin.TipoSangre.index',compact('TipoSangre'));
    }
    
    public function create()
    {
        return view('admin.TipoSangre.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
       TipoSangre::create($input);
        return redirect('TipoSangre')->with('flash_message', 'TipoSangre Addedd!');  
    }
    
    public function show($id)
    {
        $TipoSangre =TipoSangre::find($id);
        return view('admin.TipoSangre.show')->with('TipoSangre', $TipoSangre);
    }
    
    public function edit($id)
    {
        $TipoSangre =TipoSangre::find($id);
        return view('admin.TipoSangre.edit')->with('TipoSangre', $TipoSangre);
    }
  
    public function update(Request $request, $id)
    {
        $TipoSangre =TipoSangre::find($id);
        $input = $request->all();
        $TipoSangre->update($input);
        return redirect('TipoSangre')->with('flash_message', 'TipoSangre Updated!');  
    }
  
    public function destroy($id)
    {
       TipoSangre::destroy($id);
        return redirect('TipoSangre')->with('flash_message', 'TipoSangre deleted!');  
    }
}
