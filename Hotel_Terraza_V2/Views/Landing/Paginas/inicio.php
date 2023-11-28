<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col">
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

      <!-- Contenido adicional -->
      <div class="mt-4 text-center">
        <h2>Bienvenido a Casa Campestre Terrazas del Palmar</h2>
        <p>Descubre nuestras comodidades y disfruta de una estancia inolvidable.</p>
        <!-- Agrega más contenido según sea necesario -->
      </div>
    </div>
  </div>
</div>
