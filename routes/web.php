<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {

    $data = [
        1,2,3,4,5,6,7,8
    ];

    return view('welcome', [
        'data' => $data
    ]);
});
*/

/*
Route::get('/{cadena}', function ($cadena = null) {
    $resultado = 'No conocido';
    switch($resultado){
        case 'laravel-openbootcamp':
            $resultado = 'hola usuario';
        break;
        case 'hola laravel':
            $resultado = 'Hola soy estudiante de laravel, nivel intermedio';
        break;
        default:
            $resultado = 'Perdona, no te he entendido';
        break;
    }
    return view('welcome', [
        'cadena' => $resultado
    ]);
});
*/
 Route::view('/', 'paginaone');
 Route::get('/{cadena}', function ($cadena = null) {

 });
