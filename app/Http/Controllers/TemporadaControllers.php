<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporada;

class TemporadaControllers extends Controller
{

// This function is for listing all temporadas ordered by id
    public function index()
{
    $temporadas = Temporada::all();
    return view('temporadas.index', compact('temporadas'));
}

// This function is for listing all temporadas ordered by ano_inicio
  public function temporadas()
{
    $temporadas = Temporada::orderBy('ano_inicio')->get();
    return view('temporadas.index', compact('temporadas'));
}

// This function is for creating a new temporada
public function create()
    {
        return view('temporadas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ano_inicio' => 'required|integer',
            'ano_fin' => 'required|integer|gt:ano_inicio',
            // Add any other validation rules as needed
        ]);

        Temporada::create([
            'ano_inicio' => $request->ano_inicio,
            'ano_fin' => $request->ano_fin,
            // Add any other fields as needed
        ]);

        return redirect()->route('temporadas.index')->with('success', 'Temporada created successfully');
    }
}
