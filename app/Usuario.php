<?php

namespace RIASEC;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=['nombre', 'apat', 'amat', 'correo', 'upassword', 'ubicacion'];
    public $timestamps = false;

}
