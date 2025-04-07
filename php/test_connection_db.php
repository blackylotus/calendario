<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coso";

//crear la coneccion

$conn = new mysqli($servername, $username, $password, $dbname);

//verificar la coneccion

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}