<?php 
echo "prueba1";



$conn->$query(CREATE DATABASE IF NOT EXISTS, "reservar_citas2")



  



// mención, investigando encontré que $enlace, es el nombre atribuido a la conexión
$enlace= mysqli_connect("localhost", "root", "root", "reservar_citas")

$result = mysqli_query($enlace, $query);

/https://www.php.net/manual/es/mysqli.query.php
if (mysqli_query($enlace, "CREATE TEMPORARY DATABASE reservar_citas LIKE citas") === TRUE) {
    echo ("Se creó con éxtio la tabla reservar_citas.\n");

/correccion
if <mysqli->
    <query></query>
</mysqli->


if(!$enlace) {
    echo "error en codigo enlace linea 4"  . PHP_EOL;
    echo "prueba" . mysqli_connect_errno() . PHP_EOL;
    echo "error" . mysqli_connect_error()  . PHP EOL;

   }

   echo "conexcion completa" . PHP_EOL;
   echo "prueba: "  . mysqli_get_host_info($enlace) . PHP EOL;

   mysqli_close($enlace);

   ?>
