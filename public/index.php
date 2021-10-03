<!-- prevent getting executed twice each time due to favicon requsts -->
<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use Tudublin\Application;

$app = new Application();
$app->run();