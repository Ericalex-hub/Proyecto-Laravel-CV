<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model {
    protected $table = 'curriculum';

    protected $fillable = ['nombre' , 'apellidos' , 'teléfono' , 'correo' , 'fecha_nacimiento' , 'nota_media' , 'experiencia' , 'formación' , 'habilidades' , 'image' , 'pdf'];

    function getPath() {
        $path = url('assets/img/not_found.png');
        if($this->image != null) {
            $path = url('storage/' . $this->image);
        }
        return $path;
    }
}
