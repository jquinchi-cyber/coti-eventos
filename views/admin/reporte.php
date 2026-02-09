<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos/Servicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 fw-bold text-center">Reporte de Productos y Servicios</h2>

    <!-- Botones de acción del reporte -->
    <div class="mb-3 d-flex justify-content-end gap-2">
        <button class="btn btn-outline-primary btn-sm">Exportar PDF</button>
        <button class="btn btn-outline-success btn-sm">Exportar Excel</button>
        <button class="btn btn-outline-secondary btn-sm">Actualizar</button>
    </div>

    <!-- Tabla de reporte -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Producto/Servicio</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Cantidad Vendida</th>
                    <th>Fecha Creación</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th scope="row">1</th>
                    <td>Servicio de Catering</td>
                    <td>Comida</td>
                    <td>$500.000</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>12</td>
                    <td>01/01/2026</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Decoración de Eventos</td>
                    <td>Decoración</td>
                    <td>$300.000</td>
                    <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                    <td>8</td>
                    <td>15/01/2026</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Fotografía Profesional</td>
                    <td>Fotografía</td>
                    <td>$400.000</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>5</td>
                    <td>20/01/2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
