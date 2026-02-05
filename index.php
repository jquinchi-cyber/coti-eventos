<?php
// =====================================================
// CONFIGURACIÓN BÁSICA
// =====================================================
session_start();
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;
// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './includes/db_connection.php';
require_once './includes/functions.php';
require_once './includes/config.php';
// require_once './helpers/auth.php';


//detercar el rol del usuario para ver que header y footer cargar
// Por defecto usamos el layout de cliente
$headerPath = './layout/header.php';
$footerPath = './layout/footer.php';

// Si existe sesión y el rol es Administrador, cambiamos las rutas
if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Administrador') {
    $headerPath = './views/admin/layout/header.php';
    $footerPath = './views/admin/layout/footer.php';
}

// =====================================================
// PARÁMETROS GET
// =====================================================
//
$module = $_GET['module'] ?? 'home';
$view   = $_GET['view']   ?? 'index';
$action = $_GET['action'] ?? null;



// =====================================================
// LISTAS BLANCAS (SEGURIDAD)
// =====================================================

// Módulos (carpetas principales)
$modulosPermitidos = [
    'vestuarios',
    'bodas',
    'admin',
    'home',
    'usuarios',
    'lugares',
    'eventos',
    'cotizaciones',
    'vestuarios',
    'vestidos',
    'platillos',
    'cocteles',
    'postres',
    'tortas',
    'menu',
    'sonido'
];

// Acciones permitidas por módulo
$accionesPermitidas = [
    'usuarios' => ['crear', 'editar', 'eliminar','login','logout'],
    'lugares' => ['crear', 'editar', 'eliminar'],
    'eventos' => ['crear', 'editar', 'eliminar'],
    'cotizaciones' => ['crear', 'aprobar', 'rechazar', 'completar'],
    'vestuarios' => ['crear', 'editar', 'asignar'],
    'vestidos' => ['crear', 'editar', 'asignar'],
    'platillos' => ['asignar'],
    'cocteles' => ['asignar'],
    'postres' => ['asignar'],
    'tortas' => ['asignar'],
    'menu' => ['asignar'],
    'sonido' => ['asignar']
];

//cargamos las acciones aca para evitar que cuando vaya a una accion lleve el html del header
if ($action) {

    if (
        isset($accionesPermitidas[$module]) &&
        in_array($action, $accionesPermitidas[$module])
    ) {

        $actionFile = "./acciones/$module/$action.php";

        if (file_exists($actionFile)) {
            require $actionFile;
            exit;
        }
    }
}

// =====================================================
// HEADER
// =====================================================

require_once  $headerPath;


// =====================================================
// CARGA DE VISTAS
// =====================================================

if (in_array($module, $modulosPermitidos)) {

    // Ruta de la vista
    $viewFile = "./views/$module/$view.php";

    // Caso especial: home y login no están en subcarpetas
    // if (in_array($module, ['home', 'login'])) {
    //     $viewFile = "./views/$module.php";
    // }

    if (file_exists($viewFile)) {
        require $viewFile;
    } else {
        require './views/404.php';
    }

} else {
    require './views/404.php';
}


// =====================================================
// EJECUCIÓN DE ACCIONES (POST / lógica)
// =====================================================




// =====================================================
// FOOTER
// =====================================================

require_once $footerPath;
