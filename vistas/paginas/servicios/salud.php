<?php
  
  $item = 'nombre';
  $valor = 'salud';
  $datosPagina = ControladorLanding::ctrPaginas($item,$valor);

  $datosSalud = json_decode($datosPagina['html'],true);

  
?>
<style>
    #blog .blog-post {
    border: 1px solid #eee;
    padding: 15px;
}

#blog .blog-post .post-format {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 34px;
    text-align: center;
    color: #fff;
    background: #222534;
    border: 3px solid #fff;
    border-radius: 100px;
}

#blog .blog-post.blog-large .entry-thumbnail {
    margin: -15px -15px 15px;
    position: relative;
}

#blog .blog-post.blog-large .post-format {
    width: 66px;
    height: 66px;
    line-height: 60px;
    position: absolute;
    right: 20px;
    bottom: -33px;
}

#blog .blog-post.blog-large .post-format>i {
    font-size: 30px;
    padding-top:5px ;
}

#blog .blog-post.blog-large .entry-date {
    font-size: 12px;
    display: block;
    margin-bottom: 5px;
    text-transform: uppercase;
    color: #45aed6;
}

#blog .blog-post.blog-large .entry-title {
    margin-top: 0;
    font-size: 18px;
    line-height: 1;
    margin-bottom: 15px;
}

#blog .blog-post.blog-large .entry-title a {
    color: #64686d;
}

#blog .blog-post.blog-large .entry-title a:hover {
    color: #45aed6;
}

#blog .blog-post.blog-media {
    margin-bottom: 30px;
}

#blog .blog-post.blog-media .entry-thumbnail {
    margin: -15px 15px -15px -15px;
    position: relative;
}

#blog .blog-post.blog-media .post-format {
    position: absolute;
    top: 20px;
    right: -10px;
}

#blog .blog-post.blog-media .entry-date {
    font-size: 12px;
    display: block;
    margin-bottom: 5px;
    text-transform: uppercase;
    color: #45aed6;
}

#blog .blog-post.blog-media .entry-title {
    margin-top: 0;
    font-size: 18px;
    line-height: 1;
    margin-bottom: 15px;
}

#blog .blog-post.blog-media .entry-title a {
    color: #64686d;
}

#blog .blog-post.blog-media .entry-title a:hover {
    color: #45aed6;
}

#blog .blog-post .entry-meta {
    margin-top: 20px;
    border-top: 1px solid #eee;
    padding-top: 15px;
}

#blog .blog-post .entry-meta>span {
    display: inline-block;
    margin-right: 10px;
    color: #999;
}

#blog .blog-post .entry-meta>span>a {
    color: #999;
}

#blog .blog-post .entry-meta>span>a:hover {
    color: #45aed6;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .content {
  padding: 60px 100px 0 100px;
}

.why-us .content h3 {
  font-weight: 400;
  font-size: 34px;
  color: #37517e;
}

.why-us .content h4 {
  font-size: 20px;
  font-weight: 700;
  margin-top: 5px;
}

.why-us .content p {
  font-size: 15px;
  color: #848484;
}

.why-us .img {
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}

.why-us .accordion-list {
  padding: 0 100px 60px 100px;
}

.why-us .accordion-list ul {
  padding: 0;
  list-style: none;
}

.why-us .accordion-list li + li {
  margin-top: 15px;
}

.why-us .accordion-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
}

.why-us .accordion-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding-right: 30px;
  outline: none;
}

.why-us .accordion-list span {
  color: #47b2e4;
  font-weight: 600;
  font-size: 18px;
  padding-right: 10px;
}

.why-us .accordion-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.why-us .accordion-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.why-us .accordion-list .icon-show {
  display: none;
}

.why-us .accordion-list a.collapsed {
  color: #343a40;
}

.why-us .accordion-list a.collapsed:hover {
  color: #47b2e4;
}

.why-us .accordion-list a.collapsed .icon-show {
  display: inline-block;
}

.why-us .accordion-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1024px) {
  .why-us .content, .why-us .accordion-list {
    padding-left: 0;
    padding-right: 0;
  }
}

@media (max-width: 992px) {
  .why-us .img {
    min-height: 400px;
  }
  .why-us .content {
    padding-top: 30px;
  }
  .why-us .accordion-list {
    padding-bottom: 30px;
  }
}

@media (max-width: 575px) {
  .why-us .img {
    min-height: 200px;
  }
}

#pricing {
    padding: 100px 0 70px;
}

#pricing ul.pricing {
    list-style: none;
    padding: 0;
    margin: 70px 0 30px;
    border: 1px solid #eee;
    border-radius: 5px 5px 4px 4px;
    padding: 15px;
    text-align: center;
}

#pricing ul.pricing li {
    display: block;
    padding: 10px;
}

#pricing ul.pricing li.plan-header {
    background: #eee;
    border-radius: 4px 4px 0 0;
    margin: -15px -15px 10px;
    padding: 15px 15px 30px;
    border: 0;
}

