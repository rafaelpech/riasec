
@extends('home')

@section('title', 'Test RIASEC')
@section('menu')
    @include('modulotres.menudos')
@endsection
@section('content')
<section>
        <h5>Detalles de la Carrera</h5>
        <div>
        <h4 class="mr-5 text-center">
        {{strtoupper($combination)}}
        </h4>
        </div>
        <div>
        <h4 class="mr-5 text-center">
        {{$occupation}}
        </h4>
        </div>
        <div class="mb-3">
            <p class="mr-5 text-justify glyphicon glyphicon-info-sign">
                A continuación se mostraran las Instituciones que imparten la carrera seleccionada con anterioridad.
            </p>
        </div>
        <div class="table-responsive">
            <table class="">
                <thead>
                    <tr>
                        <th>No°</th>
                        <th class="">Intitución</th>
                        <th class="">Municipio</th>
                        <th class="">Estado</th>
                        <th class="">Página Web</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1;?>
                @foreach($institutions as $institution)
                    <tr>
                        <th>{{$no++}}</th>
                        <th class="">
                            <p>{{ $institution->Institucion}} </p>
                        </th>
                        <th>
                        <p>{{ $institution->Municipio}} </p>
                        </th>
                        <th>
                        <p>{{ $institution->Estado}} </p>
                        </th>
                        <th>
                        <a class="btn btn-primary-next" role="button"  href="<?php echo route('website', ['website' => $institution->WEB]);?>">IR</a>
                        </th>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
        <button type="button" onClick="history.back()" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0"></i>Volver</button>
        </div>

        
</section>

@endsection
