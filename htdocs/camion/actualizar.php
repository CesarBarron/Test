<?php

function actualizar_camion($matricula, $modelo, $tipo, $potenica)
{
    include './conexion.php';
    $consulta = "UPDATE `camiones` SET `modelo` = '$modelo', `tipo` = '$tipo', `potencia` = '$potencia' WHERE `camiones`.`matricula` = $matricula;";
    $resultado = my_sqli_query($conexion, $consulta);
    return $resultado;
}