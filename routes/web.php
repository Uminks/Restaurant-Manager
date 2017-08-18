<?php

/*
*  Route::(get,post,resource)('RUTA' , 'Controlador')
*  Controlador = ('NombreControlador@MetodoControlador')
*  env('PREFIXER') = http://localhost/Restaurant-manager/public -> Path -> .env
*  ControladorStaticPages -> path -> app/Http/ControladorStaticPages.php 
*/


Route::get('/','ControladorStaticPages@Home'); 
Route::get('/Laravel','ControladorStaticPages@LaravelHome');


Route::get('/Cocina','PagesController@Cocina');
Route::get('/Administrador','PagesController@Administrador');
