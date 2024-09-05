<?php

$customer_type = filter_input(INPUT_POST, 'type');
$invoice_subtotal = filter_input(INPUT_POST, 'subtotal');


switch ($customer_type){
    case 'R' || 'r':
        if ($invoice_subtotal < 100) {
            $discount_percent = .0;
        } else if ($invoice_subtotal >= 100 && $invoice_subtotal < 250) {
            $discount_percent = .1;
        } else if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
            $discount_percent = .25;
        } else {
            $discount_percent = .30;
        }
        break;
    case 'C' || 'c':
        $discount_percent = .2;
        break;
    case 'T' || 't':
        if ($invoice_subtotal < 500) {
            $discount_percent = .40;
        } else  {
            $discount_percent = .50;
        }
        break;
    default:
        break;
}



$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';

?>