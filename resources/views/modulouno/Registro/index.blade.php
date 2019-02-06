
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

      <div class="input-field col s6">
          <select>
            <option value="" disabled selected>Estado</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Selecciona tu Estado</label>
        </div>
        
      <div class="input-field col s6">
          <select>
            <option value="" disabled selected>Municipio</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Selecciona tu Municipio</label>
        </div>

        <div class="input-field col s12">
            
                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box">Aviso de Privacidad</label>
            
         

        </div>

        <div class="input-field col s12">
            <p>
                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box">Aceptar Políticas de Uso</label>
            </p>
         

        </div>

        <div class="input field col s6">
            <button class="btn waves-effect waves-light" type="submit" name="action">Cancelar</button>
        
           
        </div>
        
        <div class="fix-button input field col s6">
            
            <button class="save-button btn waves-effect waves-light" type="submit" name="action">Guardar</button>
    
        </div>
        
     
    </form>
  </div>
</div>

   
@endsection