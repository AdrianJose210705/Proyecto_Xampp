<?php include('../template/cabecera.php')?>

<style>
    body{
        background-color:dimgray;
    }
</style>

<?php
if (isset($_POST['ejecutar_python'])) {

    $python = "\"C:/Users/Dipper/AppData/Local/Programs/Python/Python312/python.exe\"";
    $script = "\"C:/Users/Dipper/Documents/GitHub/Proyecto_Xampp#/script/script.py\"";
    
    $comando = "$python $script 2>&1";
    
    exec($comando, $output);
    
    if (!empty($output)) {
        echo "<div class='alert alert-secondary'><pre>" . implode("\n", $output) . "</pre></div>";
    }
}


?>

<div class="reporte-contenedor">
    <h3>Resumen de datos en el sistema</h3>
    <br>
    <pre><?php 
        clearstatcache();
        $ruta_txt = '../reportes/reporte.txt';
        if (file_exists($ruta_txt)){
            echo file_get_contents($ruta_txt);
        } else {
            echo "El reporte aun no ha sido generado. Presiona Actualizar.";
        }
    ?></pre>
    
    <form method="post">
        <button type="submit" name="ejecutar_python" class="btn btn-info">Actualizar</button>
    </form>
</div>

<?php include('../template/pie.php')?>