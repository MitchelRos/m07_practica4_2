<?php

#variables que contienen los datos de conexion de la DB
$host = "localhost";
$name = "productdb";
$user = "root";
$passwd = "";

#Creamos una conexion a la DB
$connection = new mysqli($host, $user, $passwd, $name);
echo 'Conectat via mysqli';
?>