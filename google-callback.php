<?php
session_start();

require_once __DIR__ . '/includes/env.php';

/* ✅ Validar constantes */
if (
    !defined('GOOGLE_CLIENT_ID') ||
    !defined('GOOGLE_CLIENT_SECRET') ||
    !defined('GOOGLE_REDIRECT_URL')
) {
    die('❌ Variables de Google no cargadas');
}

/* ✅ Validar código de Google */
if (!isset($_GET['code'])) {
    die('❌ No se recibió el código de Google');
}

$code = $_GET['code'];

/* 🔐 Paso 1: solicitar access token */
$tokenUrl = 'https://oauth2.googleapis.com/token';

$data = [
    'code' => $code,
    'client_id' => GOOGLE_CLIENT_ID,
    'client_secret' => GOOGLE_CLIENT_SECRET,
    'redirect_uri' => GOOGLE_REDIRECT_URL,
    'grant_type' => 'authorization_code'
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/x-www-form-urlencoded",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($tokenUrl, false, $context);

if ($response === false) {
    die('❌ Error al obtener el token');
}

$token = json_decode($response, true);

if (!isset($token['access_token'])) {
    die('❌ Token inválido');
}

/* 👤 Paso 2: obtener datos del usuario */
$userInfoUrl = 'https://www.googleapis.com/oauth2/v2/userinfo?access_token=' . $token['access_token'];
$userInfo = json_decode(file_get_contents($userInfoUrl), true);

/* ✅ Guardar sesión */
$_SESSION['user_id'] = $userInfo['id']; // identificador REAL de sesión
$_SESSION['nombre']  = $userInfo['name'];
$_SESSION['email']   = $userInfo['email'];
$_SESSION['foto']    = $userInfo['picture'];

/* 🚀 Redirigir */
header('Location: index.php');
exit;
