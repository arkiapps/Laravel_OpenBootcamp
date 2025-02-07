<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{

    // Variables de ruta en controlador
    public function myControllerFuntion($id = 'estudiante'){
        echo "hola " .$id;
    }
    public function contactContacto()
    {
        return view('contacto'); // Asegúrate de tener la vista 'contacto.blade.php' en resources/views
    }

    public function processContacto(Request $request) {
        echo "Formulario Completado";
        die();
    }
}