{{--
    /**
     * Vista de los formularios para el inicio de sesión de los usuarios Aspirantes e Instituciones.
     */ 
--}}

@extends('home')

@section('title', 'Inicio de sesión')

@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')
    <section>
        <h5 style="text-align: right;">INICIO DE SESIÓN</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="row mb-3">
            <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
                <h5>Ingresa como Aspirante</h5>
                <p>Accede a tu cuenta nuevamente para consultar tus resultados obtenidos o continuar respondiento el Test.</p>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
                <h5>Ingresa como Institución</h5>
                <p>Accede para editar tu contacto, gestionar tus carreras y visualizar información adicional.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6 d-inline-block mx-auto mt-5">
                <div class="card">
                <form action="{{ Route('loginUsuario') }}" class="form none" method="POST" id="formLogin">
                    @csrf
                    <div class="container">
                        <div class="col"><br>
                            <div class="row">
                                <label for="correo">Dirección de correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="">
                            </div>
                            <div class="row">
                                <label for="upassword">Contraseña</label>
                                <input type="password" class="form-control" id="upassword" name="upassword" placeholder="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary-next waves-effect waves-light" id="btnLogin">Acceder</button><br><br>   
                        </div>
                    </div>
                    <div class="pink lighten-5 p-2 d-none" id="errorFormLogin">
                        
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/login.js') }}"></script>
@endsection