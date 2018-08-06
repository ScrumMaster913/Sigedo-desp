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
    return 'Home';
});

Route::get('/usuarios/{id}',function($id){
	return "Mostrando el detalle del usuario:  {$id}";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo',function(){
	return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname}',function($name,$nickname){
	return "Bienvenido {$name} , tu apodo es {$nickname} ";
});