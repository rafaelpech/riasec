@extends('home')

@section('title', 'Test RIASEC')

@section('content')
    <section>
        <h5>Preferencia</h5>
        <div class="mb-3">
            <p class="mr-5 text-justify">
                Intrucciones de la prefernacia: Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusamus rerum repellendus officiis provident magnam quisquam, dolor nisi sed velit error cupiditate asperiores culpa voluptatum perspiciatis ea eos nesciunt dolorem.
            </p>
        </div>
    </section>
    <section>
        <div class="col-10 m-auto">
            <table>
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
                <tbody>
                    <tr>
                        <td class="col-9">
                            Lorem ipsum questions for test riasec.
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
        </div>
    </section>
    <section>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 70%"></div>
            </div>
        </div>
        <div>
            <button type="button" class="waves-effect waves-light btn btn-primary-last left"><i class="material-icons left m-0">chevron_left</i>Salir</button>
            <button type="button" class="waves-effect waves-light btn btn-primary-next right" id="btnNextRiasec"><i class="material-icons right m-0">chevron_right</i>Continuar</button>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ URL::asset('js/riasec.js') }}"></script>
@endsection