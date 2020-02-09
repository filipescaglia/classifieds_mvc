<?php

require_once 'environment.php';

$config = array();

if(ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/classificados_mvc/");
    $config['dbname'] = 'classificados_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    // Production environment
    // Informações da hospedagem
    define("BASE_URL", "http://site.com.br/");
    $config['dbname'] = 'classificados_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;

try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] .
    ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}