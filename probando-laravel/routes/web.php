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
    return view('welcome');
});


Route::get('/terminos', function () {
    return view('terms');
});

Route::get('/hola-mundo', function () {
    return view('holamundo');
});
/*
Route::get('/contacto', function () {
    return view('contacto');
});*/

/*
Route::match(['get','post'], '/contacto' , function () {
    return view('contacto');
});
*/
/*ASI SE PASAN PARAMETROS CON EL METODO POST */
Route::get('/contacto/{nombre?}/{edad?}', function ($nombre= "Jonathan", $edad=19) {
    /*return view('contacto', array(
            "nombre" => $nombre,
            "edad" => $edad
        ));*/
        return view('contacto')
                                ->with('nombre',$nombre)
                                ->with('edad',$edad)
                                ->with('frutas', array('piña','manzana','pera','bananna'));
}) -> where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);
/* ruta por*/

Route::group(['prefix' => 'fruteria'], function () {
    Route::get('/frutas', 'FrutasController@index');
    Route::get('/naranjas/{admin?}', ['middleware' => 'EsAdmin',
                                'uses' => 'FrutasController@naranjas']);
    Route::get('/peras', 'FrutasController@peras');

});

Route::post('/recibir', 'FrutasController@recibirFormulario');

Route::controller('notas', 'NotesController');
