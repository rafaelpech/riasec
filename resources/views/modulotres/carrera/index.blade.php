@extends('home')

@section('title', 'Carreras')

@section('head')
    <link href="https://vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.3.0/video.min.js"></script>
@endsection

@section('menu')
    @include('modulotres.menutres')
@endsection

@section('content')
<section>
    <h5 class="right"> GESTOR DE CARRERAS</h5>
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
    <button type="button" class="waves-effect waves-light btn btn-primary-next right" id="btnVideoHidden"><i class="material-icons">arrow_drop_down</i></button>
    <div class="container p5 animated" id="boxVideo">
        <video id="vd2m2" class="video-js vjs-16-9 vjs-big-play-centered video" data-setup="{}" controls>
            <source src="{{ URL::asset('media/riasec.mp4') }}">
        </video>
    </div>
</section>
<section class="p5">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CARRERA</th>
                <th>NIVEL</th>
                <th class="text-center">
                    <a href="/carreras/create" class="waves-effect waves-light btn btn-primary-next"><i class="material-icons">add</i></a>
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>150</td>
                <td>Tecnología de la información y comunicación</td>
                <td>Técnico superior universitario</td>
                <td class="text-center">
                    <button type="button" class="waves-effect waves-light btn btn-primary-edit"><i class="material-icons">edit</i></button>
                    <button type="button" class="waves-effect waves-light btn btn-primary-delete"><i class="material-icons">delete</i></button>
                </td>
            </tr>
        </tbody>
    </table>
</section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/carreras.js') }}"></script>
@endsection
