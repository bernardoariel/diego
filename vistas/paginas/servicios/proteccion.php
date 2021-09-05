<?php
  
  $item = 'nombre';
  $valor = 'proteccion';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosProteccion = json_decode($datosPagina['html'],true);

  
?>

<style>
  #cta2 {
    background: #242a33 url(vistas/assets/img/cta2/cta2-bg.jpg) no-repeat 50% 50%;
    background-size: cover;
    color: #fff;
    padding-top: 70px;
}

#cta2 .btn {
    margin-top: 10px;
}

#cta2 h2 {
    color: #fff;
    font-size: 44px;
    line-height: 1;
}

#cta2 h2>span {
    color: #45aed6;
}
/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
#ulService{
    list-style: none;
    padding: 0;
}
.services .icon-box {
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  background: #fff;
}
.icofont-check{
  color: #47b2e4;

}
.services .icon-box .icon {
  margin-bottom: 10px;
}

.services .icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}

.services .icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #37517e;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  transform: translateY(-10px);
}

.services .icon-box:hover h4 a {
  color: #47b2e4;
}
.h4-titulo, .h3-subtitulo{
  color: #47b2e4;
}

</style>

<section class="container" data-aos="fade-up">

    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosProteccion[0]['titulo'];?></h2>
        <h3 class="text-center wow fadeInDown"><?php echo $datosProteccion[0]['subtitulo'];?></h3>  
        
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosProteccion[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <h3><?php echo substr($datosProteccion[0]['p-1'],0,20)."...";?></h3>
        <?php
          $cantidad = strlen($datosProteccion[0]['p-1']); 
        ?>

        <p class="fst-italic"><?php echo "...".substr($datosProteccion[0]['p-1'],21,$cantidad)."...";?></p>
        <p class="fst-italic"><?php echo $datosProteccion[0]['p-1'];?></p>
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosProteccion[0]['p-2'];?></li>
          
  

        </ul>

      </div>

    </div>
    

</section>

<section id="cta2">
<?php
      $cantidad = strlen($datosProteccion[0]['p-3']); 
    ?>
  <div class="container">
      
    <div class="text-center">
        
      <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
        <?php echo substr($datosProteccion[0]['p-3'],0,12);?>
        <span><?php echo substr($datosProteccion[0]['p-3'],12,8);?></span> 
        <?php echo substr($datosProteccion[0]['p-3'],22,14);?>
        <span><?php echo substr($datosProteccion[0]['p-3'],36,14);?></span>
        <?php echo substr($datosProteccion[0]['p-3'],50,$cantidad);?>
      </h2>
          <!-- <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
          <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Free Download</a></p>
          <img class="img-responsive wow fadeIn" src="vistas/assets/img/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms"> -->
          <div class="row mt-5">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4 class="h4-titulo">BASE</h4>
              <ul id="ulService">
                <li><i class="icofont-check"></i>Indemnización: <span><?php echo $datosProteccion[0]['ind-base'];?></span></li>
                <li><i class="icofont-check"></i>Costo: <span><?php echo $datosProteccion[0]['costo-base'];?></span></li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h4 class="h4-titulo">ESTANDAR</h4>
              <ul id="ulService">
                <li><i class="icofont-check"></i>Indemnización: <span><?php echo $datosProteccion[0]['ind-estandar'];?></span></li>
                <li><i class="icofont-check"></i>Costo: <span><?php echo $datosProteccion[0]['costo-estandar'];?></span></li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
             
              <h4 class="h4-titulo">MEDIO</h4>
              <ul id="ulService">
                <li><i class="icofont-check"></i>Indemnización: <span><?php echo $datosProteccion[0]['ind-medio'];?></span></li>
                <li><i class="icofont-check"></i>Costo: <span><?php echo $datosProteccion[0]['costo-medio'];?></span></li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              
              <h4 class="h4-titulo">PREMIUM</h4>
              <ul id="ulService">
                <li><i class="icofont-check"></i>Indemnización: <span><?php echo $datosProteccion[0]['ind-premium'];?></span></li>
                <li><i class="icofont-check"></i>Costo: <span><?php echo $datosProteccion[0]['costo-premium'];?></span></li>
              </ul>
            </div>
          </div>

        </div>
        
        <h3 class="wow fadeInUp mt-5 h3-subtitulo" data-wow-duration="300ms" data-wow-delay="0ms">
          <span><?php echo $datosProteccion[0]['p-4'];?></span>
        </h3>
        <?php echo $datosProteccion[0]['p-5'];?>
      
    </div>
  </div>
</section>
<?php
      include('contacteme.php');
    ?>