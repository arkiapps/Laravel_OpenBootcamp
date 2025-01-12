<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contactContacto()
    {
        return view('contacto'); // Asegúrate de tener la vista 'contacto.blade.php' en resources/views
    }
}