<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
 
    public function signin() {
        return view("signin")->with("title","Iniciar sessió de l'usuari");
    }

    public function signup() {
        return view("signup")->with("title","Creació d'usuari nou");
    }


    public function signin2($iniciar, $sessio, $de, $usuari) {
        $title = '';
        $title .= $iniciar . ' ' . $sessio .' '. $de .' '. $usuari;
        return view('signin')->with('title',$title);
    }

    public function signup2($creacio, $usuari, $nou) {
        $title = '';
        $title .= $creacio . ' ' . $usuari .' '. $nou;
        return view('signup')->with('title',$title);
    }
}


