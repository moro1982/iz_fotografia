<?php
    for($i=1; $i <= $nroGalerias; $i++):
        $galeriaId = 'galeria0' . $i;
?>
      <!-- GALLERY i -->
      <div class="galeria pt-3 p-lg-4">
        <!-- CAROUSSEL -->
        <div id="<?php echo $galeriaId; ?>" class="carousel slide">
          <!-- Indicadores -->
          <div class="carousel-indicators"> <!-- generados x función de JS --> </div>
          <!-- Contenedor -->
          <div class="carousel-inner"> <!-- generados x función de JS --> </div>
          <!-- Botones -->
          <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $galeriaId; ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $galeriaId; ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> <!-- fin CAROUSSEL-->
      </div> <!-- Fin GALLERY -->
<?php endfor; ?>