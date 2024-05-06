<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\categoria;


class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(),200);
    }
}
