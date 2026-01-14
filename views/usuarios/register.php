<?php
// ==========================================================
// 1. OBTENCIÓN DE DATOS DE LA BASE DE DATOS
// ==========================================================

// ⚠️ NOTA IMPORTANTE: Asegúrate de que la clase Database (en tu archivo de conexión)
// use el nombre de la base de datos 'coti_eventos' en lugar de 'escuela' 
// para que las consultas funcionen correctamente.

// Requerir el archivo de la clase Database (ajusta la ruta si es necesario)
// require_once './includes/Database.php'; 

try {
    // 1. Obtener la instancia única de la conexión PDO
    $db = Database::getInstance()->getConnection(); 

    // 2. Obtener Tipos de Documento
    $query_doc = "SELECT id_tipo_documento, nombre FROM tipo_documento ORDER BY nombre ASC";
    $stmt_doc = $db->prepare($query_doc);
    $stmt_doc->execute();
    $tipos_documento = $stmt_doc->fetchAll(PDO::FETCH_ASSOC);

     // 3. Obtener Roles disponibles
    $query_rol = "SELECT id_rol, nombre FROM roles ORDER BY nombre ASC";
    $stmt_rol = $db->prepare($query_rol);
    $stmt_rol->execute();
    $roles_disponibles = $stmt_rol->fetchAll(PDO::FETCH_ASSOC);
     

} catch (PDOException $e) {
    // Si la conexión falla, inicializamos los arrays vacíos para evitar errores en el foreach
    $tipos_documento = []; 
    $roles_disponibles = [];
    error_log("Error al cargar datos del formulario: " . $e->getMessage());
}

// Configuración de la vista
$base_url = "index.php"; 
$exitoso = $_SESSION['success'] ?? null;
unset($_SESSION['success']);

$base_url = "index.php"; 
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

            <?php if ($error): ?>
                <div class="alert alert-danger text-center mb-4 rounded" role="alert">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

               <?php if ($exitoso): ?>
                <div class="alert alert-success text-center mb-4 rounded" role="alert">
                    <?= htmlspecialchars($exitoso) ?>
                </div>
            <?php endif; ?>
            
            <div class="bg-light p-4 rounded-3 shadow-sm">
                
                <form action="<?= BASE_URL ?>module=usuarios&action=crear" method="POST">

                    <input type="text"
                        name="nombre"
                        class="form-control mb-3 text-center rounded"
                        placeholder="Nombre completo"
                        required>

                    <input type="email"
                        name="email"
                        class="form-control mb-3 text-center rounded"
                        placeholder="Correo electrónico"
                        required>

                    <input type="password"
                        name="password"
                        class="form-control mb-4 text-center rounded"
                        placeholder="Contraseña"
                        required>

                    <div class="row mb-3">
                        <div class="col-5">
                            <select name="id_tipo_documento" class="form-select text-center rounded" required>
                                <option value="" disabled selected>Tipo Doc.</option>
                                
                                <?php foreach ($tipos_documento as $tipo): ?>
                                    <option value="<?= $tipo['id_tipo_documento'] ?>"><?= htmlspecialchars($tipo['nombre']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-7">
                            <input type="text"
                                name="documento"
                                class="form-control text-center rounded"
                                placeholder="Número de Documento"
                                required>
                        </div>
                    </div>

                    <input type="tel"
                        name="telefono_movil"
                        class="form-control mb-3 text-center rounded"
                        placeholder="Teléfono Móvil"
                        required>
                        
                    <input type="tel"
                        name="telefono_fijo"
                        class="form-control mb-3 text-center rounded"
                        placeholder="Teléfono Fijo (Opcional)">

                    <input type="text"
                        name="direccion"
                        class="form-control mb-3 text-center rounded"
                        placeholder="Dirección completa"
                        required>

                    <select name="id_rol" class="form-select mb-4 text-center rounded" required>
                        <option value="" disabled selected>Seleccione el Rol</option>
                        
                        <?php foreach ($roles_disponibles as $rol): ?>
                            <option value="<?= $rol['id_rol'] ?>"><?= htmlspecialchars($rol['nombre']) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-light px-4 border rounded-pill">
                            Registrar Usuario
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
    <a href="<?= BASE_URL ?>module=usuarios&view=login"
       class="btn btn-light border rounded-pill px-4">
        Volver a iniciar sesión
    </a>
</div>


                </form>
                </div>

        </div>
    </div>
</div>