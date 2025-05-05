<?php

namespace App\Models;
use App\Models\Person;

class Teacher extends Person {
    private array $skills = [];

    public function __construct($name, $age) {
        parent::__construct($name, $age);
    }

    public function getSkills() {
        return $this->skills;
    }
    public function AddSkills($skills) {
        $this->skills[] = $skills;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function __toString()
    {
        return "{$this->name}, Age: {$this->age}," .
                 " Skills: " . implode(", ", $this->skills);
    }

    public function describe(){
        return "ana Teacher";
    }
}