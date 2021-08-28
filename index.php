<?php
/*
This just starts the app
nothing much else happens
*/
require __DIR__ . '/vendor/autoload.php';

use App\App;
use App\Core\Logger;

$log = new Logger;
$log->information("hi");
$app = new App();
$app->start();
?>