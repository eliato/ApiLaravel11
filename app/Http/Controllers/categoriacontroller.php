<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
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
