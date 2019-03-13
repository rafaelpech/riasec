<?php

namespace RIASEC;

use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    protected $fillable=['photo', 'nogeneral', 'nombreuniversidad', 'contacto', 'ubicacion', 'correo','upassword'];
    public $timestamps = false;
}
