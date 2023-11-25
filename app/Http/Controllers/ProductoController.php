<?php

// app/Http/Controllers/ProductoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre_prod' => 'required|string',
            'categoria_prod' => 'required|string',
            'descripcion' => 'required|string',
            'precio_prod' => 'required|numeric',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ajusta según tus necesidades
        ]);

        // Crea el producto en la base de datos
        $producto = new Producto;
        $producto->nombre_prod = $request->nombre_prod;
        $producto->categoria_prod = $request->categoria_prod;
        $producto->descripcion = $request->descripcion;
        $producto->precio_prod = $request->precio_prod;

        // Procesa y guarda la imagen (si se proporciona)
    
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagen_prod'), $nombreImagen);
    
            $producto->imagen = $nombreImagen;
        }

        $producto->save();

        // Redirecciona a donde desees después de guardar el producto
        return redirect()->route('home');
    }
}

