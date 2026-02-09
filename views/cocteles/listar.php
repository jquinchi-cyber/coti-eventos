<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

    <!-- Carrusel -->
    <div id="menuCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="https://i.pinimg.com/736x/98/52/1b/98521b4960b5c1ee4ec9b3989e568fdc.jpg"
                     class="d-block w-100" style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/1200x/fe/23/10/fe2310779ef7d4a278520c613baac4dd.jpg"
                     class="d-block w-100" style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/17/80/3f/17803fed31ba89cc47ca2ea070642c27.jpg"
                     class="d-block w-100" style="height:280px; object-fit:cover;">
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Título -->
    <h5 class="text-center fw-semibold mb-4">Cocteles</h5>

    <!-- Grid de menú -->
    <div class="row g-3">

        <!-- Card -->
        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_01"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/ac/55/8b/ac558bb2af7e2558ac1234a2ca64b4f8.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Cóctel tropical de durazno</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                             <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_02"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/83/ae/e0/83aee08548adfb3a563d51f3d1b68bdd.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Limonada rosada con menta</p>
                    <span class="fw-semibold fs-4">350.000</span>
                </div>
                             </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                             <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_03"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/ad/8d/d1/ad8dd1ed104b30bdc9a9e26f902ded3b.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Sunrise tropical</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                             </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                             <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_04"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/b5/54/8a/b5548a3474bce8eccf1c7d73d9431fd0.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Piña colada clásica</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                             </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                             <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_05"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/db/ec/f1/dbecf16b2fa734e9fa00cf0c614a68e0.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Cóctel atardecer de frutos rojos</p>
                    <span class="fw-semibold fs-4">400.000</span>
                </div>
                             </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                             <a href="<?= BASE_URL ?>module=cocteles&view=detalle_coctel_06"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/d2/c3/09/d2c309a9bb2359c6595753fe10261e53.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Margarita de limón</p>
                    <span class="fw-semibold fs-4">300.000</span>
                </div>
                             </a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>