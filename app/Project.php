<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // definir tabla
    // protected $table = 'users';

    public function getRouteKeyName()
    {
        return 'url';
    }
}