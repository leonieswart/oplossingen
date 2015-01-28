<?php

// Directory_separator is een constante die bepaalt separator is om directories van elkaar te scheiden
// In dit geval: \
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
