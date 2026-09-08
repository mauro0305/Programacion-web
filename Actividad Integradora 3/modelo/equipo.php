<?php

class Equipo
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function registrar(
        $nombre,
        $tipo,
        $marca,
        $modelo,
        $numero_serie,
        $estado
    ) {

        $sql = "INSERT INTO equipos
                (nombre, tipo, marca, modelo, numero_serie, estado, fecha_registro)
                VALUES (?, ?, ?, ?, ?, ?, CURDATE())";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssssss",
            $nombre,
            $tipo,
            $marca,
            $modelo,
            $numero_serie,
            $estado
        );

        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT * FROM equipos";

        $resultado = $this->conexion->query($sql);

        return $resultado;
    }
}

?>