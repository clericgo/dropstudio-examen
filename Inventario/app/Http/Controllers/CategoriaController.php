<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{

    // Read - Leer/Mostrar
    public function index()
    {
        $categorias = Categoria::all();
        return $categorias;
    }

    // Create - Crear/Registrar
    public function store(Request $request)
    {
        
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->eliminacion = 0;
        $categoria->save();
    }

    // Update - Actualizar/Editar
    public function update(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->eliminacion = 0;
        $categoria->save();
    }

    // Delete - Eliminar/Borrar
    public function eliminar(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->eliminacion = 1;
        $categoria->save();
    }

    
}
