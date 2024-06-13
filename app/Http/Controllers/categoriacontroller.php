<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function show($id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            return response()->json($categoria, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }
    }
}
