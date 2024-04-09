<?php



function listar_provincias()
{
   include './conexion.php';
   $resultado = mysqli_query($conexion, 'SELECT * FROM `provincias`');
   $camiones = [];
   while($fila = mysqli_fetch_assoc($resultado))
   {
       array_push($masc);
   }
}
?>