<?php

$link = 'mysql:host=localhost;dbname=base_datos_vision_2020';
$usuario = 'root';
$pass = '';

try{
    $pdo = new PDO($link,$usuario,$pass);
    //echo 'Conectado <br>';

}catch(PDOException $e){
    print "¡Error!: ".$e->getMessage()."</br>";
    die();
}