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
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('area.index');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index');
    }
}
