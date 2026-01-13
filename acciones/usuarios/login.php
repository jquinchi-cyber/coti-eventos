<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php?module=usuarios&view=login');
    exit;
}

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Validaciones básicas
if (empty($email) || empty($password)) {
    header('Location: index.php?module=usuarios&view=login&error=1');
    exit;
}

// Aquí va tu lógica real de autenticación
// (ejemplo simple)
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nombre'] = $user['nombre'];

    // 👉 LOGIN EXITOSO
    header('Location: index.php?module=usuarios&view=home');
    exit;

}

// 👉 LOGIN FALLIDO
header('Location: index.php?module=usuarios&view=login&error=1');
exit;
