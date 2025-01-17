<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Error logging (opsional) untuk memantau status aplikasi
error_log('Request started');

// Menentukan jika aplikasi sedang dalam mode maintenance...
$maintenancePath = __DIR__.'/../storage/framework/maintenance.php';
if (file_exists($maintenancePath)) {
    error_log('Application is in maintenance mode');
    require $maintenancePath;
}

// Memastikan Composer autoloader dapat ditemukan
$autoloadPath = __DIR__.'/../vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    error_log('Composer autoload file not found: ' . $autoloadPath);
    die('Composer autoload file not found');
}

require $autoloadPath;

// Menangani permintaan dan bootstrapping aplikasi Laravel
try {
    // Pastikan app.php ditemukan dan bisa di-bootstrap
    $appPath = __DIR__.'/../bootstrap/app.php';
    if (!file_exists($appPath)) {
        error_log('Application bootstrap file not found: ' . $appPath);
        die('Application bootstrap file not found');
    }

    $app = require_once $appPath;
    $response = $app->handleRequest(Request::capture());

    // Mengirimkan respons ke browser
    $response->send();
} catch (Exception $e) {
    // Menangani jika ada error selama proses
    error_log('Error occurred: ' . $e->getMessage());
    die('An error occurred while handling the request');
}
