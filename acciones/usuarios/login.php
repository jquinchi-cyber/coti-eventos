<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php?module=usuarios&view=login');
    exit;
}

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Todos los campos son obligatorios";
    header('Location: index.php?module=usuarios&view=login');
    exit;
}

try {
    $db = Database::getInstance()->getConnection();
} catch (Exception $e) {
    $_SESSION['error'] = "Error interno: Falló la conexión a la base de datos.";
    header("Location: index.php?module=usuarios&view=login");
    exit;
}

// 1. Consulta uniendo la tabla usuarios con roles
$sql = "SELECT u.*, r.nombre AS rol_nombre 
FROM usuarios u 
INNER JOIN roles r ON u.id_rol = r.id_rol 
WHERE u.email = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch();

if(!password_verify($password,$user['password'])){
    $_SESSION['error'] = "contraseña incorrecta, vuelve a intentarlo";
    header('Location: index.php?module=usuarios&view=login');
    exit();
}

if(!$user){
    $_SESSION['error'] = "el correo no esta registrado";
    header('Location: index.php?module=usuarios&view=login');
    exit();
}

if ($user && password_verify($password, $user['password'])) {

    // 2. Guardar datos clave en la sesión
    $_SESSION['user_id'] = $user['id_usuario']; // Asegúrate que el nombre de la columna sea correcto
    $_SESSION['nombre']  = $user['nombre'];
    $_SESSION['rol']     = $user['rol_nombre']; // Guardamos "Administrador" o "Cliente"


    // 3. Redirección basada en el ROL
    if ($user['rol_nombre'] === 'Administrador') {

        // Redirigir al panel de administración
        header('Location:' . BASE_URL . 'module=admin&view=dashboard');
    } else {
        // Redirigir a la vista de cliente
        header('Location:' . BASE_URL . 'module=home&view=index');
    }
    exit;
}

// LOGIN FALLIDO
header('Location:' . BASE_URL . 'module=usuarios&view=login&error=1');
exit;
