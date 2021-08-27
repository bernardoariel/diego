<?php
  
  $item = 'nombre';
  $valor = 'hero';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosHero = json_decode($datosPagina['html'],true);
  
?>

<section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      
      <h1><?php echo $datosHero[0]['h1'];?> </h1>

      <h2><?php echo $datosHero[0]['h2'];?></h2>

      <a href="#<?php echo $datosHero[0]['botonUrl'];?>" class="btn-get-started scrollto"><?php echo $datosHero[0]['botonTexto'];?></a>

      <img src="<?php echo $datosHero[0]['imagen'];?>" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">

    </div>

</section>
<!-- End Hero -->