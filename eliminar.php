<?php
    include ("conexion.php");
    if (isset($_GET['id_productos'])){    
        $id_productos = $_GET['id_productos'];
        
        $delete = "DELETE FROM producto WHERE id_productos = $id_productos";

        if (mysqli_query($conexion, $delete)){
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger'; # Funcion de bootstrap
            header('Location:index.php'); # Redireccionar el archivo
        }else{
            echo "Error al borrar registro: " . mysqli_error($conexion);
        }
    }
?>
