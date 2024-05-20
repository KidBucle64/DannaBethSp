<?php
require __DIR__ . '/vendor/autoload.php'; // Carga la biblioteca de Google API

// Inicializa el cliente de Google
$client = new Google_Client();
$client->setAuthConfig('ruta/a/tu/archivo/credenciales.json'); // Ruta al archivo JSON de las credenciales
$client->setScopes(Google_Service_Gmail::MAIL_GOOGLE_COM);

// Crea un objeto de servicio de Gmail
$service = new Google_Service_Gmail($client);

// Crea el correo electrónico
$email = new Google_Service_Gmail_Message();
$email->setRaw(base64_encode("From: YOUR_EMAIL\r\nTo: DESTINATION_EMAIL\r\nSubject: Subject Text\r\n\r\nMessage Body"));

// Envía el correo electrónico
$service->users_messages->send('me', $email);
