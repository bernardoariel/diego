<?php
  
  $item = 'nombre';
  $valor = 'landing';
  $datosPlantilla =  ControladorLanding::ctrDatosWeb($item,$valor);

  $info = json_decode($datosPlantilla['datos_json'],true);


/**
 * Mostramos las Paginas
 */

$item = null;
$valor = null;
$orden = 'orden';
$limite = null;
$modo = 'asc';
$estado = 1;
$paginas = ControladorLanding::ctrMostrarPaginas($item,$valor,$orden,$limite,$modo,$estado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $info[0]['titulo']; ?>- Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vistas/assets/img/favicon.png" rel="icon">
  <link href="vistas/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vistas/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vistas/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vistas/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vistas/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vistas/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vistas/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="vistas/assets/vendor/css/font-awesome.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Template Main CSS File -->
  <link href="vistas/assets/css/style.css" rel="stylesheet">

</head>

<body>

<header id="header" class="fixed-top">
  
  <div class="container d-flex align-items-center">

    <a href="" class="logo"><img src="vistas/assets/img/logo1.png" alt="" class="img-fluid animated2"></a>
      
    <?php
        
        include('vistas/paginas/navbar.php');

      ?>
  </div>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->

  <?php
    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "serenidad"|| 
            $_GET["ruta"] == "salud"||
            $_GET["ruta"] == "proteccion"||
            $_GET["ruta"] == "retiro"||
            $_GET["ruta"] == "ahorro"||
            $_GET["ruta"] == "independientes"||
            $_GET["ruta"] == "profesional"||
            $_GET["ruta"] == "armas"||
            $_GET["ruta"] == "banco"||
            $_GET["ruta"] == "asistencia"||
            $_GET["ruta"] == "autoauxilio"||
            $_GET["ruta"] == "motoauxilio"||
            $_GET["ruta"] == "biciauxilio") {

          include "paginas/servicios/" . $_GET["ruta"] . ".php";

        }else{

          include "paginas/404.php";

        }
      }else{

      
    include('vistas/paginas/hero.php');

  ?>


  

  <main id="main">
  
    <?php foreach ($paginas as $key => $value): ?>

      <?php if($value['nombre']!='hero'){include('vistas/paginas/'.$value['url'].'.php');}; ?>
      
    <?php endforeach ?>

    <!-- ======= About Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php
    }
    include('vistas/paginas/footer.php');

  ?>
  
  <!-- End Footer -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vistas/assets/vendor/jquery/jquery.min.js"></script>
  <script src="vistas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vistas/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vistas/assets/vendor/php-email-form/validate.js"></script>
  <script src="vistas/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vistas/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vistas/assets/vendor/venobox/venobox.min.js"></script>
  <script src="vistas/assets/vendor/aos/aos.js"></script>
  <script src="https://use.fontawesome.com/8cb8a805c0.js"></script>
  <!-- Template Main JS File -->
  <script src="vistas/assets/js/main.js"></script>

</body>

</html>