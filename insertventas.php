<?php

include("conexion.php");

$txt_cliente=$_POST['txt_cliente'];
$drop_produ=$_POST['drop_produ'];
$float_precio=$_POST['float_precio'];
$int_cantidad=$_POST['int_cantidad'];
$fecha=$_POST['fecha'];
$txt_sector=$_POST['txt_sector'];
$txt_novedad=$_POST['txt_novedad'];


$sql="INSERT INTO `ventas` VALUES ('$txt_cliente', '$drop_produ', '$float_precio', '$int_cantidad', '$fecha', '$txt_sector', '$txt_novedad')";
$query= mysqli_query($conexion,$sql);

if($query){
    echo("Venta Registrada");
    
}else {
}

?>  