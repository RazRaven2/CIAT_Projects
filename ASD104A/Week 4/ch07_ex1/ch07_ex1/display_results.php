<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // get the rest of the data for the form
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone');
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    $wants_updates = filter_input(INPUT_POST, 'wants_updates');
    $contact_via = filter_input(INPUT_POST, 'contact_via');
    $comments = filter_input(INPUT_POST, 'comments');

    // for the heard_from radio buttons,
    // display a value of 'Unknown' if the user doesn't select a radio button
    if ($heard_from == NULL){
        $heard_from = 'Unknown';
    }

    // for the wants_updates check box,
    // display a value of 'Yes' or 'No'
    if ($wants_updates==TRUE){
        $message = 'Yes';
    }else {
        $message = 'No';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo $password ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo $phone ?></span><br>

        <label>Heard From:</label>
        <span><?php echo $heard_from ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo $message ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo $contact_via ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo $comments ?></span><br>        
    </main>
</body>
</html>