<?php 
	session_start();
	if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
		header("Location:index.php");
	}

	require_once "../conexionDB.php";

	$link=conexion();

	//Preparar consulta
	//1)D->Eliminar
	$consultaSQL="DELETE FROM productos WHERE nombre='".$_POST['nombre']."'";
	print($consultaSQL."<br>");

	//se verifica que se logre hacer la consulta
	if($resultado=$link->query($consultaSQL)){
		header("Location:../control/delete.php?check=2");
	}

	$link->close();
	
	
/*	function eliminar(){
	$mysql = conexion();
	print($_POST['nombre']);
	$consultaSQL = "DELETE FROM productos WHERE nombre='".$_POST['nombre']."'";
	print($consultaSQL);
	$mysql -> query($consultaSQL);
	$mysql -> close();
	header("Location: ../admin.php?check=2");
}

eliminar();*/
	
?>