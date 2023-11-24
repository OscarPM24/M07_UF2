<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
 
    public function signin() {
        return view("signin");
    }

    public function signup() {
        return view("signup");
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

    public function products(Request $request) {
        $text = $request['product'];
        return view('products')->with(['result'=> $text]);
    }
}


