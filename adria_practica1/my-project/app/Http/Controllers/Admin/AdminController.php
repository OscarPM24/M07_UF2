<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function usuaris(Request $request) {
        $admin_email = "admin@admin.com";
        $admin_pwd = "1234";
        $mail = $request->input('mail');
        $pwd = $request->input('pwd');
        if ($admin_email == $mail && $admin_pwd == $pwd) {
            return view('Admin.admin_view');
        } else {
            return view('signin')->with('textResult', "Iniciar sessió de l'usuari");
        }
    }
    public function centres() {
        $centres = [
            ["id" => "1", 
            "name" => "Institut TIC de Barcelona",
            "address" => "C/ de Sancho de Ávila, 133",
            "cp" => "08018", 
            "city" => "Barcelona"],
            ["id" => "2",
            "name" => "Jaume Balmes",
            "address" => "C/ Diputació, 150",
            "cp" => "08013",
            "city" => "Barcelona"],
        ];
        return view('Admin.centres')->with(['centres'=>$centres]);
    }
}
