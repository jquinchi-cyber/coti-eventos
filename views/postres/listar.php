<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

    <!-- Carrusel -->
    <div id="menuCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="https://i.pinimg.com/1200x/e1/0b/ca/e10bcaa889c63d44b0f442b36cf2fe80.jpg"
                     class="d-block w-100" style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/71/19/2a/71192a5c772e5f2da41585798aa4fea4.jpg"
                     class="d-block w-100" style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/f6/d4/c8/f6d4c8e8f0324fe53e1f6035b1656bd8.jpg"
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
    <h5 class="text-center fw-semibold mb-4">Postres</h5>

    <!-- Grid de menú -->
    <div class="row g-3">

        <!-- Card -->
        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                 <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_01"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/1e/92/70/1e92708d4c30a0c225cd6e2a8d6aac8b.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Cheesecake de fresa</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                 </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_02"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/da/59/e6/da59e63dc9f9e2a1eea63809174110fd.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Tiramisú con frutos rojos</p>
                    <span class="fw-semibold fs-4">350.000</span>
                </div>
                   </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_03"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/1b/4b/a2/1b4ba2f3118e6e0a998ab3e3c37946ed.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Cupcakes de chocolate y vainilla con corazones</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                   </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_04"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/a9/5a/e1/a95ae145802d9c053abe032f6904a505.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Cheesecake de cereza y chocolate</p>
                    <span class="fw-semibold fs-4">380.000</span>
                </div>
                   </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_05"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/80/5a/86/805a86ee978a5b3eb5f4ee2777c36271.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Flan de caramelo</p>
                    <span class="fw-semibold fs-4">400.000</span>
                </div>
                   </a>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="card border-0 text-center">
                   <a href="<?= BASE_URL ?>module=postres&view=detalle_postre_06"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/75/2d/d0/752dd003966e759728bb23f903af2110.jpg"
                     class="card-img-top rounded-3">
                <div class="card-body p-2">
                    <p class="mb-5 fw-semibold fs-3">Copas de mousse de chocolate y vainilla con fresa</p>
                    <span class="fw-semibold fs-4">300.000</span>
                </div>
                   </a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>