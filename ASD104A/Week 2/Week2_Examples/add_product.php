<?php
//Get the Product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

//validate inputs
if ($category_id == NULL || $category_id == FALSE || $code == NULL || $name == NULL || $price == NULL || $price == FALSE){
        $error = "Invalid product data. Check all fields and try again";
        include('error.php');
    } else {
        require_once('database.php');
        
        //add the product to the database
        $query = 'INSERT INTO products (categoryID, productCode, productName, listPrice)
                  VALUES (:category_id, :code, :name, :price)';
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();

        //Display the product page
        include('index.php');
    }
?>