<?php
  
  $item = 'nombre';
  $valor = 'detalles';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosDetalles = json_decode($datosPagina['html'],true);

  
?>

<section id="features" class="features" data-aos="fade-up">
  
  <div class="container">

    <div class="section-title">

      <h2><?php echo $datosDetalles[0]['h2'];?></h2>
      <p><?php echo $datosDetalles[0]['p'];?></p>

    </div>

    <div class="row content">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosDetalles[1]['img'];?>" class="img-fluid" alt="">

      </div>

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <h3><?php echo $datosDetalles[1]['h3'];?></h3>

        <p class="fst-italic"><?php echo $datosDetalles[1]['p'];?></p>
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[1]['li1'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[1]['li2'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[1]['li3'];?></li>

        </ul>

      </div>

    </div>

    <div class="row content">
    
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">

        <img src="<?php echo $datosDetalles[2]['img'];?>" class="img-fluid" alt="">

      </div>

      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">

        <h3><?php echo $datosDetalles[2]['h3'];?></h3>
        <p class="fst-italic"><?php echo $datosDetalles[2]['p1'];?></p>
        <p><?php echo $datosDetalles[2]['p2'];?></p>

      </div>

    </div>

    <div class="row content">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosDetalles[3]['img'];?>" class="img-fluid" alt="">

      </div>

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <h3><?php echo $datosDetalles[3]['h3'];?></h3>

        <p class="fst-italic"><?php echo $datosDetalles[1]['p'];?></p>
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[3]['li1'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[3]['li2'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[3]['li3'];?></li>

        </ul>

      </div>

    </div>

    <div class="row content">
    
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">

        <img src="<?php echo $datosDetalles[4]['img'];?>" class="img-fluid" alt="">

      </div>

      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">

        <h3><?php echo $datosDetalles[4]['h3'];?></h3>
        <p class="fst-italic"><?php echo $datosDetalles[4]['p1'];?></p>
        <p><?php echo $datosDetalles[4]['p2'];?></p>

      </div>

    </div>

  </div>
</section>