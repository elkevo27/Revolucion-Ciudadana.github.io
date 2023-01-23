<?php
include("conexion.php");

$id_productos = $_GET['id_productos'];

$sql = "SELECT * FROM `producto` WHERE id_productos='$id_productos'";
$resultset = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultset);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="text" class="form-control mb-3" name="id_productos" placeholder="Codigo">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>