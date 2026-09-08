<?php

require_once "../conexion.php";
require_once "../modelo/Equipo.php";

$equipo = new Equipo($conexion);


/* ==============================
   REGISTRAR EQUIPO
   ============================== */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $numero_serie = $_POST["numero_serie"];
    $estado = $_POST["estado"];

    $resultado = $equipo->registrar(
        $nombre,
        $tipo,
        $marca,
        $modelo,
        $numero_serie,
        $estado
    );

    if ($resultado) {

        header("Location: ../vista/registrar.php?mensaje=exito");
        exit;

    } else {

        header("Location: ../vista/registrar.php?mensaje=error");
        exit;

    }
}


/* ==============================
   LISTAR EQUIPOS
   ============================== */

if (isset($_GET["accion"]) && $_GET["accion"] == "listar") {

    $resultado = $equipo->listar();

    require_once "../vista/listar.php";

    exit;
}

?>