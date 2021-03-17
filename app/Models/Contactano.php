<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactano extends Model
{
    use HasFactory;
    protected $fillable = ['apellidos','nombres','dni','fecha_nacimiento', 'email', 'celular' , 'tipo_servicio','comoseentero'];
}
