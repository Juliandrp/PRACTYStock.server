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

Route::get('/', function () {
    return view('auth.login2');
});


Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Auth::routes();
    Route::resource('usuario', 'UsersController');
    Route::resource('departamentos', 'DepartamentosController');

    Route::resource('ventas', 'VentasController', [
        'except' => ['show']
    ]);
    Route::resource('productos', 'ProductosController');
    Route::resource('marcas', 'MarcasController');
    Route::resource('municipios', 'MunicipiosController');
    Route::resource('compradores', 'CompradoresController');
});

Route::get('practy', function(){
    return view('inicio');
});

Route::get('ventas', function(){
    $departamentos = \App\Departamento::all();
    return view('ventas', compact('departamentos'));
})->name('ventas');

Route::get('load', function(){
    return view('loading');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('supervisor/estadisticas/{id}', 'VentasController@show');
