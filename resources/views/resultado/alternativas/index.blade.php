
@extends('home')

@section('title', 'Test RIASEC')
@section('menu')
    @include('modulotres.menudos')
@endsection
@section('content')
<section>
        <input type="hidden" id="user" value="{{ $user }}">
        <input type="hidden" id="alternative" value="{{ $alternative }}">
        <h5>Alternativas</h5>
        <div class="mb-3">
            <p class="mr-5 text-justify">
            A continuación se mostraran las carreras u oficios alternativos ordenados alfabeticamente segun la combinacion seleccionada.
            </p>
        </div>
        <div class="mb-3"   >
        <?php $no =1;?>
        @foreach($alternatives as $key=>$value)
        <?php if($no != 6){?>
        <a id="alternative{{$no++}}" class="btn btn-primary-next text-center" role="button" >
        {{ $value }}                
        </a>
        <?php } ?>    
        @endforeach
        </div>
</section>
<section>
<div id="alternatives">
    <div class="table-responsive">
            <table class="" id="tableResult">
                <thead>
                    <tr>
                        <th>No°</th>
                        <th class="">Ocupación</th>
                        <th class="">Nivel</th>
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody id="tbodyAlternatives">
                </tbody>
            </table>
        </div>
    </div>
</section>
<section>
        <div>
        <button type="button" onClick="history.back()" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0"></i>Volver</button>
        </div>
</section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/result.js') }}"></script>
@endsection
