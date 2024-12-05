<?php
include('nav.php');
?>

<!-- agregar icono a la pestaña
  -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="images/fotopag.png"> -->

    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Donde la tecnología, la calidad y el diseño se encuentran.</h1>
                    <!-- <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a> -->
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
<!-- imagen del banner -->
                    <img src="images/banner.png" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-wrap align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Tecnología a tu alcance en el mejor lugar</h1>
                    <!-- <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a> -->
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="images/banner.png" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left">
          <use xlink:href="#chevron-left" />
        </svg>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right">
          <use xlink:href="#chevron-right" />
        </svg>
      </div>
    </section>
    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Envíos gratis</h3>
                <p>Recibe todo lo que compres en la comodidad de tu casa.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Garantía de calidad</h3>
                <p>Satisfacción de compra garantizada con productos de la mejor calidad.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Ofertas diarias</h3>
                <p>Encuentra ofertas atractivas cada día, no te las pierdas.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">100% pagos seguros</h3>
                <p>Trámites de compra 100% seguros y sin riesgo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
                <!-- Sección de teléfonos -->
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Nuestros Productos</h2>
            <div class="btn-right">
                
            </div>
            <div class="btn-right">
              <?php
                    if(isset($_SESSION['tipousu'])){
                      if( $_SESSION['tipousu']==1){
                      echo '<a href="producto.php" class="btn btn-medium btn-normal text-uppercase">Agregar Producto</a>';
                      }
                    }
                  ?>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <!-- Div para agregar los datos de un nuevo producto -->
              <?php 
                include('clases/Producto.php');
                $producto=new Producto();
                $respuesta=$producto->mostrarTodo();

                // if(isset($_SESSION['pk_usuario'])):
                //   $ruta="usuario.php";
                // else:
                //   $ruta="login.php";
                // endif;
              ?>
               <?php
                while($row=mysqli_fetch_assoc($respuesta)){
                ?>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/<?=$row['foto']?>" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                    <?php echo '<a href="detalle_producto.php?pkproducto='.$row['pk_producto'].'" class="btn btn-medium btn-black">Ver Detalles<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>' ?>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a><?=$row['nom_prod']?></a>
                    </h3>
                    <span class="item-price text-primary"><?=$row["precio"]."$"?></span>
                  </div>
                </div>
                <div class="btn-producto-container">
                  <?php
                    if(isset($_SESSION['tipousu'])){
                      if( $_SESSION['tipousu']==1){
                      echo '<a href="editar_producto.php?pk='.$row['pk_producto'].'" class="btn btn-medium btn-black">Actualizar producto</a>';
                      
                      echo '<a href="formularios/eliminar_producto.php?pk='.$row['pk_producto'].'" class="btn btn-medium btn-black">Eliminar producto   </a>';
                      }
                    }
                  ?>
                </div>
              </div>
              <?php
                }
              ?> <!--  Aquí cierra el div de un producto -->
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge" style="background-image: url('images/banner2.jpg');background-position: right; background-repeat: no-repeat;">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium">
            <h3>10% de descuento</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">Ventas de Año Nuevo</h2>
            <!-- <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Comprar</a> -->
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          
        </div>
      </div>
    </section>
    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Últimas novedades</h2>
            <div class="btn-right">
              <!-- <a href="blog.html" class="btn btn-medium btn-normal text-uppercase">Leer blog</a> -->
            </div>
          </div>
          <div class="post-grid d-flex flex-wrap justify-content-between">
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/apexprotkl.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">22 de febrero, 2024</span>
                  <span class="meta-category">- ¡APROVECHA LAS OFERTAS EN TECLADOS Y RATONES GAMING!</span>
                </div>
                <h3 class="card-title">
                  <label>Renueva tu experiencia con periféricos de alta calidad a precios irresistibles.</label>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/inteldisplay.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">25 de febrero, 2024</span>
                  <span class="meta-category">- NUEVOS PROCESADORES INTEL Y AMD DISPONIBLES</span>
                </div>
                <h3 class="card-title">
                  <label>Descubre el poder de las últimas generaciones de procesadores para potenciar tu PC.</label>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="images/pcdisplay.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">17 de Marzo, 2023</span>
                  <span class="meta-category">- EQUIPOS ARMADOS PARA GAMERS Y PROFESIONALES</span>
                </div>
                <h3 class="card-title">
                  <label>Obtén computadoras personalizadas según tus necesidades, listas para cualquier desafío.</label>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="position-relative">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
              <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
              </svg>
            </div>
            <div class="swiper testimonial-swiper">
              <div class="quotation text-center">
                <svg class="quote">
                  <use xlink:href="#quote" />
                </svg>
              </div>

              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>“Tienen buenos productos y mucha variedad para todo.”</blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">Gema Gónzales</div>
                    </div>
                  </div>
                </div>

                <!-- Con este bloque de código se agregan mas comentarios al swiper-slider -->
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>“Me encantó la calidad y en especial el buen servicio que ofrecen, contento.”</blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">Jareth López</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>“Muy feliz me encanta comprar aquí, tienen ofertas muy buenas, muchos productos geniales y siempre cumplen con sus tiempos de entrega.”</blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">Jennifer Rosas</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
              <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
    <footer id="footer" class="overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <!-- <img src="images/main-logo.png" alt="logo"> -->
                  <p>Explora nuestra tienda y descubre tecnología diseñada para transformar tu día a día. Innovación, calidad y estilo a un clic de distancia.</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <p>
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </p>
                      </li>
                      <li>
                        <p>
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </p>
                      </li>
                      <li>
                        <p>
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </p>
                      </li>
                      <li>
                        <p>
                          <svg class="linkedin">
                            <use xlink:href="#linkedin" />
                          </svg>
                        </p>
                      </li>
                      <li>
                        <p>
                          <svg class="youtube">
                            <use xlink:href="#youtube" />
                          </svg>
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-uppercase pb-2">Contáctanos</h5>
                  <p>¿Tienes alguna duda o sugerencia? <p>mcqueenstore@gmail.com</p>
                  </p>
                  <p>¿Necesitas soporte? Solo llamanos. <p>+52 695-138-4166</p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>
    <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-md-4 col-sm-6">
            <div class="payment-method d-flex">
              <p>Métodos de pago:</p>
              <div class="card-wrap ps-2">
                <img src="images/visa.jpg" alt="visa">
                <img src="images/mastercard.jpg" alt="mastercard">
                <img src="images/paypal.jpg" alt="paypal">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="copyright">
              <!-- <p>© Copyright 2023 MiniStore. Design by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a> -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script> 
     
    <script src="js/modernizr.js"></script>
    
  </body>
</html>