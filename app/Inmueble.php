<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model{

    protected $table = 'inmuebles';
    protected $primaryKey = 'id';
    protected  $fillable = ['portada','descripcion','titulo'];

    public function agregar($request){
        return Inmueble::create($request);
    }
}
