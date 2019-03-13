@extends('home')

@section('title', '¿Quiénes Somos?')


@section('menu')
    @include('modulotres.menuuno')
@endsection

@section('content')
<section>
        <h5 style="text-align: right;">¿Quiénes somos?</h5>
        <div class="my-3">
            <div class="progress my-3">
                <div class="determinate" style="width: 100%, background-color: #8F8E8E;"></div>
            </div>
        </div>
    </section>
<h2 align="center" class="aboutus-title">The Amazing Team</h2>
    <div class="row">
        <div class="format-card col-xs-12 col-sm-3 col-md-4" align="center">
            <h3>Caleb Mora</h3>
            <img src="img/Developers/CIMD.jpg" alt="CIMD">
        </div>
        <div class=" format-card col-xs-12 col-sm-3 col-md-4" align="center">
                <h3>Alex Pech</h3>
                <img src="img/Developers/ARPS.jpg" alt="ARPS">
        </div>
        <div class="format-card col-xs-12 col-sm-3 col-md-4" align="center">
                <h3 >Jafet Vela</h3>
                <img src="img/Developers/NJVP.jpg" alt="NJVP">
        </div>
    </div>
    <div class="row">
            <div class="fixed-down-aboutus format-card col-xs-12 col-sm-3 col-md-6" align="center">
                <h3>Leonardo Balderas</h3>
                <img src="img/Developers/LBM.jpg" alt="LBM">
            </div>
            
            <div class=" fixed-down-aboutus format-card col-xs-12 col-sm-3 col-md-6" align="center">
                    <h3>Guillermo Cime</h3>
                    <img src="img/Developers/GECC.png" alt="GECC" >
            </div>
            
        </div>

@endsection
