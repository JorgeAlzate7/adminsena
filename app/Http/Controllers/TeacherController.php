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
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $teacher = Teacher::create($request->all());
    return response()->json($teacher);
    }

    public function index()
    {
        $teachers = Teacher::all();

        return response()->json($teachers);
    }

    public function show($id)
    {
        $profesor = Teacher::find($id);

        return view('teacher.show', compact('profesor'));
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

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index');
    }
}




