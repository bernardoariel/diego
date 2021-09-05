<?php
  
  $item = 'nombre';
  $valor = 'asistencia';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosAsistencia = json_decode($datosPagina['html'],true);

  
?>
<style>

#features {
    padding: 100px 0;
}

#features .media.service-box:first-child {
    margin-top: 80px;
}

#services {
    padding: 100px 0 75px;
}

.media.service-box {
    margin: 25px 0;
}

.media.service-box .pull-left {
    margin-right: 20px;
}

.media.service-box .pull-left>i {
    font-size: 24px;
    height: 64px;
    line-height: 64px;
    text-align: center;
    width: 64px;
    border-radius: 100%;
    color: #45aed6;
    box-shadow: inset 0 0 0 1px #d7d7d7;
    -webkit-box-shadow: inset 0 0 0 1px #d7d7d7;
    -webkit-transition: background-color 400ms, background-color 400ms;
    transition: background-color 400ms, background-color 400ms;
    position: relative;
}

.media.service-box .pull-left>i:after {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    margin-top: -10px;
    right: -10px;
    border: 4px solid #fff;
    border-radius: 20px;
    background: #45aed6;
}

.media.service-box:hover .pull-left>i {
    background-image: -webkit-gradient(linear, left top, right top, from(#2caab3), to(#2c8cb3));
    background-image: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    color: #fff;
    box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.8);
    -webkit-box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.8);
}
#services {
    padding: 100px 0 50px;
    background: #20222e url(vistas/assets/img/bg.jpg) no-repeat 0 0;
    background-size: cover;
    color: #fff;
}
#services h2 {
    color: #fff;
}

#services h3 {
    color: #fff;
    margin-bottom: 0;
}

</style>

<section class="container" data-aos="fade-up">
  
   
    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosAsistencia[0]['titulo'];?></h2>
        <h3 class="text-center wow fadeInDown"><?php echo $datosAsistencia[0]['subtitulo'];?></h3>  
        
    </div>

    <div class="row content mb-5">
      
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosAsistencia[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

      <div class="col-md-7 pt-4 mt-5" data-aos="fade-left" data-aos-delay="100">

        <p class="fst-italic"><?php echo $datosAsistencia[0]['p-1'];?></hp>
       
        <p class="fst-italic"><?php echo $datosAsistencia[0]['p-2'];?></p>
        
      </div>

    </div>
    
</section>

<section id="services" class="section-bg">
    
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Nuestra Asistencia</h2>
            <!-- <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>
    
        <div class="row">
          
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">A+ AutoAuxilio</h4>
                            <p>En Argentina y en países limítrofes, las 24 horas, los 365 dias de año y por sobre todo, sin limites de Kilometraje. </p>
                        </div>
                    </div>

                </div>
                    <!--/.col-md-4-->

                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-motorcycle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">A+ Motoauxilio24</h4>
                            <p>Asistencia inmediata para tu moto</p>
                        </div>
                    </div>
                </div>
                <!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-bicycle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">A+ Biciauxilio24</h4>
                            <p>A MEJOR ASISTENCIA PARA QUE LLEGUES SIEMPRE A DESTINO</p>
                        </div>
                    </div>
                </div>
                    <!--/.col-md-4-->

  
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <?php
      include('contacteme.php');
    ?>
