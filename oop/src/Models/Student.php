<?php

namespace App\Models;

class Student extends Person {
    private $instrument;

    public function __construct($name, $age, $instrument) {
        parent::__construct($name, $age);
        $this->instrument = $instrument;
    }
    public function getName() {
        return $this->name;
    }
    public function __toString()
    {
        return "{$this->name}, Age: {$this->age}," .
                 " Instrument: " . $this->instrument;
    }

    public function describe(){
        return "ana Student";
    }

}