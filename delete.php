<?php
#Importa la conexio de la DB
include 'conection_msqli.php';

if (isset($_GET['id'])) {
    #Guarda el valor del dato
    $id = $_GET['id'];

    #Creamos un aquery que borra la 
    $query = "DELETE FROM products WHERE ID = $id";

    #Ejecutta la query sobre la DB
    $mysqlquery = mysqli_query($connection, $query);
}

#Al finalizar retorna al home o index
header('Location: ' . 'index.php');
?>
