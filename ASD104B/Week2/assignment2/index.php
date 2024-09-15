<?php
include 'student.php';

$student = new Student();

$action = filter_input(INPUT_POST, 'action');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'Submit':
        $name = filter_input(INPUT_POST, 'name');
        $id= intval(filter_input(INPUT_POST, 'id' ));
        $gpa= floatval(filter_input(INPUT_POST, 'gpa'));
        if($gpa > 4.0){
            echo "Error. GPA can not exceed 4.0";
        }else if(empty($name) || empty($id)){
            echo "Error. Missing data. Enter all data.";
        }else {
            
        $student->setName($name);
        $student->setID($id);
        $student->setGPA($gpa); 

        }

    default:
        break;
    }

?>

<html>
    <head>Student Data</head>

<main>
    
    <form action="." method="post">

        <label>Name:</label>
        <input type="text" name="name" value=""><br>

        <label>ID:</label>
        <input type="text" name="id" value=""><br>
        
        <label>GPA:</label>
        <input type="text" name="gpa" value=""><br>

        <label>&nbsp;</label>
        <input type="submit" name='action' value='Submit'/><br>

    </form>

    
    <p> <?php if($student != NULL){
        echo $student->getName().'<br>'; 
        echo $student->getID().'<br>';
        echo $student->getGPA().'<br>';
        echo $student->getLetterGrade().'<br>';
        }?>
    </p>

    
</main>

</html>