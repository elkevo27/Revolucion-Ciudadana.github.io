<?php
$result_carrusel = "SELECT * FROM `footerpubli` WHERE estado=1";
$resultado_carrusel = mysqli_query($conexion, $result_carrusel);
$cont_slide = 0;
while( $row_slide = mysqli_fetch_assoc($resultado_carrusel)){
	$active = "";
	if($cont_slide == 0){
		$active = "active";
	}
	echo "<div class='carousel-item $active'>";
	echo "<img class='d-block w-100' src='imagen/".$row_slide['id']."/".$row_slide['imagen']."' alt='".$row_slide['titulo']."'>";
	echo "</div>";
	$cont_slide++;
}
?>