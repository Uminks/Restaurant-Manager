<?php $__env->startSection('content'); ?>
		
	<h2 class="text-center" id="Carta">Carta</h2>

   	<div id="appHome"></div>


	<div class="flotante">
		<a style="font-family:Montserrat" href="#verOrden" data-toggle="modal"><button  id="tam" type="button" class="btn btn-warning"><span class="fas fa-utensils"></span> Ver Orden</button></a>
	</div>
     
    

	<div class="row buen">
		<p class="text-center text-info" id="Buen">Buen Provecho!</p>
		<?php echo $__env->make('home.secciones.cartaEmergente', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	<?php echo $__env->make('home.secciones.orden', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
	
<?php $__env->stopSection(); ?>


<?php $__env->startSection('emergente'); ?>
		<?php echo $__env->make('home.secciones.cartaEmergente', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	<?php echo $__env->make('home.secciones.orden', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>