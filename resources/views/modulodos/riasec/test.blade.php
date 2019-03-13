@extends('home')

@section('title', 'Test RIASEC')

@section('head')
    <link href="https://vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.3.0/video.min.js"></script>
@endsection

@section('menu')
    @include('modulotres.menudos')
@endsection

@section('content')
    <section>
        <h5 id="h5Preference">Prueba RIASEC</h5>
        <div class="mb-3">
            <p class="mr-5 text-justify" id="pInstructions">
                En un momento iniciarás con tu prueba RIASEC, es muy importante ver el siguiente vídeo, donde conocerás cómo responder la prueba, guardar tus avances y continuar cuando desees hacerlo.
            </p>
        </div>
    </section>

    <section>
        <div class="col-10 m-auto">
            <table id="tableTest">
                <thead>
                    <tr>
                        <th class="col-9"></th>
                        <th class="col-3">
                            <div class="row text-center p-0 m-0">
                                <p class="col-6 p-0 m-0"><b>SI</b></p>
                                <p class="col-6 p-0 m-0"><b>NO</b></p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody id="tbodyQuestions">
                    <tr>
                        <td class="col-9">
                            <div class="preloader-wrapper small active">
                                <div class="spinner-layer spinner-green-only">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div><div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="col-3">
                            <div class="row text-center p-0 m-0">
                                <p class="col-6 p-0 m-0">
                                    <label>
                                        <input class="with-gap" name="question1" type="radio"/>
                                        <span class="ml-2"></span>
                                    </label>
                                </p>
                                <p class="col-6 p-0 m-0">
                                    <label>
                                        <input class="with-gap" name="question1" type="radio"/>
                                        <span class="ml-2"></span>
                                    </label>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <video id="vd1m2" class="video-js vjs-16-9 vjs-big-play-centered video" data-setup="{}" controls>
                <source src="{{ URL::asset('media/riasec.mp4') }}">
            </video>
            <table id="tableFinishTest">
                <thead>
                    <tr>
                        <th class="col-2 text-center" id="R">Realista</th>
                        <th class="col-2 text-center" id="I">Investigardor</th>
                        <th class="col-2 text-center" id="A">Artistico</th>
                        <th class="col-2 text-center" id="S">Social</th>
                        <th class="col-2 text-center" id="E">Emprendedor</th>
                        <th class="col-2 text-center" id="C">Convencional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="1" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">1</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="2" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">2</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="3" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">3</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="4" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">4</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="5" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">5</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="6" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">6</span>
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="R" name="R" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="I" name="I" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="A" name="A" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="S" name="S" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="E" name="E" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                        <th class="col-2 text-center">
                            <label>
                                <input class="with-gap inputGraph" value="7" data-id="C" name="C" type="radio"/>
                                <span class="ml-2">7</span>
                            </label>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div class="my-4">
            <div class="progress my-3">
                <div class="determinate" id="divProgress" style="width: 0%">
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="waves-effect waves-light btn btn-primary-last left" id="buttonExitRiasec"><i class="material-icons left m-0"></i>Salir</button>
            <button type="button" class="waves-effect waves-light btn btn-primary-next right" id="buttonNextRiasec"><i class="material-icons right m-0"></i>Continuar</button>
        </div>
    </section>

    <div id="divAlert1" class="modal">
        <div class="modal-content">
            <h4>"Advertencia"</h4>
            <p>No has respondido a todas tus <span id="spanPreference">actividades</span> de esta sección</p>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('js/riasec.js') }}"></script>
@endsection