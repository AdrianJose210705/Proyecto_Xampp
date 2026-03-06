<?php
session_start();
//se coloca de esta manera a diferencia de las otras para que busque una ruta mas limpia y directa
include_once __DIR__ . '../configuraciones/bd.php'; 

if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Contraseña = validate($_POST['Contraseña']);

    if (empty($Usuario)) {
        header("Location: ../index.php?error=El usuario es requerido");
        exit();
    } elseif (empty($Contraseña)) {
        header("Location: ../index.php?error=La contraseña es requerida");
        exit();
    } else {
        $Contraseña_final = $Contraseña;

        try {

            $conexion = BD::crearInstancia();
            //busca en la base de datos y evitas inyecciones
            $sql = "SELECT * FROM Incio WHERE nombre = :user AND contraseña = :pass";
            $query = $conexion->prepare($sql);
            //Esto va a vincular los parametro
            $query->bindParam(':user', $Usuario);
            $query->bindParam(':pass', $Contraseña_final);
            $query->execute();

            $row = $query->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                // Esto se encarga de mapear el usuario 
                $_SESSION['Usuario'] = $row['nombre'];
                $_SESSION['nombre_completo'] = $row['nombre_completo'];
                $_SESSION['id'] = $row['id'];
                
                header("Location: ../secciones/index.php");
                exit();
            } else {
                header("Location: ../index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        } catch (Exception $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>