<li class="@if (Request::path() == 'aspirantes') {{'active'}} @endif">
    <a href="/aspirantes"><i class="material-icons"></i>ASPIRANTES</a>
</li>
<li class="@if (Request::path() == 'carreras') {{'active'}} @endif">
    <a href="/carreras"><i class="material-icons"></i>CARRERAS</a>
</li>
<li class="@if (Request::path() == 'Universidad') {{'active'}} @endif">
    <a href="/Universidad"><i class="material-icons"></i>PERFIL</a>
</li>
<li class="@if (Request::path() == 'close') {{'active'}} @endif">
    <a href="/cerrar"><i class="material-icons"></i>CERRAR SESIÓN</a>
</li>