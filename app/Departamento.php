<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $table = 'departamentos';

  public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
}
