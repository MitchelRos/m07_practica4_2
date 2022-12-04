<?php
#Importa DB
include 'conection_msqli.php';

#make new var and attach the path DB
$id = $_GET['id'];
$nom = $_GET['name'];
$descripcio = $_GET['description'];
$preu = $_GET['price'];

#Query que insertara los datos anteriores
$query = sprintf("UPDATE products SET name='%s', description='%s', price=%u WHERE ID=%u", $nom, $descripcio, $preu, $id);

#Executa la $query anterior
$mysqlquery = mysqli_query($connection, $query);

#Retorna al index.php
header('Location: ' . 'index.php');
?>