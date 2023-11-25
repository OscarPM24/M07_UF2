<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*
| Class AdminController: Ens permet mostrar i controlar la vista controlador des
| de diferents funcions i agafant les dades des de Request (POST).
*/
class AdminController extends Controller
{
    /* Funció usuaris: rep un request (dades per form method="POST")
    |  i les valida. En cas de ser correctes mostra la view d'administrador,
    |  sinó, et retorna a la view de signin.
    */
    public function usuaris(Request $request) {
        $admin_email = "admin@admin.com";
        $admin_pwd = "1234";
        $mail = $request->input('mail');
        $pwd = $request->input('pwd');
        if ($admin_email == $mail && $admin_pwd == $pwd) {
            return view('Admin.admin_view');
        } else {
            return view('signin')
            ->with('textResult', "Iniciar sessió de l'usuari")
            ->with('error', "Login incorrecte");
        }
    }
    /* Funció que ens redirigeix a la vista d'administrador */
    public function viewAdmin() {
        return view('Admin.admin_view');
    }
    /* Funció que conté la llista dels nostres centres amb les propietats
    |  de cadascú i ens redirigeix a la vista centres on li passa l'array
    |  i les mostra. */
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
    /* Funció que conté la llista del nostre professorat amb les propietats
    |  de cadascú i ens redirigeix a la vista professorat on li passa l'array
    |  i els mostra. */
    public function professorat() {
        $profes = [
           ["id" => "1", 
           "name" => "Roger",
           "surname" => "Sobrino",
           "rol" => "Professor", 
           "email" => "roger@roger.com"],
           ["id" => "2", 
           "name" => "Sara",
           "surname" => "Gonzalez",
           "rol" => "Professora", 
           "email" => "sara@sara.com"],
           ["id" => "3", 
           "name" => "Pere",
           "surname" => "Guitart",
           "rol" => "Professor", 
           "email" => "pere@pere.com"],
           ["id" => "4", 
           "name" => "Oriol",
           "surname" => "Xisco",
           "rol" => "Professor", 
           "email" => "oriol@oriol.com"],
        ];
        return view('Admin.professorat')->with(['profes'=>$profes]);
    }
    /* Funció que conté la llista del nostre alumnat amb les propietats
    |  de cadascú i ens redirigeix a la vista alumnat on li passa l'array
    |  i els mostra. */
   public function alumnat() {
        $alumnes = [
           ["id" => "1", 
           "name" => "Gemma",
           "surname" => "Garrigosa",
           "rol" => "Alumne", 
           "email" => "gemmar@gemma.com"],
           ["id" => "2", 
           "name" => "Oscar",
           "surname" => "Perez",
           "rol" => "Alumne", 
           "email" => "oscar@oscar.com"],
           ["id" => "3", 
           "name" => "Adria",
           "surname" => "Garcia",
           "rol" => "Alumne", 
           "email" => "adri@adri.com"],
           ["id" => "4", 
           "name" => "Veronica",
           "surname" => "Cartagena",
           "rol" => "Alumne", 
           "email" => "vero@vero.com"],
        ];
        return view('Admin.alumnat')->with(['alumnes'=>$alumnes]);
   }
}
