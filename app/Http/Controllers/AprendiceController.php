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
        $aprendiz = Aprendice::findOrFail($id);

        return view('aprendice.show', compact('aprendiz'));
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

    public function update(Request $request, Aprendice $aprendice)
    {
        $aprendice->update($request->all());

        return redirect()->route('aprendice.index');
    }

    public function destroy(Aprendice $aprendice)
    {
        $aprendice->delete();

        return redirect()->route('aprendice.index');
    }
}