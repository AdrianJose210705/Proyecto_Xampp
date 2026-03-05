<?php include('../template/cabecera.php')?>

<style>
    body{
        background-color:dimgray;
    }
</style>

<?php
if (isset($_POST['ejecutar_python'])) {
    // Usamos comillas dobles escapadas para que Windows entienda los espacios
    $python = "\"C:/Users/Hector/AppData/Local/Programs/Python/Python314/python.exe\"";
    $script = "\"C:/xampp/htdocs/app-main/script/script.py\"";
    
    $comando = "$python $script 2>&1";
    
    exec($comando, $output);
    
    // Esto es para que veas el error real si falla
    echo "<pre>";
    print_r($output);
    echo "</pre>";
    
    // Comenta estas líneas hasta que veas que funciona
    // header("Location: " . $_SERVER['PHP_SELF']);
    // exit();
}

?>

<div class="reporte-contenedor">
    <h3>Resumen de datos en el sistema</h3>
<br>
<pre>
    <?php 
        clearstatcache();
        if (file_exists('../reportes/reporte.txt')){
            echo file_get_contents('../reportes/reporte.txt');
        } else {
            echo "El reporte aun no ha sido generado";
        }
    ?>
    <form>
        <button type="submit" name="ejecutar_python" class="btn btn-info">Actualizar</button>
    </form>
</pre>
</div>

<?php include('../template/pie.php')?>      