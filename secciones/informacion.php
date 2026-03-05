<?php

include_once '../configuraciones/bd.php';

$conexionBD=BD::crearInstancia();

$consulta = $conexionBD->prepare("SELECT * FROM perfil_2");
$consulta->execute();
$listaNombre2=$consulta->fetchAll(PDO::FETCH_ASSOC);

$consulta = $conexionBD->prepare("SELECT * FROM perfil");
$consulta->execute();
$listaNombre1=$consulta->fetchAll(PDO::FETCH_ASSOC);

?>