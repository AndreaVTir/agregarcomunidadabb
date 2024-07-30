<?php

namespace App\Http\Controllers;

use App\Models\Vecino;
use Illuminate\Http\Request;

class VecinoController extends Controller
{
    public function index()
    {
        $vecinos = Vecino::all();
        return view('vecinos.index', compact('vecinos'));
    }

    public function create()
    {
        return view('vecinos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Escalera' => 'required',
            'Piso' => 'required',
            'Puerta' => 'required',
            'id_comunidad' => 'required|exists:comunidades,id_comunidad',
        ]);

        Vecino::create($request->all());

        return redirect()->route('vecinos.index');
    }

    public function edit(Vecino $vecino)
    {
        $comunidades = Comunidad::all(); // Obtener todas las comunidades
        return view('vecinos.edit', compact('vecino', 'comunidades'));    }

    public function update(Request $request, Vecino $vecino)
    {
        $request->validate([
            'Nombre' => 'required',
            'Escalera' => 'required',
            'Piso' => 'required',
            'Puerta' => 'required',
            'id_comunidad' => 'required|exists:comunidades,id_comunidad',
        ]);

        $vecino->update($request->all());

        return redirect()->route('vecinos.index');
    }

    public function destroy(Vecino $vecino)
    {
        $vecino->delete();
        return redirect()->route('vecinos.index');
    }

    
}
