@extends('home')

@section('title', 'Crear una carrera')

@section('head')
    
@endsection

@section('menu')
    @include('modulotres.menutres')
@endsection

@section('content')
<section>
    <h5 class="right">Crear carrera</h5>
    <div class="my-3">
        <div class="progress my-3">
            <div class="determinate" style="width: 100%"></div>
        </div>
    </div>
</section>
<section class="p5">
    <p class="text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloremque est vitae labore quas asperiores nostrum officia, quae magni quam eius quidem nobis incidunt vero vel distinctio fugiat sed perferendis!
    </p>
</section>
<section class="p5">
    <form class="px-5" action="#" method="POST">
        @csrf
        <div class="container px-5 py-3">
            <div class="input-field col s12">
                <input placeholder="Placeholder" id="descripcion" name="descripcion" type="text" class="validate">
                <label for="descripcion">Nombre de la carrera</label>
            </div>
            <div class="input-field col s12">
                <select class="browser-default">
                    <option value="" disabled selected>Seleccione un nivel academico</option>
                    <option value="1">Oficio sin capacitación</option>
                    <option value="2">Oficio con capacitación (educación básica)</option>
                    <option value="3">Nivel medio (secundaria concluida)</option>
                </select>
            </div>
        </div>
        <p class="text-center m-3">Agregue solo las ocupaciones, que el aspirante podrá ejercer al terminar esta carrera.</p>
        <div class="input-field">
            <input id="search" name="search" type="search" class="validate">
            <label for="search">Buscar</label>
        </div>
        <div class="row">
            <div class="col s6" style="overflow: scroll; max-height: 450px;">
                <table>
                    <thead>
                        <tr>
                            <th>Ocupación</th>
                            <th>Combinación</th>
                            <th>Agregar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Decorador de aparadores</td>
                            <td>SEA</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Fabricante de moldes (cerámica y porcelana)</td>
                            <td>ACE</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Horticultor</td>
                            <td>SEC</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Técnico de efectos de sonido</td>
                            <td>RIA</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Técnico de piano</td>
                            <td>ERS</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Cocinero, repostería</td>
                            <td>ACR</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Retocador de fotografía</td>
                            <td>ACR</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Decorador de aparadores</td>
                            <td>ACS</td>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s6" style="overflow: scroll;">
                <table>
                    <thead>
                        <tr>
                            <th>Agregar</th>
                            <th>Combinación</th>
                            <th>Ocupación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-delete"><i class="material-icons">keyboard_arrow_left</i></button>
                            </td>
                            <td>Empleado de una oficina postal</td>
                            <td>ECS</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="waves-effect waves-light btn btn-primary-delete"><i class="material-icons">keyboard_arrow_left</i></button>
                            </td>
                            <td>Empleado de laboratorio (clínico)</td>
                            <td>CSA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="m-5 center">
            <button type="button" class="waves-effect waves-light btn btn-primary-next">Agregar carrera</button>
        </div>
    </form>
</section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/carreras.js') }}"></script>
@endsection
