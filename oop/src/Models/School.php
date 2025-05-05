<?php

namespace App\Models;
use App\Models\Student;
use App\Config\Logger;

class School {
    private string $name;
    private array $students = [];
    use Logger;
    public function __construct($name) {
        $this->name = $name;
        Logger::log("New Client $name CREATED");
    }

    public function getName() {
        return $this->name;
    }
    
    public function addPerson($student) {
        if (!($student instanceof Student)) {
            throw new \Exception("Invalid student type");
        }
        $this->students[] = $student;
        Logger::log($this->name . " receive new Student: " . $student->getName() . "\n");
    }

    public function getStudents() {
        return $this->students;
    }
}