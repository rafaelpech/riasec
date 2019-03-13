@extends('home')

@section('title', 'Inicio')

@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')
    <section>
        <h5 style="text-align: right;">Inicio</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>    	
	<div class="row">
		<h1>TEST RIASEC</h1>
	</div>
	<div class="row" style="text-align: justify;">
		<p>Actualmente en México, los estudiantes de educación básica y media superior se plantean la pregunta ¿Qué estudiar?, esto genera confusión al momento de elegir una carrera profesional, incluso con los oficios en el área laboral, por lo que esto conlleva a desanimar a los estudiantes egresados opacando su selección vocacional.</p>
		<p>El Test RIASEC te permitirá conocer el perfil vocacional al cual eres más apto de acuerdo a tus personalidades. La teoria RIASEC fue creada por John Holland, su modelo está basado en la premisa de Rasgos y Factores representandolo en seis diferentes personalidades.</p><br><br>
	</div>
	<div class="row" style="text-align: center;">
		<div class="col">
			<a href="login"><button class="btn btn-outline-success" style="background-color: #27AE60;">INICIAR SESIÓN</button></a>
		</div>
		<div class="col">
			<a href="registro"><button class="btn btn-outline-success" style="background-color: #27AE60;">REGISTRARSE</button></a>	
		</div>
	</div>
@endsection