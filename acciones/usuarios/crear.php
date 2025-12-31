<?php
// ==========================================================
// ACCIÓN: usuarios/crear.php
// Lógica para procesar el formulario de registro de usuarios
// ==========================================================


// La base_url es necesaria para las redirecciones


// 2. Verificar que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Si no es POST, redirigir al formulario o al home
    header("Location: ".BASE_URL."module=usuarios&view=register");
    exit;
}

// 3. Obtener la conexión a la base de datos usando el Singleton
try {
    $db = Database::getInstance()->getConnection();
} catch (Exception $e) {
    // Manejo de error de conexión fatal
    $_SESSION['error'] = "Error interno: Falló la conexión a la base de datos.";
    header("Location: ".BASE_URL."module=usuarios&view=register");
    exit;
}


// 4. Recoger, sanear y validar los datos
// -----------------------------------------------------------------

// Recoger datos
$nombre             = $_POST['nombre'] ?? '';
$email              = $_POST['email'] ?? '';
$password           = $_POST['password'] ?? ''; 
$id_tipo_documento  = $_POST['id_tipo_documento'] ?? '';
$documento          = $_POST['documento'] ?? '';
$telefono_movil     = $_POST['telefono_movil'] ?? '';
$telefono_fijo      = $_POST['telefono_fijo'] ?? ''; // Opcional
$direccion          = $_POST['direccion'] ?? '';
$id_rol             = $_POST['id_rol'] ?? '';

// Array para guardar mensajes de error de validación
$errores = [];

// Validación básica de campos requeridos (además del 'required' en HTML)
if (empty($nombre) || empty($email) || empty($password) || empty($documento) || empty($id_tipo_documento) || empty($id_rol) || empty($telefono_movil) || empty($direccion)) {
    $errores[] = "Todos los campos obligatorios deben ser completados.";
}

// Validación de email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El formato del correo electrónico no es válido.";
}

// Validación de longitud de contraseña (ejemplo)
if (strlen($password) < 6) {
    $errores[] = "La contraseña debe tener al menos 6 caracteres.";
}


// 5. Procesamiento y Hasheo
// -----------------------------------------------------------------

if (empty($errores)) {
    
    // Sanear datos (limpiar entradas de texto)
    $nombre_saneado     = htmlspecialchars(trim($nombre));
    $email_saneado      = filter_var($email, FILTER_SANITIZE_EMAIL);
    $documento_saneado  = htmlspecialchars(trim($documento));
    $tel_movil_saneado  = htmlspecialchars(trim($telefono_movil));
    $tel_fijo_saneado   = htmlspecialchars(trim($telefono_fijo));
    $direccion_saneada  = htmlspecialchars(trim($direccion));
    
    // Hashear la contraseña (CRUCIAL)
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    
    // 6. Preparar y ejecutar la consulta de inserción
    // -----------------------------------------------------------------

    $query = "INSERT INTO usuarios 
                (nombre, email, password, documento, id_tipo_documento, telefono_movil, telefono_fijo, direccion, id_rol) 
            VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
    try {
        $stmt = $db->prepare($query);
        $stmt->execute([
            $nombre_saneado, 
            $email_saneado, 
            $password_hashed, 
            $documento_saneado, 
            $id_tipo_documento, 
            $tel_movil_saneado, 
            $tel_fijo_saneado, 
            $direccion_saneada, 
            $id_rol
        ]);
        
        // Inserción exitosa
        $_SESSION['success'] = "¡El usuario '{$nombre_saneado}' ha sido registrado exitosamente!";
        
        // Redirigir al home (o a la página de éxito/listado de usuarios)
        header("Location: ".BASE_URL."module=usuarios&view=register");
        exit;

    } catch (PDOException $e) {
        
        // Manejo de errores de base de datos (por ejemplo, email o documento duplicado)
        if ($e->getCode() == '23000') {
            $_SESSION['error'] = "El correo electrónico o el número de documento ya están registrados. Intente con otros datos.";
        } else {
            $_SESSION['error'] = "Error al intentar registrar el usuario: " . $e->getMessage();
        }
        
        // Redirigir de vuelta al formulario con el error
        header("Location: ".BASE_URL."module=usuarios&view=register");
        exit;
    }

} else {
    // Si hay errores de validación, guardarlos en sesión y redirigir
    $_SESSION['error'] = implode("<br>", $errores);
    header("Location: ".BASE_URL."module=usuarios&view=register");
    exit;
}

// -----------------------------------------------------------------
// FIN DE LA ACCIÓN
// -----------------------------------------------------------------