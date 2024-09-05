<?php
require('../model/database.php');
require('../controller/list_orders.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_customers';
    }
}

if ($action == 'list_orders') {
    $orders_list = list_orders();
    include('../list_orderss/list_orderss.php');

} else if ($action == 'show_add_order_form') {
    $orders_list = list_orders();
    include('orders_add.php');    

} else if ($action == 'add_order') {
    $order_num = filter_input(INPUT_POST, 'order_num');


    if ($order_num == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_order($order_num);
        include('../list_orders/index.php');
    }
}     
?>





