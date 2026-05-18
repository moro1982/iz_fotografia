<?php 
  require_once '../includes/app.php';

  use MVC\Router;
  use Controller\PaginasController;
  $router = new Router;
  
  $router->get( '/', [PaginasController::class, 'index'] );
  $router->get('/nosotros', [PaginasController::class,'nosotros']);
  $router->get('/bodas', [PaginasController::class, 'bodas']);
  $router->get('/quince', [PaginasController::class, 'quince']);
  // $router->get('/bodas_pre-bodas', [PaginasController::class, 'bodasPreBodas']);
  // $router->get('/quince_books', [PaginasController::class, 'quinceBooks']);
  // $router->get('/quince_fiestas', [PaginasController::class, 'quinceFiestas']);
  // $router->get('/social_bautismos', [PaginasController::class, 'socialBautismos']);
  // $router->get('/social_comuniones', [PaginasController::class, 'socialComuniones']);
  // $router->get('/social_infantil', [PaginasController::class, 'socialInfantil']);
  $router->get('/social_institucional', [PaginasController::class, 'socialInstitucional']);
  $router->get('/contacto', [PaginasController::class, 'contacto']);
  $router->post('/contacto', [PaginasController::class, 'contacto']);
  
  $router->comprobarRutas();
?>
