<?php

// app/Models/Producto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_prod'; // Clave primaria de la tabla

    protected $fillable = [
        'nombre_prod',
        'categoria_prod',
        'descripcion',
        'precio_prod',
        'imagen',
    ];

    // Otras propiedades y métodos del modelo, si es necesario
}
