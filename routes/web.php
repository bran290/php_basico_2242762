<?php

use Illuminate\Support\Facades\Route;

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
