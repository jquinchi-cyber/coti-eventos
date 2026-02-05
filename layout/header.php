<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEventos - Tu evento en un Click</title>

    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100">

    <!-- HEADER (Navbar principal) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand d-flex align-items-center" href="./index.php?views/home/index.php">
                <img src="./assets/img/logo_blanco.svg"
                    alt="CotiEventos"
                    class="me-2"
                    style="height: 45px;">

                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold" style="font-size: 1.2rem;"></span>
                    <small class="text-white-50">Tu evento en un Click</small>
                </div>
            </a>

            <!-- BOTÓN RESPONSIVE -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENÚ -->
            <div class="collapse navbar-collapse" id="menu">

                <!-- Items al centro -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                </ul>

                <!-- ICONOS DERECHA -->
                <div class="d-flex align-items-center">

                    <!-- Mi cuenta con dropdown -->
<div class="dropdown me-3">
    <a href="#" 
       class="text-white text-decoration-none d-flex align-items-center dropdown-toggle"
       data-bs-toggle="dropdown">

        <i class="bi bi-person-circle fs-4"></i>

        <?php if (isset($_SESSION['nombre'])): ?>
            <span class="ms-1"><?= htmlspecialchars($_SESSION['nombre']) ?></span>
        <?php else: ?>
            <span class="ms-1">Mi Cuenta</span>
        <?php endif; ?>
    </a>

    <ul class="dropdown-menu dropdown-menu-end">

        <?php if (!isset($_SESSION['user_id'])): ?>
            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>module=usuarios&view=login">
                    Iniciar sesión
                </a>
            </li>
        <?php else: ?>
            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>module=usuarios&view=perfil">
                    ver mi perfil
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
                <a class="dropdown-item text-danger" href="<?= BASE_URL ?>module=usuarios&action=logout">
                    Cerrar sesión
                </a>
            </li>
        <?php endif; ?>

    </ul>
</div>
                    <!-- Carrito -->
                    <a href="#" class="text-white text-decoration-none me-3 d-flex align-items-center">
                        <i class="bi bi-cart fs-4"></i>
                        <span class="ms-1">0</span>
                    </a>

                    <!-- Favoritos -->
                    <a href="#" class="text-white text-decoration-none d-flex align-items-center">
                        <i class="bi bi-heart fs-4"></i>
                        <span class="ms-1">0</span>
                    </a>
                </div>

            </div>
        </div>
    </nav>