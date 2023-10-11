<?php
	session_start();
	if (!isset($_SESSION['login']))
		header("location: index.php");	
?>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo2.css">
        
    </head> 

    <body>
        <form action="" method="POST">
            <div class="c2" align="center">
            <?php
                
                include("controller/registropro.php");
            ?>
            <br>
            <img src="cher-removebg-preview.png" alt="" class="img">
            <br>
            <br>
            <br>
            <span id="span11">NOMBRE DEL PRODUCTO</span>
            <br>
            <br>
            
            <input type="text" name="producto" >
            
            <br>
            <br>
            <span id="span11">PRECIO</span>
            <br>
            <br>
            <input type="number" name="precio">
            <br>
            
            <br>
            <span id="span11">EN EXISTENCIA</span>
            <br>
            <br>
            <input type="number" name="existencias" >
            <br>
            
            <br>
            <input type="submit" value="ingresar" name="producir">
            <br>
            <br>
    
            <br>
            <a href="dashboard.php" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                BACK
            </a>
        </div>
        </form>
        
    </body>
</html>