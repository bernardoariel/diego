<?php
  
  $item = 'nombre';
  $valor = 'equipo';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosEquipo = json_decode($datosPagina['html'],true);

?>

<section id="team" class="team">
  
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?php echo $datosEquipo[0]['h2'];?></h2>
      <p><?php echo $datosEquipo[0]['p'];?></p>
    </div>

    <div class="row">

      <?php for ($i=1; $i<=4 ; $i++) { ?>
        
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="<?php echo $datosEquipo[$i]['img'];?>" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4><?php echo $datosEquipo[$i]['h4'];?></h4>
                <span><?php echo $datosEquipo[$i]['span'];?></span>
              </div>
              <div class="social">
                <a href="<?php echo $datosEquipo[$i]['twitter'];?>"><i class="bi bi-twitter"></i></a>
                <a href="<?php echo $datosEquipo[$i]['facebook'];?>"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $datosEquipo[$i]['instagram'];?>"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo $datosEquipo[$i]['linkedin'];?>"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      
      <?php  }  ?>

          

          

    </div>

  </div>
</section>