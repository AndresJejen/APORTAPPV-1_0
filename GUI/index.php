<?php include 'Partials/header.php';?>
<?php include 'Partials/menu.php';?>

<script src="../Scripts/Principal.js"></script>

 <div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="well">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]; ?></h1>
				<p>
					<a href="../Sistema/cerrar_Session.php">Cerrar Sesion</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<!-- Button trigger modal Nuevo -->
<caption>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalNuevoAsociado">
  Nuevo Asociado
    <span class="glyphicon glyphicon-plus"></span>
</button>
</caption>    

<div id=ModalNuevo></div>

<!-- Modal para Editar-->
<div class="modal fade" id="ModalEditarAsociado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Asociado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Editar Asociado WOWOWOWOWWO 404
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
						    <th>Id</th>								
							<th>Nombre</th>
							<th>Apellido 1</th>
							<th>Apellido 2</th>
							<th>Estado</th>
							<th>Editar</th>											
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
	</div>


<?php include 'Partials/foot.php';?>