<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proyecto | Programacion Avanzada</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="cargando.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>

  <!-- cargando -->
  <div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
  </div>
  <!-- fin -->



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <img src="Imagenes/logoav.png" alt="" width="100" height="54">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ventas.php">Servicios</a>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Servicios</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="servicios.php">Contacto</a>
          </li>
        </ul>

        <div class="d-flex">
          <li class="nav-item">
            <img src="Imagenes/utb.png" style="width: 50px; height: 50px;">
          </li>
        </div>
        <div class="d-flex">
          <li class="nav-item">
            <img src="Imagenes/fafi.png" style="width: 50px; height: 50px;">
          </li>
        </div>

        <!--
        <form class="d-flex" style="margin-left: 550px; width: 480px;">
          <input class="form-control me-2" type="search" placeholder="¿Que desea Buscar?" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Buscar</button>
        </form>-->
      </div>
    </div>
  </nav>

  <!--:::::::Portada-001:::::::-->
  <div class="wrp">
    <div class="portada"></div>
    <div class="contenido">
      <div class="info">
        <h1>Creamos tu Sitio Web con las &Uacute;ltimas Tecnolog&iacute;as</h1>
        <a href="https://api.whatsapp.com/send?phone=593998419397&text=holaa%20soy%20kevo">Contactar</a>
      </div>
    </div>
    <div class="curveado">
      <img src="Imagenes/img2.svg">
    </div>
    <!--:::::::FIN-Portada-001:::::::-->

  </div>

  <div class="main d-flex " style="margin: 10px;">

    <article class="formulario">


      <div class="container" style="margin-top: 60px;">
        <div class="row">

          <div class="col">
            <h1>Ingrese datos</h1>
            <form action="insert.php" method="POST" style="margin-top: -125px;">

              <input type="text" class="form-control mb-3" name="id_producto" placeholder="Codigo">
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
              <input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor">

              <input type="submit" class="btn btn-primary">
            </form>
          </div>

          <div class="col-md-8">
            <table class="table">
              <thead class="table-success table-striped">
                <tr>
                  <th>Codigo</th>
                  <th>Producto</th>
                  <th>Proveedor</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <?php
                include_once("conexion.php");
                $sql = "SELECT * FROM producto";
                $resultset = mysqli_query($conexion, $sql) or die("database error:" . mysqli_error($conexion));
                while ($row = mysqli_fetch_assoc($resultset)) {
                ?>
                  <tr>
                    <th><?php echo $row['id_productos'] ?></th>
                    <th><?php echo $row['nombre'] ?></th>
                    <th><?php echo $row['proveedor'] ?></th>
                    <th><a href="actualizar.php?id_productos=<?php echo $row['id_productos'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="eliminar.php?id_productos=<?php echo $row['id_productos'] ?>" class="btn btn-danger">Eliminar</a></th>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>



    </article>





    <aside class="publicidad" style="margin: 5px; width: 500px;">
      <h2 class="text-center" style="font-weight: bold; color: #F58E28">Publicidad</h2>
      <?php
      include_once("conexion.php");
      $sql = "SELECT * FROM `publicidad` WHERE `estado` = '1'";
      $resultset = mysqli_query($conexion, $sql) or die("database error:" . mysqli_error($conexion));
      while ($row = mysqli_fetch_assoc($resultset)) {
      ?>
        <div class="jumbotron">
          <img class="image" src="data:image/png;base64,<?php echo base64_encode($row['image']); ?>" style="height: 300px; width: 100%;">
          <h1 class="display-4" style="color: black;"><?php echo $row['nombre']; ?></h1>
          <p class="lead"><?php echo $row['descrip']; ?></p>

          <hr class="my-4" style="font-style: italic;">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="<?php echo $row['link']; ?>" role="button">Learn more</a>
          </p>
        </div>

      <?php } ?>
    </aside>



  </div>

  <h2 class="text-center" style="font-weight: bold; color: #F58E28">Categorias</h2>
  <div class="page-content page-container" id="page-content">
    <div class="padding">
      <div class="row container-fluid">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Nuestras Marcas</h4>
              <div class="owl-carousel">
                <div class="item"> <img src="Imagenes/img1.jpg" alt="image" /> </div>
                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
                <div class="item"> <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image" /> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <h2 class="d-flex justify-content-center">Nuestro Team <span style="font-weight: bold; color: #F58E28">"Los Avengers"</span></h2>

  <div class="container mt-3 d-flex justify-content-lg-center" style="margin: 20px;">
    <div class="row">

      <?php
      include_once("conexion.php");
      $sql = "SELECT * FROM team";
      $resultset = mysqli_query($conexion, $sql) or die("database error:" . mysqli_error($conexion));
      while ($row = mysqli_fetch_assoc($resultset)) {
      ?>


        <div class="team rounded border border-info" style="margin: 20px;">
          <div class="row">
            <!-- team -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 18rem;">

                <div class="image bg-image" style="background-image: url(Imagenes/dep.jpg);">
                  <img class="rounded-circle mx-auto d-block img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['image']); ?>" alt="Card image cap" style="border: 3px solid #618BCC ; height: 200px; width: 200px; margin: 20px; object-fit: cover;">
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-center" style="font-weight: bold"><?php echo $row['nombre']; ?></div>
                  <p class="card-text d-flex justify-content-center"><?php echo $row['cargo']; ?></p>
                </div>
                <div class="d-flex justify-content-center">
                  <a href="<?php echo $row['facebook']; ?>" target="_blank"><img src="images/face.png" style="height: 40px; width: 40px"></a>
                  <a href="<?php echo $row['insta']; ?>"><img src="images/insta.png" style="height: 40px; width: 40px;"></a>
                  <a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp']; ?>&text=holaa%20soy%20noe" target="_black"><img src="images/what.png" style="height: 40px; width: 40px;"></a>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info openBtn" style="margin-top: 20px;" data-toggle="modal" data-target="#exampleModalLong">
                  Ver más
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Noe Vera</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col">
                            <img class="card-img-top" src="images/noe.jpeg">
                          </div>
                          <div class="col">
                            <p>Hola soy Noe Vera Yepez soy estudiante de sexto semestre de la Carrera de Sistemas de Informacion de la
                              Universidad Tecnica de Babahoyo. Vivo en el canton Vinces tengo 21 de años de edad.
                              Me gusta las peliculas, ver futbol, y sobre todo me gusta aprender sobre el mundo de la tecnologia.</p>

                            <p>Mi meta ahora es poder graduarme, para conseguir un trabajo y si Dios lo permite tener un emprendimiento
                              para dar plazas de trabajo.</p>
                          </div>
                        </div>
                        <div>
                          <h2>Conocimientos</h2>
                          <ul>
                            <li><span class="p-2"><i class="fab fa-html5"></i></span>HTML</li>
                            <li><span class="p-2"><i class="fab fa-php"></i></span>PHP</li>
                            <li><span class="p-2"><i class="fas fa-database"></i></span>MYSQL</li>
                            <li><span class="p-2"><i class="fab fa-css3"></i></span>CSS</li>
                          </ul>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>


        </div>
      <?php } ?>

    </div>
  </div>

  <!-- END OF TESTIMONIALS -->

  <hr>
  <div class="row-fluid">
    <div class="container">
      <div class="col">
        <div class="carousel-inner" role="listbox">
          <?php

          $sql = "SELECT * FROM `footerpubli`";
          $resultset = mysqli_query($conexion, $sql) or die("database error:" . mysqli_error($conexion));


          for ($i = 1; $i <= 6; ++$i) { ?>
            <div class="carousel-item active">
              <img class="image" src="data:image/png;base64,<?php echo base64_encode($sql['imagen']); ?>">
            </div>
        </div>
      <?php
          }
      ?>

      </div>

    </div>

  </div>

  <div class="col-md-6">
    <?php
    $cont_contenido = 0;
    $resultado_carrusel = mysqli_query($conexion, $result_carrusel);
    while ($row_slide = mysqli_fetch_assoc($resultado_carrusel)) {
      if ($cont_contenido == 0) {
        $ap_cont = "block";
      } else {
        $ap_cont = "none";
      }
      echo "<div class='imagen" . $cont_contenido . " contenido' style='display: $ap_cont;'>";
      echo "<h3>" . $row_slide['titulo'] . "</h3>";
      echo "<p>" . $row_slide['descripcion'] . "</p>";
      echo "<a class='btn btn-" . $row_slide['cor_boton'] . "' href='" . $row_slide['url'] . "' role='button'>" . $row_slide['text_url'] . "</a>";
      echo "</div>";
      $cont_contenido++;
    }
    ?>
  </div>
  </div>
  </div>




  </div>




  <footer class="footer-10">
    <div class="container">
      <div class="row mb-5 pb-3 no-gutters">
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
          <div class="con con-1 w-100 py-5">
            <div class="con-info w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-call"></span>
              </div>
              <div class="text">
                <span>(+593) 99 1234 5678</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
          <div class="con con-2 w-100 py-5">
            <div class="con-info w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-mail"></span>
              </div>
              <div class="text">
                <span>info@email.com</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
          <div class="con con-3 w-100 py-5">
            <div class="con-info w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-pin"></span>
              </div>
              <div class="text">
                <span>Babahoyo, Los Rios, Ecuador</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">ACERCA DE</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="d-block">Nuestra historia</a></li>
                <li><a href="#" class="d-block">Premios</a></li>
                <li><a href="#" class="d-block">Nuestro Equipo</a></li>
                <li><a href="#" class="d-block">Carrera</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">COMPAÑÍA</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="d-block">Nuestros servicios</a></li>
                <li><a href="#" class="d-block">Clientes</a></li>
                <li><a href="#" class="d-block">Contacto</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">RECURSOS</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="d-block">Blog</a></li>
                <li><a href="#" class="d-block">Boletín</a></li>
                <li><a href="#" class="d-block">Política de Privacidad</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 mb-md-0 mb-4">
          <h2 class="footer-heading">SUBSCRIBIR</h2>
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control rounded-left" placeholder="Enter email address">
              <button type="submit" class="form-control submit rounded-right">Subscribirse</button>
            </div>
            <span class="subheading">Obtenga actualizaciones de marketing digital en su buzón</span>
          </form>
        </div>
      </div>
      <div class="row mt-5 pt-4 border-top">
        <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
          <p class="copyright mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Todos los derechos reservados. | Los Avengers <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">El Kevo</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
        <div class="col-md-6 col-lg-4 text-md-right">
          <ul class="ftco-footer-social p-0">
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="main.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>



  <script type="text/javascript">
    $(document).ready(function() {
      setTimeout(function() {
        $(".cargando").hide();
      }, 500);

    });
  </script>
  <!-- slider categoria -->
  <script>






  </script>



</body>

</html>