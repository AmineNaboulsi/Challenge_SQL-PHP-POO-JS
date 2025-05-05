<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Student;
use App\Models\Teacher;
use App\Models\School;

$StudentA = new Student("chiwa7ad A", 20, "Guitar");
$StudentB = new Student("chiwa7ad B", 20, "Piano");
$TeacherA = new Teacher("chiwa7ad C", 35);
$TeacherA->AddSkills("Guitar");
$TeacherA->AddSkills("Piano");
echo " ( " . $StudentA->describe()  . " )";
echo $StudentA ;
echo "\n";
echo " ( " . $TeacherA->describe()  . " )";
echo $TeacherA ;
echo "\n";

$School = new School("Ecole de Musique");
try{
    $School->addPerson($StudentA);
    $School->addPerson($StudentB);
}catch(\Exception $e){
    echo "Error: " . $e->getMessage() . "\n";
};
echo "All Student on (" . $School->getName() . ") " . implode(", ", $School->getStudents()) . "\n";

//Poly
$kolchi = [] ;
$kolchi[] = $StudentA;
$kolchi[] = $StudentB;
$kolchi[] = $TeacherA;

foreach ($kolchi as $Person) {
    echo  $Person->describe() ;
    echo  "\n";
}