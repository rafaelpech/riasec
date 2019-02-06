@extends('home')

@section('title', 'Usuario - Editar perfil')

@section('content')
    <section>
        <h5>Editar perfil.</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%"></div>
            </div>
        </div>
    </section>
    <section>
    	<div class=" fixed-form container">
			<form class="col s12">
				<div class="row">
		    		<div class="file-field input-field">
		    			<div class="btn">
		    				<span>Foto</span>
    						<input type="file" name="foto" id="foto">
		    			</div>
      					<div class="file-path-wrapper">
        					<input class="file-path validate" type="text">
      					</div>
					</div>
				</div>
		 		<div class="row">
		        	<div class="input-field col s6">
		          		<input name="nombre" id="nombre" type="text" class="validate">
		          		<label for="nombre">Nombre</label>
		        	</div>
		        	<div class="input-field col s6">
					  <select name="estado">
					    <option value="1">Quinatana Roo</option>
					    <option value="2">Ciudad de México</option>
					  </select>
		        	</div>
		  		</div>
			    <div class="row">
			        <div class="input-field col s3">
		          		<input name="apat" id="apat" type="text" class="validate">
			          	<label for="apat">Apellido Paterno</label>
			        </div>      	
		        	<div class="input-field col s6">
					  	<select name="municipio">
					    	<option value="1">Solidaridad</option>
					    	<option value="2">Chetumal</option>
					  	</select>
		        	</div>
			    </div>
		  		<div class="row">
		      	    <div class="input-field col s3">
		            	<input name="amat" id="amat" type="text" class="validate">
		            	<label for="amat">Apellido Materno</label>
		          	</div>
			        <div class="input-field col s12">
			          	<input name="correo" id="correo" type="email" class="validate">
			          	<label for="correo">Correo</label>
			        </div>
		  		</div>
			</form>
		</div>
    </section>
    <section>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 50%"></div>
            </div>
        </div>
        <div>
            <button type="button" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0">chevron_left</i>Salir</button>
            <button type="button" class="waves-effect waves-light btn btn-primary-next right" id="btnNextRiasec"><i class="material-icons right m-0">chevron_right</i>Guardar cambios</button>
        </div>
    </section>
@endsection