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
							<th></th>											
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
	</div>
	


<?php include 'Partials/foot.php';?>