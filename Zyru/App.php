<?php
namespace App;
use App\Core\Logger;

class App
{
    public function __construct()
    {
        
    }

    public function start(): void {
        $log = new Logger();
        $log->information("info");
        $log->warning("info");
        $log->error("info");
        $log->zdie("info");
    }
}