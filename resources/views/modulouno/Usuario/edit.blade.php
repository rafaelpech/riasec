{{-- 
  Formulario de un usuario de tipo Aspirante para editar su perfil.
--}}


@extends('home')

@section('title', 'Usuario - Editar perfil')

@section('menu')
    @include('modulotres.menudos')
@endsection

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
		<div class="row">
			<div class="col text-center">
				<h5>Actualiza tu información</h5>
			</div>
		</div>
    	<div class="container">
			<div class="card small">
				<form class="form-group" method="POST" action="/Usuario/{{$session->id}}" id="formEditCandidate" enctype="multipart/form-data">
				@method('PUT')
				@csrf
					<div class="container">
						<div class="col">
							<br><label for="nombre">Nombre</label>
							<input name="nombre" id="nombre" type="text" class="form-control validate" value="{{ $session->nombre }}">
						<div class="row">
						<div class="col">
							<label for="apat">Apellido Paterno</label>
							<input name="apat" id="apat" type="text" class="form-control validate" value="{{ $session->apat }}">
							</div>
							<div class="col">
							<label for="amat">Apellido Materno</label>
							<input name="amat" id="amat" type="text" class="form-control validate" value="{{ $session->amat }}">
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="aspiranteState">Estado</label>
								<select class="browser-default selectStates" id="aspiranteState" name="aspiranteState">
									<option value="" disabled selected>Selecciona un estado</option>	
								</select>
							</div>
							<div class="col">
								<label for="aspiranteMunicipalities">Municipio</label>
								<select class="browser-default selectMunicipalities" id="aspiranteMunicipalities" name="aspiranteMunicipalities">
									<option value="" disabled selected>Selecciona un municipio</option>	
								</select>
							</div>
		  				</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<a href="{{Route('usuarioperfil')}}"><button type="button" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0"></i>Regresar</button></a>
            <button type="button" id="btnEditCandidate" class="waves-effect waves-light btn btn-primary-next right">Guardar cambios</button>
		</div>
		<div class="pink lighten-5 p-2 d-none" id="errorEditCandidate">
                    
            </div>		
		</form>
	</section>
    <section>

    </section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/editarusuario.js') }}"></script>
@endsection