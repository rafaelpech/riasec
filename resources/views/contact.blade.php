@extends('home')

@section('title', 'Contacto')


@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')
<section>
        <h5 style="text-align: right;"> Contacto</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <h3 class="contact-title">Contáctanos</h3>
        </div>
        <h6 class="subtitle-contact">Tienes alguna duda o sugerencia no dudes en contactarnos.</h6>
    </div>
    
    <div class="container">
        <form action="">

        
        <div class="row">
                <div class="contact-fix">
                    <div class="row">
                            <div class="input-field col s6">
                                    <input placeholder="Asunto" id="Asunto" type="text" class="validate">
                                    <label for="Asunto">Asunto: </label>
                                </div>
                                <div class="col s6"></div>
                    </div>
                    
                    <div class="input-field col s6">
                            <input placeholder="Nombre" id="nombre" type="text" class="validate">
                            <label for="nombre">Nombre: </label>
                    </div>
                    <div class="input-field col s6">
                            <input placeholder="Correo electrónico" id="email" type="email" class="validate">
                            <label for="email">Correo electrónico: </label>
                    </div>

                    <div class="testfield input-field col s12">
                        <textarea name="mensaje" id="mensaje" class="materialize-textarea"></textarea>
                        <label for="mensaje">Mensaje: </label>
                    </div>
                    <button type="submit" class="position-btn btn btn-outline-success" id="send-form-2" style="background-color: #27AE60;">Enviar</button>
                </div>    
                
            </form>      
        </div>
      

@endsection