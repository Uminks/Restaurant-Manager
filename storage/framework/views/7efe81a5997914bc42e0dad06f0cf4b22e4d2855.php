<?php $__env->startSection('content'); ?>
		<h2 class="text-center" id="adminTitle">Administrador</h2>

		<div id="appAdministrador"></div>
	
		<div class="contenedorAgregar">
			
			<!--button id="btnAgregar" class="btn btnAgregar"><i class="fas fa-plus-circle" style="font-size:40px;"></i> </button-->

			<div class="ingresoTipo"> 
				<input type="text" class="form-control"  placeholder="Título"> 
				<input type="file" class="file">

				<button class="guardarTipo btn btn-info pull-right" style="margin:10px">Guardar</button> 
			</div>

		</div>

		<h2 class="text-center" id="adminFoot">Gracias por usar nuestros servicios!</h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>