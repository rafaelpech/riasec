{{-- 
  Después de que el usuario inicia sesión, entra a esta vista en la zona izquierda 
  en donde está el menú debe encontrar el gestor de carreras así como opciones para administrar su cuenta.

--}}



@extends('home')
@section('title',' Inicio  Universidad')

@section('menu')
    @include('modulotres.menutres')
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
		<div class="text-center m-auto">
			<h3>Bienvenido!</h3>
			<h5 class="card-title">Número General: {{ ($session->nogeneral) }}</h5>
			<p>Nombre Institución: {{ ($session->nombre) }}</p>
			<p>Correo: {{ ($session->correo) }}</p>
			<a href="/usuario/editar"><button type="button" class="waves-effect waves-light btn btn-primary-next">Editar perfil</button></a>
		</div>
	</div>
	<div class="row" style="text-align: justify;">
		<p>¡Hola! Bienvenido a tu perfil, aquí podrás visualizar tu información.
		<br>Para comenzar a gestionar las carreras que impartes debes visitar la sección de Carreras. <br><br>	</div>

@endsection