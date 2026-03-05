<?php include('../template/cabecera.php')?>
<?php include('../secciones/gestion.php')?>

<div class="col-md-5">

<form action="" method="post">
    <div class="card">
    <div class="card-header">Gestion de datos</div>
    <div class="card-body">
        <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input
        type="text"
        class="form-control"
        name="id"
        id="id"
        value="<?php echo $id ?>"
        aria-describedby="helpId"
        placeholder="ID"/>
</div>  
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input
        type="text"
        class="form-control"
        name="Nombre"
        id="Nombre"
        value="<?php echo $Nombre ?>"
        aria-describedby="helpId"
        placeholder="Nombre"/>
</div>
<div class="mb-3">
    <label for="Mensaje" class="form-label">Mensaje</label>
    <textarea class="form-control" name="Mensaje" id="Mensaje"  rows="2"><?php echo $Mensaje ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Fecha/Hora</label>
    <input
        type="datetime-local"
        class="form-control"
        name="fecha"
        id="fecha"
        value="<?php echo $fecha ?>"
        aria-describedby="helpId"
        placeholder="Fecha/Hora"/>
</div>
<div class="btn-group" role="group" aria-label="Button group name">
    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
    <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
</div>

    </div>

</div>
</form>

</div>
<div class="col-md-7">
<div class="card">
<div class="card-header">Tabla de Gestion de datos</div>
<div class="card-body">
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Fecha/Hora</th>
                    <th scope="col">Leído</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($listaNombre as $nombre){?>
                <tr>
                    <td><?php echo $nombre['id']?></td>
                    <td><?php echo $nombre['nombre']?></td>
                    <td><?php echo $nombre['mensaje']?></td>
                    <td><?php echo $nombre['fecha']?></td>
                    <td><?php echo ($nombre['leido'] ?? 0) ? "Leido" : "No Leido"; ?></td>
                    <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $nombre['id']?>"/>
                        <input type="submit" value="Seleccionar" name="accion" class="btn btn-info"/>
                        <?php if (!($nombre['leido'] ?? 0)) { ?>
                            <button type="submit" value="marcarLeido" name="accion" class="btn btn-success">
                            Leído
                            </button>
                        <?php } ?>
                    </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    
</div>

<?php include('../template/pie.php')?>