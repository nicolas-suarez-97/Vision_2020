<?php

include_once 'conexion.php';

    if($_GET){
        $noReporte = $_GET['id'];
        $modificacion = date("Y/m/d");

        echo $noReporte;
        $sql = 'UPDATE novedad SET estado=?,fechaModificacion=? WHERE idReporte=?';
        $sentencia = $pdo->prepare($sql);    
        $sentencia->execute(array("Solucionado",$modificacion,$noReporte));
        $resultado = $sentencia->fetch();
    }
    header('location:../index.php');    