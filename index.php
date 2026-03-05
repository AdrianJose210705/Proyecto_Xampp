<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <!-- Contenido -->
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <!-- Cabesera -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <form action="secciones/index.php" method="post">
                    <div class="card">
                        <div class="card-header">Inicio de sesión</div>
                        <!-- Titulo -->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Usuario</label>
                                <!-- Caja de texto para usuario -->
                                <input
                                    type="text"
                                    class="form-control"
                                    name="Usuario"
                                    id="Usuario"
                                    aria-describedby="helpId"
                                    placeholder="Usuario"
                                />
                                <small id="helpId" class="form-text text-muted">Escriba su usuario</small>
                            </div>
                            <!-- Titulo -->
                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <!-- Caja de texto para contraseña -->
                                <input
                                    type="password"
                                    class="form-control"
                                    name="Contraseña"
                                    id="Contraseña"
                                    aria-describedby="helpId"
                                    placeholder="Contraseña"
                                />
                                <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                            </div>
                            <!-- Boton de inicio de secion -->
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >Inciar secion</button>       
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>