
<!-- PRE-BODAS - Ultimo carousel -->

<p class="text-center fs-5 py-1 mt-5 mb-0 mx-3"> Reels para Redes Sociales </p>
      <!-- GALLERY 4 -->
      <div class="galeria w-50 py-3 p-lg-5">
        <!-- CAROUSSEL -->
        <div id="galeria04" class="carousel slide">
          <!-- Indicadores -->
          <div class="carousel-indicators"> <!-- generados x función de JS --> </div>
          <!-- Contenedor -->
          <div class="carousel-inner"> <!-- generados x función de JS --> </div>
          <!-- Botones -->
          <button class="carousel-control-prev" type="button" data-bs-target="#galeria04" data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galeria04" data-bs-slide="next">
            <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> <!-- fin CAROUSSEL-->
      </div> <!-- Fin GALLERY -->

              <!-- <li class="nav-item dropdown">
                <a id="bodas" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Bodas </a>
                <ul class="dropdown-menu">
                  <li> 
                    <a id="bodas_pre-bodas" class="dropdown-item" href="bodas_pre-bodas.php"> Pre-Bodas </a> 
                  </li>
                  <li> 
                    <a id="bodas_fiestas" class="dropdown-item" href="bodas_fiestas.php"> Fiestas </a>
                  </li>
                </ul>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a id="quince" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"> Quince </a>
                <ul class="dropdown-menu">
                  <li>
                    <a id="quince_books" class="dropdown-item" href="quince_books.php"> Books </a>
                  </li>
                  <li>
                    <a id="quince_fiestas" class="dropdown-item" href="quince_fiestas.php"> Fiestas </a>
                  </li>
                </ul>
              </li> -->
              <!-- <li class="nav-item dropdown">
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
                  <li>
                    <a id="social_institucional" class="dropdown-item" href="social_institucional.php"> Institucional </a>
                  </li>
                </ul>
              </li> -->

              <!-- <li class="nav-item dropdown">
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
                  <li>
                    <a id="social_institucional" class="dropdown-item" href="/social_institucional"> Institucional </a>
                  </li>
                </ul>
              </li> -->

<!-- 
  case '/bodas_fiestas':
    resaltarActual('bodas', 'bodas_fiestas');
    carpetas = [
        { ruta : 'bodas_fiestas/GiselaGaston', cantidad : 16 },
        { ruta : 'bodas_fiestas/JaviLaura', cantidad : 12 },
        { ruta : 'bodas_fiestas/AngelStella', cantidad : 16 },
        { ruta : 'bodas_fiestas/CariVale', cantidad : 11 },
        { ruta : 'bodas_fiestas/OsvaldoManuela', cantidad : 11 }
    ];
    crearMiniaturas("seccion00", carpetas, 5);
    break;
case '/bodas_pre-bodas':
    resaltarActual('bodas', 'bodas_pre-bodas');
    carpetas = [ { ruta : 'bodas_pre-bodas/AleCaro', cantidad: 20 } ];
    crearMiniaturas("seccion00", carpetas, 1);
    carpetas = [
        { ruta : 'bodas_pre-bodas/MauroNoe', cantidad : 20 },
        { ruta : 'bodas_pre-bodas/RoxiHugo/reel_IG', cantidad : 23 }
    ];
    crearMiniaturas("seccion01", carpetas, 2);
    break;
case '/quince_books':
    resaltarActual('quince', 'quince_books');
    carpetas = [
        { ruta : 'quince_books/bookCami', cantidad : 10 },
        { ruta : 'quince_books/bookMale', cantidad : 10 },
        { ruta : 'quince_books/bookMica', cantidad : 11 },
        { ruta : 'quince_books/bookValen', cantidad : 20 }
    ];
    crearMiniaturas("seccion00", carpetas, 4);
    break;
