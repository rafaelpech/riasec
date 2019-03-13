@extends('home')

@section('title', 'Registro')

@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')
    <section>
        <h5 style="text-align: right;">REGISTRO</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
            <h5>Únete como Aspirante</h5>
            <p>Para comenzar con el examen y buscar instituciones que más se adecuen a tu perfil, regístrate.</p>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
            <h5>Únete como Institución</h5>
            <p>Para promocionarte como Institución ante los posibles aspirantes, regístrate</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
            <div class="card">
            <form action="/Usuario" class="form none" method="POST" id="formRegisterCandidate">
                @csrf
                <div class="container">
                    <br><label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" name="name" placeholder="">
                    <div class="row">
                        <div class="col">
                            <label for="apat">Apellido paterno</label>
                            <input type="text" class="form-control" id="apat" name="apat" placeholder="">
                        </div>
                        <div class="col">
                            <label for="amat">Apellido materno</label>
                            <input type="text" class="form-control" id="amat" name="amat" placeholder="">
                        </div>
                    </div>
                    
                    <label for="email">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                    <br>
                    <label for="upassword">Contraseña</label>
                    <input type="password" class="form-control" id="upassword" name="upassword" placeholder="">
                    <br>
                    <label for="password">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
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
                    <button type="button" class="btn btn-primary-next waves-effect waves-light mt-2 mb-4" id="btnRegisterCandidate">Enviar</button>
                </div>
                <div class="pink lighten-5 p-2 d-none" id="errorFormCandidate">
                    
                </div>
            </form>
        </div>
    </div>
    <div class="col col-12 col-sm-12 col-md-6 col-lg 6 col-xl-6">
        <div class="card">
        <form action="/Universidad" class="form none" method="POST" id="formRegisterInstitute" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <br><label for="ngeneral">No. General</label>
                <input type="text" class="form-control" id="ngeneral" name="ngeneral" placeholder="">
                <br>
                <label for="ninstitucion">Nombre de la institución</label>
                <input type="text" class="form-control" id="ninstitucion" name="ninstitucion" placeholder="">
                <br>
                <label for="email">Dirección de correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="">
                <br>
                <label for="upassword">Contraseña</label>
                <input type="password" class="form-control" id="upassword" name="upassword" placeholder="">
                <br>
                <label for="password">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="">
                <div class="row">
                        <div class="col">
                            <label for="instituteState">Estado</label>
                            <select class="browser-default selectStates" id="instituteState" name="instituteState">
                              <option value="" disabled selected>Selecciona un estado</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="instituteMunicipalities">Municipio</label>
                            <select class="browser-default selectMunicipalities" id="instituteMunicipalities" name="instituteMunicipalities">
                              <option value="" disabled selected>Selecciona un municipio</option>
                            </select>
                        </div>
                    </div>
                <label for="telefono">Teléfono de contacto</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
                <label for="correo">Correo de contacto</label>
                <input type="email" class="form-control" id="correo" name="correo">
                <label for="web">Página Web</label>
                <input type="text" class="form-control" id="web" name="web">
                <Label for="photo" class="photo"> Foto
                <input type="file" name="photo" id="photo">
                </Label><br><br>
                <input type="checkbox" name="terconuni" id="terconuni">
                <a href="#">Términos y condiciones</a><br><br>
                <button type="button" class="btn btn-primary-next waves-effect waves-light mt-2 mb-4" id="btnRegisterInstitute">Enviar</button>
            </div>
            <div class="pink lighten-5 p-2 d-none" id="errorFormInstitute">
                    
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ URL::asset('js/registro.js') }}"></script>
@endsection