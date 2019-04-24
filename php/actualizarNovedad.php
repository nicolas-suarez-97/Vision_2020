<?php

include_once 'conexion.php';

if($_GET){
    $noReporte = $_GET['noReporte'];
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


    $sql = 'UPDATE novedad SET motivo=?,diagnostico=?,cambioEquipo=?,descripEquipo=?,observaciones=?,costo=?,idUsuario=?,fechaModificacion=? WHERE idReporte=?';
    $sentencia = $pdo->prepare($sql);    
    $sentencia->execute(array($motivo,$diagnostico,$cambiarEquipo,$descripEquipo,$observaciones,$costo,$idUsuario,$modificacion,$noReporte));
    $resultado = $sentencia->fetch();
}
header('location:../index.php');    