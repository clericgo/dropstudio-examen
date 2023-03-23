<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    // Read - Leer/Mostrar
    public function index()
    {
        /*$productos = Producto::where('eliminacion', '=', '0')->select
        (
            'id', 'sku', 'nombre', 'descripcion', 'precio', 'cantidad', 'disponible'
        )-> orderBy('nombre', 'asc')->get();*/
        $productos = Producto::where('eliminacion', '=', 0)->get();
        //$productos = Producto::all();
        return $productos;
    }

    // Create - Crear/Registrar
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->id_categoria = $request->id_categoria;
        $producto->sku = $request->sku;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->estado = 0;
        $producto->eliminacion = 0;
        $producto->save();
    }

    // Update - Actualizar/Editar
    public function update(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->id_categoria = $request->id_categoria;
        $producto->sku = $request->sku;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->estado = 0;
        $producto->eliminacion = 0;
        $producto->save();
    }

    // Delete - Eliminar/Borrar
    public function eliminar(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->eliminacion = 1;
        $producto->save();
    }
    
    // Calificar 
    public function calificar(Request $request)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->calificacion = 5;
        $producto->save();
    }
}
