<?php
  
  $item = 'nombre';
  $valor = 'biciauxilio';
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
  background: url("vistas/assets/img/hero-bg-bici.jpg") center center;
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

/*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/
.about{
    background-color: #fff;
    color:#444444;
}
.about .content h3 {
  font-weight: 600;
  font-size: 26px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-left: 28px;
  position: relative;
}

.about .content ul li + li {
  margin-top: 10px;
}

.about .content ul i {
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 20px;
  color: #47b2e4;
  line-height: 1;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .btn-learn-more {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 4px;
  transition: 0.3s;
  line-height: 1;
  color: #47b2e4;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  margin-top: 6px;
  border: 2px solid #47b2e4;
}

.about .content .btn-learn-more:hover {
  background: #47b2e4;
  color: #fff;
  text-decoration: none;
}
/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url("vistas/assets/img/cta-bg.jpg") fixed center center;
  background-size: cover;
  padding: 120px 0;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Jost", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #47b2e4;
  border: 2px solid #47b2e4;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}

</style>
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>A+ <span><?php echo $datosAutoauxilio[0]['titulo'];?></span></h1>
      <h2><?php echo $datosAutoauxilio[0]['subtitulo'];?></span></h2>
      <a href="#about" class="btn-get-started scrollto">Escribinos</a>
    </div>
</section>
<section id="about" class="about">
    
    <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6">
            <p>
                <?php echo $datosAutoauxilio[0]['p-1'];?>
            </p>
            <p>
                <?php echo $datosAutoauxilio[0]['p-2'];?>
            </p>
                
         
          
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            <?php echo $datosAutoauxilio[0]['p-5'];?>
            </p>
            <a href="#" class="btn-learn-more">Contratar Servicio</a>
          </div>
        </div>

      </div>
    </section>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3><?php echo $datosAutoauxilio[0]['p-4'];?></h3>
            <p><?php echo $datosAutoauxilio[0]['p-3'];?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Eleginos</a>
          </div>
        </div>

      </div>
    </section>

    <section id="about">
        
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $datosAutoauxilio[0]['lititulo'];?></h2>
            <!-- <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>

            <div class="row">
                
                
                    
                <div class="col-sm-4" id="padreAuxilio">
                        <div id="divAuxilio">

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li1'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li2'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li3'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li4'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li5'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li6'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['li7'];?></li>
                        </ul>
                    </div>
               
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10">
                        <br>
            <p><strong><?php echo $datosAutoauxilio[0]['li8'];?></strong></p>
        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                    <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub1'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub2'];?></li>
                            <li><i class="fa fa-check-square"></i> <?php echo $datosAutoauxilio[0]['lisub3'];?></li>
                        </ul>
                    
                
               
                  

                </div>
                <div class="row ml-5">
                   
                    <div class="col-md-6"><strong><?php echo $datosAutoauxilio[0]['li9'];?></strong></div>
                    <div class="col-md-6"><strong><?php echo $datosAutoauxilio[0]['li10'];?></strong></div>
                </div>
                    </div>
                    
           
    </section>
        
    
            
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-business-man-alt-3"></i>
              <!-- <span data-toggle="counter-up">232</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li11'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-md-0">
            <div class="count-box">
              <i class="icofont-ui-home"></i>
              <!-- <span data-toggle="counter-up">521</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li12'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <!-- <span data-toggle="counter-up">1,463</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li13'];?></strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-lg-0">
            <div class="count-box">
              <i class="icofont-bicycle-alt-2"></i>
              <!-- <span data-toggle="counter-up">15</span> -->
              <p><strong><?php echo $datosAutoauxilio[0]['li14'];?></strong></p>
            </div>
          </div>

        </div>

      </div>
    </section>
