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
                <img src="https://i.pinimg.com/736x/b0/3e/4c/b03e4c9baab3c85e48bd82ad5802ccc8.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/aa/73/f2/aa73f265da449f4fbff58aba823e0e02.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200"
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
            <img src="https://i.pinimg.com/736x/40/ad/15/40ad15f9022141e9167ffb3b8a9f167a.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h5 class="display-1 display-md-3 fw-normal lh-1 mt-5">Pollo asado con papas doradas</h5>

                <p class="text-muted mt-5 fs-1">
                  Jugoso pollo horneado con especias, acompañado de papas doradas y tiernas.
Un plato casero, reconfortante y lleno de sabor tradicional.
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
            <img src="https://i.pinimg.com/1200x/21/6b/13/216b13bab768838f8b618f87fdf64c01.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/31/27/bf/3127bf257e922e93856050f1616e2dfb.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/85/75/97/85759786ef344d480fbfbdafb5a46baa.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>