<!-- Purpose of this script is to complete assignment 1 -->

<?php
     if(isset($_POST['submit'])){
          
          echo "Hello world!"."<br>";
          $text1 = "Hello";
          $text2 = "world!";
          $text3 =  "$text1 $text2";
          echo $text3."<br>";
          $text4 = "John";
          echo "$text1, $text4!"."<br>";
          $nullString = null;
          echo "$nullString"."<br>";
          
          //declares two integer variables and performs a numeric expression with them.
          $x=5;
          $y=4;
          echo "$x and $y"."<br>";

          $num = 1;
          echo $num."<br>";
          $num++;
          echo $num."<br>";
          $num--;
          echo $num."<br>";
          $a=10;
          $b=5;
          $sum = $a+$b;
          echo $sum."<br>";
          $c=2.5;
          $d=1.2;
          $product = $c * $d;
          echo $product."<br>";
          $g=20;
          $h=3;
          $dividend = $g/$h;
          echo $dividend."<br>";


          

     }



?>