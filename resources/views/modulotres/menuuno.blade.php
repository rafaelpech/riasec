<li class="@if (Request::path() == '/' || Request::path() == 'login' || Request::path() == 'registro') {{'active'}} @endif">
    <a href="/"><i class="material-icons"></i>INICIO</a>
</li>
<li class="@if (Request::path() == 'aboutriasec') {{'active'}} @endif">
    <a href="/aboutriasec"><i class="material-icons"></i>ACERCA DE</a>
</li>
<li class="@if (Request::path() == 'contact') {{'active'}} @endif">
    <a href="/contact"><i class="material-icons"></i>CONTACTO</a>
</li>
<li class="@if (Request::path() == 'about') {{'active'}} @endif">
    <a href="/about"><i class="material-icons"></i>¿QUIÉNES SOMOS?</a>
</li>