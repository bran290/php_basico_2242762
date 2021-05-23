<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('variables', function()
    {
        //definicion de variable
        $mensaje = 20;
        /*funcion var_dump: analizar una variable
        muestra tipo de dato y valor
        var_dump($mensaje);*/

        //solo muestra el vlaor de la variable
        print_r($mensaje);
        echo "<hr />";

        $mensaje="Brandon el puto amo";
        var_dump($mensaje);

    }
);

route ::get("arreglos", function()
{
    //arreglo estructura de datos

    $estudiantes=["AN" => "Ana",
                   6   => "Maria",
                "JOR"  => "Jorge"];

    echo "<pre>";
   var_dump($estudiantes);
    echo "</pre>";
});

route ::get("paises", function()
{
//
//fuertemente tipados:debe definir el tipo de dato
//                    no se puede cambiar el tipo de dato
//                      JAVA , .NET , GO

//debilmente tipados: no se requiere definir el tipo de dato
//                      se puede cambiar el tipo de dato
//                        PHP, JAVASCRIPT, PYTHON

    $paises=
    [
         "Colombia"=>
            [
                "capital" => "Bogota",
                "moneda" => "Peso $",
                "poblacion" => "50"
            ]
        ,"Peru"=>
            [
                "capital" => "Lima",
                "moneda" => "Sol $",
                "poblacion" => "32"
            ]
        ,"Paraguay"=>
            [
                "capital" => "Asuncion",
                "moneda" => "Guarani $",
                "poblacion" => "7.3"
            ]
    ];

    /*$suma =0;
    foreach($paises as $nombre => $pais):


        echo "<pre>";
        echo "<h1>$nombre</h1>";
        print_r($pais ["capital"]."<br />");
        print_r($pais ["moneda"]."<br />");
        print_r($pais ["poblacion"]."<br />");
        echo "</pre>";
        echo "<hr />";

       $suma += $pais ["poblacion"];
    endforeach;


        echo "la suma de los paises es: $suma";*/

        //LAMAR A UNA VISTA
        //CON DATOS DE PAIS
        //NOMBRE CON EL QUE SE RECONOCEN LOS DATOS EN LA VISTA

        return view('paises')->with("naciones", $paises);

}

);

Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador" );

Route::post('buscar' , "MetabuscadorController@buscar" );
