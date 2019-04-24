<?php

$nombres = $_POST['nombres'];        
$apellidos = $_POST['apellidos'];
$nit = $_POST['nit'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$marca = $_POST['marca'];
$ip = $_POST['ip'];
$mac = $_POST['mac'];
$plan = $_POST['plan'];
$valor = $_POST['valor'];
$creacion = date("Y/m/d");
$modificacion = date("Y/m/d");
    
    header('location:../index.php');    
    include_once 'conexion.php';
    $sql_agregar = 'INSERT INTO usuarios (nombres,apellidos,nit,telefono,email,direccion,marca,ip,mac,plan,valor,fechaCreacion,fechaModificacion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    
    
    if($sentencia_agregar->execute(array($nombres,$apellidos,$nit,$telefono,$email,$direccion,$marca,$ip,$mac,$plan,$valor,$creacion,$modificacion))){
        echo '<br> Agregado <br>';
    }else{
        echo '<br> Error <br>';
    }
    
    $sentencia_agregar=null;
    $pdo = null;     
