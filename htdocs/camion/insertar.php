<?php

function intertar_camion($matricula, $modelo, $tipo, $potenica)
{
    include './conexion.php';
    $consulta = "INSERT INTO `camiones` (`matricula`, `modelo`, `tipo`, `potencia`) VALUES ('$matricula', '$modelo', '$tipo', '$potencia');";
    $resultado = my_sqli_query($conexion, $consulta);
    return $resultado;
}