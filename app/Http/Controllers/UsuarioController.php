<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Usuario;
use RIASEC\Ubicacion;
use RIASEC\Estado;
use RIASEC\Municipio;
use Illuminate\Http\Request;
use DB;
use function GuzzleHttp\json_encode;

class UsuarioController extends Controller
{
    /**
     * Despliega el perfil del usuario y su menú personalizado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = \Session::get('candidate')[0];
        if (empty($session)) {
            return "Debes iniciar sesión";
        } else {
            $location = DB::table('ubicaciones')->where(['Cv_Ubicacion' => $session->ubicacion])->first();
            $state = DB::table('estados')->where(['Cv_Estado' => $location->estado])->first();
            $municipies = DB::table('municipios')->where(['Cv_Municipio' => $location->municipio])->first();
            //return $location->estado;
            return view('modulouno.Usuario.index', compact('session', 'state', 'municipies'));
        }
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Almacena un nuevo usuario de tipo Aspirante en la Base de datos mediante el formulario de registro.
     *
     * @param  Usuario $usuario.
     * @param  Array $result.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $_POST['name'];
        $usuario->apat = $_POST['apat'];
        $usuario->amat = $_POST['amat'];
        $usuario->correo = $_POST['email'];
        $usuario->upassword = hash('sha256', $_POST['password']);
        $usuario->ubicacion = $_POST['aspiranteMunicipalities'];
        try {
            $usuario->save();
            $sql = "SELECT usuarios.Cv_Usuario as id, usuarios.nombre, usuarios.apat, usuarios.amat, usuarios.correo, usuarios.resultado FROM usuarios WHERE correo ='{$usuario->correo}' AND upassword = '{$usuario->upassword}';";
            $result = DB::select($sql);
            \Session::push('candidate', $result[0]);
            return redirect('riasec');
        } catch (\Throwable $th) {
            return 'El correo que estas usando ya esta registrado <br>' . $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \RIASEC\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RIASEC\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $session = \Session::get('candidate')[0];
        return view('modulouno.Usuario.edit', compact('session'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RIASEC\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Usuario::where('Cv_Usuario', '=', $id)->update([
            'nombre' => $request->nombre, 'apat' => $request->apat,
            'amat' => $request->amat, 'ubicacion' => $request->aspiranteMunicipalities
        ]);

        \Session::flush();
        $userObject = DB::select("SELECT usuarios.Cv_Usuario as id, usuarios.nombre, usuarios.apat, usuarios.amat, usuarios.correo, usuarios.resultado, usuarios.ubicacion FROM usuarios WHERE Cv_Usuario ='$id'; ");
        \Session::push('candidate', $userObject[0]);

        return redirect('/Usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RIASEC\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    /**
     * Genera el acceso a la cuenta del usuario Aspirante o Institución.
     * 
     * Crea las sesiones correspondientes dependiendo de las credenciales ingresadas.
     * 
     * @param  String $email. 
     * @param  String $password.
     * @param  String $passwordHasheado.
     * @param  Array $userQuery. 
     * @param  Array $institutionQuery.
     * @param  Usuario $userObject.
     * @param  Universidad $institutionObject.
     * @param  Array $userArray.
     * @param  Array $institutionArray.
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $email = $_POST['correo'];
        $password = $_POST['upassword'];
        $passwordHasheado = hash('sha256', $password);

        $userQuery = DB::table('usuarios')->where(['correo' => $email, 'upassword' => $passwordHasheado])->get();
        $institutionQuery = DB::table('universidades')->where(['correo' => $email, 'upassword' => $passwordHasheado])->get();

        if (count($userQuery) > 0) {
            $userObject = DB::select("SELECT usuarios.Cv_Usuario as id, usuarios.nombre, usuarios.apat, usuarios.amat, usuarios.correo, usuarios.resultado, usuarios.ubicacion FROM usuarios WHERE correo ='$email' AND upassword = '$passwordHasheado';");
            \Session::push('candidate', $userObject[0]);
            $error = [
                'error' => '',
                'tipoAcceso' => 'C'
            ];
            echo json_encode($error);
        } elseif (count($institutionQuery) > 0) {
            $institutionObject = DB::select("SELECT universidades.Cv_Universidad as id,universidades.nogeneral as nogeneral, universidades.nombreuniversidad as nombre,
            universidades.ubicacion as ubicacion, universidades.contacto as contacto, universidades.correo FROM universidades WHERE correo ='$email' AND upassword = '$passwordHasheado';");
            \Session::push('institute', $institutionObject[0]);
            $error = [
                'error' => '',
                'tipoAcceso' => 'I'
            ];
            echo json_encode($error);
        } else {
            $error = [
                'error' => 'Acceso denegado'
            ];
            echo json_encode($error);
        }
    }
}
