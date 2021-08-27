<?php
  
  $item = 'nombre';
  $valor = 'testimonios';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosTestimonio = json_decode($datosPagina['html'],true);
 

?>
<section id="testimonials" class="testimonials section-bg">
  
  <div class="container" data-aos="fade-up">

    <div class="section-title">

      <h2><?php echo $datosTestimonio[0]['h2'];?></h2>
      <p><?php echo $datosTestimonio[0]['p'];?></p>

    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      
      <div class="swiper-wrapper">
        
        <?php for ($i=1; $i<=5 ; $i++) { ?>

        <div class="swiper-slide">
          
          <div class="testimonial-item">
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $datosTestimonio[$i]['p']; ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>

            <img src="<?php echo $datosTestimonio[$i]['img']; ?>" class="testimonial-img" alt="">
            <h3><?php echo $datosTestimonio[$i]['h3']; ?></h3>
            <h4><?php echo $datosTestimonio[$i]['h4']; ?></h4>

          </div>

        </div><!-- End testimonial item -->

        <?php  }  ?>  

      </div>
      <div class="swiper-pagination"></div>

    </div>

  </div>

</section>