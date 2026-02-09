<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos/Servicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 fw-bold text-center">Gestión de Productos y Servicios</h2>

    <!-- Botón agregar producto/servicio -->
    <div class="mb-3 text-end">
        <button class="btn btn-success">Agregar Producto/Servicio</button>
    </div>

    <!-- Tabla de administración -->
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Servicio de Catering</td>
                    <td>Catering personalizado para eventos.</td>
                    <td>Comida</td>
                    <td>$500.000</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-secondary">Ver</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Decoración de Eventos</td>
                    <td>Decoración temática según el evento.</td>
                    <td>Decoración</td>
                    <td>$300.000</td>
                    <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-secondary">Ver</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Fotografía Profesional</td>
                    <td>Cobertura completa del evento con edición.</td>
                    <td>Fotografía</td>
                    <td>$400.000</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-secondary">Ver</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

