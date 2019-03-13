<li class="@if (Request::path() == 'riasec') {{'active'}} @endif">
    <a href="/riasec"><i class="material-icons"></i>Test RIASEC</a>
</li>
<li class="">
    <a href="#!"><i class="material-icons"></i>RESULTADOS</a>
</li>
<li class="">
    <a href="{{Route('usuarioperfil')}}"><i class="material-icons"></i>PERFIL</a>
</li>
<li class="@if (Request::path() == 'cerrar') {{'active'}} @endif">
    <a href="/cerrar"><i class="material-icons"></i>CERRAR SESIÓN</a>
</li>