#pricing ul.pricing li.plan-header .price-duration {
    position: relative;
    margin-top: -63px;
    top: -10px;
    display: inline-block;
    width: 116px;
    height: 116px;
    background-image: -webkit-gradient(linear, left top, right top, from(#2caab3), to(#2c8cb3));
    background-image: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    color: #fff;
    border-radius: 100px;
    border: 5px solid #f6f6f6;
}

#pricing ul.pricing li.plan-header .price-duration>span {
    display: block;
    line-height: 1;
}

#pricing ul.pricing li.plan-header .price-duration>span.price {
    font-size: 24px;
    font-weight: 700;
    margin-top: 35px;
}

#pricing ul.pricing li.plan-header .price-duration>span.duration {
    margin-top: 5px;
}

#pricing ul.pricing li.plan-header .plan-name {
    margin-top: 10px;
    font-size: 24px;
    color: #272727;
    font-weight: bold;
    line-height: 1;
    text-transform: uppercase;
}

#pricing ul.pricing.featured {
    background: #222534;
    color: #fff;
    border: 0;
}

#pricing ul.pricing.featured li.plan-header {
    background-image: -webkit-gradient(linear, left top, right top, from(#2caab3), to(#2c8cb3));
    background-image: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
}

#pricing ul.pricing.featured li.plan-header .plan-name {
    color: #fff;
}
.media.service-box {
    margin: 25px 0;
}

.media.service-box .pull-left {
    margin-right: 20px;
}

.media.service-box .pull-left>i {
    font-size: 32px;
    height: 64px;
    line-height: 64px;
    text-align: center;
    width: 64px;
    border-radius: 100%;
    color: #45aed6;
    box-shadow: inset 0 0 0 1px #d7d7d7;
    -webkit-box-shadow: inset 0 0 0 1px #d7d7d7;
    -webkit-transition: background-color 400ms, background-color 400ms;
    transition: background-color 400ms, background-color 400ms;
    position: relative;
}

.media.service-box .pull-left>i:after {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    margin-top: -10px;
    right: -10px;
    border: 4px solid #fff;
    border-radius: 20px;
    background: #45aed6;
}

.media.service-box:hover .pull-left>i {
    background-image: -webkit-gradient(linear, left top, right top, from(#2caab3), to(#2c8cb3));
    background-image: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    color: #fff;
    box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.8);
    -webkit-box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.8);
}
</style>

<section class="container" data-aos="fade-up">
  
    
    <div class="section-header mt-5">
        
        <h2 class="section-title text-center wow fadeInDown"><?php echo $datosSalud[0]['titulo'];?></h2>
          
    </div>
    <div class="row content">

        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">

            <h3><?php echo $datosSalud[0]['subtitulo'];?></h3>
            <p class="fst-italic"><?php echo $datosSalud[0]['p-1'];?></p> 

        </div>

        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">

            <img src="<?php echo $datosSalud[0]['img-1'];?>" class="img-fluid animated" alt="">

        </div>
      
    </div>

</section>

