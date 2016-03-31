<?php

require_once __DIR__.'/vendor/autoload.php';

if (!defined('SIMPLYRETS_USERNAME')) {
    $username = isset($_ENV['SIMPLYRETS_USERNAME']) ? $_ENV['SIMPLYRETS_USERNAME'] : 'simplyrets';
    define('SIMPLYRETS_USERNAME', $username);
}

if (!defined('SIMPLYRETS_PASSWORD')) {
    $password = isset($_ENV['SIMPLYRETS_PASSWORD']) ? $_ENV['SIMPLYRETS_PASSWORD'] : 'simplyrets';
    define('SIMPLYRETS_PASSWORD', $password);
}
