<?php 



// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

// Add or update cart as needed
switch($action) {
    case 'Bake':
        // Start cookie session 
        $name = filter_input(INPUT_POST, 'name');
        $value = filter_input(INPUT_POST, 'value');
        $expire = 60*60;
        $path= '/';

        setcookie($name, $value, $expire, $path);
        break;

    case 'View':
        $userid = filter_input(INPUT_COOKIE, 'userid', FILTER_VALIDATE_INT);
        break;
    case 'Delete':
        $expire = 0;
        setcookie('userid', '', $expire, '');
        break;
    }
?>

<html>
    <head>Cookie Data</head>

<main>

    <form action="." method="post">

        <label>Name:</label>
        <input type="text" name="name" value=""><br>

        <label>Value:</label>
        <input type="text" name="value" value=""><br>

        <label>Expire (in seconds):</label>
        <input type="text" name="expire" value=""><br>

        <label>&nbsp;</label>
        <input type="submit" name = 'action' value='Bake'/><br>
        <label>&nbsp;</label>
        <input type="submit" name='action' value='View'/><br>
        <label>&nbsp;</label>
        <input type="submit" name='action' value='Delete'/><br>

        <?php if (empty($userid)) : ?>
                <p>----</p>
        <?php else: ?>
                <p><?php echo $userid; ?></p>
        <?php endif; ?>

    </form>


</main>



</html>