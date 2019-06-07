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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abouts', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bienvenida', 'BienvenidaController@bienvenida')->name('bienvenida');
Route::get('/crearbienvenida','BienvenidaController@crearbienvenida')->name('crearbienvenida');
Route::post('/guardarbienvenida','BienvenidaController@guardarbienvenida')->name('guardarbienvenida');
Route::get('/editarbienvenida/{bienvenida}/editbienvenida','BienvenidaController@editarbienvenida')->name('editarbienvenida');
Route::post('/actualizarbienvenida/{id}','BienvenidaController@actualizarbienvenida')->name('actualizarbienvenida');
/////////////////////////////////////////////////////////////////////
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/crearblog','BlogController@crearblog')->name('crearblog');
Route::post('/guardarblog','BlogController@guardarblog')->name('guardarblog');
Route::get('/editarblog/{blog}/editblog','BlogController@editarblog')->name('editarblog');
Route::post('/actualizarblog/{id}','BlogController@actualizarblog')->name('actualizarblog');
/////////////////////////////////////////////////////////////////////
Route::get('/cita','CitaController@index')->name('citas');
Route::get('/crearcita', 'CitaController@crearcita')->name('crearcita');
Route::post('/guardarcita', 'CitaController@guardarcita')->name('guardarcita');
Route::get('/editarcita/{cit}/editcita','CitaController@editarcita')->name('editarcita');
Route::post('/actualizarcita/{id}','CitaController@actualizarcita')->name('actualizarcita');
//////////////////////////////////////////////////////////////////////////
Route::get('/servicios','ServicioController@index')->name('servicio');
Route::get('/crearservicio', 'ServicioController@crearservicio')->name('crearservicio');
Route::post('/guardarservicio', 'ServicioController@guardarservicio')->name('guardarservicio');
Route::get('/editarservicio/{ser}/editservicio','ServicioController@editarservicio')->name('editarservicio');
Route::post('/actualizarservicio/{id}','ServicioController@actualizarservicio')->name('actualizarservicio');
///////////////////////////////////////////////////////////////////////////
Route::get('/contacto','ContactoController@index')->name('contacto');
Route::get('/crearcontacto', 'ContactoController@crearcontacto')->name('crearcontacto');
Route::post('/guardarcontacto', 'ContactoController@guardarcontacto')->name('guardarcontacto');
Route::get('/editarcontacto/{con}/editcontacto','ContactoController@editarcontacto')->name('editarcontacto');
Route::post('/actualizarcontacto/{id}','ContactoController@actualizarcontacto')->name('actualizarcontacto');
//////////////////////////////////////////////////////////////////////////////
Route::get('/slider','SliderController@index')->name('slider');
Route::get('/crearslider', 'SliderController@crearslider')->name('crearslider');
Route::post('/guardarslider', 'SliderController@guardarslider')->name('guardarslider');
Route::get('/editarslider/{sli}/editslider','SliderController@editarslider')->name('editarslider');
Route::post('/actualizarslider/{id}','SliderController@actualizarslider')->name('actualizarslider');
////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/about','AboutController@index')->name('about');
Route::get('/crearabout', 'AboutController@crearabout')->name('crearabout');
Route::post('/guardarabout', 'AboutController@guardarabout')->name('guardarabout');
Route::get('/editarabout/{abo}/editabout','AboutController@editarabout')->name('editarabout');
Route::post('/actualizarabout/{id}','AboutController@actualizarabout')->name('actualizarabout');
