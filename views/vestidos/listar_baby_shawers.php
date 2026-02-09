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
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_comodo" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/22/45/cf/2245cf2a5e782e71a26a9462864ca6fb.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Cómodo y Holgado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_ajustado" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/c8/4b/b5/c84bb5340d159940663574f9cd6049d4.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Midi Ajustado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_bordado" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/cd/fc/8c/cdfc8ccb5740893c3e5a5a3f000f5e77.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido con Encaje o Bordado</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto" data-genero="femenino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=detalle_floral" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/6d/9c/95/6d9c959d9fe39cb234bc21651de658f4.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Vestido Estampado o Floral</h6>
                    <p class="fw-bold mb-0">$500.000</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Trajes masculinos -->
    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_clasico" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/ef/b2/5e/efb25e0e8909c5004163439ea4144dc9.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje clásico</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_slim_fit" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/736x/4f/2b/cd/4f2bcd52ad2c2b56953a4a053182167c.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje slim fit</h6>
                    <p class="fw-bold mb-0">$700.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_tres_piezas" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/f2/a1/ca/f2a1ca2bac18b0ff4e0e01724e56914b.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Traje de Tres Piezas</h6>
                    <p class="fw-bold mb-0">$650.000</p>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-md-6 producto d-none" data-genero="masculino">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <a href="<?= BASE_URL ?>module=vestidos&view=trajes/detalle_smoking" class="text-decoration-none text-dark d-flex flex-column h-100">
                <div class="ratio ratio-4x3">
                    <img src="https://i.pinimg.com/1200x/7d/06/a9/7d06a97a0e16ec7baa7c3d168f65e763.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-body">
                    <h6 class="fw-semibold mb-1">Smoking</h6>
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