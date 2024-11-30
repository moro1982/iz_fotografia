<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Metadatos-->
    <meta charset="UTF-8">
    <meta name="author" content="moroDev">
    <meta name="description" content="Landing Page para IZ Fotografías">
    <meta name="keywords" content="iz-fotografias, landing-page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título -->
    <title>IZ Fotografías</title>
    <!-- Favicon - Link -->
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/site.webmanifest">
    <!-- Link Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS - Link -->
    <link rel="stylesheet" href="build/css/app.css">
  </head>
  
  <body>
    <main>
      
      <!-- EXPANDIBLE NAVBAR -->
      <nav class="navbar navbar-light navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <!-- Botón -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Logo / Home -->
          <a id="inicio" class="navbar-brand" href="/">
            <picture>
              <source srcset="build/img/IZ_logo_transparente.avif" type="image/avif">
              <source srcset="build/img/IZ_logo_transparente.webp" type="image/webp">
              <img loading="lazy" width="120" height="120" src="build/img/IZ_logo_transparente.png" alt="Logo">
            </picture>
          </a>
          <!-- Titulos -->
          <div class="heading">
            <h4> Ignacio Zanet Fotografía </h4>
            <p> Fotografía Social </p>
          </div>
          <!-- Enlaces -->
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
              <li class="nav-item">
                <a id="nosotros" class="nav-link" href="nosotros.php"> Acerca de mí </a>
              </li>
              <li class="nav-item dropdown">
                <a id="bodas" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Bodas </a>
                <ul class="dropdown-menu">
                  <li> 
                    <a id="bodas_pre-bodas" class="dropdown-item" href="bodas_pre-bodas.php"> Pre-Bodas </a> 
                  </li>
                  <li> 
                    <a id="bodas_fiestas" class="dropdown-item" href="bodas_fiestas.php"> Fiestas </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="quince" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Quince </a>
                <ul class="dropdown-menu">
                  <li>
                    <a id="quince_books" class="dropdown-item" href="quince_books.php"> Books </a>
                  </li>
                  <li>
                    <a id="quince_fiestas" class="dropdown-item" href="quince_fiestas.php"> Fiestas </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="social" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Social </a>
                <ul class="dropdown-menu">
                  <li> 
                    <a id="social_comuniones" class="dropdown-item" href="social_comuniones.php"> Comuniones </a>
                  </li>
                  <li> 
                    <a id="social_bautismos" class="dropdown-item" href="social_bautismos.php"> Bautismos </a>
                  </li>
                  <li>
                    <a id="social_infantil" class="dropdown-item" href="social_infantil.php"> Infantil </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a id="contacto" class="nav-link" href="contacto.php"> Contacto </a>
              </li>
            </ul>
          </div>
        </div>
      </nav> <!-- fin EXPANDIBLE NAVBAR -->
