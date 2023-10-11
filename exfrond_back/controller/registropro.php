<?php
include("conexion.php");
$con = conectaDB();
    if(!empty($_POST["producir"])){
        if(empty($_POST["producto"]) or empty($_POST["precio"]) or empty($_POST["existencias"])){
            echo'existen campos vacios';
        }else {
            $nombreP=$_POST["producto"];
            $valor=$_POST["precio"];
            $stock=$_POST["existencias"];
            $sql1=" select * from tb_productos where Nombre='$nombreP'";
            $resbus= mysqli_query($con,$sql1);
            $row = mysqli_fetch_row($resbus);

            if($row > 0){
                echo'<center>el producto ya existe</center>';
            }else{
                
                $sql=" insert into tb_productos(Nombre,Precio,Ext)values('$nombreP','$valor','$stock')";
                $resin= mysqli_query($con,$sql);
                
                if($resin){
                    echo'producto ingresado correctamente';
                    //header("location: dashboard.php");
                }else{
                    echo'error al ingresar el producto';
                }
                    
            }
        }
    }


?>