<?php include('../template/cabecera.php')?>

<style>
    body{
        background-color:dimgray;
    }
</style>

<?php
if (isset($_POST['ejecutar_python'])) {

    $python = "\"C:/Users/Hector/AppData/Local/Programs/Python/Python314/python.exe\"";
    $script = "\"C:/xampp/htdocs/app-main/script/script.py\"";
    
    $comando = "$python $script 2>&1";
    
    exec($comando, $output);
    

    echo "<pre>";
    print_r($output);
    echo "</pre>";
    
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