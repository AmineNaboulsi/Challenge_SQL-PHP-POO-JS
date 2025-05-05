<?php

namespace App\Config;

trait Logger{

    public static function log($msg) {
        $date = date('Y-m-d H:i:s');
        echo "[$date] $msg\n";
    }
}