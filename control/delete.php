<?php 
	session_start();
	if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
		header("Location:index.php");
	}

	require_once "../conexionDB.php";

	$link=conexion();

	//Preparar consulta
	//1)D->Eliminar
	$consultaSQL="DELETE FROM productos WHERE id='".$_POST['id']."'";
	print($consultaSQL."<br>");

	//se verifica que se logre hacer la consulta
	if($resultado=$link->query($consultaSQL)){
		header("Location: ../admin.php?delete=true");
	}

	$link->close();	
?>