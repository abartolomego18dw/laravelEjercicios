<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludo(){
        return view('saludo');
    }
    function saludoNombre($nombre){
        return view('saludoNombre',['nombre'=>$nombre]);
    }
    function saludoColor($nombre, $color='33FFD4'){
        return view('saludoColor',['nombre'=>$nombre, 'color'=>$color]);
    }
}


