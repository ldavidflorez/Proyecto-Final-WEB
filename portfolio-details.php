<?php 

    require_once "./conexionDB.php";
    function portafolioDetails(){
        $link=conexion();
        //Preparar consulta
        //1)R->Leer
        $consultaSQL= "SELECT * FROM productos WHERE id='".$_GET['id']."'";
        $elemento="";
        //se verifica que se logre hacer la consulta
        if($resultado=$link->query($consultaSQL)){
            while($Producto=$resultado->fetch_assoc()){
              $elemento.="<section id='portfolio-details' class='portfolio-details'><div class='container'><div class='row gy-4'>";
              $elemento.="<div class='col-lg-8'><div class='portfolio-details-slider swiper'><div class='swiper-wrapper align-items-center'>";
              $elemento.=" <div class='swiper-slide'>";
              $elemento.="<img src='assets/img/portfolio/".$Producto['imagen']."'>";
              $elemento.="</div></div><div class='swiper-pagination'></div></div></div>";
              $elemento.="<div class='col-lg-4'><div class='portfolio-info'>";
              $elemento.="<h3>".$Producto['nombre']."</h3>";
              $elemento.="<ul><li><strong>Precio</strong>: ".$Producto['precio']."</li>";
              $elemento.="<li><strong>Marca</strong>: ".$Producto['marca']."</li>";
              $elemento.="<li><a href='inner-page.php?id=".$Producto['id']."'><strong>Click aquí para comprar</strong></a></li></ul></div>";
              $elemento.="<div class='portfolio-description'><h2>Caracteristicas</h2>";
              $elemento.="<p>".$Producto['caracteristica']."</p></div></div></div></div></section>";
            
            }
                
            
        }
        $link->close();
        return print($elemento);
      }

   
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Compu Mall</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Multi - v4.6.0
    * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  
  </head>
  
  <body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">CompuMall</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="index.html">Inicio</a></li>
          <li><a class="nav-link" href="about.html">Acerca de</a></li>
          <li class="dropdown"><a href="services.html"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services.html#mantenimiento">Mantenimiento</a></li>
              <li><a href="services.html#reparacion">Reparación</a></li>
              <li><a href="services.html#redes">Redes</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="portafolio.php">Portafolio</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>


  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>Detalles del producto</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    

  </main><!-- End #main -->

  <?php portafolioDetails();?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>CompuMall</h3>
              <p class="pb-3"><em>Su aliado tecnológico</em></p>
              <p>
                Medellín<br>
                Calle 10 # 5-51 <br><br>
                <strong>Teléfono:</strong>+57 378 254 44 45<br>
                <strong>Email:</strong> info@compumall.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces de interes</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Acerca de</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portafolio.php">Portafolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">Ingresar como administrador</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html#mantenimiento">Mantenimiento</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html#reparacion">Reparación</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html#redes">Redes</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nuestro boletín</h4>
            <p>Ingresa tu correo electrónico para recibir nuestra información</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscribirse">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Multi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>