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


// =====================================================
// LISTAS BLANCAS (SEGURIDAD)
// =====================================================

// Módulos (carpetas principales)
$modulosPermitidos = [
    'home',
    'usuarios',
    'lugares',
    'eventos',
    'cotizaciones',
    'vestuarios',
    'platillos',
    'cocteles',
    'sonido'
];

// Acciones permitidas por módulo
$accionesPermitidas = [
    'usuarios' => ['crear', 'editar', 'eliminar'],
    'lugares' => ['crear', 'editar', 'eliminar'],
    'eventos' => ['crear', 'editar', 'eliminar'],
    'cotizaciones' => ['crear', 'aprobar', 'rechazar', 'completar'],
    'vestuarios' => ['crear', 'editar', 'asignar'],
    'platillos' => ['asignar'],
    'cocteles' => ['asignar'],
    'sonido' => ['asignar']
];


// =====================================================
// PARÁMETROS GET
// =====================================================

$module = $_GET['module'] ?? 'home';
$view   = $_GET['view']   ?? 'index';
$action = $_GET['action'] ?? null;


// =====================================================
// HEADER
// =====================================================

require_once './layout/header.php';


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

if ($action) {

    if (
        isset($accionesPermitidas[$module]) &&
        in_array($action, $accionesPermitidas[$module])
    ) {

        $actionFile = "./acciones/$module/$action.php";

        if (file_exists($actionFile)) {
            require $actionFile;
        }
    }
}


// =====================================================
// FOOTER
// =====================================================

require_once './layout/footer.php';
