<?php

/*
*  Route::(get,post,resource)('RUTA' , 'Controlador')
*  Controlador = ('NombreControlador@MetodoControlador')
*  env('PREFIXER') = http://localhost/Restaurant-manager/public -> Path -> .env
*  ControladorStaticPages -> path -> app/Http/ControladorStaticPages.php 
*/


Route::get('/','ControladorStaticPages@Home'); // Ruta default no lleva env('PREFIXER')
Route::get(env('PREFIXER').'/Laravel','ControladorStaticPages@LaravelHome');


