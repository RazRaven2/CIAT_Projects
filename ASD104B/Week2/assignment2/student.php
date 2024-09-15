<?php
class Student {
    public function __construct(
        private string $name = '', 
        private int $id = 0, 
        private float $gpa = 0.00){}
    
    public function getName() {
        return $this->name;
    }

    public function getID() {
        return $this->id;
    }

    public function getGPA() {
        return $this->gpa;
    }

    public function setName(string $value) {
        $this->name = $value;
    }

    public function setID(int $value) {
        $this->id = $value;
    }

    public function setGPA(float $value) {
        $this->gpa = $value;
    }

    public function getLetterGrade(){
        if ($this->gpa >= 3.5){
            return 'A';
        } elseif ($this->gpa < 3.5 && $this->gpa >= 3.0){
            return 'B';
        } elseif($this->gpa < 3.0 && $this->gpa >= 2.0){
            return 'C';
        } elseif($this->gpa <2.0 && $this->gpa >= 1.0){
            return 'D';
        } else {
            return 'F';
        } 
    }
        
    }



?>