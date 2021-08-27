<?php
  
  $item = 'nombre';
  $valor = 'retiro';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosRetiro = json_decode($datosPagina['html'],true);

  
?>
<style>
    
/*--------------------------------------------------------------
# Tabs
--------------------------------------------------------------*/
.tabs .nav-tabs {
  border: 0;
}

.tabs .nav-link {
  border: 1px solid #0c3c53;
  padding: 15px;
  transition: 0.3s;
  color: #111111;
  border-radius: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.tabs .nav-link i {
  padding-right: 15px;
  font-size: 48px;
}

.tabs .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}

.tabs .nav-link:hover {
  color: #47b2e4;
}

.tabs .nav-link.active {
  background: #47b2e4;
  color: #fff;
  border-color: #0c3c53;
}

@media (max-width: 768px) {
  .tabs .nav-link i {
    padding: 0;
    line-height: 1;
    font-size: 36px;
  }
}

@media (max-width: 575px) {
  .tabs .nav-link {
    padding: 15px;
  }
  .tabs .nav-link i {
    font-size: 24px;
  }
}

.tabs .tab-content {
  margin-top: 30px;
}

.tabs .tab-pane h3 {
  font-weight: 600;
  font-size: 26px;
}

.tabs .tab-pane ul {
  list-style: none;
  padding: 0;
}

.tabs .tab-pane ul li {
  padding-bottom: 10px;
}

.tabs .tab-pane ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #e03a3c;
}

.tabs .tab-pane p:last-child {
  margin-bottom: 0;
}

</style>

<section class="container" data-aos="fade-up">
  

    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosRetiro[0]['titulo'];?></h2>
        <h3 class="text-center wow fadeInDown"><?php echo $datosRetiro[0]['subtitulo'];?></h3>  
        
    </div>

    <div class="row content mb-5">
      
      

      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

        <p class="fst-italic"><?php echo $datosRetiro[0]['p-1'];?></hp>
       
        <p class="fst-italic"><?php echo $datosRetiro[0]['p-2'];?></p>
        
        
        <ul>

          <li><i class="bi bi-check"></i> <?php echo $datosRetiro[0]['p-3'];?></li>
          <li><i class="bi bi-check"></i> <?php echo $datosRetiro[0]['p-4'];?></li>
          
  

        </ul>

      </div>
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        
        <img src="<?php echo $datosRetiro[0]['img-1'];?>" class="img-fluid animated" alt="">

      </div>

    </div>
    

</section>
<section id="tabs" class="tabs section-bg">
      <div class="container" data-aos="fade-up">

      <div class="section-header mt-1">
        
        <h2 class="section-title text-center wow fadeInDown">Podrás elegir entre 4 diferentes opciones:</h2>
      
        
      </div>
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">A+ PLANIFICAR TU FUTURO</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">A+ CONCRETAR TUS PROYECTOS</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">A+ INVERTIR NIVEL GOLD</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">A+ <br>INVERTIR DOLARES</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Un plan a medida de tus aportes. </h3>
                <p class="font-italic">
                Con tu aporte periódico, y con la planificación profesional, te permite mantener el nivel de tus ingresos a futuro. Complementa tus aportes y evita la jubilación mínima. 
                </p>
                <p class="font-italic">
                Armas tu plan, elegís tu aporte y tu momento de retiro y cualquiera de las 3 formas para retirarte. 
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> 1-	Renta vitalicia de pago mensual. </li>
                  <li><i class="ri-check-double-line"></i>2-	Retiro Total del fondo acumulado</li>
                  <li><i class="ri-check-double-line"></i>3-	Retiro parcial del fondo y pago mensual de una renta vitalicia. </li>
                </ul>
                <p>
                Empezá a ahorrar hoy, y disfrútalo en tu retiro.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="vistas/assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Tus sueños pueden estar mas cerca de lo que imaginas</h3>
                
                <br>
                <br>
                <ul>
                  <li><i class="ri-check-double-line"></i>Una inversión sencilla, práctica y de acuerdo a tus posibilidades. </li>
                  <li><i class="ri-check-double-line"></i> Un aporte inicial y aportes periódicos, se acumulan en tu capital y con una rentabilidad superior aun plazo fijo.</li>
                  <li><i class="ri-check-double-line"></i> Te ayuda a concretar tus sueños: una casa, pagar la universidad de tus hijos, iniciar tu propio emprendimiento o como respaldo para tu familia. </li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="vistas/assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Tu inversión siempre al mejor nivel</h3>
                <p>
                Un programa para proteger tu capital y acceder a rendimientos superiores a cualquier medio de ahorro. 
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Desde $ 100.000 o U$S 5.000, y sumando tus aportes mensuales, participas de una inversión con garantía del capital al 100% y tasas mínimas garantizadas por ley. </li>
                </ul>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="vistas/assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Un aporte inicial y mensuales</h3>
                <p>
                Todo en pesos, pero acumulables en Dolares, con una tasa mejor que un Plazo fijo, y con pagos periódicos de intereses que se acumularán en la cuenta, hasta el momento del retiro. 
                </p>
                <p class="font-italic">
                Cuotas en Pesos y retiro en Pesos, pero todo dolarizados, a valor Dólar vendedor del Banco de la Nacion Argentina. Sin impuestos por compra de divisas ni de Ganancias. 
                </p>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="vistas/assets/img/tabs-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>