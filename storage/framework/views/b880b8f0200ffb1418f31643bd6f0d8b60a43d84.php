<?php $__env->startSection('content'); ?>


   	<div id="inicio" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
   	  <ul>
   		<?php for($i = 0; $i < 8; $i++): ?>
				<li id="Titulo" style="list-style:none">	
						<img src="http://lorempixel.com/800/400/food?<?php echo e(random_int(1,50)); ?>">
						<a href="" data-toggle="modal"><p>TITULO</p></a>
				</li>
		<?php endfor; ?>
	  </ul>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>