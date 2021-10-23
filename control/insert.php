<?php 
	session_start();
	if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
		header("Location:login.php");
	}

	require_once "../conexionDB.php";
	$link=conexion();

	$origen=$_FILES['imagen']['tmp_name'];
	$destino="../assets/img/portfolio/".$_FILES['imagen']['name'];
	move_uploaded_file($origen, $destino);

	//Preparar consulta
	//1)C->Insertar
	$consultaSQL="INSERT INTO productos(nombre,precio,marca,caracteristica,imagen,tipo) VALUE ("
	."'".$_POST['nombre']."',"
    ."'".$_POST['precio']."',"
    ."'".$_POST['marca']."',"
	."'".$_POST['caracteristica']."',"
	."'".$_FILES['imagen']['name']."',"
    ."'".$_POST['tipo']."'"
	.")";
	print($consultaSQL."<br>");

	//se verifica que se logre hacer la consulta
	if($resultado=$link->query($consultaSQL)){
        header("Location: ../admin.php?check=1");
	}
	$link->close();
	
?>