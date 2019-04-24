<?php

include_once 'conexion.php';

if($_GET){
    $id = $_GET['id'];
    

    $sql = 'DELETE FROM novedad WHERE idReporte=?';
    $sentencia = $pdo->prepare($sql);    
    $sentencia->execute(array($id));
    $resultado = $sentencia->fetch();

}

header('location:../index.php');    