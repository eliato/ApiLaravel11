<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
class CategoriaController extends Controller
{
    public function index()
    {
         // Selecciona solo las columnas 'id' y 'nombre'
         $categorias = Categoria::select('id', 'cat_nom', 'cat_obs')->get();
         return response()->json($categorias, 200);

       // esto retorna todas las columnas return Categoria::all();
    }

    //metodo que guarda una categoria
    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }


    //metodo que trae una categoria en especifico por ID
    public function show($id)
    {
        try {
            $categoria = Categoria::select('id', 'cat_nom', 'cat_obs')->findOrFail($id);
            return response()->json($categoria, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }
    }

    //Métdo que actualiza una categoria por su ID
    public function update(Request $request, $id) 
    {
        try {
            
            $categoria = Categoria::findOrFail($id);
            $categoria -> update($request->all());
            return response()->json($categoria, 200);

        } catch (ModelNotFoundException $e) {
            
            return response()->json(['mensaje' => 'Categoria no encontrada', 204]);

        }
    
            
    }    

    


}
