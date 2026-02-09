<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <!-- Título -->
    <h2 class="mb-5 text-center">N. cotización:</h2>

    <!-- Información del cliente y fecha -->
    <div class="row mb-4">
        <!-- Información del cliente -->
        <div class="col-md-6 mb-3">
            <div class="p-3 bg-secondary bg-opacity-25 rounded">
                <h6 class="text-muted">Información del cliente:</h6>
                <input type="text" class="form-control mb-2" placeholder="Nombre">
                <input type="text" class="form-control mb-2" placeholder="Teléfono">
                <input type="email" class="form-control" placeholder="Correo">
            </div>
        </div>

        <!-- Fecha de vencimiento -->
        <div class="col-md-6 mb-3">
            <div class="p-3 bg-secondary bg-opacity-25 rounded">
                <h6 class="text-muted">Fecha vencimiento:</h6>
                <input type="text" class="form-control" placeholder="00/00/00">
            </div>
        </div>
    </div>

    <!-- Tabla de servicios -->
    <div class="table-responsive mb-4">
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>Servicio</th>
                    <th>Descripción</th>
                    <th>Precio unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Botón de confirmar -->
    <div class="text-center">
        <button class="btn btn-secondary">Confirmar cotización</button>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
