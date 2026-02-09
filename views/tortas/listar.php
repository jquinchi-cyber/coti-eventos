<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-4 bg-white pb-5 shadow-sm">
        
   <div id="carouselTortas" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded overflow-hidden" style="max-height: 380px;">
        <div class="carousel-item active">
            <img 
                src="https://i.pinimg.com/1200x/30/30/c6/3030c64942a6ba7877fc507b4f2acb90.jpg" 
                class="d-block w-100 object-fit-cover"
                style="height: 380px;"
                alt="Banner">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTortas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselTortas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

        <div class="text-center mb-5">
            <h1 class="display-6 fw-normal">Tortas</h1>
         <div class="mt-3 mb-5">
    <label class="form-label fw-semibold fs-5">Tipo de torta para la ocasión</label>
    <select class="form-select rounded-3">
        <option selected disabled>Selecciona una opción</option>
        <option>XV Años</option>
        <option>Matrimonios</option>
        <option>Bautizos</option>
        <option>cumpleaños</option>
        <option> Baby Showers</option>
  <option>  Graduaciones</option>
    </select>
</div>
        </div>

        <div class="row g-4 px-3">
            
            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_xv"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/e9/b0/7f/e9b07f157499caf12e58d564860dd5f1.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta XV años</p>
                <h5 class="fw-semibold fs-4">150.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_boda"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/08/89/7a/08897a64fd30839cd3e5e02cdcad66de.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Matrimonio</p>
                <h5 class="fw-semibold fs-4">180.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_bautizo"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/736x/ff/54/0b/ff540b865cd3c87630a9c65b23d9300b.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Bautizo</p>
                <h5 class="fw-semibold fs-4">200.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_cumpleaños"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/35/78/c4/3578c4b6cf73e9936343b2d841e3101a.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Cumpleaños</p>
                <h5 class="fw-semibold fs-4">180.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_baby_shawer"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/4d/61/70/4d61706939ed5577ce4005848133dcdd.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Baby Shawers</p>
                <h5 class="fw-semibold fs-4">170.000</h5>
                   </a>
            </div>

            <div class="col-6 col-md-4 text-center">
                   <a href="<?= BASE_URL ?>module=tortas&view=detalle_graduacion"
class="text-decoration-none text-dark d-flex flex-column h-100">
                <img src="https://i.pinimg.com/1200x/c5/ed/68/c5ed68b952c21c5e10bb23b74253535f.jpg" class="img-fluid rounded mb-2 shadow-sm" alt="Torta">
                <p class="mb-5 fw-semibold fs-3">Torta Graduación</p>
                <h5 class="fw-semibold fs-4">145.000</h5>
                   </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>