<?php

namespace RIASEC;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable=['telefono','correo', 'web'];
    public $timestamps = false;
}
