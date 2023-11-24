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
    </div>
    <div class="col">
      <div class="container-fluid card">
            <iframe class="vh-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.212091632676!2d-75.7462688876652!3d4.555835949449683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e385fba4c4538a7%3A0x41fefad6ce97d64e!2sCasa%20Campestre%20Terraza%20Del%20Palmar!5e0!3m2!1ses!2sco!4v1700796165881!5m2!1ses!2sco" width="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
