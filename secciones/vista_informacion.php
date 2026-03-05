<?php include('../template/cabecera.php')?>
<?php include('../secciones/informacion.php')?>

<style>
    body{
        background-color: dimgray;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12 color_principal text-center">
        <h1>Creadores</h1>
        <p><span>---</span>Estudiantes de Ing. Computacion<span>---</span></p>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                <p>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                (+58 0412-9459012)
                </p>
                </div>
                <div class="col">
                <p>              
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                    <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                    <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                    <path d="M16 4l-4 4l-4 -4" />
                    <path d="M4 6.5l8 7.5l8 -7.5" />
                </svg>
                adrianjosefigueroasalazar6@gmail.com
                </p>
                </div>
                <div class="col">
                <p>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                Venezuela
                </p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-4 color_izquierdo color_izquierdo img">
            <br>
            <img  style="border-radius: 20%;" src="../fotoperfil/Foto.jpg" alt="Imagen de perfil" class="rounded mx-auto d-block">
            <br>
            <p class="text-center fst-italic text-light fs-5">Estudiante de la Universidad de Oriente Nucleo de Anzoátegui aspirante a titulo de Ingeniero de Computacion.</p>
            <br>
            <br>
            <br>
            <img  style="border-radius: 20%;" src="../fotoperfil/pfpJF.jpg" alt="Imagen de perfil" class="rounded mx-auto d-block">
            <br>
            <p class="text-center fst-italic text-light fs-5">Estudiante de la Universidad de Oriente Nucleo de Anzoátegui aspirante a titulo de Ingeniero de Computacion.</p>
        </div>
        <div class="col-8 color_derecho">
            <p class="fs-3 text-light">Datos:</p>
            <?php foreach($listaNombre2 as $nombre2){?>
            <p class="fs-5">Nombre: <?php echo $nombre2['nombre_alumno']?></p>
            <p class="fs-5">Cedula: <?php echo $nombre2['cedula']?></p>
            <p class="fs-5">Universidad: <?php echo $nombre2['universidad']?></p>
            <p class="fs-5">Carrera: <?php echo $nombre2['carrera']?></p>
            <p class="fs-5">Edad: <?php echo $nombre2['bio']?></p>
            <p class="fs-5">Lenguajes de manejo: <?php echo $nombre2['habilidades']?></p>
            <?php } ?>
            <br>
            <br>
            <p class="fs-3 text-light">Datos:</p>
            <?php foreach($listaNombre1 as $nombre1){?>
            <p class="fs-5">Nombre: <?php echo $nombre1['nombre_alumno']?></p>
            <p class="fs-5">Cedula: <?php echo $nombre1['cedula']?></p>
            <p class="fs-5">Universidad: <?php echo $nombre1['universidad']?></p>
            <p class="fs-5">Carrera: <?php echo $nombre1['carrera']?></p>
            <p class="fs-5">Edad: <?php echo $nombre1['bio']?></p>
            <p class="fs-5">Lenguajes de manejo: <?php echo $nombre1['habilidades']?></p>            
            <?php } ?>
        </div>
    </div>
</div>

<?php include('../template/pie.php')?>