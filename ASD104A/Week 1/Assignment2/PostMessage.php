<!-- Purpose of this script is to complete assignment 2 -->

<?php
     if(isset($_POST['submit1'])){
          for($i=1; $i < 11; $i++){
               echo $i."<br>";
          }
     }
     else if(isset($_POST['submit2'])){
          $count = 0;
          while($count<20){
               if($count%2==0){
                    echo $count."<br>";
               }
               $count++;
          }

     }
     else if(isset($_POST['submit3'])){
          $age = $_POST['age'];
          if($age<18){
               echo "You are a minor.";
          }
          else if($age>18 and $age<65){
               echo "You are an adult.";
          }
          else if($age>65){
               echo "You are a senior citizen.";
          }

     }
     else if(isset($_POST['submit4'])){
          $number = $_POST['number'];
          if ($number<0){
               echo "The number is negative";
          }
          else if($number>0){
               echo "The number is postive";
          }
          else if($number == 0){
               echo "The number is zero.";
          }

     }
     else if(isset($_POST['submit5'])){
          for($i=1; $i<11;$i++){
               for($j=1;$j<11;$j++){
                    $product = $i * $j;
                    echo "$product ";
               }
               echo "<br>";
          }
     }
?>