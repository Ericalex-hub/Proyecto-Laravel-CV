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
    
    //Esto es para que me devuelva el pdf, ya exista o no
    function getPdf() {
        return url('storage/pdf') . '/' . $this->id . '.pdf';
    }

    //Esto comprueba si existe o no el pdf, si si existe se lo da a getPdf y si no, le da una fake pdf a getPdf
    function isPdf() {
        return file_exists(storage_path('app/public/pdf') . '/' . $this->id . '.pdf');
    }

}
