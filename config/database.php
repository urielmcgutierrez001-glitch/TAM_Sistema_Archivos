<?php
/**
 * Configuración de Base de Datos
 * Sistema TAMEP - Gestión Documental
 * 
 * Detecta automáticamente si está en Clever Cloud o local
 */

// Detectar si estamos en Clever Cloud (tiene variables de entorno MySQL)
$isCleverCloud = getenv('MYSQL_ADDON_HOST') !== false;

if ($isCleverCloud) {
    // Configuración para Clever Cloud (usa variables de entorno)
    $config = [
        'host' => getenv('MYSQL_ADDON_HOST'),
        'port' => getenv('MYSQL_ADDON_PORT') ?: 3306,
        'database' => getenv('MYSQL_ADDON_DB'),
        'username' => getenv('MYSQL_ADDON_USER'),
        'password' => getenv('MYSQL_ADDON_PASSWORD'),
        'charset' => 'utf8mb4',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    ];
} else {
    // Configuración local
    $config = [
        'host' => '127.0.0.1',
        'port' => 3306,
        'database' => 'tamep_archivos',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    ];
}

return $config;
