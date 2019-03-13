{{-- 
  Vista para la creacón de un usuario de tipo aspirante
  --}}


@extends('home')
@section('title','Registro de Usuario')

@section('content')



<div class=" fixed-form container">

  <div class="row">

      <form class="col s12" name="userRegister" method="POST" action="/Usuario" enctype="multipart/form-data">
        @csrf

        <div class="row">
          
          <div class="input-field col s6">
            <input id="nombre" type="text" name="name" class="validate">
            <label for="name">Nombre(s)</label>
          </div>

          <div class="input-field col s3">
            <input id="apat" name="apat" type="text" class="validate">
            <label for="apat">Apellido Paterno</label>
          </div>

          <div class="input-field col s3">
              <input id="amat" name="amat" type="text" class="validate">
              <label for="amat">Apellido Materno</label>
            </div>

        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Correo</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate">
            <label for="contraseña">Contraseña</label>
          </div>
        </div>

      

      
        <div class="input-field col s9">
             <label>Selecciona tu Estado</label> 
            <input id="state" name="ubication" type="text" class="validate"> 
            {{-- <select name="state " >
              <option value="">Selecciona tu estado</option>
              @foreach($state_list as $state)
                <option value="{{$state->estado}}">
                  {{$state->estado}}
                </option>
            </select>
              @endforeach
              
            </select>
           --}}
          </div>
          
        <div class="input-field col s3">
            <label>Selecciona tu Municipio</label>
            <input id="city" name="city" type="text" class="validate">
            {{-- <select>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select> --}}
        </div>

        <br>

   

          <div class="input-field col s12">
              <p>
                  <a href="#">Leer Política Privacidad</a>
                </p>
          

          </div>

          <div class="input field col s10">
              <button class="btn waves-effect waves-light" type="submit" name="cancel">Cancelar</button>
          
            
          </div>
          
          <div class="fix-button input field col s2">
              
              <button class="save-button btn waves-effect waves-light" type="submit" name="save" onclick="comprobarClave()">Guardar</button>
      
          </div>
          
      
      </form>
    </div>
</div>
    


   
@endsection