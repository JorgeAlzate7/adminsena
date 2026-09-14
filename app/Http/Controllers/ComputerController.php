<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function consultaAprendiz()
    {
        $compu = Computer::find(3);
        return $compu->aprendices;
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:255',
    ]);
    $computer = Computer::create($request->all());
    return response()->json($computer);
    }
 
    public function index()
    {
        $computers = Computer::all();

        return response()->json($computers);
    }

    public function show($id)
    {
        $computer = Computer::find($id);

        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());

        return redirect()->route('computer.index');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computer.index');
    }

}
