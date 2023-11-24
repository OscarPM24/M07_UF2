<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function usuaris() {
        $admin_email = "admin@admin.com";
        $admin_pwd = "1234";
        if ($admin_email == $_POST['mail'] && $admin_pwd == $_POST['pwd']) {
            return view('Admin.admin_view');
        } else {
            return view('signin')->with('textResult', "Iniciar sessió de l'usuari");
        }
    }
    public function centres() {
        return view('Admin.admin')->with(['result'=>'Aqui es mostraran els centres que el rol admin pot veure']);
    }
    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=>$text]);
    }
}