case '/quince_fiestas':
    resaltarActual('quince', 'quince_fiestas');
    carpetas = [ { ruta : 'quince_fiestas', cantidad : 26 } ];
    crearMiniaturas("seccion00", carpetas, 1);
    break;
case '/social_bautismos':
    resaltarActual('social', 'social_bautismos');
    carpetas = [ { ruta : 'social_bautismos', cantidad : 15 } ];
    crearMiniaturas('seccion00', carpetas, 1);
    break;
case '/social_comuniones':
    resaltarActual('social', 'social_comuniones');
    carpetas = [ { ruta : 'social_comuniones/Adi', cantidad : 17 } ];
    crearMiniaturas('seccion00', carpetas, 1);
    break;
case '/social_infantil':
    resaltarActual('social', 'social_infantil');
    carpetas = [
        { ruta : 'social_infantil/Brandon', cantidad : 8 },
        { ruta : 'social_infantil/Catalina', cantidad : 13 },
        { ruta : 'social_infantil/Fede', cantidad : 14 },
        { ruta : 'social_infantil/Luisina', cantidad : 13 }
    ];
    crearMiniaturas('seccion00', carpetas, 4);
    break;
-->

<!-- 
  // Le asigno un evento de click para que ejecute una función que:
  overlay.onclick = function() {
      const body = document.querySelector('body');    // Seleccione el elemento body.
      body.classList.remove('fijar-body');    // Le quite la clase al body.
      overlay.remove();   // Elimine el overlay.
  }

  // Botón para cerrar la ventana modal.
    // const cerrarModal = document.createElement('P');    // Crea el elemento.
    // cerrarModal.textContent = 'X';  // Le agrega un texto (la X).
    // cerrarModal.classList.add('btn-cerrar');    // Le asigna una clase.
    // cerrarModal.onclick = function() {  // Le asigno un evento de click para que ejecute una función que:
    //     const body = document.querySelector('body');    // Selecciona el elemento body.
    //     body.classList.remove('fijar-body');    // Le quita la clase al body.
    //     overlay.remove();   // Elimina el overlay.
    // }
    // overlay.appendChild(cerrarModal);   // Incorpora el elemento "cerrarModal" como elemento descendiente.
-->
<!--
  // public static function bodasFiestas(Router $router) {
  //     $router->render('paginas/bodas_fiestas', [
  //         'esHome' => false,
  //         'titulo' => 'Fiestas de Bodas',
  //         'subsecciones' => null
  //     ]);
  // }
  // public static function bodasPreBodas(Router $router) {
  //     $router->render('paginas/bodas_pre-bodas', [
  //         'esHome' => false,
  //         'titulo' => 'Pre-Bodas',
  //         'subsecciones' => ['Sesiones', 'Reels para Redes Sociales']
  //     ]);
  // }
  // public static function quinceBooks(Router $router) {
  //     $router->render('paginas/quince_books', [
  //         'esHome' => false,
  //         'titulo' => 'Books de Quince',
  //         'nroGalerias' => 4
  //     ]);
  // }
  // public static function quinceFiestas(Router $router) {
  //     $router->render('paginas/quince_fiestas', [
  //         'esHome' => false,
  //         'titulo' => 'Fiestas de Quince',
  //         'nroGalerias' => 1
  //     ]);
  // }
  // public static function socialBautismos(Router $router) {
  //     $router->render('paginas/social_bautismos', [
  //         'esHome' => false,
  //         'titulo' => 'Bautismos',
  //         'nroGalerias' => 1
  //     ]);
  // }
  // public static function socialComuniones(Router $router) {
  //     $router->render('paginas/social_comuniones', [
  //         'esHome' => false,
  //         'titulo' => 'Comuniones',
  //         'nroGalerias' => 1
  //     ]);
  // }
  // public static function socialInfantil(Router $router) {
  //     $router->render('paginas/social_infantil', [
  //         'esHome' => false,
  //         'titulo' => 'Infantil',
  //         'nroGalerias' => 4
  //     ]);
  // }

-->