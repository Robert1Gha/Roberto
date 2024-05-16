<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcaindex', compact('marcas'));
    }

    public function create()
    {
        return view('marca');
    }

    public function store(Request $request)
    {
        Marca::create($request->all());
        return redirect('/Marca');
    }

    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return view('/marcashow', compact('marca'));
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcaedit', compact('marca'));
    }

    public function update(Request $request,$id)
    {
        $marca = Marca::findOrFail($id);
        Marca::where('id', $marca->id)->update($request->except('_token','_method','action'));
        return redirect('/Marca');
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();
        return redirect('/Marca');
    }
}
