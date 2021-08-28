<?php
namespace App;
use App\Core\WebEngine;

class App
{
    public function __construct()
    {
        $webengine = new WebEngine();
        $webengine->initialize();
        $webengine->start();
    }

    public function start(): void {
        //TODO : Implement method
    }
}