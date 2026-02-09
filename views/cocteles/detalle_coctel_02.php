<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Detalle de Plato</title>
</head>

<body class="bg-light">

<div class="container py-4">

    <!-- CARRUSEL -->
    <div id="carouselBuffet" class="carousel slide mb-4" data-bs-ride="carousel" >
        <div class="carousel-inner rounded shadow">

             <div class="carousel-item active">
                <img src="https://i.pinimg.com/736x/98/52/1b/98521b4960b5c1ee4ec9b3989e568fdc.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/1200x/fe/23/10/fe2310779ef7d4a278520c613baac4dd.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/3c/6e/28/3c6e28290a173e572f0a1e61203dd4b7.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBuffet" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselBuffet" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>


    <!-- CONTENIDO -->
    <div class="row g-4">

        <!-- Imagen principal -->
        <div class="col-md-5">
            <img src="https://i.pinimg.com/1200x/83/ae/e0/83aee08548adfb3a563d51f3d1b68bdd.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h5 class="display-1 display-md-3 fw-normal lh-1 mt-5">Limonada rosada con menta</h5>

                <p class="text-muted mt-5 fs-1">
                 Mezcla cítrica y ligeramente dulce con notas de limón, frutos rojos y hojas de menta fresca.
Refrescante, aromática y muy ligera.
                </p>

                <!-- Input -->
                <label class="fw-semibol text-muted  fs-1">cantidad de porciones</label>
                <input type="text" class="form-control mb-3" placeholder="Value">
            </div>

            <!-- Precio y botón -->
            <div>
                <h2 class="fw-semibold fs-1">$380.000</h2>

            </div>
        </div>
    </div>


    <!-- MINIATURAS -->
    <div class="row mt-4 g-2">
        <div class="col-4">
            <img src="https://i.pinimg.com/736x/60/ef/b3/60efb3f1bb53b1b0c394174ed74f669c.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/43/22/2c/43222c921b1a74fadc52821bf33fd897.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/74/01/7c/74017c51f16c86cea5457dc91de83b77.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>