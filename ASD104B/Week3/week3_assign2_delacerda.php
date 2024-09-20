<?php
    
    

function validate_member_name($name, $value) {
    // if OK after text field check, move on to phone check
    if (!$name->isEmpty()) {
        // Call the pattern method to validate a phone number
        $pattern = '/^[[:letter:]][\']$/';
        $message = 'Invalid phone number. Use XXX-XXX-XXXX format';
        pattern($name, $value, $pattern, $message);

    }
}
function validate_member_phone($name, $value) {
    // if OK after text field check, move on to phone check
    if (!$name->isEmpty()) {
        // Call the pattern method to validate a phone number
        $pattern = '/^\d{3}-\d{3}-\d{4}$/';
        $message = 'Invalid phone number. Use XXX-XXX-XXXX format';
        pattern($name, $value, $pattern, $message);

    }
}

function validate_member_email($name, $value) {
    // if OK after text field check, move on to email check
    if (!$name->isEmpty()) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        } else {
            echo ' Invalid email address.';
        }
    }
}

// Validate a field with a generic pattern 
function pattern($name, $value, $pattern, $message) {
    $match = preg_match($pattern, $value);
    if ($match === FALSE) {
        echo "<p>" . $message . "</p>";
    }else{
        echo "<p>" . 'Valid.' . "</p>";
    }
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}  

switch($action) {
    case 'member_data':
        $email = trim(filter_input(INPUT_POST, 'email'));
        $name = trim(filter_input(INPUT_POST, 'name'));
        $phone = filter_input(INPUT_POST, 'phone');

        validate_member_name('name', $name);
        validate_member_email('email', $email);
        validate_member_phone('phone', $phone);

        break;
    default:
        break;
    }



?>


<html>
    <form action="index.php" method="post" id="member_data">
    <label>Member Name:</label>
        <input type="text" name="name">
        <br>

        <label>Email:</label>
        <input type="text" name="email">
        <br>

        <label>Phone:</label>
        <input type="text" name="phone">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit">
        <br>
    </form>
    <p> </p>

</html>