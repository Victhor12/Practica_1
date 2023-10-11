<?php
include("conexion.php");
$connexion = conectaDB();

if(!empty($_POST["ingresar"])){
    if(empty($_POST["nom"]) or empty($_POST["ape"]) or empty($_POST["email"]) or empty($_POST["pass"])){
    echo'existen campos vacios';
    }else {
        $nombre=$_POST["nom"];
        $apellido=$_POST["ape"];
        $usuario=$_POST["email"];
        $passwor=md5($_POST["pass"]);
        $sql1=" select * from usuario where email='$usuario' ";

        $verifica= mysqli_query($connexion,$sql1);
        $row = mysqli_fetch_row($verifica);
        if($row > 0){
            echo'<center>el usuario ya existe</center>';
        }else{
            $sql=" insert into suario(nombre,apellidos,email,contra)values('$nombre','$apellido','$usuario','$passwor')";
            $ingresa= mysqli_query($connexion,$sql);
            $row1 = mysqli_fetch_row($ingresa);
            if($row1 > 0){
                echo'<center>el usuario ha sido creado correctamente</center>';

            }else{
                echo'usuario no registrado';
            }
    
        }
        
    }
}
?>