<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Ubicacion;
use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;
use DB;

class UbicacionController extends Controller
{
    /**
     * Se crea un listado de las ubicaciones de la republica mexicana
     * @var locations $locations
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Content-Type: application/json');
        $locations = DB::select('SELECT * FROM vw_ubicaciones;');
        echo json_encode($locations);
        die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \RIASEC\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RIASEC\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RIASEC\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RIASEC\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubicacion $ubicacion)
    {
        //
    }
}