<section id="features" class="section-bg">
        <div class="container">
            <!-- <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Awesome Features</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="<?php echo $datosSalud[0]['img-2'];?>" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="bx bxs-shield"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo substr($datosSalud[0]['item-1'],0,10);?> ...</h4>
                            <?php
                                $cantidad = strlen($datosSalud[0]['item-1']); 
                            ?>
                            <p><?php echo "...".substr($datosSalud[0]['item-1'],11,$cantidad);?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="bx bx-donate-heart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo substr($datosSalud[0]['sub-item-1'],0,32);?> ...</h4>
                            <?php
                                $cantidad = strlen($datosSalud[0]['sub-item-1']); 
                            ?>
                            <p><?php echo "...".substr($datosSalud[0]['sub-item-1'],33,$cantidad);?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="bx bxs-band-aid"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo substr($datosSalud[0]['sub-item-2'],0,28);?> ...</h4>
                            <?php
                                $cantidad = strlen($datosSalud[0]['sub-item-2']); 
                            ?>
                            <p><?php echo "...".substr($datosSalud[0]['sub-item-2'],29,$cantidad);?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="bx bx-money"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo substr($datosSalud[0]['item-2'],0,12);?> ...</h4>
                            <?php
                                $cantidad = strlen($datosSalud[0]['item-2']); 
                            ?>
                            <p><?php echo "...".substr($datosSalud[0]['item-2'],13,$cantidad);?></p>
                        </div>
                    </div>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="bx bxs-group"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo substr($datosSalud[0]['item-3'],0,19);?> ...</h4>
                            <?php
                                $cantidad = strlen($datosSalud[0]['item-3']); 
                            ?>
                            <p><?php echo "...".substr($datosSalud[0]['item-3'],20,$cantidad);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <!-- <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Latest Blogs</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="vistas/assets/img/blog/01.jpg" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-hospital-o"></i></span>
                                </div>
                                <div class="entry-date">Llamando al Doctor</div>
                                <h2 class="entry-title"><a href="#">Disponible las 24 horas, todos los días del año.</a></h2>
                            </header>

                            <div class="entry-content">
                                <p><?php echo $datosSalud[0]['detalle1'];?></p></p>
                                <!-- <a class="btn btn-primary" href="#">Read More</a> -->
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                </div>
                <!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="vistas/assets/img/blog/02.jpg" alt="">
                                <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">¿ QUE ES ?</div>
                                    <h2 class="entry-title"><a href="#">Llamando al Doctor es un médico en tu celular</a></h2>
                                   
                                </header>

                                <div class="entry-content">
                                <p><?php echo $datosSalud[0]['detalle2'];?></p></p>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Campbell</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="vistas/assets/img/blog/03.jpg" alt="">
                                <span class="post-format post-format-audio"><i class="fa fa-music"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">Distintas Especialidades</div>
                                    <h2 class="entry-title"><a href="#"><?php echo $datosSalud[0]['detalle3'];?></a></h2>
                                </header>

                                <div class="entry-content">
                                    <p>Seleccionás la especialidad por la que necesitás consultar detallando el motivo del contacto y tus antecedentes, en caso de tener alguno.</p>
                                    
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Ruth</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong><?php echo substr($datosSalud[0]['detalle4'],0,32);?></strong></h3>
                <?php
                    $cantidad = strlen($datosSalud[0]['detalle4']); 
                ?>
              <p>
              <?php echo substr($datosSalud[0]['detalle4'],32,$cantidad);?>
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  
                    <a data-toggle="collapse" class="collapse" href="#accordion-list-1">
                      <span>01</span>
                      <?php echo substr($datosSalud[0]['detalle5'],0,13);?>
                      <i class="bx bx-chevron-down icon-show"></i>
                      <i class="bx bx-chevron-up icon-close"></i>
                    </a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    
                    <?php

                        $cantidad = strlen($datosSalud[0]['detalle5']); 

                    ?>
                    <p>
                        <?php echo substr($datosSalud[0]['detalle5'],15,$cantidad);?>
                    </p>

                  </div>
                  
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> <?php echo substr($datosSalud[0]['detalle6'],0,24);?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <?php
                        $cantidad = strlen($datosSalud[0]['detalle6']); 
                    ?>
                    <p>
                    <?php echo substr($datosSalud[0]['detalle6'],23,$cantidad);?>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> <?php echo substr($datosSalud[0]['detalle7'],0,40)."...";?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <?php
                        $cantidad = strlen($datosSalud[0]['detalle7']); 
                    ?>
                    <p>
                    <?php echo "...".substr($datosSalud[0]['detalle7'],40,$cantidad);?>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("vistas/assets/img/blog/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">PLANES</h2>
                <!-- <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    
                                    <span class="price">
                                      
                                    PLAN                                        
                                      
                                    </span>

                                    <span class="duration">
                                    <?php echo $datosSalud[0]['plan-subtitulo1'];?>    
                                    </span>

                                </div>

                                <div class="plan-name">
                                <?php echo $datosSalud[0]['plan-subtitulo1'];?>  
                                </div>
                            </li>
                            <li><strong><?php echo $datosSalud[0]['plan1'];?>  </strong> </li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">SOLICITAR MAS INFO</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing">
                        <li class="plan-header">
                                <div class="price-duration">
                                    
                                    <span class="price">
                                      
                                    PLAN                         
                                      
                                    </span>

                                    <span class="duration">
                                   Adultos   
                                    </span>

                                </div>

                                <div class="plan-name">
                                <?php echo $datosSalud[0]['plan-subtitulo2'];?> 
                                </div>
                            </li>
                            <li><strong><?php echo $datosSalud[0]['plan2'];?>  </strong> </li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">SOLICITAR MAS INFO</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    
                                    <span class="price">
                                      
                                   PLAN                                        
                                      
                                    </span>

                                    <span class="duration">
                                       Gastos
                                    </span>

                                </div>

                                <div class="plan-name">
                                <?php echo $datosSalud[0]['plan-subtitulo3'];?> 
                                </div>
                            </li>
                            <li><strong><?php echo $datosSalud[0]['plan3'];?>  </strong> </li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">SOLICITAR MAS INFO</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    
                                    <span class="price">
                                      
                                   PLAN                                        
                                      
                                    </span>

                                    <span class="duration">
                                       Gastos
                                    </span>

                                </div>

                                <div class="plan-name">
                                <?php echo $datosSalud[0]['plan-subtitulo4'];?> 
                                </div>
                            </li>
                            <li><strong><?php echo $datosSalud[0]['plan4'];?>  </strong> </li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">SOLICITAR MAS INFO</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                        <li class="plan-header">
                                <div class="price-duration">
                                    
                                    <span class="price">
                                      
                                    <?php echo $datosSalud[0]['plan-titulo5'];?>                                          
                                      
                                    </span>

                                    <span class="duration">
                                    <?php echo $datosSalud[0]['plan-subtitulo5'];?>    
                                    </span>

                                </div>

                                <div class="plan-name">
                                    <?php echo $datosSalud[0]['plan-titulo5'];?>    
                                </div>
                            </li>
                            <li><strong><?php echo $datosSalud[0]['plan5'];?>  </strong> </li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">SOLICITAR MAS INFO</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>