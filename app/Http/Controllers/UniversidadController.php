<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Universidade;
use RIASEC\Contacto;
use Illuminate\Http\Request;
use DB;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = \Session::get('institute')[0];
        if (empty($session)) {
            return "debes iniciar sesión";
        } else {
            //print_r($session);
            return view('modulouno.Universidad.index', compact('session'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Almacena un nuevo usuario de tipo Institución en la Base de datos mediante el formulario de registro.
     *
     * @param  Universidad $universidad. 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->telefono = $_POST['telefono'];
        $contacto->correo = $_POST['correo'];
        $contacto->web = $_POST['web'];
        try {

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path() . '/img/imgprofilers/institution/', $name);
            }
            $universidad = new Universidade();
            $universidad->photo = $name;
            $universidad->nogeneral = $_POST['ngeneral'];
            $universidad->nombreuniversidad = $_POST['ninstitucion'];
            $contacto->save();
            $sql = "SELECT contactos.Cv_Contacto as id FROM contactos WHERE  telefono='{$contacto->telefono}' AND correo = '{$contacto->correo}' AND web = '{$contacto->web}';";
            $result = DB::select($sql);
            $universidad->contacto = $result[0]->id;
            $universidad->ubicacion = $_POST['instituteMunicipalities'];
            $universidad->correo = $_POST['correo'];
            $universidad->upassword = hash('sha256', $_POST['password']);

            try {
                $universidad->save();
                $sql2 = "SELECT universidades.Cv_Universidad as id,universidades.nogeneral as nogeneral, universidades.nombreuniversidad as nombre,
                            universidades.ubicacion as ubicacion, universidades.contacto as contacto FROM universidades
                            WHERE universidades.contacto ='{$universidad->contacto}';";
                $user = DB::select($sql2);

                \Session::push('institute', $user[0]);
                return redirect('Universidad');
            } catch (\Throwable $th) {
                //$sql2 = "DELETE FROM contactos WHERE Cv_Contacto = '{$universidad->contacto}'; ";
                return 'Datos no guardados universidad<br>' . $th;
            }
        } catch (\Throwable $th) {
            return 'Datos no guardados contacto<br>' . $th;
        }

        //return view('modulouno.Universidad.index', compact('universidad'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \RIASEC\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function show(Universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RIASEC\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Universidad $universidad)
    {
        return view('modulouno.Universidad.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RIASEC\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universidad $universidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RIASEC\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidad $universidad)
    {
        //
    }
}
