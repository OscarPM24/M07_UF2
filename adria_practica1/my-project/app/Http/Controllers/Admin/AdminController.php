<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris() {
        return view('Admin.admin_view');
    }
    public function centres() {
        return view('Admin.admin')->with(['result'=>'Aqui es mostraran els centres que el rol admin pot veure']);
    }
    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=>$text]);
    }
}
