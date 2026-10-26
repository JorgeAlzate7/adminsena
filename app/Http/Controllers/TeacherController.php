<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // Muestra qué área da un profesor
    public function consultaArea()
    {
        $profe = Teacher::find(1);
        return $profe->area;
    }

    // Muestra en qué centro se encuentra el profesor
    public function consultaCentro()
    {
        $profe = Teacher::find(1);
        return $profe->training_center;
    }

    public function consultaCurso()
    {
        $profe = Teacher::find(1);
        return $profe->courses;
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'teacher.create',
            compact('areas', 'training_centers')
        );
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'area_id' => 'required|integer',
        'training_center_id' => 'required|integer',
    ]);

    $teacher = Teacher::create($validated);

    return response()->json($teacher, 201);
    }

    public function index()
    {
        // Carga las relaciones intentando ambos nombres de relación por compatibilidad
        return Teacher::with(['area', 'trainingCenter', 'training_center'])->get();
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    }

    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'teacher.edit',
            compact('teacher', 'areas', 'training_centers')
        );
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return response()->json($teacher);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return response()->json(['message' => 'Eliminado correctamente']);
    }
}




