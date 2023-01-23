<?php

include("conexion.php");

$id_productos=$_POST['id_productos'];
$nombre=$_POST['nombre'];
$proveedor=$_POST['proveedor'];

$sql="INSERT INTO producto VALUES ('$id_productos', '$nombre', '$proveedor')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}

?>                                                                                                          