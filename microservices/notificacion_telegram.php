<?php

include("controller.php");

//Este acceso de token es un ejemplo lo cuales no sirve.

// Define $botToken en controller.php : El token de tu bot de Telegram

// Define $chatId en controller.php : El ID de chat donde quieres enviar el mensaje


// Obtiene el nombre del archivo actualmente en ejecución
$currentPage = basename($_SERVER['SCRIPT_NAME']);

// Obtiene la fecha y hora actual
$currentDateTime = date('Y-m-d H:i:s');

// Obtiene la dirección IP del visitante
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Obtiene el navegador del visitante
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Obtiene el idioma del visitante
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// Obtiene la información de geolocalización basada en la IP (evita hacerlo para localhost)
$country = 'Unknown';
if ($ipAddress !== '::1' && $ipAddress !== '127.0.0.1') {
    $geoInfo = file_get_contents("http://ipinfo.io/{$ipAddress}/json");
    $geoInfo = json_decode($geoInfo, true);
    $country = isset($geoInfo['country']) ? $geoInfo['country'] : 'Unknown';
}

// Define el mensaje que quieres enviar
$message = "DATE : $currentDateTime\nPAG: $currentPage\nIPV6: $ipAddress\nNAV: $userAgent\nLANGUAGE: $language\nCOUNTRU: $country";

// Construye la URL para enviar el mensaje
$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text=" . urlencode($message);

// Envía la solicitud para enviar el mensaje
$response = file_get_contents($telegramUrl);

// Verifica si se envió correctamente
if ($response === false) {
    error_log('Error al enviar el mensaje.');
} else {
    error_log('Mensaje enviado correctamente.');
}

?>
