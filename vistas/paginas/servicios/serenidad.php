<?php
  
  $item = 'nombre';
  $valor = 'serenidad';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosDetalles = json_decode($datosPagina['html'],true);

  
?>
<style>
    .visiones{
        background-image: url('vistas/assets/img/servicios/img-1.jpg') ;
        background-size: cover; 
        height: 300px;
        background-attachment: fixed;
    
    }
   

</style>

<section id="serenidad" class="container" data-aos="fade-up">
  
    <div class="section-header section-title mt-5">

      <h2 class="section-title text-center wow fadeInDown"><?php echo $datosDetalles[0]['titulo'];?></h2>
      <!-- <h5 class="text-center wow fadeInDown"><?php echo $datosDetalles[0]['p-2'];?></h5>   -->
      <h5 class="text-center wow fadeInDown">Cuando estés en ese momento, sólo necesitarás un llamado.</h5>  
      <h5 class="text-center wow fadeInDown">Tendrás el mejor acompañamiento para poder resolver la situación</h5>  
    </div>

    <div class="row content mb-5 mt-0" style="top:-250px">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosDetalles[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <h3><?php echo $datosDetalles[0]['subtitulo'];?></h3>

        <p class="fst-italic"><?php echo $datosDetalles[0]['p-1'];?></p>
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[0]['p-2'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[0]['p-3'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosDetalles[0]['p-4'];?></li>

        </ul>

      </div>

    </div>

    <!-- <div class="row content visiones">

      <div class="section-title" style="margin-top:100px;">

        <h2>"<?php echo $datosDetalles[0]['p-5'];?>"</h2>

      </div>
     
    </div> -->

</section>
 <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <!-- <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div> -->

        <div class="row">
          

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-run"></i></div>
              <br>
              <p><?php echo $datosDetalles[0]['p-5'];?></p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="background-color: #37517e;color:#fff;">
              <div class="icon"><i class="bx bx-dollar-circle"></i></div>
              <!-- <h4><a href="">Magni Dolores</a></h4> -->
              <br>
              <p><?php echo $datosDetalles[0]['p-6'];?></p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box" >
              <div class="icon"><i class="bx bx-mail-send"></i></div>
              <!-- <h4><a href="">Nemo Enim</a></h4> -->
              <br>
              <p><?php echo $datosDetalles[0]['p-7'];?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <?php
      include('contacteme.php');
    ?>