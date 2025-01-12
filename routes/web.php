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
 Route::view('/', 'pagina');
 Route::get('/{cadena}', function ($cadena = null) {

 });
 Route::view('/', 'home');
 Route::get('/contacto', [MyFirstController::class, 'contactPage']);
 Route::post('/contacto', [MyFirstController::class, 'processPage']);
 //Route::put('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::patch('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::delete('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::head('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::options('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::match(['GET', 'POST']', '/uri', [MyFirstController::class, 'matchedFunction']);
 //Route::anu('/example, [MyFirstController::class, 'anyFunction']);
 //Route::redirect('/route1', '/route2');
 //Route::redirectPermanent('/route1', '/route2');