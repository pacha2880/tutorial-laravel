<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // definir tabla
    // protected $table = 'users';

    //para poder insertar
    //protected $fillable = ['title', 'url', 'description'];

    //cuales no quiero que se puedan
    // desactivar solo si no usamos request()->all()
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
}