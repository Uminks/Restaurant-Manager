<?php $__env->startSection('content'); ?>
		
	<h2 class="text-center" id="Carta">Carta</h2>

   	<div id="inicio" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   	  <ul>
   		<?php for($i = 0; $i < 8; $i++): ?>
				<li id="Titulo" style="list-style:none">	
						<img src="http://lorempixel.com/800/400/food?<?php echo e(random_int(1,50)); ?>">
						<a href="#cartaTitulo" data-toggle="modal"><p>TITULO</p></a>
				</li>
		<?php endfor; ?>
	  </ul>
	</div>
	
	<div class="row buen">
		<p class="text-center text-info" id="Buen">Buen Provecho!</p>
	</div>
	
    <?php echo $__env->make('layouts.secciones.cartaEmergente', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <?php echo $__env->make('layouts.secciones.orden', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>