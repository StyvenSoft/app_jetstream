<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Rotorno de vista desde controlador

    // public function index() {
    //     return view('welcome');
    // }

    // Manejo de parametros con la clase Request

    public function index(Request $petition) {

        // Capturar parametro desde la URL del navegador 
        // view/?name=steveen
        $array = ['name'=>$petition->query('name', 'SN')];
        return view('view')->with($array);
    }
}
