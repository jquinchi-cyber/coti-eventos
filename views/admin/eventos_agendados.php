<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Agendados</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h2 class="mb-4 fw-bold text-center">Eventos Agendados</h2>

    <!-- Tabla de eventos -->
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Boda de Ana y Carlos</td>
                    <td>12/03/2026</td>
                    <td>16:00</td>
                    <td>Salón Real</td>
                    <td>Boda</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Ver</button>
                        <button class="btn btn-sm btn-danger">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Graduación Universidad</td>
                    <td>25/04/2026</td>
                    <td>10:00</td>
                    <td>Aula Magna</td>
                    <td>Graduación</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Ver</button>
                        <button class="btn btn-sm btn-danger">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Cumpleaños de Laura</td>
                    <td>05/05/2026</td>
                    <td>18:30</td>
                    <td>Restaurante Central</td>
                    <td>Fiesta</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Ver</button>
                        <button class="btn btn-sm btn-danger">Cancelar</button>
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
