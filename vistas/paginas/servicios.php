<?php
  
  $item = 'nombre';
  $valor = 'servicios';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosServicios = json_decode($datosPagina['html'],true);
  
?>

<section id="services" class="services">
  
  <div class="container" data-aos="fade-up">

    <div class="section-title">

      <h2><?php echo $datosServicios[0]['h2'];?></h2>
      <p><?php echo $datosServicios[0]['p'];?></p>
      
    </div>

    <div class="row">

      <?php for ($i=1; $i<=4 ; $i++) { ?>
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="<?php echo $datosServicios[$i]['icono']; ?>"></i></div>
            <h4 class="title"><a href=""><?php echo $datosServicios[$i]['h4']; ?></a></h4>
            <p class="description"><?php echo $datosServicios[$i]['p']; ?></p>
          </div>
        </div>
          
      <?php  }  ?>

    </div>

  </div>
</section>