<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor | La Vecinita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center p-4">Victor Salazar</h1>
    <div class="container">


        <form action="insertventas.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el nombre" name="txt_cliente">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Producto</label>
                <select class="form-select" aria-label="Default select example" name="drop_produ">
                    <option value="0">Seleccione:</option>
                    <?php
                    include_once "conexion.php";
                    $sql = "SELECT id_productos as id_produ, nombre FROM `producto`;";
                    $Result = $conexion->query($sql);
                    while ($row = $Result->fetch_assoc()) {
                        echo '<option value="' . $row['id_produ'] . '">' . $row['nombre'] . '</option>';
                    }
                    ?>
                </select>

            </div>


            <div class="row">
                <?php
                $float_precio = 0;
                $int_cantidad = 0;
                $float_precio = $_GET['float_precio'];
                $int_cantidad = $_GET['int_cantidad'];
                $multi =  $float_precio * $int_cantidad;

                ?>
                <div class="col">
                    <label for="exampleFormControlInput1">Precio</label>
                    <input type="doubleval" class="form-control" placeholder="Ingrese el precio" name="float_precio">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1">Cantidad</label>
                    <input type="number" class="form-control" placeholder="Ingrese la cantidad" name="int_cantidad">

                </div>
                <div class="col">
                    <label for="exampleFormControlInput1">Total: .$multi</label>

                </div>

            </div>
            <div class="row">
                <div class="col p-4">
                    <label for="exampleFormControlInput1">Fecha</label>
                    <input type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="col" style="margin-right: 25px;">
                    <label for="exampleFormControlInput1">Sector</label>
                    <input type="text" class="form-control" placeholder="Ingrese el Sector" name="txt_sector">
                </div>


            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Novedades</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txt_novedad"></textarea>
            </div>
            <div class="total">

                <label for="total"></label>

            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end p-4">
                <button class="btn btn-primary me-md-2" type="submit" name="registrar" value="registrar">Registar</button>
                <button class="btn btn-danger" type="button">Cancelar</button>
            </div>
            <label for="total"> </label>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>