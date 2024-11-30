<?php

    namespace Controller;
    use MVC\Router;
    use PHPMailer\PHPMailer\PHPMailer;

    class PaginasController {

        public static function index(Router $router) {
            $router->render('paginas/index', [
                'esHome' => true
            ]);
        }
        public static function nosotros(Router $router) {
            $router->render('paginas/nosotros', [
                'esHome' => false,
                'titulo' => 'Acerca de mí'
            ]);
        }
        public static function bodasFiestas(Router $router) {
            $router->render('paginas/bodas_fiestas', [
                'esHome' => false,
                'titulo' => 'Fiestas de Bodas',
                'nroGalerias' => 5
            ]);
        }
        public static function bodasPreBodas(Router $router) {
            $router->render('paginas/bodas_pre-bodas', [
                'esHome' => false,
                'titulo' => 'Pre-Bodas',
                'nroGalerias' => 2
            ]);
        }
        public static function quinceBooks(Router $router) {
            $router->render('paginas/quince_books', [
                'esHome' => false,
                'titulo' => 'Books de Quince',
                'nroGalerias' => 4
            ]);
        }
        public static function quinceFiestas(Router $router) {
            $router->render('paginas/quince_fiestas', [
                'esHome' => false,
                'titulo' => 'Fiestas de Quince',
                'nroGalerias' => 1
            ]);
        }
        public static function socialBautismos(Router $router) {
            $router->render('paginas/social_bautismos', [
                'esHome' => false,
                'titulo' => 'Bautismos',
                'nroGalerias' => 1
            ]);
        }
        public static function socialComuniones(Router $router) {
            $router->render('paginas/social_comuniones', [
                'esHome' => false,
                'titulo' => 'Comuniones',
                'nroGalerias' => 1
            ]);
        }
        public static function socialInfantil(Router $router) {
            $router->render('paginas/social_infantil', [
                'esHome' => false,
                'titulo' => 'Infantil',
                'nroGalerias' => 4
            ]);
        }
        
        public static function contacto(Router $router) {
            $mensaje = null;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $respuestas = $_POST['contacto'];
            
                $phpmailer = new PHPMailer();
                $phpmailer->isSMTP();
                $phpmailer->Host = $_ENV['EMAIL_HOST'];
                $phpmailer->SMTPAuth = true;
                $phpmailer->Username = $_ENV['EMAIL_USER'];
                $phpmailer->Password = $_ENV['EMAIL_PASS'];
                $phpmailer->SMTPSecure = 'tls';
                $phpmailer->Port = $_ENV['EMAIL_PORT'];
            
                $phpmailer->setFrom('info@ignaciozanet.com.ar');
                $phpmailer->addAddress('info@ignaciozanet.com.ar', 'IgnacioZanet.com.ar');
                $phpmailer->Subject = 'Tenes un nuevo mensaje!';
                $phpmailer->isHTML(true);
                $phpmailer->CharSet = 'UTF-8';
            
                $contenido = '<html>';
                $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';
                $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
                $contenido .= '<p>Teléfono: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Tipo de evento: ' . $respuestas['tipo'] . '</p>';
                $contenido .= '<p>Cantidad de asistentes: ' . $respuestas['asistentes'] . '</p>';
                $contenido .= '<p>Localización del evento: ' . $respuestas['lugar'] . '</p>';
                $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
                $contenido .= '</html>';
            
                $phpmailer->Body = $contenido;
                $phpmailer->AltBody = 'Texto alternativo sin HTML';
            
                if ( $phpmailer->send() ) {
                  $mensaje = 'Mensaje enviado correctamente';
                } else {
                  $mensaje = 'ERROR - El mensaje no se pudo enviar';
                }
            }
            $router->render('paginas/contacto', [
                'esHome' => false,
                'titulo' => 'Contacto',
                'mensaje' => $mensaje
            ]);
        }
    }