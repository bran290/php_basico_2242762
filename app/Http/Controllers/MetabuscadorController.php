<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador()
    {
        //mostrar formulario del buscador
        return view ('metabuscador');
    }
    public function buscar()
    {
        //1
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //2
        echo $motores;
        switch($motores)
        {
            case 1:
                return redirect()->to ("https://www.google.com/search?q=$termino");
            break;

            case 2:
                return redirect()->to ("https://www.bing.com/search?q=$termino");
            break;

            case 3:
                return redirect()->to ("https://www.youtube.com/results?search_query=$termino");
            break;

            case 4:
                return redirect()->to ("https://espanol.search.yahoo.com/search?p=$termino");
            break;

            case 5:
                return redirect()->to ("https://es.wikipedia.org/wiki/$termino");
            break;

            case 6:
                return redirect()->to ("https://www.facebook.com/search/top?q=$termino");
            break;

            case 7:
                return redirect()->to ("https://listado.mercadolibre.com.co/$termino");
            break;

            case 8:
                return redirect()->to ("https://www.instagram.com/$termino");
            break;

            case 9:
                return redirect()->to ("https://play.google.com/store/search?q=$termino");
            break;

            case 10:
                return redirect()->to ("https://duckduckgo.com/?q=$termino");
            break;


        //print_r($_POST);
        }
    }
}
