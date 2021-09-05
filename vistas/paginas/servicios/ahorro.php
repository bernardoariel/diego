<?php
  
  $item = 'nombre';
  $valor = 'ahorro';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosAhorro = json_decode($datosPagina['html'],true);

  
?>


<section class="container" data-aos="fade-up">
  
  

    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosAhorro[0]['titulo'];?></h2>
        <h3 class="text-center wow fadeInDown"><?php echo $datosAhorro[0]['subtitulo'];?></h3>  
        
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosAhorro[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <p class="fst-italic"><?php echo $datosAhorro[0]['p-1'];?></hp>
       
        <p class="fst-italic"><?php echo $datosAhorro[0]['p-2'];?></p>
        
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosAhorro[0]['p-3'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosAhorro[0]['p-4'];?></li>
          
  

        </ul>

      </div>

    </div>
    

</section>

<section id="about" class="about" style=" padding: 0px 0;">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
                <img src="vistas/assets/img/familia.png"  class="img-fluid">
                <br>
                <br>
              <h3 class="align-center">
                <?php echo $datosAhorro[0]['p-5'];?>
              </h3>
             
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Lo mejor</h4>
                  <p><?php echo $datosAhorro[0]['p-6'];?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Tus sueños</h4>
                  <p><?php echo $datosAhorro[0]['p-7'];?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Jubilacion</h4>
                  <p><?php echo $datosAhorro[0]['p-8'];?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Tu Futuro</h4>
                  <p><?php echo $datosAhorro[0]['p-9'];?></p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
</section>
<section id="features" class="section-bg">
        <div class="container">
             <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">¿Cual es la tuya?</h2>
                <p class="text-center wow fadeInDown"><?php echo $datosAhorro[0]['p-10'];?></p>
            </div>
           
        </div>
    </section>
    <?php
      include('contacteme.php');
    ?>