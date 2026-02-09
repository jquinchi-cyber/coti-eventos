<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<body class="bg-light">

<!-- ===== CARRUSEL SUPERIOR ===== -->
<div id="carouselSonido" class="carousel slide">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d"
                 class="d-block w-100" style="height:420px; object-fit:cover;" alt="Sonido 1">
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc"
                 class="d-block w-100" style="height:420px; object-fit:cover;" alt="Sonido 2">
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2"
                 class="d-block w-100" style="height:420px; object-fit:cover;" alt="Sonido 3">
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSonido" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselSonido" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


<!-- ===== SECCIÓN PRINCIPAL ===== -->
<div class="container py-5">

    <div class="row align-items-center g-5">

        <!-- Imagen circular -->
        <div class="col-lg-4 text-center">
            <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063"
                 class="rounded-circle shadow"
                 style="width:280px; height:280px; object-fit:cover;"
                 alt="Evento con sonido">
        </div>

        <!-- Texto -->
        <div class="col-lg-8">

            <h1 class="fw-light">Sonido</h1>

            <p class="text-muted mb-5 fs-4">
                Tu evento merece una experiencia sonora impecable que emocione a cada invitado, con una ambientación musical 
                cuidadosamente diseñada, equipos de alta calidad y una armonía perfecta que acompañe cada momento especial
                desde la bienvenida hasta la celebración final.
            </p>

            <p class="text-muted fs-4">
                Diseñamos ambientes musicales únicos con equipos profesionales, DJ en vivo,
                micrófonos inalámbricos y musicalización personalizada para cada momento especial.
            </p>

            <!-- Lista de servicios -->
            <div class="list-group list-group-flush mt-4">

                <a href="<?= BASE_URL ?>module=sonido&view=detalle_profesional" class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-speaker-fill me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i> Sistema de audio profesional</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-music-note-beamed me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i> DJ en vivo</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-stars me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i> Efectos especiales</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-volume-down-fill me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i> Música ambiental personalizada</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

            </div>

        </div>
    </div>
</div>

</body>


