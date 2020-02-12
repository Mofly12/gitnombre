<?php

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
Route::get('user/{name}', function ($name) {
    echo "el parámetro del path recibido es: " . $name;
    exit();
});
Route::post('/post', function () {
    echo "el parámetro del path recibido es: POST" ;
    exit();
});
Route::get('/get', function () {
    echo "el parámetro del path recibido es: GET";
    exit();
});
*/

//PRUEBA PROXIMAMENTE BORRARLO
Route::any('relatos/{miNombre}', function($miNombre){
    echo "peticion requerida para el parametro: " . $miNombre;
    die();
})->where('miNombre','[0-9]+');


//PROPIOS DE LARAVEL
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//PRODUCTOS
Route::get('/', 'ControladorProductos@listar');
Route::get('MostrarProducto', 'ControladorProductos@mostrarProductoUnico');



//PEDIDOS
Route::post('AgregarPedido', 'ControladorPedidos@agregar');
