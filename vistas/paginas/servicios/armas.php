<?php
  
  $item = 'nombre';
  $valor = 'armas';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosArmas = json_decode($datosPagina['html'],true);

  
?>


<section class="container" data-aos="fade-up">
  
   
    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosArmas[0]['titulo'];?></h2>
        <h3 class="text-center wow fadeInDown"><?php echo $datosArmas[0]['subtitulo'];?></h3>  
        
    </div>

    <div class="row content mb-5 ">

      <div class="col-md-7 pt-4 mt-5" data-aos="fade-left" data-aos-delay="100">

        <p class="fst-italic"><?php echo $datosArmas[0]['p-1'];?></hp>
       
        <p class="fst-italic"><?php echo $datosArmas[0]['p-2'];?></p>
        
      </div>

      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosArmas[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

    </div>
    

</section>
<?php
      include('contacteme.php');
    ?>