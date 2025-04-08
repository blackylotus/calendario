


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
 
 
 
 Hola <?php isset ($_POST["nombre"]) ? print $_POST["nombre"] : "no existe!"; ?> ! <br>
  Tu correo es: <?php isset($_POST["email"]) ? print $_POST["email"]: "No existe!"; ?>
  

  
  echo "prueba finalizada!"; 