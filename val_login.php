
<?php 

require_once "./conexionDB.php";
$link=conexion();

//preparar consulta
$consultaSQL = "SELECT * FROM login_admin WHERE user='".$_POST['name']."' AND pass='".$_POST['password']."' ";

//verificar que se haga la consulta
if($resultado = $link->query($consultaSQL)){
	//verificar que se obtengan resultados
	if(mysqli_num_rows($resultado) != 0){
		$usuario = $_POST['name'];
    session_start();
		$_SESSION['user']=$_POST['name'];
		$_SESSION['auth']=true;
		header("Location: admin.php");
	}
	else{
		header("Location: login.php?invalido=true");
	}
}

?>

