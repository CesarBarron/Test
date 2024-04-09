<?php

function listar_camion_by_matricula($matricula)
{
    include './conexion.php';
    $sql = "SELECT * FROM `camiones` WHERE 'matricula' = $matricula";
    $resultado = mysqli_query($conexion. $sql);
    $camion = mysqli_fetch_assoc($resultado);
    return $camion;
}