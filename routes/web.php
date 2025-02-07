<?php

use App\Http\Controllers\ContactoController;
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

// Varibales con condiciones: Poner condiciones dentro de las rutas
Route::get('/{category}/{slug}', function($category = 'a', $slug = 'post'){
   echo $category. '<br />'. $slug;
})->where('category', '[0-9]+')->where('slug', '[\w-]+');


Route::get('/my-controller/{id}', [ContactoController::class, 'myControllerFuntion']);
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
// Rutas con Varbales:
/*
Route::get('/post/{id}/{slug}', function($category, $slug = null) {

    $miCategoria = $this->recuperarMiCategoria($category);

    if($slug == null)
    $post = $this->recuperarMiUltimoPost();
    else
    $post = $this->recuperarMiPostMedianteSlug($slug);
    return $post;
});

Route::match(['GET', 'POST'], '/{slug}/{id}/{category}',
    function($slug = "laravel-9",
    $id = null,
    $category = null){
    $categoria = $this->recuperarMiPostMedianteSlug($slug);
    return $categoria;
});
*/



 Route::view('/', 'home');
 Route::get('/contacto', [ContactoController::class, 'contactContacto']);
 Route::post('/contacto', [ContactoController::class, 'processContacto']);
 //Route::put('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::patch('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::delete('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::head('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::options('/contacto', [MyFirstController::class, 'contactPage']);
 //Route::match(['GET', 'POST']', '/uri', [MyFirstController::class, 'matchedFunction']);
 //Route::anu('/example, [MyFirstController::class, 'anyFunction']);
 //Route::redirect('/route1', '/route2');
 //Route::redirectPermanent('/route1', '/route2');