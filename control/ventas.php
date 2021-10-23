<?php 
	require_once "../conexionDB.php";
	//require_once "../inner-page.php";

	$link=conexion();

	//$producto = pro();
	//Preparar consulta
	//1)C->Insertar
	$consultaSQL="INSERT INTO ventas(nombre,apellidos,email,departamento,municipio,postal,direccion,telefono,observaciones,sexo) VALUE ("
	."'".$_POST['name']."',"
    ."'".$_POST['lastname']."',"
    ."'".$_POST['email']."',"
	."'".$_POST['departamento']."',"
    ."'".$_POST['municipio']."',"
    ."'".$_POST['postal']."',"
    ."'".$_POST['direction']."',"
    ."'".$_POST['phone']."',"
    ."'".$_POST['message']."',"
    ."'".$_POST['select']."'"
    //."'".$producto."'"
	.")";

	//se verifica que se logre hacer la consulta
	if($resultado=$link->query($consultaSQL)){
        header("Location: ../portafolio.php?check=1");
	}
	$link->close();
	
?>