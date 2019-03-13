<?php

namespace RIASEC\Http\Controllers;

use RIASEC\Resultado;
use Illuminate\Http\Request;
use DB;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \RIASEC\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show(Resultado $resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RIASEC\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultado $resultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RIASEC\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RIASEC\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultado $resultado)
    {
        //
    }
    
    /**
     * Genera las combinaciones alternativas.
     * 
     * Crea un array con las combinaciones posible derivado de la combinación principal.
     * 
     * @param  String $str.
     * @param  String $input.
     * @param  Array $permutaciones. 
     * @param  Array $institutionQuery.
     * @param  Usuario $userObject.
     * @param  Universidad $institutionObject.
     * @param  int $longitud.
     * @return \Illuminate\Http\Response
     */
    public function alternatives($input)
    {
        $str="";
        if(is_array($input)){//Si es arreglo se convierte a cadena
            foreach($input as $char){
                $str.=$char;
            }
        }else{
            $str=$input;//Si no, solo se asigna a $str
        }  
        // Si solo tenemos un caracter, regresarlo
        if (strlen($str) < 2)
        {
            return array($str);
        }      
        // Inicializar el arreglo a regresar
        $permutaciones = array();
        // Copiar la cadena menos el primer caracter
        $cola = substr($str, 1);
                    
        // Atravesar las permutaciones del substring que acabamos de crear
        foreach ($this->alternatives($cola) as $permutacion){
        // Obtener la longitud de la permutación actual
        $longitud = strlen($permutacion);
        // Atravesar la permutacion e insertar el primer caracter de
        //la cadena original entre las dos partes y ponerlo en el arreglo a regresar 
            for ($i = 0; $i <= $longitud; $i++)
            {
                $permutaciones[] = substr($permutacion, 0, $i) . $str[0] . substr($permutacion, $i);
            }
        }
      
        return $permutaciones;
    }
    /**
     * Convierte array multidimensional a unidimensional.
     * 
     * El retorno de la funcion alternatives es un arreglo multidimensional
     * y se usa la siguiente función para convertir el retorno a unidimensional
     * y tener un mejor manejo.
     * 
     * @param  Array $array. 
     * @param  Array $result.
     * @return \Illuminate\Http\Response
     */
    public function array_flatten($array) { 

        if (!is_array($array))  
       { 
         return FALSE;  
       }  
         $result = array(); 
       foreach ($array as $key => $value)
       {
         if (is_array($value))  
         {
          $result = array_merge($result, array_flatten($value));
         } 
         else  {
         $result[$key] = $value;   
         }  
       }   
       return $result; 
    }

    /**
     * Envio de datos a la vista de alternative.
     * 
     * Ejecución de las funciones array_flatten y alternatives para obtener
     * los datos de la vista.
     * 
     * @param  int $user.
     * @param  String $combination.
     * @param  Array $alternatives. 
     * @return \Illuminate\Http\Response
     */

    public function alternativeResults ($user,$combination){
        $alternatives = $this->array_flatten($this->alternatives($combination));
        return view('resultado.alternativas.index')->with('alternative',$combination)->with('user',$user)->with('alternatives',$alternatives);
    }

    /**
     * Envio de datos a la vista de alternative.
     * 
     * Ejecución de las funciones array_flatten y alternatives para obtener
     * los datos para crear variables que almacenan las peticiones a la BD.
     * 
     * @param int $user.
     * @param String $combination.
     * @param Array $alternatives. 
     * @param Array $alternativeOne. 
     * @param Array $alternativeTwo. 
     * @param Array $alternativeThree. 
     * @param Array $alternativeFour. 
     * @param Array $alternativeFive. 
     * @param Array $result_json.
     * @return \Illuminate\Http\Response
     */

    public function listAlternatives($user,$combination){
        $alternatives = $this->array_flatten($this->alternatives($combination));
        header('Content-Type: application/json');
        $alternativeOne = DB::select("call sp_resultados ('$user','$alternatives[0]',null,'C')");
        $alternativeTwo = DB::select("call sp_resultados ('$user','$alternatives[1]',null,'C')");
        $alternativeThree = DB::select("call sp_resultados ('$user','$alternatives[2]',null,'C')");
        $alternativeFour = DB::select("call sp_resultados ('$user','$alternatives[3]',null,'C')");
        $alternativeFive = DB::select("call sp_resultados ('$user','$alternatives[4]',null,'C')");
        
        $result_json            = [
            0 => $alternativeOne,
            1 => $alternativeTwo,
            2 => $alternativeThree,
            3 => $alternativeFour,
            4 => $alternativeFive,
        ];
        echo json_encode($result_json);
        die();
    }
    /**
     * Generación del listado de resultados.
     * 
     * Generación de arreglos que almacenan las peticiones de la BD 
     * en la tabla de resultados y mostrar en la vista de resultados.
     * 
     * @param int $user.
     * @param String $combination.
     * @param Array $careers. 
     * @param Array $progress. 
     * @return \Illuminate\Http\Response
     */
    public function list($user,$combination){
        $careers = DB::select("call sp_resultados ('$user','$combination',null,'C')");
        $progress = DB::select("call sp_resultados ('$user',null,null,'R')");
        return view('resultado.index')->with('combination',$combination)->with('careers',$careers)->with('progress',$progress)->with('user',$user);
        
    }
     /**
     * Generación del listado de resultados con detalles de las instituciones.
     * 
     * Generación de arreglos que almacenan las peticiones de la BD 
     * en la tabla de resultados con detalles y mostrar en la vista de detalles.
     * 
     * @param int $user.
     * @param String $combination.
     * @param String $occupation.
     * @param Array $institutions. 
     * @return \Illuminate\Http\Response
     */
    public function resultsDetails($user,$combination,$occupation){
        $institutions = DB::select("call sp_resultados ('$user','$combination','$occupation','I')");
        return view('resultado.vermas')->with('combination',$combination)->with('institutions',$institutions)->with('occupation',$occupation)->with('user',$user);
    }
}
