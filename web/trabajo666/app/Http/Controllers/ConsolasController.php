<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getPaises(){
        $paises = array();
        $paises[] = "pais1";
        $paises[] = "pais2";
        $paises[] = "pais3";
        $paises[] = "pais4";
        $paises[] = "pais5";

        return $paises;
    }
}
