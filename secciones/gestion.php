<?php

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$Nombre=isset($_POST['Nombre'])?trim($_POST['Nombre']):'';
$Mensaje=isset($_POST['Mensaje'])?trim($_POST['Mensaje']):'';
$fecha=isset($_POST['fecha'])?$_POST['fecha']:date("Y-m-d H:i:s");
$leido=isset($_POST['btncheck1'])?$_POST['btncheck1']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            if ($Nombre !== '' && $Mensaje !== ''){
            $sql = "INSERT INTO contactos (id, nombre, mensaje, fecha) VALUES (NULL, :nombre, :mensaje, :fecha )";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre', $Nombre);
            $consulta->bindParam(':mensaje', $Mensaje);
            $consulta->bindParam(':fecha', $fecha); 
            $consulta->execute();
            } else {
                echo "¡ERROR!";
            }
            break;
        case 'editar':
            $sql="UPDATE contactos SET nombre=:nombre, mensaje=:mensaje, fecha=:fecha WHERE id=:id ";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->bindParam(':nombre', $Nombre);
            $consulta->bindParam(':mensaje', $Mensaje);
            $consulta->bindParam(':fecha', $fecha);
            $consulta->execute();
            break;
        case 'borrar':
            $sql="DELETE FROM contactos WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;
        case "Seleccionar";
            $sql="SELECT * FROM contactos WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $contactos=$consulta->fetch(PDO::FETCH_ASSOC);
            $Nombre=$contactos['nombre'];
            $Mensaje=$contactos['mensaje'];
            $fecha=$contactos['fecha'];
            break;
        case "marcarLeido":
            $sql = "UPDATE contactos SET leido = 1 WHERE id = :id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;
    }
}
//$conexionBD->exec("DROP TABLE IF EXISTS contactos") esto borra la base de datos;
$conexionBD->exec("CREATE TABLE IF NOT EXISTS contactos (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255), mensaje TEXT, fecha DATETIME)");
$consulta = $conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listaNombre=$consulta->fetchAll(PDO::FETCH_ASSOC);

?>