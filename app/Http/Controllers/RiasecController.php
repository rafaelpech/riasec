<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Pregunta;
use RIASEC\Preferencia;
use RIASEC\Personalidade;
use RIASEC\Riasec;
use DB;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class RiasecController extends Controller
{
    /**
     * Permite habilitar o no la opción de continuar examen.
     *
     * Se hace una consulta en la tabla Riasec para verificar si hay datos del avance del usuario, se pasan los datos a
     * la vista, si hay datos se debe activar la opción de continuar con el examen.
     * 
     * @var Riasec $AdvanceUser. Crea consulta en tabla Riasec y guarda los datos de la consulta.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AdvanceUser = Riasec::where('Cv_Usuario', '=', $_SESSION['Cv_Usuario']);

        return view('modulodos.riasec.index', compact('AdvanceUser'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Guarda en la bd un nuevo recurso creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Crea un nuevo registro en la tabla Riasec.
     * 
     * Se crea una variable $advanceUser que guardará datos por default en la tabla Riasec y que posteriormente se
     * dará de alta en la misma.
     * 
     * @var Riasec $advanceUser. Variable que se iguala de acuerdo a los datos que el modelo reclama.
     * @return \Illuminate\Http\Response
     */
    public function registerInTable(Request $request)
    {
        $session = \Session::get('candidate')[0];
        $sql = "SELECT * FROM riasec WHERE Usuario = {$session->id};";
        $result = DB::select($sql);
        if (!isset($result[0])) {
            $sql = "INSERT INTO riasec VALUES (NULL,{$session->id},0,0,0,0,0,0,0);";
            DB::select($sql);
            $riasecJson = [
                'Usuario' => ($session->id),
                'Avance' => 0,
                'R' => 0,
                'I' => 0,
                'A' => 0,
                'S' => 0,
                'E' => 0,
                'C' => 0,
            ];
            echo json_encode($riasecJson);
        } else {
            $riasecJson = [
                'Usuario' => ($session->id),
                'Avance' => ($result[0]->Avance),
                'R' => ($result[0]->R),
                'I' => ($result[0]->I),
                'A' => ($result[0]->A),
                'S' => ($result[0]->S),
                'E' => ($result[0]->E),
                'C' => ($result[0]->C),
            ];
            echo json_encode($riasecJson);
        }
        die();
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra el formulario para editar los datos del recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Modifica el recurso especificado en la tabla Riasec usando el $_SESSION['User']['Id']. 
     *
     * Modificación de los datos del recurso especificado en la tabla Riasec conforme el usuario vaya avanzando el examen.
     * 
     * @param array $request. Se envían los datos del avance en forma de arreglo.
     * @var Riasec $AdvanceUser. Variable que permite sumar los datos del recurso para modificarlo en la tabla Riasec.
     * @return \Illuminate\Http\Response
     */
    public function update($riasec = array(), $position)
    {
        // Creamos var usuario, seguido hacemos una búsqueda en la tabla riasec haciendo comparación entre id's de parámetro y de la tabla.
        $session = \Session::get('candidate')[0];
        $riasec = json_decode($riasec);
        try {
            $sql = "UPDATE riasec SET Avance = {$position}, R = {$riasec->R}, I = {$riasec->I}, A = {$riasec->A}, S = {$riasec->S}, E = {$riasec->E}, S = {$riasec->C} WHERE Usuario = {$session->id};";
            DB::update($sql);
            $return = [
                'Error' => ''
            ];
            echo json_encode($return);
        } catch (\Throwable $th) {
            return $th;
        }
        die();


        // //El avance del usuario se suma +1.

        // //La cantidad de Sí van sumándose entre la misma cantidad y lo recibido en el request
        // return 'Avance actualizado';
    }

    /**
     * Remueve el recurso especificado de la tabla Riasec.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Pone todas las preguntas dentro de un array convertido en Json.
     *
     * Se crea un arreglo enlistando cada uno de los componentes para mostrar cada sección.
     * @var Pregunta $questions.
     * @var Preferencia $preferences.
     * @var Personalidade $personalities.
     * @var array $result_json.
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        // Get all questions
        header('Content-Type: application/json');
        $questions              = Pregunta::all();
        $preferences            = Preferencia::all();
        $personalities          = Personalidade::all();
        $result_json            = [
            0 => $questions,
            1 => $preferences,
            2 => $personalities
        ];
        echo json_encode($result_json);
        die();
    }
}
