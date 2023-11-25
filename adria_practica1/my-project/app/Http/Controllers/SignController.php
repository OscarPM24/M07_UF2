<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
| Class SignController: creada per mostra les views 'signin' & 'signup' segons la ruta que s'indiqui
| a través de les funcions declarades dins de la mateixa.
*/
class SignController extends Controller {
    // funció que retorna la view 'signin' assignan un valor predefinit a la variable textResult
    public function signIn() {
        return view('signin')
        ->with('textResult', "Iniciar sessió de l'usuari")
        ->with('error', "");
    }
    // funció que retorna la view 'signin' substituint el valor de textResult pel valor dels paràmetres que li passem
    public function signIn2($var1, $var2, $var3, $var4) {
        $text = $var1 . " " . $var2 . " " . $var3 . " " . $var4;
        return view('signin')
        ->with('textResult', $text)
        ->with('error', "");
    }
    // funció que retorna la view 'signup' assignan un valor predefinit a la variable textResult
    public function signUp() {
        return view('signup')->with('textResult', "Crear un usuari");
    }
    // funció que retorna la view 'signup' substituint el valor de textResult pel valor dels paràmetres que li passem
    public function signUp2($var1, $var2, $var3) {
        $text = $var1 . " " . $var2 . " " . $var3;
        return view('signup')->with('textResult', $text);
    }
}
