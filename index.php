<?php // @codingStandardsIgnoreFile

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// check PHP version
if (PHP_VERSION_ID < 50306) {
    die('Pico requires PHP 5.3.6 or above to run');
}

// load dependencies
require_once(__DIR__ . '/vendor/autoload.php');

// instance Pico
$pico = new Pico(
    __DIR__,    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);

// run application
echo $pico->run();
