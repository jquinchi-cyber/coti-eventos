<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CotiEventos - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- ===================== NAVBAR ===================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary px-4">
    <a class="navbar-brand fw-bold" href="">
       <img src="./assets/img/logo_blanco.svg"
                    alt="CotiEventos"
                    class="me-2"
                    style="height: 45px;">
        <small class="d-block fw-light fs-6">Tu evento en un Click</small>
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Galería</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
        </ul>

        <a href="<?= BASE_URL ?>module=usuarios&action=logout" class="btn btn-light rounded-0">
            Cerrar sesión
        </a>
    </div>
</nav>

<!-- ===================== LAYOUT ===================== -->
<div class="container-fluid">
    <div class="row">

        <!-- ===== SIDEBAR ===== -->
        <aside class="col-12 col-md-3 col-lg-2 bg-secondary bg-opacity-25 vh-100 p-3">
            <ul class="list-group list-group-flush">
                <a href="<?= BASE_URL ?>module=admin&view=cotizaciones" class="list-group-item bg-transparent border-0">
                    📄 Cotizaciones
                </a>
                <a href="<?= BASE_URL ?>module=admin&view=dashboard" class="list-group-item bg-transparent border-0">
                    👤 Usuarios
                </a>
                <a href="<?= BASE_URL ?>module=admin&view=eventos_agendados" class="list-group-item bg-transparent border-0">
                    📅 Eventos agendados
                </a>
                <a href="<?= BASE_URL ?>module=admin&view=servicios" class="list-group-item bg-transparent border-0">
                    🛒 Productos / servicios
                </a>
                <a href="<?= BASE_URL ?>module=admin&view=reporte" class="list-group-item bg-transparent border-0">
                    📊 Reportes
                </a>
                <a href="<?= BASE_URL ?>module=admin&view=configuracion" class="list-group-item bg-transparent border-0">
                    ⚙️ Configuración
                </a>
            </ul>
        </aside>

        <!-- ===== CONTENIDO DINÁMICO ===== -->
        <main class="col-12 col-md-9 col-lg-10 p-5 bg-white">
