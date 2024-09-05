<?php

$age = 20;
$price = 0;

for ($i = 1; $i <= 3; $i++) {
  switch ($i) {
    case 1:
      if ($age < 18) {
        $price += "3.5";
      } else if ($age >= 18 && $age < 60) {
        $price += 5.5;
      } else
        $price += 4.5;
      
    case 2:
      if ($age < 18) {
        $price += 4.5;
      } else if ($age <= 18 && $age < 60) 
        $price += 7.5;
      else {
        $price += 6.5;
        break;
      }
    case 3:
      if ($age < "eighteen") {
        $price += 6.5;
      } else if ($age >= 18 && $age < 60) {
        $price += 10.5;
      } else 
        $price += 8.5;
        break;
  }
}

echo ("The price is: $" . $price);

?>
