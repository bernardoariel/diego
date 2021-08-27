<?php
  
  $item = 'nombre';
  $valor = 'faq';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosFaq = json_decode($datosPagina['html'],true);
  
?>

<section id="faq" class="faq">
      
  <div class="container" data-aos="fade-up">

    <div class="section-title">

      <h2>Preguntas Frecuentes</h2>

    </div>

    <ul class="faq-list">
      
      <?php for ($i=1; $i<=3 ; $i++) { ?>
      
      <li>
        
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq<?php echo $i;?>">

          <?php echo $datosFaq[$i]['pregunta']; ?>
          <i class="bi bi-chevron-down icon-show"></i>
          <i class="bi bi-chevron-up icon-close"></i>
        
        </div>
        
        <div id="faq<?php echo $i;?>" class="collapse" data-bs-parent=".faq-list">
          
          <p>
          <?php echo $datosFaq[$i]['respuesta']; ?>
          </p>

        </div>
        
      </li>
    
      <?php  }  ?>

    </ul>

  </div>

</section>