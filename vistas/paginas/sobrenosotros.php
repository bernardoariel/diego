<?php
  
  $item = 'nombre';
  $valor = 'sobre nosotros';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosSobreNosotros = json_decode($datosPagina['html'],true);
  
?>
<section id="about" class="about">
    
    <div class="container">

        <div class="row no-gutters">

            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">

                <div class="content">

                    <h3><?php echo $datosSobreNosotros[0]['h3']; ?></h3>
                    <p><?php echo $datosSobreNosotros[0]['p']; ?></p>
                    <a href="#<?php echo $datosSobreNosotros[0]['botonUrl']; ?>" class="about-btn"><?php echo $datosSobreNosotros[0]['botonTexto']; ?><i class="bx bx-chevron-right"></i></a>

                </div>

            </div>

            <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                
                <div class="icon-boxes d-flex flex-column justify-content-center">

                    <div class="row">
                        
                        <?php for ($i=1; $i<=4 ; $i++) { ?>
                                
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">

                                <i class="<?php echo $datosSobreNosotros[$i]['icono']; ?>"></i>
                                <h4><?php echo $datosSobreNosotros[$i]['h4']; ?></h4>
                                <p><?php echo $datosSobreNosotros[$i]['p']; ?></p>

                            </div>
                        

                        <?php  } ?>
                        
                    </div>

                </div><!-- End .content-->

            </div>
            
        </div>

    </div>

</section>