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
                <img src="https://i.pinimg.com/736x/97/f9/33/97f933a314cc00a7d935db2ab7b5ce18.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/ea/5f/4d/ea5f4d03f5d3b51cc2026b30aa05cbfc.jpg"
                     class="d-block w-100"
                     style="height:280px; object-fit:cover;">
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/23/75/ec/2375ec6dbe4a549dd332e7fc31fb16d6.jpg"
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
            <img src="https://i.pinimg.com/1200x/78/7b/b1/787bb1c06841b39cea02f750a9ae454a.jpg"
                 class="img-fluid rounded shadow">
        </div>

        <!-- Texto y precio -->
        <div class="col-md-7 d-flex flex-column justify-content-between">

            <div>
                <h1 class="display-1 display-md-3 fw-normal lh-1 mt-5">Carne a la parrilla con pasta cremosa de camarones</h1>

                <p class="text-muted mt-5 fs-1">
                  Corte de carne jugoso y bien sellado, acompañado de pasta en salsa cremosa con camarones.
Un plato elegante que combina sabores intensos del mar y la parrilla.
                </p>

                <!-- Input -->
                <label class="fw-semibol text-muted fs-1">cantidad de porciones</label>
                <input type="text" class="form-control mb-3" placeholder="Value">
            </div>

            <!-- Precio y botón -->
            <div>
                <h3 class="fw-semibold fs-1">$380.000</h3>

            </div>
        </div>
    </div>


    <!-- MINIATURAS -->
    <div class="row mt-4 g-2">
        <div class="col-4">
            <img src="https://i.pinimg.com/1200x/02/85/39/028539b35e8b7e878e4d31064f38a5d0.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/cf/2e/e5/cf2ee5400dcb5c9d93adb2f944a19f59.jpg"
                 class="img-fluid rounded">
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/736x/34/6a/01/346a01f73c4f47c68f7b4a6eaaebe58d.jpg"
                 class="img-fluid rounded">
        </div>
    </div>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>