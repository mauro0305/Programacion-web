<!doctype html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventario - TechControl</title>

    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>

    <header>

        <h1>TechControl</h1>

        <p>Inventario de equipos tecnológicos</p>

    </header>

    <main>

        <section class="inventario">

            <h2>Equipos registrados</h2>

            <?php if ($resultado->num_rows > 0): ?>

                <div class="tabla-contenedor">

                    <table>

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Número de serie</th>
                                <th>Estado</th>
                                <th>Fecha de registro</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php while ($equipo = $resultado->fetch_assoc()): ?>

                                <tr>

                                    <td><?php echo $equipo["id"]; ?></td>

                                    <td><?php echo $equipo["nombre"]; ?></td>

                                    <td><?php echo $equipo["tipo"]; ?></td>

                                    <td><?php echo $equipo["marca"]; ?></td>

                                    <td><?php echo $equipo["modelo"]; ?></td>

                                    <td><?php echo $equipo["numero_serie"]; ?></td>

                                    <td><?php echo $equipo["estado"]; ?></td>

                                    <td><?php echo $equipo["fecha_registro"]; ?></td>

                                </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <p>No hay equipos registrados.</p>

            <?php endif; ?>

            <div class="acciones">

    <a href="/Actividad%20Integradora%202/vista/registrar.php">
        Registrar equipo
    </a>

    <a href="/Actividad%20Integradora%202/index.html">
        Volver al inicio
    </a>

</div>

    </section>

    </main>

</body>

</html>