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
            <img src="https://i.pinimg.com/1200x/a9/5a/e1/a95ae145802d9c053abe032f6904a505.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h5 class="display-1 display-md-3 fw-normal lh-1 mt-5">Cheesecake de cereza y chocolate</h5>

                <p class="text-muted mt-5 fs-1">
            Base de galleta de chocolate con relleno cremoso y cobertura de cerezas en salsa brillante.
Intenso, dulce y con un toque frutal irresistible.
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
            <img src="https://i.pinimg.com/736x/ab/d4/65/abd46534f5e888e646a82655d01e4f0f.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/be/aa/49/beaa4915daa963cfb8bbbdc6dc4d4f9b.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/56/39/94/563994eba98596bb94ce8b9adc548284.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>