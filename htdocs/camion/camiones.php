<?php



function listar_camiones()
{
   include './conexion.php';
   $resultado = mysqli_query($conexion, 'SELECT * FROM `camiones`');
   $camiones = [];
   while($fila = mysqli_fetch_assoc($resultado))
   {
       array_push($camiones, $filas);
   }
}
?>