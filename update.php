<?php

include("conexion.php");

$id_productos=$_POST['id_productos'];
$nombre=$_POST['nombre'];
$proveedor=$_POST['proveedor'];

$sql="UPDATE `producto` SET `id_productos`='$id_productos',`nombre`='$nombre',`proveedor`='$proveedor' WHERE id_productos='$id_productos'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: index.php");
    }
?>