<?php
// https://packagist.org/packages/vlucas/phpdotenv
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

define('URL', getenv('URL'));

$basePath = realpath(dirname(__FILE__)) . '/';
define('BASE_PATH', $basePath);
define('LIBS', BASE_PATH.'Libs/');
