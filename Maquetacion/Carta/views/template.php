<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carta de Menú</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>
<body>
	
	<?php  
		/*=====================================
		INICIO      
		======================================*/
		include "modules/inicio.php";
		/*=====================================
		CARTAS     
		======================================*/
		include "modules/pollo.php";
		include "modules/carne.php";
		include "modules/ensalada.php";
		include "modules/mariscos.php";
		include "modules/bebidas.php";
		include "modules/postres.php";
		include "modules/otros.php";

		include "modules/orden.php";
		/*====  Fin de CARTA  ====*/

		
	?>

	<script src="js/scripts.js"></script>
</body>
</html>