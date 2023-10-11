<?php
include("conexion.php"); //mandamos a llamar a la conexion de la bd
$con = conectaDB(); //declaramos una variable la cual llevara la conexion a la bd

$id=$_GET['idp']; //extraigo el id de el producto mostrado en la tabla del dashboard
$eliminar = "delete from tb_productos where idPro = '$id'"; //creo la consulta para poder eliminar y la almaceno en la variable

$resultado= mysqli_query($con,$eliminar); //utilizo la funcion mysqli_query para realizar la consula y esta funcion recibe dos parametros la conexion y la consulta
if($resultado){ //si la consulta se realizo correctamente
    header("location: dashboard.php"); // si se realizo correctamente redireciona a el dahsboard
}else{
    echo "no se elimino el producto"; //si no se realizo correctamente muestro un mensaje de error
}
?>

