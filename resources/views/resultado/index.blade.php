
@extends('home')

@section('title', 'Test RIASEC')
@section('menu')
    @include('modulotres.menudos')
@endsection
@section('content')
<section>
        <h5>Resultados</h5>
        <div>
        <h4 class="mr-5 text-center">
        {{strtoupper($combination)}}
        </h4>
        </div>
        <div class="mb-3">
            <p class="mr-5 text-justify">
                A continuación se mostrara el porcentaje de las personalidades, las carreras u oficios ordenados alfabeticamente obtenidos con los resultados del Test realizado.
            </p>
        </div>
        @foreach($progress as $progreso)
        <div class="row">
            <div class="col-sm-1" >
                <p class="mr-5 text-justify ">
                    Realista
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4 ">
                    <div class="determinate" style="width: {{ ($progreso->R)*2.7}}%"></div>
                </div>            
            </div><div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->R)*2.7) ?>%
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-1">
                <p class="mr-5 text-justify">
                    Investigador
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4">
                    <div class="determinate" style="width: {{ ($progreso->I)*2.7}}%"></div>
                </div>            
            </div>
            <div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->I)*2.7) ?>%
                </p>
            </div>
            <div class="col-sm-1" ></div>
        </div>
        <div class="row">
            <div class="col-sm-1" >
                <p class="mr-5 text-justify ">
                    Artístico
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4 ">
                    <div class="determinate" style="width: {{ ($progreso->A)*2.7}}%" ></div>
                </div>            
            </div><div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->A)*2.7) ?>%
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-1">
                <p class="mr-5 text-justify">
                    Social
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4">
                    <div class="determinate" style="width:{{ ($progreso->S)*2.7}}%"></div>
                </div>            
            </div>
            <div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->S)*2.7) ?>%
                </p>
            </div>
            <div class="col-sm-1" ></div>
        </div>
        <div class="row">
            <div class="col-sm-1" >
                <p class="mr-5 text-justify ">
                    Emprendedor
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4 ">
                    <div class="determinate" style="width: {{ ($progreso->E)*2.7}}%" ></div>
                </div>            
            </div><div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->E)*2.7) ?>%
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-1">
                <p class="mr-5 text-justify">
                    Convencional
                </p>
            </div><div class="col-sm-1" ></div>
            <div class="col-sm-2" >
                <div class="progress my-4">
                    <div class="determinate" style="width: {{ ($progreso->C)*2.7}}%"></div>
                </div>            
            </div>
            <div class="col-sm-1" >
                <p class="mr-5 text-justify">
                <?php echo round(($progreso->C)*2.7) ?>%
                </p>
            </div>
            <div class="col-sm-1" ></div>
        </div>  
        @endforeach
        <div class="table-responsive">
            <table class="">
                <thead>
                    <tr>
                        <th>No°</th>
                        <th class="">Ocupación</th>
                        <th class="">Nivel</th>
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1;?>
                @foreach($careers as $career)
                    <tr>
                        <th>{{$no++}}</th>
                        <th class="">
                            <p>{{ $career->Ocupacion}} </p>
                        </th>
                        <th>
                        <p>{{ $career->descripcion}} </p>
                        </th>
                        <th>
                        <a class="btn btn-primary-next" href="<?php echo route('details', ['user' => $user, 'combination' => $combination,'occupation' => $career->Ocupacion]);?>" role="button">Detalles</a>
                        </th>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <button type="button" id="btnAlternatives" class="waves-effect waves-light btn btn-primary-next right "><i class="material-icons right m-0"></i>Alternativas</button>
        </div>

        
</section>

@endsection

@section('script')
<script>
    document.getElementById("btnAlternatives").onclick = function () {
        location.href = "<?php echo route('alternatives', ['user' => $user, 'combination' => $combination]);?>";
    };
</script>
@endsection
