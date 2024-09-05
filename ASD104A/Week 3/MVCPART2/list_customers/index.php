<?php
require('../model/database.php');
require('../controller/list_customers.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_customers';
    }
}

if ($action == 'list_customers') {
    $customer_list = list_customers();
    include('../list_customers/list_customers.php');
} else if ($action == 'show_add_form') {
    $customer_list = list_customers();
    include('customer_add.php');    
} else if ($action == 'add_customer') {
    $customer_num = filter_input(INPUT_POST, 'customer_num');
    $customer_name = filter_input(INPUT_POST, 'customer_name');

    if ($customer_num == NULL || $customer_name == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_customer($customer_num, $customer_name);
        include('../list_customers/index.php');
    }
}    
?>





