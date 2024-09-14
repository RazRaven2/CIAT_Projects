<?php 

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
}
$view_control = 0;
$name = '';
$value = '';
$expire = 1;
$path = '';


// Add or update cart as needed
switch($action) {
    case 'Bake':
        // Start cookie session 
        $name = filter_input(INPUT_POST, 'name');
        $value = filter_input(INPUT_POST, 'value');
        $expire = intval(filter_input(INPUT_POST, 'value'));
        $path= '/';
        $view_control = 0;

        setcookie($name, $value, $expire, $path);

        break;

    case 'View':
        $name = filter_input(INPUT_POST, 'name');
        $view_control = 1;

        break;
    case 'Delete':
        $name = filter_input(INPUT_POST, 'name');
        $expire = -1;
        $view_control = 0;
        setcookie($name, '', $expire, '');

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

        <?php if ($view_control == 0) : ?>
            <p>----</p>
        <?php else: ?>
            <p><?php echo $_COOKIE["$name"]; ?></p>
        <?php endif; ?>

    </form>


</main>



</html>