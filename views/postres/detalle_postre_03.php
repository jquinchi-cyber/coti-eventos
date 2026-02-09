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
                <img src="https://i.pinimg.com/1200x/44/b4/30/44b430bce2940a18113bfc68e9811f02.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/f8/4b/c3/f84bc32fe4fb2bc8c1ed36b31d06418a.jpg"
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
            <img src="https://i.pinimg.com/1200x/1b/4b/a2/1b4ba2f3118e6e0a998ab3e3c37946ed.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h5 class="display-1 display-md-3 fw-normal lh-1 mt-5">Cupcakes de chocolate y vainilla con corazones</h5>

                <p class="text-muted mt-5 fs-1">
              Esponjosos cupcakes cubiertos con crema suave de color rosado y decoraciones en forma de corazón.
Ideales para celebraciones románticas y momentos especiales.
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
            <img src="https://i.pinimg.com/1200x/b5/11/4b/b5114b8c6cf8f8183ef3886e05a4b443.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/a3/bd/20/a3bd20fdd0699b89cda8134173934bf5.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/1200x/0c/4b/0b/0c4b0b6c43efa1904efaee09f5d7b7b8.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>