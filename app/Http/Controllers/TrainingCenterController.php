<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // Consulta de qué profesores hay en cada centro
    public function consultaProfesores()
    {
        $centro = Training_center::find(4);
        return $centro->teachers;
    }

    // Consulta en qué centro de formación se da un curso
    public function consultaCursos()
    {
        $centro = Training_center::find(1);
        return $centro->courses;
    }

    public function create()
    {
        return view('training_center.create');
    }

    

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $training_center = Training_center::create($request->all());
    return response()->json($training_center);
    }

    public function index()
    {
        $training_centers = Training_center::all();

        return response()->json($training_centers);
    }

    public function show($id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        return response()->json($trainingCenter);
    }

    public function edit(Training_center $training_center)
    {
        return view('training_center.edit', compact('training_center'));
    }

    public function update(Request $request, $id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        $trainingCenter->update($request->all());
        return response()->json($trainingCenter);
    }

    public function destroy($id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        $trainingCenter->delete();
        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
