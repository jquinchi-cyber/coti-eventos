<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elige Tu Vestido y Traje Ideal</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container py-4">

<!-- Header -->
<div class="row align-items-center mb-4">
    <!-- Título -->
    <div class="col-12 col-md-6 mb-3 mb-md-0">
        <h1 class="fw-semibold">Elige Tu Vestido y Traje Ideal</h1>
    </div>

  <!-- Selector de evento -->
        <div class="col-6 col-md-5 text-md-end">
            <label class="form-label fw-semibold fs-5">Seleccionar evento</label>
            <select class="form-select rounded-end" id="evento">
                <option value="bodas" selected>Bodas</option>
                <option value="xv">XV años</option>
                <option value="cumple">Cumpleaños</option>
                <option value="bautizo">Bautizos</option>
                <option value="baby">Baby Shower</option>
                    <option value="graduacion">graduacion</option>
            </select>
        </div>
    </div>

<!-- Selector de género -->
<div class="row mb-4">
    <div class="col-md-6">
        <label class="form-label fw-semibold fs-5">Seleccionar género</label>
        <select class="form-select rounded-3" id="genero">
            <option value="femenino" selected>Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
    </div>
</div>

<!-- Grid de productos -->
<div class="row g-4 text-center">

    <!-- Vestidos femeninos -->
    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_blanco" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/fd/92/c4/fd92c46a05e32daa42fe69ea1281f926.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Blanco Clásico</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_lazo" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/b4/c1/b0/b4c1b0fa7476c00d36750fdb5bad9e50.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido con Encaje y Lazos</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_sutil" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/15/f2/d3/15f2d32c1c1369f8a7b3a19c06a142fa.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido con Encaje y Detalles Sutiles</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_fluido" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/7f/c4/02/7fc40233fe8f205a5abf2846674b451b.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Fluido de Tela Ligera</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Trajes masculinos -->
    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_bautismal" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/2f/ab/b2/2fabb201137bf39492bf7cb17c35dd29.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Conjunto Bautismal Clásico</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_elegante" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/83/87/19/8387193c52891693e8758dace1769a70.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Enterizo Bautismal Elegante</h6>
                    <p class="fw-bold mb-0">$700.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_formal" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/d0/73/2c/d0732c0d31f68b13eb7cb81c4f68518e.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje Formal Clásico</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_semi_formal" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/03/b3/19/03b319a5a022315cef04f777d456aaf3.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje Semi-Formal con Chaleco</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script personalizado -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Mostrar/ocultar productos según género
    const generoSelect = document.getElementById('genero');
    generoSelect.addEventListener('change', function () {
        const generoSeleccionado = this.value;
        const productos = document.querySelectorAll('.producto');

        productos.forEach(producto => {
            if (producto.dataset.genero === generoSeleccionado) {
                producto.classList.remove('d-none');
            } else {
                producto.classList.add('d-none');
            }
        });
    });
});

</script>
</body>
</html>