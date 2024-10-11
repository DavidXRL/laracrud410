<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testView', function () {
    return view('testView');
});

Route::get('/texto', function () {
    echo "Hi world";
    echo "<h1>Hola mundo</1>";
});

Route::get('/echo', function () {
    return view('test2');
});

Route::get('/MasRutas', function () {
    return "Podemos tener rutas tipo get, post, delete, patch";
});


//en esta parte se crea la variable llamada "msj" para poder recibirla con php en el archivo custom.blade.php
Route::get('/custom', function () {
    $msj="Mensaje desde el servidor";
    $id = "500";
    return view ('custom', ['msj'=>$msj, "identi"=>$id, "A" => 29]);
});


Route::get('/contact', function()
{
return view('contacto');
}) -> name('contact');


















// PARA UNA RUTA CON DATOS ALMACENADOS
//USAREMOS LA FUNCIÓN TEST
Route::get('/testdb', [App\Http\Controllers\TestController::class, 'test']);
{

}
