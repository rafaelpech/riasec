@extends('home')

@section('title', 'Acerca de RIASEC')

@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')

<section>
    <h5 style="text-align: right;">Acerca de</h5>
    <div class="my-3">
        <div class="progress my-3">
            <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col cardContent">
            <h5>Teoría RIASEC</h5>
            <p>Es una metodología desarrollada por el psicólogo John Holland, 
            probada y certificada la cual genera un perfil vocacional. Ayudando 
            de esta forma a los jóvenes de educación media superior a tomar 
            una decisión sobre el futuro de sus estudios.</p>
            <p>Su modelo tipológico está basado en la Teoría de Rasgos y Factores. 
            En él establece que las personas que desempeñan una misma ocupación poseen
            rasgos de personalidad similares. Por lo que, John Holland propuso seis 
            diferentes personalidades que las personas pueden tener, estas personalidades
            son las siglas de R.I.A.S.E.C.</p>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <div class="row">
                <h5>Personalidades</h5>
            </div>
            <div class="row">
                <div class="row">                
                <div class="col">
                    <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Realista.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Individuos que se enfrentan a su ambiente de forma concreta. 
                                        Suelen darle valor al estatus y al poder. Evitan las actividades sociales.</p>
                                </div>
                                <div class="card-action">
                                    <h5>Realista</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Investigador.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Personas con preferencia por trabajar en entornos intelectuales 
                                        en los que maneja ideas abstractas, símbolos y lenguaje. </p>
                                </div>
                                <div class="card-action">
                                    <h5>Investigador</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Artistico.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Personas con preferencia por las actividades poco sistemáticas 
                                        que permitan la expresión creativa, expresan ideas y sentimientos. </p>
                                </div>
                                <div class="card-action">
                                    <h5>Artístico</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Social.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Personas con tendencia a ayudar o enseñar a los demás.
                                        Son cooperativas, amigables y tienen un alto nivel de empatía. </p>
                                </div>
                                <div class="card-action">
                                    <h5>Social</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Emprendedor.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Atraídos por entornos competitivos, evitando los estéticos. 
                                        Manejan bien la persuasión, les gusta supervisar y liderar.</p>
                                </div>
                                <div class="card-action">
                                    <h5>Emprendedor</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/riasec/personalidades/Convencional.jpg">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Prefieren entornos laborales, les gusta tomar actividades ordenadas, 
                                        definidas y reglamentadas en las que puedan desplegar sus habilidades.</p>
                                </div>
                                <div class="card-action">
                                    <h5>Convencional</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <div class="row">
                <h5>Autores</h5>
            </div>
            <div class="row">
                <div class="row">                
                <div class="col">
                    <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image img-author">
                                    <br><img src="img/riasec/autores/JohnHolland.png">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Originario de Omaha, Nebraska. 
                                        Licenciado en Psicología. Desarrolló el modelo vocacional llamado RIASEC
                                        el cual lo divide en seis personalidades.
                                        Su modelo tipológico está basado en la teoría de rasgos y factores.</p>
                                </div>
                                <div class="card-action">
                                    <h5>John L. Holland</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image img-author">
                                    <br><img src="img/riasec/autores/BarbaraFritzsche.png">
                                </div>
                                <div class="card-content cardContent">
                                    <p> La Dra. Fritzsche se unió a la facultad de psicología de UCF en 1996. 
                                        Su experiencia incluye la evaluación, el desarrollo y la validación 
                                        de pruebas psicológicas. Apoyó al desarrollo del examen psicométrico
                                        que utilizó la teoría RIASEC.</p>
                                </div>
                                <div class="card-action">
                                    <h5>Barbara A. Fritzsche</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image img-author">
                                    <br><img src="img/riasec/autores/AmyPowell.png">
                                </div>
                                <div class="card-content cardContent">
                                    <p>Psicóloga que contribuyó con el desarrollo del examen psicométrico que utilizó la teoría RIASEC.</p>
                                </div>
                                <div class="card-action">
                                    <h5>Amy B. Powell</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection