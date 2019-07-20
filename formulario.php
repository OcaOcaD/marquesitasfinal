<?php
	session_start();
	include("php_functions.php");
	$nombre     = $_POST['nombre'] ;
	$correo     = $_POST['correo'] ;
	$comentario = $_POST['comentario'];
	$comentario = guardar_comentario($nombre, $correo, $comentario);
	$_SESSION['comentario'] = true;
	header("location:fran.php");
 ?>