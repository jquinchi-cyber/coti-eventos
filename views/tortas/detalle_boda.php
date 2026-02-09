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
                <img src="https://i.pinimg.com/1200x/30/30/c6/3030c64942a6ba7877fc507b4f2acb90.jpg"
                     class="d-block w-100"
                     style="height:500px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/1200x/4c/c5/75/4cc5756583815d5b5e54b1b62a9e4132.jpg"
                     class="d-block w-100"
                     style="height:500px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/1200x/91/24/48/9124486c9d9f6df6503ad11c5a38b205.jpg"
                     class="d-block w-100"
                     style="height: 500px; object-fit:cover;">
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
            <img src="https://i.pinimg.com/736x/08/89/7a/08897a64fd30839cd3e5e02cdcad66de.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h5 class="display-1 display-md-3 fw-normal lh-1 mt-5">Torta Matrimonio</h5>

                <p class="text-muted mt-5 fs-1">
             Clásica torta blanca de varios pisos adornada con rosas y detalles finos que transmiten romanticismo.
Ideal para bodas elegantes y celebraciones llenas de amor.
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
            <img src="https://i.pinimg.com/736x/2e/85/fd/2e85fd3d8df40d3ffa73da2fee711983.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/48/45/b4/4845b4d95d411c9ca2833894760a6b31.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/1200x/c2/7b/ff/c27bff091f050b2b29e80bb6e0ac26b0.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>