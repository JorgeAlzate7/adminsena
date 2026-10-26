<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ComputerController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'number' => $request->input('number'),
            'brand'  => $request->input('brand') ?? $request->input('marca'),
            'marca'  => $request->input('marca') ?? $request->input('brand'),
        ];

        // Subida de imagen a Cloudinary
        if ($request->hasFile('imagen')) {
            $uploadedFile = Cloudinary::upload($request->file('imagen')->getRealPath(), [
                'folder' => 'computadores'
            ]);
            $data['imagen_url'] = $uploadedFile->getSecurePath();
        }

        $computer = Computer::create($data);

        return response()->json($computer, 201);
    }

    public function update(Request $request, $id)
    {
        $computer = Computer::findOrFail($id);

        $data = [
            'number' => $request->input('number', $computer->number),
            'brand'  => $request->input('brand', $computer->brand) ?? $request->input('marca', $computer->marca),
            'marca'  => $request->input('marca', $computer->marca) ?? $request->input('brand', $computer->brand),
        ];

        // Subida a Cloudinary si se seleccionó una foto nueva
        if ($request->hasFile('imagen')) {
            $uploadedFile = Cloudinary::upload($request->file('imagen')->getRealPath(), [
                'folder' => 'computadores'
            ]);
            $data['imagen_url'] = $uploadedFile->getSecurePath();
        }

        $computer->update($data);

        return response()->json($computer, 200);
    }

    public function index()
    {
        return response()->json(Computer::all(), 200);
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return response()->json(['message' => 'Eliminado correctamente']);
    }
}