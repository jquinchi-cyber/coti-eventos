<?php
// session_start();

// require_once __DIR__ . '/vendor/autoload.php';
// require_once __DIR__ . '/config/google.php';       // CLIENT_ID, CLIENT_SECRET, REDIRECT_URI

$pdo = Database::getInstance()->getConnection();

// 1️⃣ Validar que Google envió el código
if (!isset($_GET['code'])) {
    die("Error: No se recibió el código de autenticación.");
}

// // 2️⃣ Configurar cliente Google
// $client = new Google_Client();
// $client->setClientId(GOOGLE_CLIENT_ID);
// $client->setClientSecret(GOOGLE_CLIENT_SECRET);
// $client->setRedirectUri(GOOGLE_REDIRECT_URI);

// 3️⃣ Intercambiar código por token
$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if (isset($token['error'])) {
    die("Error al obtener el token de Google.");
}

$client->setAccessToken($token);

// 4️⃣ Obtener información del usuario
$googleService = new Google_Service_Oauth2($client);
$googleUser = $googleService->userinfo->get();


$idGoogle = $googleUser->id;
$nombre   = $googleUser->name;
$email    = $googleUser->email;

// 5️⃣ Verificar si el usuario ya existe
$sql = "SELECT id_usuario, nombre, id_rol 
        FROM usuarios 
        WHERE email = :email OR id_google = :id_google 
        LIMIT 1";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':email'     => $email,
    ':id_google' => $idGoogle
]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario) {
    // 6️⃣ Usuario existente → crear sesión
    $_SESSION['usuario_id'] = $usuario['id_usuario'];
    $_SESSION['nombre']     = $usuario['nombre'];
    $_SESSION['id_rol']     = $usuario['id_rol'];

} else {
    // 7️⃣ Usuario nuevo → insertar
    $sqlInsert = "INSERT INTO usuarios (
        nombre,
        id_google,
        email,
        id_rol
    ) VALUES (
        :nombre,
        :id_google,
        :email,
        :id_rol
    )";

    $stmtInsert = $pdo->prepare($sqlInsert);

    $stmtInsert->execute([
        ':nombre'             => $nombre,
        ':id_google'          => $idGoogle,
        ':email'              => $email,
        ':id_rol'             => 2  // Rol cliente
    ]);


    $idUsuario = $pdo->lastInsertId();
    

    // 8️⃣ Crear sesión
    $_SESSION['usuario_id'] = $idUsuario;
    $_SESSION['nombre']     = $nombre;
    $_SESSION['id_rol']     = 2;
}

// 9️⃣ Redireccionar al dashboard
header("Location: .BASE_URL");
exit;
