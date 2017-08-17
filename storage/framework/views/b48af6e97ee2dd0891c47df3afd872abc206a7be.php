<?php $__env->startSection('content'); ?>
		
		<h2 class="text-center" id="CocinaTitle">Cocina</h2>

		<div class="container">
			
		
		<table class="table">

			<tr class="alert-danger" id="Titulos_Tabla">
				<th>Orden</th>
				<th>Tipo</th>
				<th>Plato</th>
				<th>Mesa</th>
				<th>Enviar Orden</th>
			</tr>

			<?php for($i = 0 ; $i < 10 ; $i++): ?>
				<tr class="table-hover text-center">
					<td>#<?php echo e($i+1); ?></td>
					<td>Seccion</td>
					<td>Lorem Ipsum dolor</td>
					<td><?php echo e(rand(1,6)); ?></td>
					<td><a href=""><i class="fa fa-check" id="Cocina-Enviar" aria-hidden="true"></a></i></td>
				</tr>
			<?php endfor; ?>

		</table>

		</div>

		<h2 class="text-center" id="CocinaFoot">Gracias por usar nuestros servicios!</h2>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>