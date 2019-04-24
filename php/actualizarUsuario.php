<?php

include_once 'conexion.php';

if($_GET){
    $nit = $_GET['nit'];
    $nombres = $_POST['nombres'];        
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $marca = $_POST['marca'];
    $ip = $_POST['ip'];
    $mac = $_POST['mac'];
    $plan = $_POST['plan'];
    $valor = $_POST['valor'];
    $modificacion = date("Y/m/d");  


    $sql = 'UPDATE usuarios SET nombres=?,apellidos=?,telefono=?,email=?,direccion=?,marca=?,ip=?,mac=?,plan=?,valor=?,fechaModificacion=? WHERE nit=?';
    $sentencia = $pdo->prepare($sql);    
    $sentencia->execute(array($nombres,$apellidos,$telefono,$email,$direccion,$marca,$ip,$mac,$plan,$valor,$modificacion,$nit));
    $resultado = $sentencia->fetch();

}

header('location:../index.php');    