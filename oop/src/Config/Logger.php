<?php

namespace App\Config;

trait Logger{

    public static function log($msg) {
        $logFile = __DIR__ . '/../storage/logs.log';
        $date = date('Y-m-d H:i:s');
        $message = "[$date] $msg\n";
        echo $message ;
        file_put_contents($logFile, $message, FILE_APPEND);
    }
}