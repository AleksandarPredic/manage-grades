<?php
session_name('predic_todo_list');
session_start();

/**
 * Composer install required
 */
if (! file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    throw new Exception('Vendor folder missing. Plese run composer install');
}

/**
 * Load vendor files
 */
require dirname(__FILE__) . '/vendor/autoload.php';

/**
 * Set error display
 */
$enviroment = getenv('ENVIROMENT');

if ('dev' === $enviroment || false === $enviroment) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

if ('production' === $enviroment) {
    error_reporting(0); // Disable all errors.
    ini_set('display_errors', 0);
}

/**
 * Require app files
 */
require dirname(__FILE__) . '/config.php';

/**
 * App init
 */
$predicMVC = new \PredicMVC\Libs\Router();
