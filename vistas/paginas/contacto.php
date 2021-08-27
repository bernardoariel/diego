<?php
  
  $item = 'nombre';
  $valor = 'contacto';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosContacto = json_decode($datosPagina['html'],true);
  

?>
<section id="contact" class="contact section-bg">
  
<div class="container" data-aos="fade-up">

    <div class="section-title">

      <h2><?php echo $datosContacto[0]['h2']; ?></h2>
      <p><?php echo $datosContacto[0]['p']; ?></p>

    </div>

    <div class="row">

      <div class="col-lg-6">

        <div class="row">

          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Nuestra Direccion</h3>
              <p><?php echo $datosContacto[0]['direccion']; ?></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Nuestro Email</h3>
              <p><?php echo $datosContacto[0]['email']; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telefonos </h3>
              <p><?php echo $datosContacto[0]['telefono1']; ?><br><?php echo $datosContacto[0]['telefono2']; ?></p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6 mt-4 mt-md-0">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">enviando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Su mensaje ha sido enviado. Muchas Gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
        </form>
      </div>

    </div>

  </div>
</section>