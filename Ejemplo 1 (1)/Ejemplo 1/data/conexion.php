<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "laurab";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("No hay conexiones: " .mysqli_connect_error());
}
?>