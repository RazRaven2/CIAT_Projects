<?php
//Get the Category data
$name = filter_input(INPUT_POST, 'name');


//validate inputs
if ($name == NULL){
        $error = "Invalid category data. Check all fields and try again";
        include('error.php');
    } else {
        require_once('database.php');
        
        //add the product to the database
        $query = 'INSERT INTO categories (categoryName)
                  VALUES (:name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $statement->closeCursor();

        //Display the product page
        include('index.php');
    }
?>