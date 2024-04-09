<?php

function listar_provincia_by_codigo($matricula)
{
    include './conexion.php';
    $sql = "SELECT * FROM `provincias` WHERE 'codigo' = $codigo";
    $resultado = mysqli_query($conexion. $sql);
    $codigo = mysqli_fetch_assoc($resultado);
    return $codigo;
}