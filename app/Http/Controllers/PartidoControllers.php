<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Temporada;
use App\Models\Partido;
class PartidoControllers extends Controller
{
    public function index($id)
    {
        $temporada = Temporada::findOrFail($id);
        $partidos = $temporada->partidos()->orderBy('fecha')->get();
        return view('partidos.index', compact('temporada', 'partidos'));
    }

    public function create($id)
    {
        $temporada = Temporada::findOrFail($id);
        return view('partidos.create', compact('temporada'));
    }

    public function store(Request $request, $id)
    {
        $temporada = Temporada::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'equipo_local' => 'required|max:255',
            'equipo_visitante' => 'required|max:255',
            'goles_local' => 'required|integer|min:0',
            'goles_visitante' => 'required|integer|min:0',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->route('partidos.create', $id)
                ->withErrors($validator)
                ->withInput();
        }
    
        $partido = new Partido();
        $partido->fill($request->all());
        $partido->temporada()->associate($temporada);
        $partido->save();
        session()->flash('success', 'Partido ha sido creado correctamente');
        return redirect()
            ->route('partidos', $id);
    }
    

    public function edit($id)
    {
        $partido = Partido::findOrFail($id);
        return view('partidos.edit', compact('partido'));
    }

    public function update(Request $request, $id)
    {
        $partido = Partido::findOrFail($id);
        $partido->fill($request->all());
        $partido->save();
        return redirect()->route('partidos', ['id' => $partido->temporada->id]);
    }

    public function destroy($id)
    {
        $partido = Partido::findOrFail($id);
        $temporada_id = $partido->temporada->id;
        $partido->delete();
        session()->flash('success', 'Partido ha sido eliminado correctamente');
        return redirect()->route('partidos', ['id' => $temporada_id]);
    }
}
