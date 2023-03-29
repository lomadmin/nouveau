<?php
 // data/configuration.php
// Debug
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$config= [
    'drive'=> 'pgsql',
    'host'=>'pgdb',
    'port' => 5432,
    'database' => 'appdb',
    'user'=> 'postgres',
    'password' => 'letmein',
    'schema'=> 'immo'
    ];