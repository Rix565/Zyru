<?php
namespace App;
use Core\WebEngine;

class App
{
    public function contructor()
    {
        $webengine = new WebEngine();
        $webengine->initialize();
        $webengine->start();
    }
}