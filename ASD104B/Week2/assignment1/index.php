<?php
include 'student.php';

$student = new Student();
$student->setName('John Doe');
$student->setID(12345);
$student->setGPA(3.7);

echo $student->getName().'<br>';
echo $student->getID().'<br>';
echo $student->getGPA().'<br>';
echo $student->getLetterGrade().'<br>';

?>