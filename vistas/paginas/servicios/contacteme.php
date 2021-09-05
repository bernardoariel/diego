<style>
/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
}

.contact .info i {
  font-size: 20px;
  color: #47b2e4;
  float: left;
  width: 44px;
  height: 44px;
  background: #e7f5fb;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #37517e;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #6182ba;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #47b2e4;
  color: #fff;
}

.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #47b2e4;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}

.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #47b2e4;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
  background: #47b2e4;
  border: 0;
  padding: 12px 34px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #209dd8;
}
#padreEmail{
      overflow: hidden;
    }
    #miEmail {
      background: linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url("vistas/assets/img/servicios/email.png")  center center;
      background-size: cover;
      padding: 120px 0;
      -webkit-transition:all 1.9s ease;
      -moz-transition:all 1.9s ease;
      -o-transition:all 1.9s ease;
      -ms-transition:all 1.9s ease;
width:100%;
    }
  
 
#miEmail:hover  {
    transform: scale(1.3); 
    /* overflow: visible; */
}

</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        
        <div class="section-header section-title mt-5">

          <h2 class="section-title text-center wow fadeInDown">Contáctame</h2>

        </div>
        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">

              <div class="email">
              <div class="icon"><i class="bx bx-mail-send"></i></div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone"></i>
                <h4>Telefono:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
              <div id="padreEmail">

                <div id="miEmail">
  
                </div>
              </div>  
              <!-- <img src="" alt=""> -->
              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Tu Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Tu Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Su Telefono</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="7" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->