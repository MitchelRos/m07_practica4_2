<?php
#Importamos la conexion de la DB
include 'conection_msqli.php';

#make new var and attach the path DB
$name = $_GET['name'];
$description = $_GET['description'];
$price = $_GET['price'];

#Query que insertara los datos anteriores
$query = sprintf("INSERT INTO products( name, description, price) VALUES ('%s','%s',%u)", $name, $description, $price);

#Executa la $query anterior
$mysqlquery = mysqli_query($connection, $query);

#Nos envia al home o index.php
header('Location: ' . 'index.php');
?>