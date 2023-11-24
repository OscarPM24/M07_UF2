<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function usuaris(Request $request) {
        $admin_email = 'admin@gmail.com';
        $admin_password = '1234';

        $email = $request->input('email');
        $password = $request->input('password');
        if ($admin_email == $email && $admin_password == $password) return view('Admin.admin')->with(['email'=>$email, 'password'=>$password]);
        else return view('signin');
    }

}