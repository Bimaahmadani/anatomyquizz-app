<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Tambahkan log untuk memantau permintaan
error_log('Request started');

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    error_log('Application is in maintenance mode');
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
try {
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $app->handleRequest(Request::capture());
} catch (Exception $e) {
    // Log error jika terjadi
    error_log('Error occurred: ' . $e->getMessage());
}
