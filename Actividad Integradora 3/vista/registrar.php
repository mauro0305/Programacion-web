<?php

$mensaje = "";

if (isset($_GET["mensaje"])) {

    if ($_GET["mensaje"] == "exito") {
        $mensaje = "¡Equipo registrado correctamente!";
    }

    if ($_GET["mensaje"] == "error") {
        $mensaje = "Ocurrió un error al registrar el equipo.";
    }
}

?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar equipo - TechControl</title>

    <link rel="stylesheet" href="../css/styles.css">

    <script src="../js/validaciones.js"></script>

</head>

<body>

    <header>

        <h1>TechControl</h1>

        <p>Registro de equipos tecnológicos</p>

    </header>

    <main>

        <section class="formulario">

            <h2>Registrar nuevo equipo</h2>

            <?php if ($mensaje != ""): ?>

                <p><?php echo $mensaje; ?></p>

            <?php endif; ?>

            <form id="formularioEquipo" method="POST" action="../controlador/EquipoController.php">

                <div class="campo">

    <label>Nombre:</label>

    <input type="text" id="nombre" name="nombre" required>

</div>

<div class="campo">

    <label>Tipo:</label>

    <input type="text" id="tipo" name="tipo" required>

</div>

<div class="campo">

    <label>Marca:</label>

    <input type="text" id="marca" name="marca" required>

</div>

<div class="campo">

    <label>Modelo:</label>

    <input type="text" id="modelo" name="modelo" required>

</div>

<div class="campo">

    <label>Número de serie:</label>

    <input type="text" id="numero_serie" name="numero_serie" required>

</div>

<div class="campo">

    <label>Estado:</label>

    <input type="text" id="estado" name="estado" required>

</div>

                <button type="submit">
                    Registrar equipo
                </button>

            </form>

            <a href="../index.html">Volver al inicio</a>

        </section>
        <script src="../js/validaciones.js"></script>

    </main>

</body>

</html>