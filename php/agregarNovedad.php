<?php

$noReporte = $_POST['noReporte'];
$fecha = $_POST['fecha'];
$idUsuario = $_POST['nit'];        
$motivo = $_POST['motivo'];
$diagnostico = $_POST['diagnostico'];
if(isset($_POST['cambio'])){
    $cambiarEquipo = 1;    
}else{
    $cambiarEquipo = 0;
}
$descripEquipo = $_POST['cuales'];
$observaciones = $_POST['observaciones'];
$costo = $_POST['costo'];
$creacion = date("Y/m/d");
$modificacion = date("Y/m/d");


    
    header('location:../index.php');    
    include_once 'conexion.php';
    $sql_agregar = 'INSERT INTO novedad (idReporte,motivo,diagnostico,cambioEquipo,descripEquipo,observaciones,costo,idUsuario,fechaCreacion,fechaModificacion,estado) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    
    
    if($sentencia_agregar->execute(array($noReporte,$motivo,$diagnostico,$cambiarEquipo,$descripEquipo,$observaciones,$costo,$idUsuario,$fecha,$modificacion,"Pendiente"))){
        echo '<br> Agregado <br>';
    }else{
        echo '<br> Error <br>';
    }
    
    $sentencia_agregar=null;
    $pdo = null;

