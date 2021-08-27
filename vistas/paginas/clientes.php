<?php
  
  $item = 'nombre';
  $valor = 'clientes';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosClientes = json_decode($datosPagina['html'],true);
  
  // echo '<center><pre>'; print_r($datosClientes); echo '</pre></center>';
?>

<section id="clients" class="clients">
      
  <div class="container" data-aos="zoom-in">

    <div class="row">

    <?php for ($i=1; $i<=5 ; $i++) { ?>
         
        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">

          <img src="<?php echo $datosClientes[$i]['img']; ?>" class="img-fluid" alt="">

        </div>

    <?php  }  ?>


    </div>

  </div>

</section>