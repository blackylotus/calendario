<?php 
echo "prueba1";

  $enlace= mysqli_connect("localhost", "root", "root", "reservar_citas")

  if(!$enlace) {
    echo "error en codigo enlace linea 4"  . PHP_EOL;
    echo "prueba" . mysqli_connect_errno() . PHP_EOL;
    echo "error" . mysqli_connect_error()  . PHP EOL;

   }

   echo "conexcion completa" . PHP_EOL;
   echo "prueba: "  . mysqli_get_host_info($enlace) . PHP EOL;

   mysqli_close($enlace);

   ?>
