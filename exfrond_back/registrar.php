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
            <?php
                
                include("ingreso.php");
            ?>
            <div class="c2" align="center">
                <br>
            <img src="agree.png" alt="" class="img">
                <br>
            <span id="span11">NAME</span>
            
            <br>
            <br>
            <input type="text" name="nom">
            <br>
            <br>
            <span id="span11">LAST NAME</span>
            <br>
            <br>
            <input type="text" name="ape" >
            <br>
            <br>
            <span id="span11">EMAIL</span>
            <br>
            <br>
            <input type="email" name="email"  >
            <br>
            <br>
            <span id="span11">PASSWORD</span>
            <br>
            <br>
            <input type="password" name="pass" >
            <br>
            <br>
            <input type="submit" value="ingresar" name="ingresar">
            
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