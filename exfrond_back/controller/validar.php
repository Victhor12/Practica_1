<?php
include("conexion.php");//mandamos a llamar la conexion
$conec= conectaDB(); //guardamos la conexion en una variable
if(!empty($_POST["login"])){
	if(empty($_POST["loginUsername"]) or empty($_POST["loginPassword"])){
		echo"existen campos vacios";
	}else{
		$nombre=$_POST["loginUsername"];
		$pass=md5($_POST["loginPassword"]);
		$sqllog="select * from usuario where email='$nombre' and contra='$pass'";
		$ress= mysqli_query($conec,$sqllog);
		$row = mysqli_fetch_row($ress);
		
		if($row > 0){
			session_start();
			$_SESSION['login'] = "true";
			$_SESSION['nomusuario'] = $_POST['loginUsername'];
			
			header("location: dashboard.php");
			//echo json_encode(array('success' => 1));
		}
		else{
			echo"Datos erroneos";
			//echo json_encode(array('success' => 0));
		}		
	}
}
?>


