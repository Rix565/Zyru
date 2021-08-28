<?php
namespace App;
use Core\WebEngine;

class App
{
    public function __construct()
    {
        $webengine = new WebEngine();
        $webengine->initialize();
        $webengine->start();
    }
}