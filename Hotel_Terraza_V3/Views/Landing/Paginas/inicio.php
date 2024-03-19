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
          <li class="active"><a href="#header" class="scrollto">Inicio</a></li>
          <li><a href="#about" class="scrollto">Nosotros</a></li>
          <li><a href="#why-us" class="scrollto">Reserva</a></li>

          <li><a href="#contact" class="scrollto">Contacto</a></li>
          <li><a href="?c=Dashboard&a=main" class="scrollto">Administracion</a></li>
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

        <div class="row ">
      
<div class="container mt-5">
  <div class="container-fluid"><br><br>
  <div class="row d-flex justify-content-center ">
    <div class="card">
      <h1 class="text-center">Consulta La Disponibilidad De Tu Reserva</h1>
    </div>
    <div class="col col-sm-10 col-md-6 col-lg-4"><br><br>
      <div class="card rounded-5 text-center">
        <br>
        <form method="get">
          <label >Fecha Inicio:</label>
          <input type="date" class="form-control" name="fecha_ini">
          <br><br>
          <label>Fecha Fin:</label>
          <input type="date" class="form-control" name="fecha_fin">
          <br>
          <div class="container d-flex justify-content-center">
            <a href="../Controllers/reserva.php"class="btn btn-outline-dark">Consultar</a>
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
          <h2>Contacto</h2>
        </div>

        <div class="row justify-content-evenly row-cols-1 ">
            <div class="col col-sm-1 col-md-12 col-lg-4 ">
              <div class="container card">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1988.605028953634!2d-75.74686537531205!3d4.556203618125798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e385fba4c4538a7%3A0x41fefad6ce97d64e!2sCasa%20Campestre%20Terraza%20Del%20Palmar!5e0!3m2!1ses!2sco!4v1701823209752!5m2!1ses!2sco" width="auto" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

          </div>


          <div class="col col-sm-12 col-md-12 col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p><a href="https://www.google.com/maps/place/Casa+Campestre+Terraza+Del+Palmar/@4.5561592,-75.7461496,21z/data=!4m9!3m8!1s0x8e385fba4c4538a7:0x41fefad6ce97d64e!5m2!4m1!1i2!8m2!3d4.5561681!4d-75.7460165!16s%2Fg%2F11bxg2tznx?hl=es&entry=ttu">Armenia-Montenegro, Montenegro, Quindío</a><br></p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <p>frank_rey@soy.sena.edu.co</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone-call"></i>
                <p>+57 3195198167</p>
              </div>
            </div>

            <div class="social-links justify-content-center">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>

          </div>

          <div class="col col-sm-1 col-md-12 col-lg-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombres" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Contenido Del Asunto" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Solicitar Cotizacion</button></div>
            </form>
          </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->