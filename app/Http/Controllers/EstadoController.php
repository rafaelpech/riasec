<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Estado;
use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;

class EstadoController extends Controller
{
    /**
     * Se cre un listado de los estados de la republica mexicana
     * @var states $states
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Content-Type: application/json');
        $states = Estado::all();
        echo json_encode($states);
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
     * @param  \RIASEC\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RIASEC\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RIASEC\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RIASEC\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
