@extends('home')

@section('title', 'Inicio de sesión')

@section('content')
    <section>
        <h5>Inicio de sesión.</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%"></div>
            </div>
        </div>
        <div class="mb-3">
            <p class="mr-5 text-justify">
                Por favor ingresa tu correo y contraseña para acceder. 
            </p><br>
        </div>
    </section>
    <section>
        <div class="col-10 m-auto">
            <div class="card">
                <div class="card-block">
                    <div class="form-header">
                        <br><h5 style=" text-align: center;"><i class="fa fa-lock"></i>Inicio de sesión</h5>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="email">Ingresa tu correo</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" name="pwd" id="pwd" class="form-control">
                        <label for="pwd">Ingresa tu contraseña</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success">Acceder</button>
                    </div><br>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-log">
        <div class="my-3"> <br>
            <div class="progress my-3">
                <div class="determinate" style="width: 50%"></div>
            </div>
        </div>
        <div>
            <button type="button" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0">chevron_left</i>Regresar</button>
        </div>
    </section>    
@endsection