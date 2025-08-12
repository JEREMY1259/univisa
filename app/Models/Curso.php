<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
        //Campos que pueden asignarse masivamente
        protected $fillable = [
            'nombre',
            'codigo',
            'grado',
            'seccion',
            'profesor_id',
        ];
        /**
         * relacion: un curso peetence a un profesor(usuario)
         */
        public function profesor()
        {
            return $this->belongsTo(User::class, 'profesor_id');
        }
}
