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
    <link rel="apple-touch-icon" sizes="180x180" href="/../icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/../icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/../icons/favicon-16x16.png">
    <link rel="manifest" href="/../icons/site.webmanifest">
    <!-- Link Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS - Link -->
    <link rel="stylesheet" href="/../build/css/app.css">
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
                <a id="nosotros" class="nav-link" href="/nosotros"> Acerca de mí </a>
              </li>
              <li class="nav-item dropdown">
                <a id="bodas" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Bodas </a>
                <ul class="dropdown-menu">
                  <li> 
                    <a id="bodas_pre-bodas" class="dropdown-item" href="/bodas_pre-bodas"> Pre-Bodas </a> 
                  </li>
                  <li> 
                    <a id="bodas_fiestas" class="dropdown-item" href="/bodas_fiestas"> Fiestas </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="quince" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Quince </a>
                <ul class="dropdown-menu">
                  <li>
                    <a id="quince_books" class="dropdown-item" href="/quince_books"> Books </a>
                  </li>
                  <li>
                    <a id="quince_fiestas" class="dropdown-item" href="/quince_fiestas"> Fiestas </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="social" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Social </a>
                <ul class="dropdown-menu">
                  <li> 
                    <a id="social_comuniones" class="dropdown-item" href="/social_comuniones"> Comuniones </a>
                  </li>
                  <li> 
                    <a id="social_bautismos" class="dropdown-item" href="/social_bautismos"> Bautismos </a>
                  </li>
                  <li>
                    <a id="social_infantil" class="dropdown-item" href="/social_infantil"> Infantil </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a id="contacto" class="nav-link" href="/contacto"> Contacto </a>
              </li>
            </ul>
          </div>
        </div>
      </nav> <!-- fin EXPANDIBLE NAVBAR -->

      <?php if(!$esHome): ?>
        <h2 class="container text-center titulo"> <?php echo $titulo; ?> </h2>
      <?php 
        endif;
        echo $contenido;
      ?>

    </main>

<footer class="text-center footer">
  <div class="redes-sociales">
    <a href="https://www.instagram.com/izfotografias/">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
        <path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"/>
      </svg>
    </a>
    <a href="https://www.facebook.com/izfotografias">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
        <path d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z"/>
      </svg>
    </a>
  </div>
  <div>
    <p> Desarrollado por &lt; moroDev &gt; / &copy; <?php echo date('Y'); ?> </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../build/js/app.js"></script>
</body>
</html>