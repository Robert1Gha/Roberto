<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Marca;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carroindex', compact('carros'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view ('carro', compact('marcas'));
    }

    public function store(Request $request)
    {
        $carro = new Carro();
        $carro->Marca = $request->Marca;
        $carro->Modelo = $request->Modelo;
        $carro->Numero_serie = $request->Numero_serie;
        $carro->save();

        $carro->marcas()->attach($request->marcas);
        Session()->flash('success', 'se ha guardado con exito');
        return redirect('/Carro');

    }

    public function show($id)
    {
        $carro = Carro::findOrFail($id);
        return view('/carroshow', compact('carro'));
    }

    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        $marcas = Marca::all();
        return view('carroedit', compact('carro', 'marcas'));
    }

    public function update(Request $request,$id)
    {
        $carro = Carro::findOrFail($id);
        $carro->Marca = $request->Marca;
        $carro->Modelo = $request->Modelo;
        $carro->Numero_serie = $request->Numero_serie;
        $carro->save();

        if ($request->has('marcas')){
            $carro->marcas()->sync($request->marcas);
        }else{
            $carro->marcas()->detach();
        }
        return redirect('/Carro');

    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        Session()->flash('success', 'se ha eliminado con exito');
        return redirect('/Carro');
    }
}
