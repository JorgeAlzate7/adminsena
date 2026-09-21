<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Course;
use App\Models\Computer;

class AprendiceController extends Controller
{
    public function consultaCurso()
    {
        $aprendiz = Aprendice::find(1);

        return $aprendiz->course;
    }

    public function consultaComputador()
    {
        $aprendice = Aprendice::find(3);

        return $aprendice->computer;
    }

    public function index()
    {
        $aprendices = Aprendice::all();

        return response()->json($aprendices);
    }

    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view(
            'aprendice.create',
            compact('courses', 'computers')
        );
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $aprendices = Aprendice::create($request->all());
    return response()->json($aprendices);
    }

    public function show($id)
    {
        $aprendice = Aprendice::findOrFail($id);
        return response()->json($aprendice);
    }

    public function edit(Aprendice $aprendice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view(
            'aprendice.edit',
            compact('aprendice', 'courses', 'computers')
        );
    }

    public function update(Request $request, $id)
    {
        $aprendice = Aprendice::findOrFail($id);
        $aprendice->update($request->all());
        return response()->json($aprendice);
    }

    public function destroy($id)
    {
        $aprendice = Aprendice::findOrFail($id);
        $aprendice->delete();
        return response()->json(['message' => 'Eliminado correctamente']);
    }
}