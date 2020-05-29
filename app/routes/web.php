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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return 'Hola Mundo jajaja';
});


Route::get("inicio/{user}", function($user){
    return "Inicio de usuario:".$user;
});

//Route::view("prueba", "prueba",["numero" => 2]);


Route::get("opcion1", function(){
    return view("opcion1");
})->name("a");


Route::get("opcion2", function(){
    return view("opcion2");
})-> name("b");


Route::get("nosotros/{nombre?}", function($nombre = null){


    //simulando conexion base de datos enviando datos  a las vistas, ojo importante.
    $equipo = [ "jelipe", "johan", "jaimico"];
    //return view("nosotros",["equipo"=>$equipo]);
    return view("nosotros", compact("equipo", "nombre"));
})-> name("nos");