<?php

function intertar_provincias($codigo, $nombre)
{
    include './conexion.php';
    $consulta = "INSERT INTO `provincias` (`codigo`, `nombre`) VALUES ('$codigo', '$nombre');";
    $resultado = my_sqli_query($conexion, $consulta);
    return $resultado;
}