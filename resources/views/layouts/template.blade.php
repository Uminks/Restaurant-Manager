<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css"> <!-- Conexion a Bootstrap y Otras dependencias (npm) Local con Node Js -->
        <!-- Aqui Se puede Agregar Otros Archivos CSS path -> public/css -->
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Handlee|Dancing+Script|Cantarell|Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/cocina.css">
        <title>Restaurant-Manager</title>
    </head>
    <body>

            @include('layouts.secciones.header') <!-- Path -> resources/views/layouts/secciones/header.blade.php -->
            
            <div class="container-fluid" id="container">
                     @yield('content')
                     @yield('emergente') <!-- yield Optional -->
            </div>
            
            @include('layouts.secciones.footer') <!-- Path -> resources/views/layouts/secciones/footer.blade.php -->
        
        
		<script src="js/app.js"></script> <!-- Conexion a Bootstrap y otras dependencias (npm) Local con Node Js -->

    </body>
</html>