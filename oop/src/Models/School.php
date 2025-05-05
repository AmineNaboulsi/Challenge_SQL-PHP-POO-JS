<?php

namespace App\Models;
use App\Models\Student;

class School {
    private string $name;
    private array $students = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    
    public function addPerson($student) {
        if (!($student instanceof Student)) {
            throw new \Exception("Invalid student type");
        }
        $this->students[] = $student;
        echo $this->name . " receive new Student: " . $student->getName() . "\n";
    }

    public function getStudents() {
        return $this->students;
    }
}