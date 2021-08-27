<?php
  
  $item = 'nombre';
  $valor = 'precios';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosPrecios = json_decode($datosPagina['html'],true);
  
?>

<section id="pricing" class="pricing section-bg">
  
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?php echo $datosPrecios[0]['h2'];?></h2>
      <p><?php echo $datosPrecios[0]['p'];?></p>
    </div>

    <div class="row">

      <?php for ($i=1; $i<=3 ; $i++) { ?>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">

          <?php $featured =  ($i==2)? 'box featured':'' ;?>

          <div class="box <?php echo $featured;?>">
            
            <h3><?php echo $datosPrecios[$i]['h3'];?></h3>
            <h4><?php echo $datosPrecios[$i]['h4'];?></h4>

            <ul>
              
              <li><?php echo $datosPrecios[$i]['li1'];?></li>
              <li><?php echo $datosPrecios[$i]['li2'];?></li>
              <li><?php echo $datosPrecios[$i]['li3'];?></li>
              <li class="na"><?php echo $datosPrecios[$i]['li4'];?></li>
              <li class="na"><?php echo $datosPrecios[$i]['li5'];?></li>

            </ul>

            <div class="btn-wrap">

              <a href="#" class="btn-buy"><?php echo $datosPrecios[$i]['a'];?></a>

            </div>

          </div>

        </div>

      <?php  }  ?>
         

    </div>

  </div>

</section>