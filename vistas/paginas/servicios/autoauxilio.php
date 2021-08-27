<?php
  
  $item = 'nombre';
  $valor = 'autoauxilio';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosAutoauxilio = json_decode($datosPagina['html'],true);

  
?>
<style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 60vh;
  background: url("vistas/assets/img/hero-bg-auto.jpg") center center;
  background-size: cover;
  position: relative;
  margin-top: 70px;
  padding: 0;
}

#hero:before {
  content: "";
  background: rgba(56, 64, 70, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  z-index: 2;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero h1 span {
  border-bottom: 4px solid #3498db;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 30px;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 2px;
  display: inline-block;
  padding: 12px 28px;
  border-radius: 4px;
  transition: ease-in-out 0.3s;
  color: #fff;
  background: #3498db;
  text-transform: uppercase;
}

#hero .btn-get-started:hover {
  background: #4ea5e0;
}

@media (max-width: 992px) {
  #hero {
    height: calc(100vh - 70px);
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 30px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

ul.nostyle{
  list-style: none;
  padding: 0;
}
ul.nostyle i {
    color: #45aed6;
}


#padreAuxilio{
      overflow: hidden;
    }
    #divAuxilio {
      background: linear-gradient(rgba(40, 58, 90, 0.4), rgba(40, 58, 90, 0.1)), url("vistas/assets/img/auxilio.jpg")  center center;
      background-size: cover;
      padding: 120px 0;
      -webkit-transition:all 1.9s ease;
      -moz-transition:all 1.9s ease;
      -o-transition:all 1.9s ease;
      -ms-transition:all 1.9s ease;
width:100%;
    }
  
 
#divAuxilio:hover  {
    transform: scale(1.3); 
    /* overflow: visible; */
}

/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
  padding-top: 80px;
}

.counts .count-box {
  padding: 30px 30px 25px 30px;
  width: 100%;
  position: relative;
  text-align: center;
  box-shadow: 0px 2px 35px rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.counts .count-box i {
  position: absolute;
  top: -27px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 24px;
  background: #fff;
  padding: 12px;
  color: #0c3c53;
  border-radius: 50px;
  border: 2px solid #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.counts .count-box span {
  font-size: 36px;
  display: block;
  font-weight: 700;
  color: #111111;
}

.counts .count-box p {
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-size: 14px;
}

</style>
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>A+ <span><?php echo $datosAutoauxilio[0]['titulo'];?></span></h1>
      <h2><?php echo $datosAutoauxilio[0]['subtitulo'];?></span></h2>
      <a href="#about" class="btn-get-started scrollto">Escribinos</a>
    </div>
</section>

<section id="about">
        
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $datosAutoauxilio[0]['titulo'];?></h2>
            <!-- <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                <h3 class="column-title">Asistencia Mecánica</h3>
                    <div class="col-sm-12">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li1'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li2'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li3'];?></li>
                        </ul>
                    </div>
                    <h3 class="column-title">Localizacion</h3>
                    <div class="col-sm-12">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li4'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li5'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li6'];?></li>
                        </ul>
                    </div>
                    <div class="col-sm-12" id="padreAuxilio">
                        <div id="divAuxilio">

                        </div>
                    </div>
                
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Asistencia Legal</h3>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->

                    <div class="row">
                        <div class="col-sm-12">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li7'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li8'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li9'];?></li>
                        </ul>
                        </div>
                        
                        <div class="col-sm-12">
                        <br>
                        <h4 class="column-title mt-5">Asistencia Medica</h4>
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li10'];?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub1'];?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub2'];?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub3'];?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub4'];?></li>
                            </ul>
                        </div>
                    </div>

                  

                </div>
            </div>
        </div>
    </section>

    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-ui-home"></i>
              <!-- <span data-toggle="counter-up">232</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li11'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-md-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <!-- <span data-toggle="counter-up">521</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li12'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-lg-0">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <!-- <span data-toggle="counter-up">1,463</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li13'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-lg-0">
            <div class="count-box">
              <i class="icofont-car-alt-4"></i>
              <!-- <span data-toggle="counter-up">15</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li14'];?></strong></p>
            </div>
          </div>

        </div>

      </div>
    </section>
