{{--
Cuando el usuario inicia sesión es retornado a esta vista, en ella el menú debe de tener las opciones para 
realizar su examén y administrar su cuenta.
--}}

@extends('home')
@section('title',' Inicio  de Usuario')

@section('menu')
    @include('modulotres.menudos')
@endsection

@section('content')
    <section>
        <h5 style="text-align: right;">PERFIL</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>
	<div class="row">
		<div class="col text-center">
			<h4>¡Hola {{ $session->nombre }}!</h4>
			<p>Nombre: {{ $session->nombre }} {{ $session->apat }} {{ $session->amat }}</p>
			<p>Correo: {{ $session->correo }}</p>
			<p>Ubicación: {{ $municipies->municipio }}, {{ $state->estado }}</p>
			<a href="/usuario/editar"><button type="button" class="waves-effect waves-light btn btn-primary-next">Editar perfil</button></a>
		</div>
	</div>
	<div class="row" style="text-align: justify;">
		<p>Bienvenido a tu perfil, aquí podrás visualizar tu información y editarla en caso necesario. <br> Te recordamos que tu ubicación debe ser correcta, ya que, la detección de instituciones a tu alrededor funciona en base a esto. <br><br> Al finalizar el TEST obtendras una combinación la cual te indicará tus resultados. Si deseas visualizar los resultados en otro momento accede al apartado de Resultados. <br><br>El Test RIASEC te permitirá conocer el perfil vocacional al cual eres más apto de acuerdo a tu personalidad y resultados obtenidos. Recuerda que el TEST clasifica los resultados en las siguientes personalidades:</p>
		<div class="col text-center">
			<p>Realista | Investigador | Artística | Social | Emprendedor | Convencional</p>
		</div>
	</div>

@endsection