<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>A+ PROTECCION</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            
            <h4>Algunos Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                <?php 

                  if(isset($sobreUs)){

                    echo '<li><i class="bx bx-chevron-right"></i> <a href="#about" class="scrollto">Sobre Nosotros</a></li>';

                  }else{

                    echo '<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>';
                  }

                ?>      

                <li><i class="bx bx-chevron-right"></i> <a href="salud">Salud</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="proteccion">Proteccion</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="asistencia">Asitencia</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Aleatorios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $links[0];?>"><?php echo ucfirst($links[0]);?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $links[1];?>"><?php echo ucfirst($links[1]);?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $links[2];?>"><?php echo ucfirst($links[2]);?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $links[3];?>"><?php echo ucfirst($links[3]);?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $links[4];?>"><?php echo ucfirst($links[4]);?></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Suscribite</h4>
            <p>Te llegaran ofertas para vos a tu correo</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribite">
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Bikin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
           Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div> -->
  </footer>