<?php
     if(isset($_POST['submit'])){
          $Subject = stripslashes($_POST['subject']);
          $Name = stripslashes($_POST['name']);
          $Message = stripslashes($_POST['message']); 
     }

     $MessageRecord = "$Subject -  $Name - $Message";

     echo $MessageRecord;


?>