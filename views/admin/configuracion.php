<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración Administrativa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 fw-bold text-center">Configuración del Sistema</h2>

    <!-- Pestañas de configuración -->
    <ul class="nav nav-tabs mb-4" id="configTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">General</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab">Usuarios</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="productos-tab" data-bs-toggle="tab" data-bs-target="#productos" type="button" role="tab">Productos/Servicios</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="notificaciones-tab" data-bs-toggle="tab" data-bs-target="#notificaciones" type="button" role="tab">Notificaciones</button>
        </li>
    </ul>

    <!-- Contenido de pestañas -->
    <div class="tab-content" id="configTabsContent">
        <!-- General -->
        <div class="tab-pane fade show active" id="general" role="tabpanel">
            <form class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre de la Empresa</label>
                    <input type="text" class="form-control" value="Mi Empresa">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Correo de Contacto</label>
                    <input type="email" class="form-control" value="contacto@empresa.com">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" value="+57 300 123 4567">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-control" value="Calle 123, Ciudad">
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>

        <!-- Usuarios -->
        <div class="tab-pane fade" id="usuarios" role="tabpanel">
            <div class="d-flex justify-content-between mb-3">
                <h5>Usuarios Registrados</h5>
                <button class="btn btn-success btn-sm">Agregar Usuario</button>
            </div>
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Alejandro Rendón</td>
                        <td>alejandro@empresa.com</td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jary Zuluaga</td>
                        <td>jary@empresa.com</td>
                        <td>Editor</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Productos/Servicios -->
        <div class="tab-pane fade" id="productos" role="tabpanel">
            <div class="d-flex justify-content-between mb-3">
                <h5>Administrar Productos y Servicios</h5>
                <button class="btn btn-success btn-sm">Agregar Producto/Servicio</button>
            </div>
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
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
                        <td>Comida</td>
                        <td>$500.000</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Decoración de Eventos</td>
                        <td>Decoración</td>
                        <td>$300.000</td>
                        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Notificaciones -->
        <div class="tab-pane fade" id="notificaciones" role="tabpanel">
            <form class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Notificaciones por Email</label>
                    <select class="form-select">
                        <option value="si" selected>Activadas</option>
                        <option value="no">Desactivadas</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Notificaciones Push</label>
                    <select class="form-select">
                        <option value="si">Activadas</option>
                        <option value="no" selected>Desactivadas</option>
                    </select>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
