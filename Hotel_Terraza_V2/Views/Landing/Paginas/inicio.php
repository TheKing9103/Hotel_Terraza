  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <h1><a href="index.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="Assets/Plantilla/Landing/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#header" class="scrollto">Home</a></li>
          <li><a href="#about" class="scrollto">About Us</a></li>
          <li><a href="#why-us" class="scrollto">Why Us</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact" class="scrollto">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            

      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <?php
          $directorio = 'Assets/Imgs/Slider/'; // Reemplaza 'tu_carpeta_de_imagenes' con la ruta de tu carpeta
          $archivos = scandir($directorio);
          $primera_imagen = true;

          foreach ($archivos as $archivo) {
            // Filtra solo archivos .jpg
            if (pathinfo($archivo, PATHINFO_EXTENSION) == 'jpg') {
              $ruta_imagen = $directorio . '/' . $archivo;
          ?>

              <div class="carousel-item img-custom-size <?php echo ($primera_imagen) ? 'active' : ''; ?>" data-bs-interval="10000">
                <img 
                src="<?php echo $ruta_imagen; ?>" 
                class="img-fluid vh-100"  
                alt="<?php echo $archivo; ?>">
              </div>

          <?php
              $primera_imagen = false;
            }
          }
          ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


          </div>


   <div class="col">
        

        <div class="text-center">
            <h3>Visión</h3>
            <p>Aspiramos a ser reconocidos como el referente en hospedaje rural, destacando por nuestras comodidades y una
                ubicación privilegiada a tan solo 400 metros del casco urbano. Nos distinguimos por ofrecer precios justos,
                promoviendo la protección del medio ambiente y garantizando la plena satisfacción de nuestros clientes.
                Nuestra eficiencia y compromiso con la mejora continua nos posicionan como líderes en la industria, marcando
                el estándar para una experiencia de hospedaje rural excepcional.
            </p>
        </div>
        <br>
        <br>
        <br>
        <div class="text-center">
            <h3>Misión</h3>
            <p>En CASA CAMPESTRE TERRAZAS DEL PALMAR, nos dedicamos a brindar experiencias únicas de hospedaje rural.
                Nuestro compromiso es que cada turista se sienta no solo como un visitante, sino como parte integral de un
                entorno cómodo, seguro y tranquilo. Buscamos proporcionar oportunidades para que nuestros huéspedes se
                integren plenamente con la naturaleza y el entorno, creando recuerdos inolvidables.
            </p>
        </div>
    </div>


        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
      
<div class="container mt-5">
  <div class="container-fluid"><br><br>
  <div class="row d-flex justify-content-center">
    <div class="card">
      <h1 class="text-center">Consulta La Disponibilidad De Tu Reserva</h1>
    </div>
    <div class="col col-sm-2"><br><br>
      <div class="card rounded-5">
        <br>
        <form method="get">
          <label>Fecha Inicio:</label>
          <input type="date" class="form-control" name="fecha_ini">
          <br>
          <label>Fecha Fin:</label>
          <input type="date" class="form-control" name="fecha_fin">
          <br>
          <div class="container d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-dark">Consultar</button>
          </div>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>
</div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone-call"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-7">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->