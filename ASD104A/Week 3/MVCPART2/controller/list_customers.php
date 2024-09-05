<?php
require('../model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_customers';
    }
}

if ($action == 'list_customers') {
    $customer_list = list_customers();
    include('../list_customers/list_custormers.php');
} 
?>



<?php

function list_customers() {
    global $db;
    $query = 'SELECT customer_name FROM customer';
    $statement = $db->prepare($query);
    $statement->execute();
    $customer_list = $statement->fetchAll();
    $statement->closeCursor();
    return $customer_list;
}


function add_customer($customer_num, $customer_name) {
    global $db;
    $query = 'INSERT INTO customer
                 (customer_num, customer_name)
              VALUES
                 (:customer_num, :customer_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_num', $customer_num);
    $statement->bindValue(':customer_name', $customer_name);
    $statement->execute();
    $statement->closeCursor();
}

?>