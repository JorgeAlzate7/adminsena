<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function consultaArea()
    {
        $curso = Course::find(2);
        return $curso->area;
    }

    public function consultaCentro()
    {
        $curso = Course::find(1);
        return $curso->training_center;
    }

    public function consultaAprendiz()
    {
        $curso = Course::find(1);
        return $curso->aprendices;
    }

    public function consultaProfe()
    {
        $curso = Course::find(1);
        return $curso->teachers;
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.create', compact('areas', 'training_centers'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $course = Course::create($request->all());
    return response()->json($course);
    }

    public function index()
    {
        $courses = Course::all();

        return response()->json($courses);
    }

    public function show($id)
    {
        $curso = Course::find($id);

        return view('course.show', compact('curso'));
    }

    public function edit(Course $course)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'course.edit',
            compact('course', 'areas', 'training_centers')
        );
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
    }
}