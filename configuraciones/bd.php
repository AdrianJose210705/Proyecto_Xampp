<?php
class BD {
    public static $instancia = null;
    public static function crearInstancia(){
        if (!isset(self::$instancia)){        
            // Configuración para el docker
            $host = "localhost"; 
            $bd = "portafolio_db";
            $usuario = "root";
            $contrasena = "";
            try {
                self::$instancia = new PDO("mysql:host=$host;port=3307;dbname=$bd", $usuario, $contrasena);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (Exception $ex) {
                echo "Error de conexión: " . $ex->getMessage();
            }
            return self::$instancia;
        }
    }
}
?>