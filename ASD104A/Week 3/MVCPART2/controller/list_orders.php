<?php
require('../model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_orders';
    }
}

if ($action == 'list_orders') {
    $list_orders = list_orders();
    include('../list_orders/list_orders.php');
} 
?>



<?php

function list_orders() {
    global $db;
    $query = 'SELECT order_num FROM orders';
    $statement = $db->prepare($query);
    $statement->execute();
    $order_list = $statement->fetchAll();
    $statement->closeCursor();
    return $order_list;
}


function add_order($order_num) {
    global $db;
    $query = 'INSERT INTO orders
                 (order_num)
              VALUES
                 (:order_num)';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_num', $order_num);
    $statement->execute();
    $statement->closeCursor();
}

?>