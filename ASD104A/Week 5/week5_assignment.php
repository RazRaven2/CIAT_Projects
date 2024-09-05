<?php

function assignment(){
# Write a PHP scripts to replace all occurrences of "cat" with "dog" in the string "I love cats, but I also love caterpillars."
$message = 'I love cats, but I also love catepillars.';
$search = 'cat';
$replace = 'dog';
$contains = str_contains($message, $search);

if ($contains){
    $new_message = str_replace($search, $replace, $message);
    echo "$new_message"."<br>";
} else {
    echo "Not found"."<br>";
}

#Write a PHP scripts  to escape a single quote in the string "It's a beautiful day!".

echo 'It\'s a beautiful day!'."<br>";

#Write a PHP scripts to get the length of the string "This string has 32 characters.".

$string = "This string has 32 characters.";
$length = strlen($string);
echo $length."<br>";

#Write a PHP scripts to get a substring of the string "The quick brown fox jumps over the lazy dog." that starts with the word "lazy".
$string1 = "The quick brown fox jumps over the lazy dog.";
$search1 = 'lazy';
$position = strpos($string1, $search1);
$sub = substr($string1, $position);
echo $sub."<br>";

#Write a PHP scripts to get the position of the word "lazy" in the string "The quick brown fox jumps over the lazy dog.".
echo $position."<br>";

// Create a PHP script to print the current date in the format of "YYYY-MM-DD".
$now = new DateTime();
echo $now->format('n/j/Y H:i:s')."<br>";
// Create a PHP script to print the current date and time in the format of "YYYY-MM-DD HH:MM:SS".
$now1 = new DateTime();
echo $now1->format('n/j/Y')."<br>";
// Create a PHP script to print the current month and year in the format of "Month Year" (e.g. February 2023).
$now2 = new DateTime();
echo $now2->format('F/Y')."<br>";
// Create a PHP script to add a certain number of days to a given date. The date and number of days can be input by the user in the format of "YYYY-MM-DD" and an integer respectively. The output should be in the same format as the input.

// Create a PHP script to print the difference between two dates in the format of "X years, Y months, Z days". The dates can be input by the user in the format of "YYYY-MM-DD".
}
?>


<html>
    
    <body>
        <p><?php assignment(); ?></p>
    </body>
    
    
</html>