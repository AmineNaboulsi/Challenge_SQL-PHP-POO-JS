<?php

// Trait Logger (10 min)

// Crée un trait Logger avec log($msg) → affiche avec date

// Utilise-le dans School
trait Logger{

    public function log($msg) {
        $date = date('Y-m-d H:i:s');
        echo "[$date] $msg\n";
    }
}