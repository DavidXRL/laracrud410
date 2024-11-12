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
    return view('index');
}) -> name('index');

// Route::get('/products', function()
// {
//     return view('products_index');
// }) ->name('products');

Route::get('/sales', function()
{
    return view('sales_index');
}) -> name('sales');

Route::get('/clients', function()
{
    return view('clients_index');
}) ->name('clients');

/*

Route::get('/indexProducts', [App\Http\Controllers\ProductController::class, 'index'])
 -> name('products');

Route::get('/createProducts', [App\Http\Controllers\ProductController::class, 'create'])
 -> name('pcreate');

 Route::get('/editProducts/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])
 -> name('pedit');

 Route::get('/showProducts/{product}', [App\Http\Controllers\ProductController::class, 'show'])
 -> name('pshow');

 Route::post('/storeProducts/{store}', [App\Http\Controllers\ProductController::class, 'store'])
 -> name('pstore');

 Route::patch('/updateProducts/{store, product}', [App\Http\Controllers\ProductController::class, 'update'])
 -> name('pupdate');

 Route::delete('/destroyProducts/{product}', [App\Http\Controllers\ProductController::class, 'destroy {$product}'])
 -> name('pdestroy');
*/
//RUTA DE TIPO RECURSOS PARA MÉTODOS REST, QUE PERMITE CREAR LAS RUTAS PARA UN CRUD DE LAS 7 FUNCIONES DE UN CONTROLLER

 route::resource('/products', App\Http\Controllers\ProductController::class);
 route::resource('/brands', App\Http\Controllers\BrandController::class);

