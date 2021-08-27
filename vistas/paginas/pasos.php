<?php
  
  $item = 'nombre';
  $valor = 'pasos';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosPasos = json_decode($datosPagina['html'],true);

?>

<section id="steps" class="steps">
  <div class="container">
    <div class="section-title">
      <h2><?php echo $datosPasos[0]['h2'];?></h2>
      <p><?php echo $datosPasos[0]['p'];?></p>
    </div>
    
    <div class="row no-gutters" data-aos="fade-up">
    
    <?php for ($i=1; $i<=6 ; $i++) { ?>
         
      <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
        <span><?php echo $datosPasos[$i]['span']; ?></span>
        <h4><?php echo $datosPasos[$i]['h4']; ?></h4>
        <p><?php echo $datosPasos[$i]['p']; ?></p>
      </div>
      
     <?php  }  ?>

    </div>

  </div>

</section>