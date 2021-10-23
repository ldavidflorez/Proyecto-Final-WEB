<?php 
	session_start();
	if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
		header("Location:index.php");
	}

	require_once "../conexionDB.php";
	
	$link=conexion();

	//Preparar consulta
	//1)D->Actualizar
	$consultaSQL="UPDATE productos SET nombre='".$_POST['nombre']."', precio='".$_POST['precio']."', marca='".$_POST['marca']."', caracteristica='".$_POST['caracteristica']."',  imagen='".$_FILES['imagen']['name']."', tipo='".$_POST['tipo']."'  WHERE id='".$_GET['id']."'";
	print($consultaSQL."<br>");

	//se verifica que se logre hacer la consulta
	if($resultado=$link->query($consultaSQL)){
		header("Location:../admin.php?modi=true");
	}

	$link->close();
	
?>