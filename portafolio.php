<?php 

    require_once "./conexionDB.php";
    function portafolio(){
        $link=conexion();
        //Preparar consulta
        //1)R->Leer
        $consultaSQL= "SELECT * FROM productos ";
        $elemento="";
        //se verifica que se logre hacer la consulta
        if($resultado=$link->query($consultaSQL)){
            while($Producto=$resultado->fetch_assoc()){
              $elemento.="<div class='col-lg-4 col-md-6 portfolio-item filter-".$Producto['tipo']."'>";
              $elemento.="<img src='assets/img/portfolio/".$Producto['imagen']."' class='img-fluid'>";
              $elemento.="<div class='portfolio-info'>";
              $elemento.="<h4>".$Producto['nombre']."</h4>";
              $elemento.="<p>".$Producto['precio']."</p>";
              $elemento.="<a href='assets/img/portfolio/'".$Producto['imagen']."data-gallery='portfolioGallery' class='portfolio-lightbox preview-link'></a>";
              $elemento.="<a href='portfolio-details.php?id=".$Producto['id']."' class='details-link' title='More Details'><i class='bx bx-link'></i></a></div></div>";
                
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
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="index.html">Inicio</a></li>
          <li><a class="nav-link" href="about.html">Acerca de</a></li>
          <li class="dropdown"><a href="services.html"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services.html#mantenimiento">Mantenimiento</a></li>
              <li><a href="services.html#reparacion">Reparación</a></li>
              <li><a href="services.html#redes">Redes</a></li>
            </ul>
          </li>
          <li><a class="nav-link active" href="portafolio.php">Portafolio</a></li>
          <!-- <li><a class="nav-link" href="inner-page.html">Ingresar</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header --><br><br>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Aqui podrás encontrar todo nuestro Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos nuestros productos</li>
              <li data-filter=".filter-computadores">Computadores</li>
              <li data-filter=".filter-accesorios">Accesorios</li>
              <li data-filter=".filter-componentes">Componentes</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php portafolio();?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="portafolio.html">Portafolio</a></li>
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
  <!-- Bootstrap core JS-->

</body>

</html> -->