<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{


    // Asi es como capturamos los datos desde la barra de busqueda del navegador
    function index (Request $request) {

        $arreglo = ['nombre'=> $request->query('nombre', 'NN')];
        return view('vista1')->with($arreglo);
    }

}
