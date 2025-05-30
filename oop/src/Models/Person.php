<?php

namespace App\Models;

abstract class Person{
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    abstract public function describe();
}