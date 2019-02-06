
@extends('home')
@section('title','Registro de Usuario')

@section('content')
<div class=" fixed-form container">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate">
          <label for="name">Nombre(s)</label>
        </div>
        <div class="input-field col s3">
          <input id="apat" type="text" class="validate">
          <label for="apat">Apellido Paterno</label>
        </div>
        <div class="input-field col s3">
            <input id="amat" type="text" class="validate">
            <label for="amat">Apellido Materno</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Correo</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
      </div>

     
     
    </form>
  </div>
</div>
    
@endsection