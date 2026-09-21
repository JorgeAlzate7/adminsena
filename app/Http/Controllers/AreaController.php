<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function consultaProfe()
    {
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso()
    {
        $area = Area::find(1);
        return $area->courses;
    }

    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $area = Area::create($request->all());
    return response()->json($area);
    }


    public function index()
    {
        $areas = Area::all();

        return response()->json($areas);
    }

    public function show($id)
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->update($request->all());
        return response()->json($area);
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
