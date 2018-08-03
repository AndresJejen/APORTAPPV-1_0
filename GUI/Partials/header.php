<?php
try
{
    session_start();
    $varsesion = $_SESSION['usuario'];
}
catch(Exception $e)
{
        if($varsesion == null || $varsesion == '')
        {
            echo 'Usted no tiene autorización';
            die();
        }
}    
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title><?php echo $varsesion ?></title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/assets/overhang.min.css" />

    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../css/Bootstrap/dataTables.bootstrap.min.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="../css/Bootstrap/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="../css/Bootstrap/font-awesome.min.css">
	
		    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../Scripts/General/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../Scripts/General/assets/overhang.min.js"></script>
    <script src="../Scripts/General/assets/app.js"></script>
    <script src="../Scripts/jquery-1.12.3.js"></script>
	<script src="../Scripts/bootstrap/bootstrap.min.js"></script>
	<script src="../Scripts/bootstrap/jquery.dataTables.min.js"></script>
	<script src="../Scripts/bootstrap/dataTables.bootstrap.js"></script>
	<!--botones DataTables-->	
	<script src="../Scripts/bootstrap/dataTables.buttons.min.js"></script>
	<script src="../Scripts/bootstrap/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="../Scripts/bootstrap/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="../Scripts/bootstrap/pdfmake.min.js"></script>
	<script src="../Scripts/bootstrap/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="../Scripts/bootstrap/buttons.html5.min.js"></script>
    
	
  </head>

  <body>