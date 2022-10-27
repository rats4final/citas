<?php

namespace App\Http\Controllers;

use App\Models\TipoPatologia;
use Illuminate\Http\Request;

class TipoPatologiaController extends Controller
{
    public function index()
    {
        $TipoPatologia =TipoPatologia::all();
        return view ('admin.TipoPatologia.index',compact('TipoPatologia'));
    }

    public function create()
    {
        return view('admin.TipoPatologia.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
       TipoPatologia::create($input);
        return redirect('TipoPatologia')->with('flash_message', 'TipoPatologia Addedd!');
    }

    public function show($id)
    {
        $TipoPatologia =TipoPatologia::find($id);
        return view('admin.TipoPatologia.show')->with('TipoPatologia', $TipoPatologia);
    }

    public function edit($id)
    {
        $TipoPatologia =TipoPatologia::find($id);
        return view('admin.TipoPatologia.edit')->with('TipoPatologia', $TipoPatologia);
    }

    public function update(Request $request, $id)
    {
        $TipoPatologia =TipoPatologia::find($id);
        $input = $request->all();
        $TipoPatologia->update($input);
        return redirect('TipoPatologia')->with('flash_message', 'TipoPatologia Updated!');
    }

    public function destroy($id)
    {
       TipoPatologia::destroy($id);
        return redirect('TipoPatologia')->with('flash_message', 'TipoPatologia deleted!');
    }
}
