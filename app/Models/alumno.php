<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Especificar la tabla si no sigue la convención de nombres de Laravel
    protected $table = 'alumno';

protected $primaykey = 'id';
    // Especificar los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'fecha_nacimiento',
    ];
}
