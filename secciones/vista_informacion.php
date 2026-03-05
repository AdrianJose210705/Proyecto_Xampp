<?php include('../template/cabecera.php')?>
<?php include('../secciones/informacion.php')?>


<div class="container">
    <div class="row">
        <div class="col-12 color_principal text-center">
        <p>CV</p>
        <h1>Creadores</h1>
        <p><span>---</span>Estudiantes de Ing. Computacion<span>---</span></p>
        </div>
        <div class="col-4 color_izquierdo">.col-4<br>



        </div>
        <div class="col-8 colo_derecho">.col-6<br>




        </div>
    </div>
</div>



















            <tbody>
            <?php foreach($listaNombre2 as $nombre){?>
                <tr>
                    <td><?php echo $nombre ['nombre_alumno']?></td>
                    <td>CI</td>
                    <td>Universidad</td>
                    <td>Carerra Universitaria</td>
                    <td><?php echo $nombre ['foto_url']?></td>
                    <td>Habilidades</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    

</div>

<?php include('../template/pie.php')?>